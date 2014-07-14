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

<div class="page-header">
  <h1 id="forms">Imagenes</h1>
</div>

<?php $this->renderPartial('_view'); ?>

