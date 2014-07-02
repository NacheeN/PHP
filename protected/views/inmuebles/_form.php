<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmuebles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_barrio'); ?>
		<?php echo $form->textField($model,'id_barrio'); ?>
		<?php echo $form->error($model,'id_barrio'); ?>

<div class="form-horizontal" role="form">

<?php $form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'inmuebles-form',
		'type' => 'horizontal',
		'htmlOptions'=>array(
			'enctype'=>'multipart/form-data',
			),
		'enableAjaxValidation'=>false,
	)
); ?>
	<div class="form-group">
		<div class="col-lg-2">
			<div class="text-danger">
				<?php echo $form->errorSummary($model); ?>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
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
			<div class="col-lg-2">
				<?php echo $form->labelEx($model,'imagen_portada'); ?>
			
			</div>
			<div class="col-lg-10">	
				<?php echo CHtml::activeFileField($model,'imagen_portada'); ?>
				<?php echo $form->error($model,'imagen_portada'); ?>
			</div>
		</div>

	</div>

	<div class="col-lg-4">
		<div class="form-group">
			<div class="col-lg-12">
			<?php echo $form->switchGroup($model, 'amueblado',
					array(
						'widgetOptions' => array(
							'events'=>array(
								'switchChange'=>'js:function(event, state) {
								  console.log(this); // DOM element
								  console.log(event); // jQuery event
								  console.log(state); // true | false
								}'
							)
						)
					)
				); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-12">
			<?php echo $form->switchGroup($model, 'garage',
					array(
						'widgetOptions' => array(
							'events'=>array(
								'switchChange'=>'js:function(event, state) {
								  console.log(this); // DOM element
								  console.log(event); // jQuery event
								  console.log(state); // true | false
								}'
							)
						)
					)
				); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-12">
			<?php echo $form->switchGroup($model, 'jardin',
					array(
						'widgetOptions' => array(
							'events'=>array(
								'switchChange'=>'js:function(event, state) {
								  console.log(this); // DOM element
								  console.log(event); // jQuery event
								  console.log(state); // true | false
								}'
							)
						)
					)
				); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-12">
			<?php echo $form->switchGroup($model, 'parrillero',
					array(
						'widgetOptions' => array(
							'events'=>array(
								'switchChange'=>'js:function(event, state) {
								  console.log(this); // DOM element
								  console.log(event); // jQuery event
								  console.log(state); // true | false
								}'
							)
						)
					)
				); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-12">
			<?php echo $form->switchGroup($model, 'prestamo_bancario',
					array(
						'widgetOptions' => array(
							'events'=>array(
								'switchChange'=>'js:function(event, state) {
								  console.log(this); // DOM element
								  console.log(event); // jQuery event
								  console.log(state); // true | false
								}'
							)
						)
					)
				); ?>
			</div>
		</div>
	</div>
	

	<div class="form-group">
		<div class="col-lg-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-default')); ?>
		</div>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model,'valor'); ?>
		<?php echo $form->error($model,'valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo ZHtml::enumDropDownList($model,'estado'); ?>
		<!--<?php /*echo $form->textField($model,'estado',array('size'=>20,'maxlength'=>20));*/ ?>-->
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage'); ?>
		<?php echo $form->textField($model,'garage'); ?>
		<?php echo $form->error($model,'garage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jardin'); ?>
		<?php echo $form->textField($model,'jardin'); ?>
		<?php echo $form->error($model,'jardin'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'parrillero'); ?>
		<?php echo $form->textField($model,'parrillero'); ?>
		<?php echo $form->error($model,'parrillero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'piso'); ?>
		<?php echo $form->textField($model,'piso',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'piso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo ZHtml::enumDropDownList($model,'tipo'); ?>
		<!-- <?php /*echo $form->textField($model,'tipo',array('size'=>20,'maxlength'=>20)); */ ?> -->
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'propietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prestamo_bancario'); ?>
		<?php echo $form->textField($model,'prestamo_bancario'); ?>
		<?php echo $form->error($model,'prestamo_bancario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_banios'); ?>
		<?php echo $form->textField($model,'cantidad_banios'); ?>
		<?php echo $form->error($model,'cantidad_banios'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_habitaciones'); ?>
		<?php echo $form->textField($model,'cantidad_habitaciones'); ?>
		<?php echo $form->error($model,'cantidad_habitaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'superficie'); ?>
		<?php echo $form->textField($model,'superficie'); ?>
		<?php echo $form->error($model,'superficie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_creacion'); ?>
		<?php echo $form->textField($model,'fecha_creacion'); ?>
		<?php echo $form->error($model,'fecha_creacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


