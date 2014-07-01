<?php
/* @var $this ImagenesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Imagenes',
);

$this->menu=array(
	array('label'=>'Create Imagenes', 'url'=>array('create')),
	array('label'=>'Manage Imagenes', 'url'=>array('admin')),
);
?>

<h1>Imagenes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
