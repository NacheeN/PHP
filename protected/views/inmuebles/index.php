<?php
/* @var $this InmueblesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inmuebles',
);

$this->menu=array(
	array('label'=>'Create Inmuebles', 'url'=>array('create')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Inmuebles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
