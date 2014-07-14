<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="form-horizontal borde" role="form">

<?php $form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'eventos-form',
		'htmlOptions' => array('class' => 'well'), // for inset effect
		'enableAjaxValidation'=>false,
	)
); ?>
	
	<p class="note">Requerido <span class="required">*</span></p>


	<div class="text-danger">
		<?php echo $form->errorSummary($model); ?>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="col-lg-12">
		<?php echo $form->textFieldGroup($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>



	<div class="col-lg-12">
		<?php echo $form->datePickerGroup(
			$model,
			'fecha_hora_desde',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'es',
					),
				),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
		<?php echo $form->error($model,'fecha_hora_desde'); ?>
	</div>


	<div class="col-lg-12">
		<?php echo $form->datePickerGroup(
			$model,
			'fecha_hora_hasta',
			array(
				'widgetOptions' => array(
					'options' => array(
						'language' => 'es',
					),
				),
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
				'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
			)
		); ?>
		<?php echo $form->error($model,'fecha_hora_hasta'); ?>
	</div>

		</div>
		<div class="col-lg-6">

		</div>
	</div>
	

	<div class="form-group">
		<div class="col-lg-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<!--
	<div class="row">
		<?php #echo $form->labelEx($model,'id_cliente'); ?>
		<?php #echo $form->textField($model,'id_cliente'); ?>
		<?php #echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'id_agente'); ?>
		<?php #echo $form->textField($model,'id_agente'); ?>
		<?php #echo $form->error($model,'id_agente'); ?>
	</div>
-->

<?php $this->endWidget(); ?>

</div><!-- form -->