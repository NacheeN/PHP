<?php

/**
 * This is the model class for table "inmuebles".
 *
 * The followings are the available columns in table 'inmuebles':
 * @property integer $id
 * @property integer $id_usuario
 * @property string $nombre
 * @property double $valor
 * @property string $estado
 * @property string $direccion
 * @property string $titulo
 * @property string $descripcion
 * @property integer $amueblado
 * @property integer $garage
 * @property integer $jardin
 * @property integer $parrillero
 * @property integer $piso
 * @property string $tipo
 * @property integer $prestamo_bancario
 * @property integer $cantidad_banios
 * @property integer $cantidad_habitaciones
 * @property integer $superficie
 * @property string $imagen_portada
 * @property string $fecha_creacion
 * @property integer $id_barrio
 * @property integer $activo
 * @property string $operacion
 * @property integer $destacado
 */
class Inmuebles extends CActiveRecord
{

	private $_id_departamento;
	private $_id_ciudad;

	const TIPO_VENTA='VENTA';
	const TIPO_ALQUILER='ALQUILER';

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'inmuebles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario, operacion', 'required'),
			array('id_usuario, amueblado, garage, jardin, parrillero, piso, prestamo_bancario, cantidad_banios, cantidad_habitaciones, superficie, id_barrio, activo, destacado', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('imagen_portada','file','types'=>'jpg, jpeg, png, gif', 'allowEmpty'=>true, 'on'=>'update'),
			array('nombre', 'length', 'max'=>15),
			array('estado', 'length', 'max'=>20),
			array('direccion, titulo, imagen_portada', 'length', 'max'=>255),
			array('tipo', 'length', 'max'=>7),
			array('descripcion, fecha_creacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_usuario, nombre, valor, estado, direccion, titulo, descripcion, garage, jardin, parrillero, piso, tipo, prestamo_bancario, cantidad_banios, cantidad_habitaciones, superficie, imagen_portada, fecha_creacion, id_barrio, amueblado, operacion, activo, destacado', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'destacadoses' => array(self::HAS_MANY, 'Destacados', 'id_inmueble'),
			'eventoses' => array(self::HAS_MANY, 'Eventos', 'id_inmueble'),
			'imagenes' => array(self::HAS_MANY, 'Imagenes', 'id_inmueble'),
			'barrio' => array(self::BELONGS_TO, 'Barrio', 'id_barrio'),
			'usuario' => array(self::BELONGS_TO, 'Usuarios', 'id_usuario'),
			'operacions' => array(self::HAS_MANY, 'Operacion', 'id_inmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_usuario' => 'Id Usuario',
			'nombre' => 'Nombre',
			'valor' => 'Valor',
			'estado' => 'Estado',
			'direccion' => 'Direccion',
			'titulo' => 'Titulo',
			'descripcion' => 'Descripcion',
			'amueblado' => 'Amueblado',
			'garage' => 'Garage',
			'jardin' => 'Jardin',
			'parrillero' => 'Parrillero',
			'piso' => 'Piso',
			'tipo' => 'Tipo',
			'prestamo_bancario' => 'Prestamo Bancario',
			'cantidad_banios' => 'Cantidad Banios',
			'cantidad_habitaciones' => 'Cantidad Habitaciones',
			'superficie' => 'Superficie',
			'imagen_portada' => 'Imagen Portada',
			'fecha_creacion' => 'Fecha Creacion',
			'id_barrio' => 'Barrio',
			'idDepartamento' => 'Departamento',
			'activo' => 'Activo',
			'operacion' => 'Operacion',
			'destacado' => 'Destacado',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_usuario',$this->id_usuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('amueblado',$this->amueblado);
		$criteria->compare('garage',$this->garage);
		$criteria->compare('jardin',$this->jardin);
		$criteria->compare('parrillero',$this->parrillero);
		$criteria->compare('piso',$this->piso);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('prestamo_bancario',$this->prestamo_bancario);
		$criteria->compare('cantidad_banios',$this->cantidad_banios);
		$criteria->compare('cantidad_habitaciones',$this->cantidad_habitaciones);
		$criteria->compare('superficie',$this->superficie);
		$criteria->compare('imagen_portada',$this->imagen_portada,true);
		$criteria->compare('fecha_creacion',$this->fecha_creacion,true);
		$criteria->compare('id_barrio',$this->id_barrio);
		$criteria->compare('activo',$this->activo);
		$criteria->compare('operacion',$this->operacion,true);
		$criteria->compare('destacado',$this->destacado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Inmuebles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getIdDepartamento()
	{
		return $this->_id_departamento;
	}

	public function setIdDepartamento($idDepartamento)
	{
		return $this->_id_departamento = $idDepartamento;
	}

	public function getIdCiudad()
	{
		return $this->_id_ciudad;
	}

	public function setIdCiudad($idCiudad)
	{
		return $this->_id_ciudad = $idCiudad;
	}

	/**
	* @return array of valid users for this project, indexed by user IDs
	*/
	public function getDepartamentos()
	{		
		$rolesArray = CHtml::listData(Departamento::model()->findAll(), 'id','nombre');
		return $rolesArray;
	}



	/**
	* @return array of valid users for this project, indexed by user IDs
	*/
	public function getBarrios()
	{		
		$rolesArray = CHtml::listData(Departamento::model()->findAll(), 'id','nombre');
		return $rolesArray;
	}

	public function getTypeOptions()
	{
		return array(
			self::TIPO_VENTA=>'VENTA',
			self::TIPO_ALQUILER=>'ALQUILER',
			);
	}
}
