<?php
/* @var $this DestacadosController */
/* @var $model Destacados */

$this->breadcrumbs=array(
	'Destacados'=>array('index'),
	'Crear',
);

?>

<h1>Crear Destacados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>