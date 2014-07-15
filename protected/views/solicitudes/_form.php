<?php
/* @var $this SolicitudesController */
/* @var $model Solicitudes */
/* @var $form CActiveForm */
?>


<!-- NACHEEN	-->


<?php if(Yii::app()->user->hasFlash('solicitud')): ?>

<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <?php echo Yii::app()->user->getFlash('solicitud'); ?>
</div>

<?php else: ?>

<div class="form-horizontal" role="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitudes-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
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
			<?php echo $form->textField($model,'nombre',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'nombre'); ?>
		</div>	
	</div>

		<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'telefono'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'telefono',array('size'=>15,'maxlength'=>15)); ?>
			<?php echo $form->error($model,'telefono'); ?>
		</div>	
	</div>

		<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'email'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'email'); ?>
		</div>	
	</div>


		<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'descripcion'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>52)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
		</div>	
	</div>

		<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'tipo'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo ZHtml::enumDropDownList($model,'tipo'); ?>
			<!--<?php //echo $form->textField($model,'tipo',array('size'=>30,'maxlength'=>30)); ?> -->
			<?php echo $form->error($model,'tipo'); ?>
		</div>	



	<!--<div class="form-group">
		<div class="col-lg-12">
			<?//php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>
-->

	<div class="form-group">
		<div class="col-lg-12">
			<?php echo CHtml::submitButton('Enviar',array('class'=>'btn btn-default')); ?>
		</div>
	</div>
	
<?php $this->endWidget(); ?>

</div><!-- form -->
<?php endif; ?>
</div>