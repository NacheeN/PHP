<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nombre
 * @property string $apellido
 * @property string $ci
 * @property string $telefono
 * @property string $email
 * @property string $nick
 * @property string $pass
 * @property integer $id_rol
 *
 * The followings are the available model relations:
 * @property Eventos[] $eventoses
 * @property Eventos[] $eventoses1
 * @property Inmuebles[] $inmuebles
 * @property Operacion[] $operacions
 * @property Solicitudes[] $solicitudes
 */
class Usuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ci, id_rol', 'required'),
			array('id_rol', 'numerical', 'integerOnly'=>true),
			array('nombre, ci', 'length', 'max'=>10),
			array('apellido, nick', 'length', 'max'=>15),
			array('telefono', 'length', 'max'=>20),
			array('email', 'length', 'max'=>25),
			array('pass', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, apellido, ci, telefono, email, nick, pass, id_rol', 'safe', 'on'=>'search'),
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
			'eventoses' => array(self::HAS_MANY, 'Eventos', 'id_agente'),
			'eventoses1' => array(self::HAS_MANY, 'Eventos', 'id_cliente'),
			'inmuebles' => array(self::HAS_MANY, 'Inmuebles', 'id_usuario'),
			'operacions' => array(self::HAS_MANY, 'Operacion', 'id_usuario'),
			'solicitudes' => array(self::HAS_MANY, 'Solicitudes', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'ci' => 'Ci',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'nick' => 'Nick',
			'pass' => 'Pass',
			'id_rol' => 'Id Rol',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('ci',$this->ci,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('id_rol',$this->id_rol);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
