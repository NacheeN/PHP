<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

<?php $form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'inmuebles-form',
		'type' => 'horizontal',
		'enableAjaxValidation'=>false,
	)
); ?>
<!--
<?php #$form=$this->beginWidget('CActiveForm', array(
	#'id'=>'inmuebles-form',
	#'enctype'=>'multipart/form-data',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.

	#'enableAjaxValidation'=>false,
#)); ?>
-->	
	<div class="form-group">
		<div class="col-lg-2">
			<div class="text-danger">
				<?php echo $form->errorSummary($model); ?>
			</div>
		</div>
	</div>
<!--
	<div class="form-group">
		<div class="col-lg-2">
			<?php #echo $form->labelEx($model,'id_barrio'); ?>
		</div>
		<div class="col-lg-10">
			<?php #echo $form->textField($model,'id_barrio'); ?>
			<?php #echo $form->error($model,'id_barrio'); ?>
		</div>
	</div>
-->
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
			<?php echo $form->labelEx($model,'valor'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'valor'); ?>
			<?php echo $form->error($model,'valor'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'estado'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo ZHtml::enumDropDownList($model,'estado'); ?>
			<?php echo $form->error($model,'estado'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'direccion'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'direccion'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'titulo'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'titulo'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'descripcion'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'garage'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'garage'); ?>
			<?php echo $form->error($model,'garage'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'jardin'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'jardin'); ?>
			<?php echo $form->error($model,'jardin'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'parrillero'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'parrillero'); ?>
			<?php echo $form->error($model,'parrillero'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'piso'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'piso',array('size'=>20,'maxlength'=>20)); ?>
			<?php echo $form->error($model,'piso'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'tipo'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo ZHtml::enumDropDownList($model,'tipo'); ?>
			<?php echo $form->error($model,'tipo'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'propietario'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'propietario',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'propietario'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'prestamo_bancario'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'prestamo_bancario'); ?>
			<?php echo $form->error($model,'prestamo_bancario'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'cantidad_banios'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'cantidad_banios'); ?>
			<?php echo $form->error($model,'cantidad_banios'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'cantidad_habitaciones'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'cantidad_habitaciones'); ?>
			<?php echo $form->error($model,'cantidad_habitaciones'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'superficie'); ?>
		
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'superficie'); ?>
			<?php echo $form->error($model,'superficie'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

