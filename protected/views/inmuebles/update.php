<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->titulo=>array('view','id'=>$model->titulo),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Create Inmuebles', 'url'=>array('create')),
	array('label'=>'View Inmuebles', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Modificar Inmuebles - <?php echo $model->titulo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>