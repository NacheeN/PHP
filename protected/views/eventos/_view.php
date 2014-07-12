<?php
/* @var $this EventosController */
/* @var $data Eventos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_agente')); ?>:</b>
	<?php echo CHtml::encode($data->id_agente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_inmueble')); ?>:</b>
	<?php echo CHtml::encode($data->id_inmueble); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hora_desde')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_hora_desde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hora_hasta')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_hora_hasta); ?>
	<br />


</div>