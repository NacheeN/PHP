<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>


  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo CHtml::encode($data->id); ?>">
          <b><?php echo CHtml::encode($data->getAttributeLabel('titulo')).': '.CHtml::encode($data->titulo).' - '.CHtml::encode($data->fecha_hora_desde); ?></b>
           <p class="text-right"><?php echo CHtml::link('', array('eventos/delete', 'id'=>$data->id), array('class'=>'glyphicon glyphicon-remove')); ?></p>
        </a>
      </h4>
    </div>

    <div id="<?php echo CHtml::encode($data->id); ?>" class="panel-collapse collapse">
      <div class="panel-body">
       		<b>Cliente:</b>
			<?php echo CHtml::encode($data->cliente->nombre); ?>
			<br />

			<b>Agente:</b>
			<?php echo CHtml::encode($data->agente->nombre); ?>
			<br />

			<b>Inmueble:</b>
			<?php echo CHtml::encode($data->inmueble->titulo); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hora_desde')); ?>:</b>
			<?php echo CHtml::encode($data->fecha_hora_desde); ?>
			<br />

			<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_hora_hasta')); ?>:</b>
			<?php echo CHtml::encode($data->fecha_hora_hasta); ?>
			<br />
      </div>
    </div>
  </div>

<!--
<div class="view">

	<b><?php #echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php #echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php #echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php #echo CHtml::encode($data->id_cliente); ?>
	<br />

	<b><?php #echo CHtml::encode($data->getAttributeLabel('id_agente')); ?>:</b>
	<?php #echo CHtml::encode($data->id_agente); ?>
	<br />

	<b><?php #echo CHtml::encode($data->getAttributeLabel('id_inmueble')); ?>:</b>
	<?php #echo CHtml::encode($data->id_inmueble); ?>
	<br />

	

	<b><?php #echo CHtml::encode($data->getAttributeLabel('fecha_hora_desde')); ?>:</b>
	<?php #echo CHtml::encode($data->fecha_hora_desde); ?>
	<br />

	<b><?php #echo CHtml::encode($data->getAttributeLabel('fecha_hora_hasta')); ?>:</b>
	<?php #echo CHtml::encode($data->fecha_hora_hasta); ?>
	<br />

</div>
-->