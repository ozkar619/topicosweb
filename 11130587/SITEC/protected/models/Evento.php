<?php

/**
 * This is the model class for table "evento".
 *
 * The followings are the available columns in table 'evento':
 * @property integer $id_evento
 * @property string $logo
 * @property string $convocatoria
 * @property string $descripcion
 * @property string $fecha
 * @property string $lugar
 * @property string $como_llegar
 * @property string $programa_actividades
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
			array('logo, convocatoria, descripcion, fecha, lugar, como_llegar, programa_actividades', 'required'),
			array('logo','file', 'types'=>'jpg,gif,png'),
			array('convocatoria','file', 'types'=>'pdf'),
			array('programa_actividades','file', 'types'=>'pdf'),
			array('logo, convocatoria, como_llegar, programa_actividades', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_evento, logo, convocatoria, descripcion, fecha, lugar, como_llegar, programa_actividades', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_evento' => 'Id Evento',
			'logo' => 'Logo',
			'convocatoria' => 'Convocatoria',
			'descripcion' => 'Descripcion',
			'fecha' => 'Fecha',
			'lugar' => 'Lugar',
			'como_llegar' => 'Como Llegar',
			'programa_actividades' => 'Programa Actividades',
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

		$criteria->compare('id_evento',$this->id_evento);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('convocatoria',$this->convocatoria,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('como_llegar',$this->como_llegar,true);
		$criteria->compare('programa_actividades',$this->programa_actividades,true);

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
