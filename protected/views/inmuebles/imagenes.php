<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Imagenes',
);
/*
$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
*/
?>

<h1>Imagenes Inmueble</h1>

<?php $this->renderPartial('_formImagenes', array('model'=>$model)); ?>