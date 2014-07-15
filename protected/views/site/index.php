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
//$lista =Inmuebles::model()->findAll('destacado=1');
/*
  $this->widget(
    'booster.widgets.TbCarousel',
    array(
        'slide' => true,
        'displayPrevAndNext' => true,
        'items' => array(
                        foreach($lista as $value) 
                        {
                            array(
                                'image' => 'echo Yii::app()->request->baseUrl."/images/inmueble/".$value->imagen_portada',
                                'label' => 'echo $value->barrio->ciudad->nombre',
                                'caption' => 'echo $data->decripcion',
                            ),
                        }
                    ),
    )
);
*/
?>

<div id="slider" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$lista,
    'itemView'=>'_listaDestacados',
    'enablePagination' => false,
    'summaryText'=>'', 
    )); ?>
    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<?php 
    	
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
	{?>
		<div class="jumbotron">
			<h2>BIENVENIDO! AGENTE</h2>
		</div>
	<?php }

}
else if(Yii::app()->user->rol == 2)
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
else if(Yii::app()->user->rol == 1)
{?>
	<div class="jumbotron">
		<h2>BIENVENIDO! ADMIN</h2>
	</div>
<?php }

?>