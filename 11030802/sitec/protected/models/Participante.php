<?php

/**
 * This is the model class for table "participante".
 *
 * The followings are the available columns in table 'participante':
 * @property integer $idparticipante
 * @property integer $idtipo
 * @property string $nombre
 * @property string $email
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property TipoParticipante $idtipo0
 * @property ParticipantesEvento[] $participantesEventos
 */
class Participante extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idtipo, nombre, email, telefono', 'required'),
			array('idtipo', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('email', 'length', 'max'=>40),
			array('telefono', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idparticipante, idtipo, nombre, email, telefono', 'safe', 'on'=>'search'),
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
			'idtipo0' => array(self::BELONGS_TO, 'TipoParticipante', 'idtipo'),
			'participantesEventos' => array(self::HAS_MANY, 'ParticipantesEvento', 'idparticipante'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idparticipante' => 'Idparticipante',
			'idtipo' => 'Idtipo',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'telefono' => 'Telefono',
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

		$criteria->compare('idparticipante',$this->idparticipante);
		$criteria->compare('idtipo',$this->idtipo);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
