<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Requeridos <span class="required">*</span></p>

	<div class="form-group">
		<div class="col-lg-2">
			<div class="text-danger">
				<?php echo $form->errorSummary($model); ?>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'nombre'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'nombre',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'apellido'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'apellido',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'apellido'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'ci'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'ci',array('size'=>10,'maxlength'=>10)); ?>
			<?php echo $form->error($model,'ci'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'telefono'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'email'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'email',array('size'=>25,'maxlength'=>25)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'nick'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'nick',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'nick'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'pass'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->passwordField($model,'pass',array('size'=>60,'maxlength'=>100)); ?>
			<?php echo $form->error($model,'pass'); ?>
		</div>	
	</div>

	<div class="form-group">
		<div class="col-lg-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->