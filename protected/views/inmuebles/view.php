<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Create Inmuebles', 'url'=>array('create')),
	array('label'=>'Update Inmuebles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inmuebles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1>View Inmuebles #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_usuario',
		'nombre',
		'valor',
		'estado',
		'direccion',
		'titulo',
		'descripcion',
		'garage',
		'jardin',
		'parrillero',
		'piso',
		'tipo',
		'propietario',
		'prestamo_bancario',
		'cantidad_banios',
		'cantidad_habitaciones',
		'superficie',
		'fecha_creacion',
	),
)); ?>
