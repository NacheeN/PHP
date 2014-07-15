<?php
/* @var $this SolicitudesController */
/* @var $model Solicitudes */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Solicitudes', 'url'=>array('index')),
	array('label'=>'Manage Solicitudes', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1 id="forms">Solicitudes</h1> <!--	NACHEEN-->
</div>




<?php $this->renderPartial('_form', array('model'=>$model)); ?>