<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1 id="forms">Alta Inmuebles</h1>
</div>




<?php $this->renderPartial('_form', array('model'=>$model)); ?>