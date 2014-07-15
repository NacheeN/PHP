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
                <?php 
                    if ($data->destacado == 0 || $data->destacado == null) {
                        echo CHtml::link('', array('inmuebles/destacado', 'id'=>$data->id , 'des'=>1), array('class'=>'btn btn-default glyphicon glyphicon glyphicon-star-empty')); 
                    }
                    else{
                        echo CHtml::link('', array('inmuebles/destacado', 'id'=>$data->id , 'des'=>0), array('class'=>'btn btn-default glyphicon glyphicon-star desta'));
                    }
                
                    ?>
            </p>
        </div>
    </div>
</div>

<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Modal header</h4>
    </div>
 
    <div class="modal-body">
        
    </div>
 
    <div class="modal-footer">
        <?php $this->widget(
            'booster.widgets.TbButton',
            array(
                'context' => 'primary',
                'label' => 'Guardar',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
        <?php $this->widget(
            'booster.widgets.TbButton',
            array(
                'label' => 'Close',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php $this->endWidget(); ?>
