<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="form-horizontal borde" role="form">
<!--
<?php #$form = $this->beginWidget(
	#'booster.widgets.TbActiveForm',
	#array(
	#	'id' => 'eventos-form',
	#	'htmlOptions' => array('class' => 'well'), // for inset effect
	#	'enableAjaxValidation'=>false,
	#)
#); ?>
-->	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Requerido <span class="required">*</span></p>

	<div class="form-group">
		<div class="text-danger">
			<?php echo $form->errorSummary($model); ?>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">

			<div class="form-group">
				<div class="col-lg-4">
					<?php echo $form->label($model,'titulo'); ?>
				</div>
				<div class="col-lg-10">
					<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
					<?php echo $form->error($model,'titulo'); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-4">
					<?php echo $form->label($model,'fecha_hora_desde'); ?>
				</div>
				<div class="col-lg-10">
			        <?php Yii::import('application.extensions.jui.EJuiDateTimePicker');
					$this->widget(
						    'EJuiDateTimePicker',
						    array(
						        'model'     => $model,
						        'attribute' => 'fecha_hora_desde',
						        //'language'=> 'es',//default Yii::app()->language
						        'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
						       	
				            	'options'=>array(
				                        'timeFormat'=>'hh:mm:ss',
				                        'dateFormat'=>'yy-mm-dd'
				                    ),
						    ));
					?>
					<!--
					<?php #echo $form->datePickerGroup(
						#$model,
						#'fecha_hora_desde',
						#array(
						#	'widgetOptions' => array(
						#		'options' => array(
						#			'language' => 'es',
						#		),
						#	),
						#	'wrapperHtmlOptions' => array(
						#		'class' => 'col-sm-5',
						#	),
						#	'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
						#)
					#); ?>
				-->
					<?php echo $form->error($model,'fecha_hora_desde'); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-4">
					<?php echo $form->label($model,'fecha_hora_hasta'); ?>
				</div>
				<div class="col-lg-10">
			        <?php Yii::import('application.extensions.jui.EJuiDateTimePicker');
					$this->widget(
						    'EJuiDateTimePicker',
						    array(
						        'model'     => $model,
						        'attribute' => 'fecha_hora_hasta',
						        //'language'=> 'es',//default Yii::app()->language
						        'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
						       	
				            	'options'=>array(
				                        'timeFormat'=>'hh:mm:ss',
				                        'dateFormat'=>'yy-mm-dd'
				                    ),
						    ));
					?>
					<!--
					<?php #echo $form->datePickerGroup(
						#$model,
						#'fecha_hora_hasta',
						#array(
							#'widgetOptions' => array(
								#'options' => array(
									#'language' => 'es',
								#),
							#),
							#'wrapperHtmlOptions' => array(
							#	'class' => 'col-sm-5',
							#),
							#'prepend' => '<i class="glyphicon glyphicon-calendar"></i>'
						#)
					#); ?>
					|-->
					<?php echo $form->error($model,'fecha_hora_hasta'); ?>
				</div>
			</div>	
		</div>

		<div class="col-lg-6">
			<div class="form-group">
				<div class="col-lg-4">
					<?php echo $form->labelEx($model,'id_cliente'); ?>
				
				</div>
				<div class="col-lg-10">
					<?php echo $form->dropDownList($model,'id_cliente', CHtml::listData(Usuarios::model()->findAll(), 'id','nombre'));?>	 				
					<?php echo $form->error($model,'id_cliente'); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-4">
					<?php echo $form->labelEx($model,'id_agente'); ?>
				
				</div>
				<div class="col-lg-10">
					<?php echo $form->dropDownList($model,'id_agente', CHtml::listData(Usuarios::model()->findAll(), 'id','nombre'));?>	 				
					<?php echo $form->error($model,'id_agente'); ?>
				</div>
			</div>

			<div class="form-group">
				<div class="col-lg-4">
					<?php echo $form->labelEx($model,'id_inmueble'); ?>
				
				</div>
				<div class="col-lg-10">
					<?php echo $form->dropDownList($model,'id_inmueble', CHtml::listData(Inmuebles::model()->findAll(), 'id','titulo'));?>	 				
					<?php echo $form->error($model,'id_inmueble'); ?>
				</div>
			</div>
		</div>

	</div>


	<div class="form-group">
		<div class="col-lg-12">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<!--
	<div class="row">
		<?php #echo $form->labelEx($model,'id_cliente'); ?>
		<?php #echo $form->textField($model,'id_cliente'); ?>
		<?php #echo $form->error($model,'id_cliente'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'id_agente'); ?>
		<?php #echo $form->textField($model,'id_agente'); ?>
		<?php #echo $form->error($model,'id_agente'); ?>
	</div>
-->

<?php $this->endWidget(); ?>

</div><!-- form -->