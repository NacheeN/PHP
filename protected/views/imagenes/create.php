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

<div class="page-header">
  <h1 id="forms">Alta Imagenes</h1>
</div>




<?php $this->renderPartial('_form', array('model'=>$model)); ?>


