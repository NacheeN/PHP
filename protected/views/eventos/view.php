<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventos'=>array('index'),
	$model->titulo,
);

?>

<div class="row">
	<div class="col-lg-12">
		<p><b>Cliente:</b> <?php echo $model->cliente->nombre ?></p>
	</div>
	<div class="col-lg-12">
		<p><b>Agente:</b> <?php echo $model->agente->nombre ?></p>
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
