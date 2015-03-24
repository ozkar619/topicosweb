<?php

/**
 * This is the model class for table "evento".
 *
 * The followings are the available columns in table 'evento':
 * @property integer $idevento
 * @property string $logo
 * @property string $convocatoria
 * @property string $descripcion
 * @property string $fecha
 * @property string $lugar
 * @property string $como_llegar
 * @property string $programa_act
 *
 * The followings are the available model relations:
 * @property ParticipantesEvento[] $participantesEventos
 */
class Evento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('logo, convocatoria, descripcion, fecha, lugar, como_llegar, programa_act', 'required'),
			array('logo, convocatoria, programa_act', 'length', 'max'=>30),
			array('lugar', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idevento, logo, convocatoria, descripcion, fecha, lugar, como_llegar, programa_act', 'safe', 'on'=>'search'),
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
			'participantesEventos' => array(self::HAS_MANY, 'ParticipantesEvento', 'idevento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idevento' => 'Idevento',
			'logo' => 'Logo',
			'convocatoria' => 'Convocatoria',
			'descripcion' => 'Descripcion',
			'fecha' => 'Fecha',
			'lugar' => 'Lugar',
			'como_llegar' => 'Como Llegar',
			'programa_act' => 'Programa Act',
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

		$criteria->compare('idevento',$this->idevento);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('convocatoria',$this->convocatoria,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('como_llegar',$this->como_llegar,true);
		$criteria->compare('programa_act',$this->programa_act,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
