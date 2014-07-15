<?php
/* @var $this SolicitudesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudes',
);

$this->menu=array(
	array('label'=>'Create Solicitudes', 'url'=>array('create')),
	array('label'=>'Manage Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Solicitudes</h1>

<!--
<?php //$this->widget('zii.widgets.CListView', array(
    //'dataProvider'=>$dataProvider,
    //'itemView'=>'_view',
//)); ?>
-->

<?php
if (Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 2) { 
  if ($dataProvider == null) {
      
        echo CHtml::openTag('div', array('class' => 'row-fluid'));
        $this->widget(
            'booster.widgets.TbThumbnails',
            array(
                'dataProvider' => $dataProvider,
                'template' => "{items}\n{pager}",
                'itemView' => '_listaSolicitudesView',
            )
        );
        echo CHtml::closeTag('div');
    
    }
    else{ ?>

        <div class="jumbotron">
            <h2>No tiene Solicitudes Disponibles</h2>
        </div>

   <?php }
}
else if (Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 3) 
{
    if ($dataProvider == null) {

        echo CHtml::openTag('div', array('class' => 'row-fluid'));
        $this->widget(
            'booster.widgets.TbThumbnails',
            array(
                'dataProvider' => $dataProvider,
                'template' => "{items}\n{pager}",
                'itemView' => '_listaSolicitudesInfo',
            )
        );
        echo CHtml::closeTag('div');

    }
    else{ ?>

        <div class="jumbotron">
            <h2>No tiene Solicitudes Disponibles</h2>
        </div>

   <?php }
}

?>

<?php $this->beginWidget(
    'booster.widgets.TbModal',
    array('id' => 'myModal')
); ?>
 
    <div class="modal-header">
        <a class="close" data-dismiss="modal">&times;</a>
        <h4>Modal header</h4>
    </div>
 
    <div class="modal-body">
        <p>One fine body...</p>
    </div>
 
    <div class="modal-footer">
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
