<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_cliente'); ?>
		<?php echo $form->textField($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_agente'); ?>
		<?php echo $form->textField($model,'id_agente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_inmueble'); ?>
		<?php echo $form->textField($model,'id_inmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_hora_desde'); ?>
		<?php echo $form->textField($model,'fecha_hora_desde'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_hora_hasta'); ?>
		<?php echo $form->textField($model,'fecha_hora_hasta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->