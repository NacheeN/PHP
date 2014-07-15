<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */
/* @var $form CActiveForm */
?>

<div class="well bs-component">
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
				<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-2">
				<?php echo $form->labelEx($model,'valor'); ?>
				
			</div>
			<div class="col-lg-10">
				<?php echo $form->textField($model,'valor',array('size'=>50)); ?>
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
				<?php echo $form->labelEx($model,'idDepartamento'); ?>
			
			</div>
			<div class="col-lg-10">
				<?php echo $form->dropDownList($model,'idDepartamento', CHtml::listData(Departamento::model()->findAll(), 'id','nombre'),
				array(
				'ajax' => array(
				'type'=>'POST',
				'url'=>CController::createUrl('site/recargaCiudades'), 
				'update'=>'#'.CHtml::activeId($model,'idCiudad'),
				),'prompt'=>'Seleccione')); 
				
				 ?>
 				
				<?php echo $form->error($model,'idDepartamento'); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-2">
				<?php echo $form->labelEx($model,'idCiudad'); ?>
			
			</div>
			<div class="col-lg-10">
				<?php echo $form->dropDownList($model,'idCiudad',  array(),
				array(
				'ajax' => array(
				'type'=>'POST',
				'url'=>CController::createUrl('site/recargaBarrios'), 
				'update'=>'#'.CHtml::activeId($model,'id_barrio'),
				),'prompt'=>'Seleccione')); ?>

				<?php echo $form->error($model,'idCiudad'); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-2">
				<?php echo $form->labelEx($model,'id_barrio'); ?>
			
			</div>
			<div class="col-lg-10">
				<?php echo $form->dropDownList($model,'id_barrio',  array(),array('prompt'=>'Seleccione')); ?>
				<?php echo $form->error($model,'id_barrio'); ?>
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
				<?php echo $form->labelEx($model,'piso'); ?>
			
			</div>
			<div class="col-lg-10">
				<?php echo $form->textField($model,'piso',array('size'=>50,'maxlength'=>20)); ?>
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
				<?php echo $form->textField($model,'cantidad_banios',array('size'=>50)); ?>
				<?php echo $form->error($model,'cantidad_banios'); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-2">
				<?php echo $form->labelEx($model,'cantidad_habitaciones'); ?>
			
			</div>
			<div class="col-lg-10">
				<?php echo $form->textField($model,'cantidad_habitaciones',array('size'=>50)); ?>
				<?php echo $form->error($model,'cantidad_habitaciones'); ?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-lg-2">
				<?php echo $form->labelEx($model,'superficie'); ?>
			
			</div>
			<div class="col-lg-10">
				<?php echo $form->textField($model,'superficie',array('size'=>50)); ?>
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


<?php $this->endWidget(); ?>

</div><!-- form -->
</div>

