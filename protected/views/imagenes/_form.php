<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
/* @var $form CActiveForm */
?>

<div class="well bs-component">
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

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'descripcion'); ?>
		</div>
		<div class="col-lg-10">
			<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'descripcion'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'ruta'); ?>
		
		</div>
		<div class="col-lg-10">	
			<?php echo CHtml::activeFileField($model,'ruta'); ?>
			<?php echo $form->error($model,'ruta'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar Imagen' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>
</div>

	<?php $imagenes=Imagenes::model()->findAllByAttributes(array('id_inmueble'=>array($_GET['id_inmueble'])));

		foreach ($imagenes as $imagen) 
		{
			echo '<div class="col-sm-6 col-md-4" style="margin-top:50px">';
			echo '<div class="thumbnail" style="height:320px">';
			echo '<img src="'.Yii::app()->request->baseUrl.'/images/inmueble/'.$imagen->ruta.'" alt="" style="height:250px">';			
			echo '<div class="caption">';
			echo '<h3>'.$imagen->descripcion.'</h3>';
			echo '</div>';	
			echo '</div>';	
			echo '</div>';
		}?>


<?php $this->endWidget(); ?>

</div><!-- form -->