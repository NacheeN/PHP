<?php
/* @var $this SiteController */
/* @var $data Site */
?>
<!--
<div class="row post">
	
	<div class="col-lg-8">
		<div class="col-lg-12 fecha_post">
			<p><?php #echo CHtml::encode($data->fecha); ?></p>
		</div>
		<div class="col-lg-12 titulo_post">
			
			<h2><?php #echo CHtml::encode($data->titulo); ?></h2>
			<hr>
		</div>
		<div class="col-lg-12 contenedor_text_post">
			
			<div class="text_post">
				<p><?php #echo CHtml::encode($data->texto); ?></p>
			</div>
			
		</div>
	</div>
	
	<div class="col-lg-12 post_btn">
		<?php #echo CHtml::link('Ver Mas', array('post/view', 'id'=>$data->id), array('class'=>'btn btn-color2')); ?>
	</div>
	
</div>
-->

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="<?php echo Yii::app()->request->baseUrl;?>/images/inmueble/<?php echo $data->imagen_portada?>" alt="">
        <div class="caption">
            <h3><?php echo CHtml::encode($data->nombre); ?></h3>
            <p><?php echo CHtml::encode($data->tipo); ?></p> 
            <p>U$S <?php echo CHtml::encode($data->valor); ?></p>
            <p><?php echo CHtml::encode($data->superficie); ?> m<sup>2</sup></p>           
            <p><?php echo CHtml::link('Vista', array('inmuebles/view', 'id'=>$data->id), array('class'=>'btn btn-primary')); ?> <a href="#" class="btn btn-default" role="button">Comprar</a></p>
        </div>
    </div>
</div>