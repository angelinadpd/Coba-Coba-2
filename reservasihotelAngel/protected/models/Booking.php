<?php

/**
 * This is the model class for table "booking".
 *
 * The followings are the available columns in table 'booking':
 * @property integer $idbooking
 * @property string $tanggal
 * @property string $jam
 * @property integer $idkamar
 * @property integer $lama
 * @property double $harga
 * @property double $totalbayar
 * @property integer $idhotel
 */
class Booking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'booking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idbooking, tanggal, jam, idkamar, lama, harga, totalbayar, idhotel', 'required'),
			array('idbooking, idkamar, lama, idhotel', 'numerical', 'integerOnly'=>true),
			array('harga, totalbayar', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idbooking, tanggal, jam, idkamar, lama, harga, totalbayar, idhotel', 'safe', 'on'=>'search'),
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
			'idbooking' => 'Idbooking',
			'tanggal' => 'Tanggal',
			'jam' => 'Jam',
			'idkamar' => 'Idkamar',
			'lama' => 'Lama',
			'harga' => 'Harga',
			'totalbayar' => 'Totalbayar',
			'idhotel' => 'Idhotel',
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

		$criteria->compare('idbooking',$this->idbooking);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('jam',$this->jam,true);
		$criteria->compare('idkamar',$this->idkamar);
		$criteria->compare('lama',$this->lama);
		$criteria->compare('harga',$this->harga);
		$criteria->compare('totalbayar',$this->totalbayar);
		$criteria->compare('idhotel',$this->idhotel);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
