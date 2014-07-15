<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inmuebles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Resultado Busqueda</h1>

<?php
	 $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
		'pager' => array(
	        'maxButtonCount' => 3,
    ),
)
	 ); 
?>

 

