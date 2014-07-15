<?php
/* @var $this EventosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eventos',
);

$this->menu=array(
	array('label'=>'Create Eventos', 'url'=>array('create')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1 class="text-center">Calendario</h1>
<br>
<!--
<?php #$this->widget('zii.widgets.CListView', array(
	#'dataProvider'=>$dataProvider,
	#'itemView'=>'_view',
#)); ?>
-->

<div class="row">
	<div class="col-lg-8">
		<?php 

		$this->widget('ext.fullcalendar.EFullCalendarHeart', array(
			//'lang'=>'es',
		    'themeCssFile'=>'cupertino/jquery-ui.min.css',

		    'options'=>array(
		        'header'=>array(
		            'left'=>'prev,next,today',
		            'center'=>'title',
		            'right'=>'month,agendaWeek,agendaDay',
		        ),
		        'lazyFetching'=>true,
		       	'editable'=>true,
		    	'droppable'=>true,
		        'events'=>$this->createUrl('eventos/CalendarEvents'), // URL to get event
		        //'events'=>$this->CalendarEvents(),
		        'eventClick'=> 'js:function(calEvent, jsEvent, view) {
		            $("#myModalHeader").html(calEvent.title);
		            $("#myModalBody").load("'.Yii::app()->createUrl("/eventos/view/").'?id="+calEvent.id+"?asModal=true");
		            $("#myModal").modal();
		        }',
		)));

		?>
	</div>
	<div class="col-lg-4">
		
		<?php 
		$collapse = $this->beginWidget('booster.widgets.TbCollapse'); ?>
		<div class="panel-group" id="accordion">
				<?php
				echo CHtml::openTag('div', array('class' => 'row-fluid'));
				$this->widget(
				    'booster.widgets.TbThumbnails',
				    array(
				        'dataProvider' => $dataProvider,
				        'template' => "{items}\n{pager}",
				        'itemView' => '_listaView',
				    )
				);
				echo CHtml::closeTag('div');
				 ?>
		</div>
		<?php $this->endWidget(); ?>

	</div>
</div>




<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'myModal')
); ?>

  	<div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h2><div id="myModalHeader"> Vista Evento </div></h2>
    </div>
 
    <div class="modal-body" id="myModalBody">
        <p><?php echo Yii::app()->createUrl("eventos/view/id/") ?></p>
    </div>
 
    <div class="modal-footer">
        <?php $this->widget(
            'booster.widgets.TbButton',
            array(
                'label' => 'Cerrar',
                'url' => '#',
                'htmlOptions' => array('data-dismiss' => 'modal'),
            )
        ); ?>
    </div>
 
<?php $this->endWidget(); ?>

