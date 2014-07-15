<?php
/* @var $this SiteController */
/* @var $data Site */
?>

<div class="item">
  <img src="<?php echo Yii::app()->request->baseUrl;?>/images/inmueble/<?php echo $data->imagen_portada?>" alt="">
  <div class="carousel-caption">
    <h3><?php echo CHtml::encode($data->operacion); ?></h3>
    <p><?php echo CHtml::encode($data->barrio->ciudad->nombre); ?> - <?php echo CHtml::encode($data->barrio->nombre); ?></p>
    <p> U$S <?php echo CHtml::encode($data->valor); ?></p>
  </div>
</div>