<?php
/* @var $this ImagenesController */
/* @var $data Imagenes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->id_inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ruta')); ?>:</b>
	<?php echo CHtml::encode($data->ruta); ?>
	<br />


</div>