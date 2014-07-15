<?php
/* @var $this DestacadosController */
/* @var $data Destacados */
?>

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
    	 <h4><?php echo CHtml::encode($data->titulo), CHtml::link('&times', array('destacados/delete', 'id'=>$data->id), array('class'=>'close text-right')); ?></h4>
        <div class="caption">
			<p><?php echo CHtml::encode($data->fecha_inicio); ?></p>
            <p><?php echo CHtml::encode($data->fecha_fin); ?></p>       
        </div>
    </div>
</div>