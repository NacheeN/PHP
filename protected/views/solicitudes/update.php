<?php
/* @var $this SolicitudesController */
/* @var $model Solicitudes */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Solicitudes', 'url'=>array('index')),
	array('label'=>'Create Solicitudes', 'url'=>array('create')),
	array('label'=>'View Solicitudes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Update Solicitudes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>