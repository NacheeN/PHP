<?php
/* @var $this SolicitudesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudes',
);

$this->menu=array(
	array('label'=>'Create Solicitudes', 'url'=>array('create')),
	array('label'=>'Manage Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Solicitudes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
