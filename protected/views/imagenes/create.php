<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */

$this->breadcrumbs=array(
	'Imagenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imagenes', 'url'=>array('index')),
	array('label'=>'Manage Imagenes', 'url'=>array('admin')),
);
?>

<h1>Create Imagenes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>