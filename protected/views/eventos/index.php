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

<h1>Calendario</h1>
<!--
<?php #$this->widget('zii.widgets.CListView', array(
	#'dataProvider'=>$dataProvider,
	#'itemView'=>'_view',
#)); ?>
-->
<div class="row">
	<div class="col-lg-8">
		<div class="table-responsive">
			<?php echo $calendario ?>
		</div>
	</div>
	<div class="col-lg-4">

	</div>
</div>

<!--
<script>
     function crearCalendario(){
    $.ajax({          
          url: <?php echo "'".CController::createUrl('Eventos/draw_calendar')."'"; ?>,
        })
      .done(function( result ) {        
             $('#lblHoraServidor').text(result);
      });
      }
</script>
-->
