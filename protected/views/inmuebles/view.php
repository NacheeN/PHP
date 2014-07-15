<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
  'Inmuebles'=>array('index'),
  $model->nombre,
);

$this->menu=array(
  array('label'=>'List Inmuebles', 'url'=>array('index')),
  array('label'=>'Create Inmuebles', 'url'=>array('create')),
  array('label'=>'Update Inmuebles', 'url'=>array('update', 'id'=>$model->id)),
  array('label'=>'Delete Inmuebles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
  array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<ul class="nav nav-tabs">
  <li class="active"><a href="#tab_a" data-toggle="tab">Inmueble</a></li>
  <li><a href="#tab_b" data-toggle="tab">Calcule su préstamo</a></li>
  <li><a href="#tab_c" data-toggle="tab">Imágenes</a></li>
</ul>
<div class="tab-content">
    <div class="tab-pane active" id="tab_a">
        <h1><?php echo $model->nombre; ?></h1>

        <div class="well bs-component">
          <div class="form-horizontal" role="form">
              <div class="form-group">        
              <div class="col-lg-2">
                <span><b>Titulo</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->titulo?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Tipo</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->tipo?></span>
              </div>
              </div>
               <div class="form-group">
              <div class="col-lg-2">
                <span><b>Operación</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->operacion?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Barrio</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->barrio->nombre?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Direccion</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->direccion?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Valor</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->valor?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Estado</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->estado?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Superficie</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->superficie?></span>
              </div>
              </div>                
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Acepta préstamo bancario</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php if($model->prestamo_bancario==0) echo 'No'; else echo 'Si';?></span>
              </div>
              </div>        
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Garage</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php if($model->garage==0) echo 'No'; else echo 'Si';?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Jardín</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php if($model->jardin==0) echo 'No'; else echo 'Si';?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Parrillero</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php if($model->parrillero==0) echo 'No'; else echo 'Si';?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Piso</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->piso?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Cantidad de Baños</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->cantidad_banios?></span>
              </div>
              </div>
              <div class="form-group">
              <div class="col-lg-2">
                <span><b>Cantidad de Habitaciones</b></span>
              </div>
              <div class="col-lg-10">
                <span><?php echo $model->cantidad_habitaciones?></span>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="tab-pane" id="tab_b">
        <h2>Calcule su préstamo</h2>
        <p class="intro"></p>

        <form target="_blank" method="GET">                      
          
          <table cellspacing="0" cellpadding="4" frame="box" bordercolor="#dcdcdc" rules="none" style="border-collapse: collapse;">
          <tbody>
          <tr>
            <td class="frmText" style="color: #000000; font-weight: normal;">Valor del inmueble (US$):</td>
            <td><input class="frmInput" type="text" size="50" name="LoanAmount" id="LoanAmount"></td>
          </tr>
        
          <tr>
            <td class="frmText" style="color: #000000; font-weight: normal;">Interés anual (%):</td>
            <td><input class="frmInput" type="text" size="50" name="InterestRate"></td>
          </tr>
        
          <tr>
            <td class="frmText" style="color: #000000; font-weight: normal;">Cantidad de cuotas mensuales:</td>
            <td><input class="frmInput" type="text" size="50" name="Months"></td>
          </tr>
          
          <tr>
            <td></td>
            <td align="right"> <?php echo CHtml::link('Calcular', array('site/llamar'), array('class'=>'btn btn-default')); ?></td>
          </tr>
          </tbody></table>          

        </form>
    </div>        
    <div class="tab-pane" id="tab_c">
        <?php $imagenes=Imagenes::model()->findAllByAttributes(array('id_inmueble'=>array($model->id)));

          foreach ($imagenes as $imagen) 
          {
            echo '<div class="col-sm-6 col-md-4" style="margin-top:50px">';
            echo '<div class="thumbnail" style="height:320px">';
            echo '<img src="'.Yii::app()->request->baseUrl.'/images/inmueble/'.$imagen->ruta.'" alt="" style="height:250px">';      
            echo '<div class="caption">';
            echo '<h3>'.$imagen->descripcion.'</h3>';
            echo '</div>';  
            echo '</div>';  
            echo '</div>';
          }?>
    </div>        
</div><!-- tab content -->



