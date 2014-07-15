<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>
<?php if (Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 2) { 
if($data->rol->nombre=='Comprador' || $data->rol->nombre=='Vendedor'){ ?>
<div class="row">
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b> <?php echo $data->id ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b> <?php echo CHtml::encode($data->nombre); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b> <?php echo CHtml::encode($data->apellido); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('ci')); ?>:</b> <?php echo CHtml::encode($data->ci); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b> <?php echo CHtml::encode($data->telefono); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b> <?php echo CHtml::encode($data->email); ?></p>
	</div>
	<div class="col-lg-12">
		<p><b><?php echo CHtml::encode($data->getAttributeLabel('nick')); ?>:</b> <?php echo CHtml::encode($data->nick); ?></p>
	</div>
</div>
<?php 
} 
else{?>


<?php } ?>
<div class="view">

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pass')); ?>:</b>
	<?php echo CHtml::encode($data->pass); ?>
	<br />

	*/ ?>

</div>