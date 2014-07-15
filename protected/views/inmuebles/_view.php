<?php
/* @var $this InmueblesController */
/* @var $data Inmuebles */
?>


<div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:470px">
        <img src="<?php echo Yii::app()->request->baseUrl;?>/images/inmueble/<?php echo $data->imagen_portada?>" alt="" style="height:250px">
        <div class="caption">
            <h3><?php echo CHtml::encode($data->barrio->ciudad->nombre); ?> - <?php echo CHtml::encode($data->barrio->nombre); ?></h3>
            <p><?php echo CHtml::encode($data->tipo); ?></p> 
            <p>U$S <?php echo CHtml::encode($data->valor); ?></p>
            <p><?php echo CHtml::encode($data->superficie); ?> m<sup>2</sup></p>           
            <p><?php echo CHtml::link('Vista', array('inmuebles/view', 'id'=>$data->id), array('class'=>'btn btn-primary')); ?> <?php echo CHtml::link('Imagenes', array('/imagenes?id_inmueble='.$data->id), array('class'=>'btn btn-default')); ?></p>

        </div>
    </div>
</div>