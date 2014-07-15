<?php
/* @var $this DestacadosController */
/* @var $model Destacados */

$this->breadcrumbs=array(
	'Destacadoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Destacados', 'url'=>array('index')),
	array('label'=>'Create Destacados', 'url'=>array('create')),
	array('label'=>'Update Destacados', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Destacados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Destacados', 'url'=>array('admin')),
);
?>

<h1>View Destacados #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_inmueble',
		'titulo',
		'fecha_inicio',
		'fecha_fin',
	),
)); ?>
