<?php

/**
 * This is the model class for table "imagenes".
 *
 * The followings are the available columns in table 'imagenes':
 * @property integer $id
 * @property integer $id_inmueble
 * @property string $nombre
 * @property string $ruta
 * @property integer $destacada
 *
 * The followings are the available model relations:
 * @property Inmuebles $idInmueble
 */
class Imagenes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'imagenes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_inmueble', 'required'),
			array('id_inmueble, destacada', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>20),
			array('ruta', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_inmueble, nombre, ruta, destacada', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_inmueble' => 'Id Inmueble',
			'nombre' => 'Nombre',
			'ruta' => 'Ruta',
			'destacada' => 'Destacada',
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
		$criteria->compare('id_inmueble',$this->id_inmueble);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('destacada',$this->destacada);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Imagenes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
