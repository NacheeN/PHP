<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'List Usuarios', 'url'=>array('index')),
	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
);
?>

<div class="page-header">
  <h1 id="forms">Alta Usuarios</h1>
</div>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>