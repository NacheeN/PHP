<?php
/* @var $this InmueblesController */
/* @var $data Inmuebles */
?>

<div class="row">
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b> <?php echo CHtml::encode($data->id_usuario); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b> <?php echo CHtml::encode($data->nombre); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b>Inmueble:</b> <?php echo $model->inmueble->titulo ?></p>
	</div>
	<div class="col-lg-12">
		<p><b>Fecha Desde:</b> <?php echo $model->fecha_hora_desde ?></p>
	</div>
	<div class="col-lg-12">
		<p><b>Fecha Desde:</b> <?php echo $model->fecha_hora_hasta ?></p>
	</div>
</div>



<div class="view">


	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage')); ?>:</b>
	<?php echo CHtml::encode($data->garage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jardin')); ?>:</b>
	<?php echo CHtml::encode($data->jardin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parrillero')); ?>:</b>
	<?php echo CHtml::encode($data->parrillero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('piso')); ?>:</b>
	<?php echo CHtml::encode($data->piso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propietario')); ?>:</b>
	<?php echo CHtml::encode($data->propietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestamo_bancario')); ?>:</b>
	<?php echo CHtml::encode($data->prestamo_bancario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_banios')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_banios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_habitaciones')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_habitaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superficie')); ?>:</b>
	<?php echo CHtml::encode($data->superficie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagen_portada')); ?>:</b>
	<?php echo CHtml::encode($data->imagen_portada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_creacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_barrio')); ?>:</b>
	<?php echo CHtml::encode($data->id_barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amueblado')); ?>:</b>
	<?php echo CHtml::encode($data->amueblado); ?>
	<br />

	*/ ?>

</div>