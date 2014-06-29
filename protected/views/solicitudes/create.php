<?php
/* @var $this SolicitudesController */
/* @var $model Solicitudes */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solicitudes', 'url'=>array('index')),
	array('label'=>'Manage Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Create Solicitudes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>