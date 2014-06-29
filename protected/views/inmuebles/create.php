<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Create Inmuebles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>