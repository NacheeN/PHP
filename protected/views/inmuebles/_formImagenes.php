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
