<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->nombre,
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Create Inmuebles', 'url'=>array('create')),
	array('label'=>'Update Inmuebles', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inmuebles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->nombre; ?></h1>
<table>
	<tr>
		<td>
			<?php $this->widget('zii.widgets.CDetailView', array(
				'data'=>$model,
				'attributes'=>array(
					'id',
					'id_barrio',
					'id_usuario',
					'nombre',
					'valor',
					'estado',
					'direccion',
					'titulo',
					'descripcion',
					'garage',
					'jardin',
					'parrillero',
					'piso',
					'tipo',
					'propietario',
					'prestamo_bancario',
					'cantidad_banios',
					'cantidad_habitaciones',
					'superficie',
					'fecha_creacion',
				),
			)); ?>

		</td>
		<td>
		<h2>Calcule su préstamo</h2>
          <p class="intro"></p>

              <form target="_blank" action="http://www.webservicex.net/FinanceService.asmx/LoanMonthlyPayment" method="GET">                      
                
                  <table cellspacing="0" cellpadding="4" frame="box" bordercolor="#dcdcdc" rules="none" style="border-collapse: collapse;">
                  <tbody>
                  <tr>
                    <td class="frmText" style="color: #000000; font-weight: normal;">Valor del inmueble (US$):</td>
                    <td><input class="frmInput" type="text" size="50" name="LoanAmount"></td>
                  </tr>
                
                  <tr>
                    <td class="frmText" style="color: #000000; font-weight: normal;">Interés anual (%):</td>
                    <td><input class="frmInput" type="text" size="50" name="InterestRate"></td>
                  </tr>
                
                  <tr>
                    <td class="frmText" style="color: #000000; font-weight: normal;">Cantidad de cuotas mensuales:</td>
                    <td><input class="frmInput" type="text" size="50" name="Months"></td>
                  </tr>
                
                <tr>
                  <td></td>
                  <td align="right"> <input type="submit" value="Calcular" class="button"></td>
                </tr>
                </tbody></table>
              

            </form>
		</td>
	</tr>
</table>

