<?php
/* @var $this DestacadosController */
/* @var $model Destacados */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

<?php $form = $this->beginWidget(
	'booster.widgets.TbActiveForm',
	array(
		'id' => 'destacados-form',
		'type' => 'horizontal',
		'enableAjaxValidation'=>false,
	)
); ?>

	<p class="note">Requeridos <span class="required">*</span></p>

	<div class="form-group">
		<div class="col-lg-12">
			<div class="text-danger">
				<?php echo $form->errorSummary($model); ?>
			</div>
		</div>
	</div>


	<div class="form-group">
		<div class="col-lg-2">
			<p>Inmuebles: </p>
		</div>
		<div class="col-lg-10">			
			<?php echo $form->dropDownList($model,'id_inmueble', CHtml::listData(Inmuebles::model()->findAll(), 'id','titulo')); ?>
			<?php echo $form->error($model,'id_inmueble'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'titulo'); ?>
		</div>
		<div class="col-lg-10">		
			<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
			<?php echo $form->error($model,'titulo'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		</div>
		<div class="col-lg-10">
			<?php Yii::import('application.extensions.jui.EJuiDateTimePicker');
			$this->widget(
				    'EJuiDateTimePicker',
				    array(
				        'model'     => $model,
				        'attribute' => 'fecha_inicio',
				        //'language'=> 'es',//default Yii::app()->language
				        'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
				       	
		            	'options'=>array(
		                        'timeFormat'=>'hh:mm:ss',
		                        'dateFormat'=>'yy-mm-dd'
		                    ),
				    ));
			?>
			<?php echo $form->error($model,'fecha_inicio'); ?>
		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-2">
			<?php echo $form->labelEx($model,'fecha_fin'); ?>
		</div>
		<div class="col-lg-10">
			<?php Yii::import('application.extensions.jui.EJuiDateTimePicker');
			$this->widget(
				    'EJuiDateTimePicker',
				    array(
				        'model'     => $model,
				        'attribute' => 'fecha_fin',
				        //'language'=> 'es',//default Yii::app()->language
				        'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
				       	
		            	'options'=>array(
		                        'timeFormat'=>'hh:mm:ss',
		                        'dateFormat'=>'yy-mm-dd'
		                    ),
				    ));
			?>
			<?php echo $form->error($model,'fecha_fin'); ?>
		</div>
	</div>

	<div class="form-group">
		<div class="row buttons">
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-default')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->