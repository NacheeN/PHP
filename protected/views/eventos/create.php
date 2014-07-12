<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>Crear Evento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>