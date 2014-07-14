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

<div class="view">

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


</div>