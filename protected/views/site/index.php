<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!--
<?php #$this->widget('zii.widgets.CListView', array(
	#'dataProvider'=>$dataProvider,
	#'itemView'=>'_listaPostView',
	#'pager'=>array('htmlOptions'=>array('class'=>'pagination'))
#)); ?>
-->
<?php 

if ( Yii::app()->user->isGuest ) { 
	
echo CHtml::openTag('div', array('class' => 'row-fluid'));
$this->widget(
    'booster.widgets.TbThumbnails',
    array(
        'dataProvider' => $dataProvider,
        'template' => "{items}\n{pager}",
        'itemView' => '_listaInmueblesView',
    )
);
echo CHtml::closeTag('div');

}
else if(Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 3)
{

	echo CHtml::openTag('div', array('class' => 'row-fluid'));
	$this->widget(
	    'booster.widgets.TbThumbnails',
	    array(
	        'dataProvider' => $dataProvider,
	        'template' => "{items}\n{pager}",
	        'itemView' => '_listaInmueblesAgente',
	    )
	);
	echo CHtml::closeTag('div');
}



?>