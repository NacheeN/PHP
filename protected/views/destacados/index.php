<?php
/* @var $this DestacadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Destacados',
);

?>

<h1>Destacados</h1>
<br>
<div class="row">
	<?php echo CHtml::link('Crear', array('destacados/create'), array('class'=>'btn btn-default')); ?>
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>

</div>

