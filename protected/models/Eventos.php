<?php

/**
 * This is the model class for table "eventos".
 *
 * The followings are the available columns in table 'eventos':
 * @property integer $id
 * @property integer $id_cliente
 * @property integer $id_agente
 * @property integer $id_inmueble
 * @property string $titulo
 * @property string $fecha_hora_desde
 * @property string $fecha_hora_hasta
 *
 * The followings are the available model relations:
 * @property Inmuebles $idInmueble
 * @property Usuarios $idAgente
 * @property Usuarios $idCliente
 */
class Eventos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eventos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_cliente, id_agente, id_inmueble', 'required'),
			array('id_cliente, id_agente, id_inmueble', 'numerical', 'integerOnly'=>true),
			array('titulo', 'length', 'max'=>50),
			array('fecha_hora_desde, fecha_hora_hasta', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_cliente, id_agente, id_inmueble, titulo, fecha_hora_desde, fecha_hora_hasta', 'safe', 'on'=>'search'),
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
			'idInmueble' => array(self::BELONGS_TO, 'Inmuebles', 'id_inmueble'),
			'idAgente' => array(self::BELONGS_TO, 'Usuarios', 'id_agente'),
			'idCliente' => array(self::BELONGS_TO, 'Usuarios', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_cliente' => 'Id Cliente',
			'id_agente' => 'Id Agente',
			'id_inmueble' => 'Id Inmueble',
			'titulo' => 'Titulo',
			'fecha_hora_desde' => 'Fecha Hora Desde',
			'fecha_hora_hasta' => 'Fecha Hora Hasta',
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
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_agente',$this->id_agente);
		$criteria->compare('id_inmueble',$this->id_inmueble);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('fecha_hora_desde',$this->fecha_hora_desde,true);
		$criteria->compare('fecha_hora_hasta',$this->fecha_hora_hasta,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Eventos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
