<?php
/* @var $this InmueblesController */
/* @var $data Inmuebles */
?>

<div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:470px">
    	 <h4><?php echo CHtml::encode($data->titulo), CHtml::link('&times', array('inmuebles/delete', 'id'=>$data->id), array('class'=>'close text-right')); ?></h4>
        <img src="<?php echo Yii::app()->request->baseUrl;?>/images/inmueble/<?php echo $data->imagen_portada?>" alt="" style="height:250px">
        <div class="caption">
        	<h4><?php echo CHtml::encode($data->barrio->ciudad->nombre); ?> - <?php echo CHtml::encode($data->barrio->nombre); ?></h4>
            <p><?php echo CHtml::encode($data->tipo); ?> / U$S <?php echo CHtml::encode($data->valor); ?></p>       
            <p><?php echo CHtml::link('Vista', array('inmuebles/view', 'id'=>$data->id), array('class'=>'btn btn-primary')); ?> 
            	<?php echo CHtml::link('Modificar', array('inmuebles/update', 'id'=>$data->id), array('class'=>'btn btn-default')); ?>
            	<?php echo CHtml::link('Agendar Visita', array('eventos/nuevo', 'id'=>$data->id), array('class'=>'btn btn-default')); ?>

            	<?php 
            		if ($data->activo == 0) {
            			echo CHtml::link('Activar', array('inmuebles/activa', 'id'=>$data->id , 'activa'=>1), array('class'=>'btn btn-default')); 
            		}
            		else{
            			echo CHtml::link('Desactivar', array('inmuebles/activa', 'id'=>$data->id , 'activa'=>0), array('class'=>'btn btn-default'));
            		}
            	
            		?>
            </p>
        </div>
    </div>
</div>