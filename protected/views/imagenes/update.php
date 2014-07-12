<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */

$this->breadcrumbs=array(
	'Imagenes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Imagenes', 'url'=>array('index')),
	array('label'=>'Create Imagenes', 'url'=>array('create')),
	array('label'=>'View Imagenes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Imagenes', 'url'=>array('admin')),
);
?>

<h1>Update Imagenes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>