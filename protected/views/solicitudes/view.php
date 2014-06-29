<?php
/* @var $this SolicitudesController */
/* @var $model Solicitudes */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Solicitudes', 'url'=>array('index')),
	array('label'=>'Create Solicitudes', 'url'=>array('create')),
	array('label'=>'Update Solicitudes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Solicitudes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solicitudes', 'url'=>array('admin')),
);
?>

<h1>View Solicitudes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_usuario',
		'nombre',
		'telefono',
		'email',
		'descripcion',
		'tipo',
	),
)); ?>
