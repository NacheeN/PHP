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
  <h1 id="forms">Cont&aacutectenos</h1>
  <h3 id="forms">El Inmueble que busca no se encuentra en nuestro catalogo</h3>
</div>

<div class="well bs-component">
<div class="row">

	
	
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
			<?php echo $form->labelEx($model,'Nombre'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'Email'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'email'); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>	
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'Asunto'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128,'value'=>$model->subject)); ?>
			<?php echo $form->error($model,'subject'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'Mensaje'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50,'value'=>$model->body)); ?>
			<?php echo $form->error($model,'body'); ?>
		</div>
	</div>
	

	

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