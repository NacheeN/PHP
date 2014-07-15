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

?>


<!---->
<div class="form">

<?php
    $form = $this->beginWidget(
    'booster.widgets.TbActiveForm',
    array(
    'id' => 'busqueda-form',
    'action'=>Yii::app()->createUrl('//inmuebles/busqueda'),
      'enableAjaxValidation'=>true,
      'method'=>'Post',
    'type' => 'inline',
    'htmlOptions' => array('class' => 'well'),
    )
    );







 ?>

    <div class="col-lg-2">
        
        <?php echo $form->dropDownList($busqueda,'id_departamento',
                   CHtml::listData($departamentos,'id','nombre'),
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('site/Ciudades'),
                              'update'=>'#'.CHtml::activeId($busqueda,'id_ciudad'),
                              'beforeSend' => 'function(){
                               $("#BusquedaForm_id_ciudad").find("option").remove();
                               $("#BusquedaForm_id_barrio").find("option").remove();
                               }',  
                            ),'prompt'=>'Departamento'
                         )
                        ); ?>
       
    </div>

    <div class="col-lg-2">
        
        <?php 
                $lista_ciudades = array();
                if(isset($busqueda->id_ciudad)){
                $id_ciu = intval($busqueda->id_departamento); 
                $lista_ciudades = CHtml::listData($ciudades->findAll("id = '$id_ciu'"),'id','nombre');
                }                
                echo $form->dropDownList($busqueda,'id_ciudad',$lista_ciudades,
                        array(
                            'ajax'=>array(
                              'type'=>'POST',
                              'url'=>CController::createUrl('site/Barrios'),
                              'update'=>'#'.CHtml::activeId($busqueda,'id_barrio'),
                              'beforeSend' => 'function(){
                              $("#BusquedaForm_id_barrio").find("option").remove();
                               }',   
                                
                            ),
                            
                            'prompt'=>'Opcion Ciudad   ')
                        ); ?>
          
    </div>
  
    <div class="col-lg-2">
       
        <?php 
                $lista_barrios = array();
                if(isset($busqueda->id_barrio)){
                $id_barr = intval($barrio->id_ciudad); 
                $lista_barrios = CHtml::listData($barrios->findAll("id_ciudad='$id_barr"),'id','nombre');
                }
                echo $form->dropDownList($busqueda,'id_barrio',$lista_barrios,
                             
                        array('prompt'=>'Opcion Barrio')
                        ); ?>
        
    </div>
   
   <div class="col-lg-2">
          <?php
                echo $form->dropDownList($busqueda,'tipo',
                        array('1'=>'Casa','2'=>'Apartamento','3'=>'Local','4'=>'Terreno','5'=>'Oficina'), 
  
                        array('prompt'=>'Opcion Tipo')
                        );  ?>

   </div>

    <div class="col-lg-2">
          <?php
                echo $form->dropDownList($busqueda,'operacion',
                        array('1'=>'Venta','2'=>'Alquiler','3'=>'Alquiler Temporada','4'=>'Permuta'), 
 
                        array('prompt'=>'Operacion')
                        );  ?>

   </div>
   <br>
    <div class="col-lg-3">
         <p>Precio <?php echo $form->textField($busqueda,'precio_desde',array('style'=>'width:50px')); ?></p>
    </div>
    
    <div class="col-lg-3" >
         <p>entre <?php echo $form->textField($busqueda,'precio_hasta',array('style'=>'width:50px')); ?></p>
    </div>

    <div class="col-lg-4">
      <p>texto <?php echo $form->textField($busqueda,'texto',array('style'=>'width:150px')); ?> </p>
     </div>

    <div class="form-group">

        <?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-default')); ?>

    </div>


<?php $this->endWidget(); ?>

</div><!-- form -->

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