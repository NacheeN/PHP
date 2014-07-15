<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Panel de Control',
);

$this->menu=array(
	array('label'=>'Lista Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#usuarios-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Panel de Control Usuarios</h1>

<?php echo CHtml::link('Crear','Create',array('class'=>'btn btn-default')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'apellido',
		'ci',
		'telefono',
		'email',
		/*
		'nick',
		'pass',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
