<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contactenos';
$this->breadcrumbs=array(
	'Contacto',
);
?>

<div class="page-header">
  <h1 id="forms">Contactenos</h1>
</div>

<div class="well bs-component">
<div class="row">

	<div class="col-lg-12">
		<?php echo CHtml::link('Crear Solicitud', array('inmuebles/create'), array('class'=>'btn btn-default')); ?>
	</div>
	
	<!--
	<?/*php $select = null;
	echo CHtml::dropDownList('listname', $select, 
             array('tipo'=>'Informacion de la Empresa','Alta de Inmueble'),
             array('empty' => 'Seleccione el tipo de consulta'));
	*/?>
-->
</div>
<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<div class="form-horizontal" role="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-group">
		<div class="col-lg-2">
			<div class="text-danger">
				<?php echo $form->errorSummary($model); ?>
			</div>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'name'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'email'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>	
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'subject'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
			<?php echo $form->error($model,'subject'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'body'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'body'); ?>
		</div>
	</div>
	

	<?php if(CCaptcha::checkRequirements()): ?>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'verifyCode'); ?>
		</div>
		<div class="col-lg-10">
			<?php $this->widget('CCaptcha'); ?>
			<?php echo $form->textField($model,'verifyCode'); ?>
			<?php echo $form->error($model,'verifyCode'); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="form-group">
		<div class="row">
			<div class="col-lg-12">
				<?php echo CHtml::submitButton('Enviar',array('class'=>'btn btn-default')); ?>
			</div>			
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>

</div>