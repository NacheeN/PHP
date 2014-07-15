<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventos'=>array('index'),
	'Crear',
);

?>

<h1>Crear Evento</h1>

<?php $this->renderPartial('_formI', array('model'=>$model)); ?>