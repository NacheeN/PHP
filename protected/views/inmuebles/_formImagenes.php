<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

<?php $form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'imagenes-form',
		'type' => 'horizontal',
		'htmlOptions'=>array(
			'enctype'=>'multipart/form-data',
			),
		'enableAjaxValidation'=>false,
	)
); ?>
<!--
		<div class="form-group">
			<div class="col-lg-2">
				<?php #echo $form->labelEx($model,'nombre'); ?>
				
			</div>
			<div class="col-lg-10">
				<?php #echo $form->textField($model,'nombre',array('size'=>20,'maxlength'=>20)); ?>
				<?php #echo $form->error($model,'nombre'); ?>
			</div>
		</div>
-->
		<div class="form-group">
			<?php 
				$this->widget('CMultiFileUpload',
					array(
						'model'=>$model,
						'name'=>'ruta',
						'attribute'=>'ruta',
						'accept'=>'jpg|gif|png',
						'denied'=>'Este tipo no esta permitido',
						'max'=>10,
						'duplicate'=>'Archivo Dublicado',
						));
			 ?>
			 <?php echo $form->error($model,'ruta'); ?>

		</div>

		<div class="form-group">
			<div class="col-lg-12">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar Imagenes' : 'Save', array('class'=>'btn btn-default')); ?>
			</div>
		</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
