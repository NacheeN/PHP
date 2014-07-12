<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
/* @var $form CActiveForm */
?>

<div class="form">

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
				<?php echo $form->labelEx($model,'ruta'); ?>
			
			</div>
			<div class="col-lg-10">	
				<?php echo CHtml::activeFileField($model,'ruta'); ?>
				<?php echo $form->error($model,'ruta'); ?>
			</div>
		</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar Imagen' : 'Save'); ?>
	</div>

	<?php $imagenes=Imagenes::model()->findAllByAttributes(array('id_inmueble'=>array($_GET['id_inmueble'])));

		foreach ($imagenes as $imagen) 
		{
			echo '<div class="col-sm-6 col-md-4">';
			echo '<div class="thumbnail" style="height:300px">';
			echo '<img src="'.Yii::app()->request->baseUrl.'/images/inmueble/'.$imagen->ruta.'" alt="" style="height:250px">';
			echo '</div>';
			echo '</div>';	
		}?>


<?php $this->endWidget(); ?>

</div><!-- form -->