<?php

/**
 * This is the model class for table "hotel".
 *
 * The followings are the available columns in table 'hotel':
 * @property integer $idhotel
 * @property string $nama
 * @property string $telp
 * @property string $alamat
 * @property string $detail
 */
class Hotel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'hotel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, telp, alamat, detail', 'required'),
			array('nama', 'length', 'max'=>20),
			array('telp', 'length', 'max'=>12),
			array('alamat', 'length', 'max'=>35),
			array('detail', 'length', 'max'=>400),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idhotel, nama, telp, alamat, detail', 'safe', 'on'=>'search'),
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
			'idhotel' => 'Idhotel',
			'nama' => 'Nama',
			'telp' => 'Telp',
			'alamat' => 'Alamat',
			'detail' => 'Detail',
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

		$criteria->compare('idhotel',$this->idhotel);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('telp',$this->telp,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('detail',$this->detail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hotel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
