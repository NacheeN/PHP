<?php

class BusquedaForm extends CFormModel
{
	
	public $id_departamento;
	public $id_ciudad;
	public $id_barrio;
	public $tipo;
	public $precio_desde;
	public $precio_hasta;
	public $texto;
	public $operacion;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(array('id_departamento,id_ciudad,id_barrio,tipo,precio_desde,precio_hasta,texto,operacion','required'),
			
		);
	}
}

