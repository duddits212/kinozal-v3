<?php

/**
 * This is the model class for table "persons".
 *
 * The followings are the available columns in table 'persons':
 * @property string $id
 * @property string $surname
 * @property string $name
 * @property string $name2
 * @property string $surname_orig
 * @property string $name_orig
 * @property string $name2_orig
 * @property string $description
 * @property string $lastparse
 */
class Persons extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Persons the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lastparse', 'required'),
			array('surname, name, name2, surname_orig, name_orig, name2_orig', 'length', 'max'=>30),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, surname, name, name2, surname_orig, name_orig, name2_orig, description, lastparse', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'surname' => 'Surname',
			'name' => 'Name',
			'name2' => 'Name2',
			'surname_orig' => 'Surname Orig',
			'name_orig' => 'Name Orig',
			'name2_orig' => 'Name2 Orig',
			'description' => 'Description',
			'lastparse' => 'Lastparse',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('name2',$this->name2,true);
		$criteria->compare('surname_orig',$this->surname_orig,true);
		$criteria->compare('name_orig',$this->name_orig,true);
		$criteria->compare('name2_orig',$this->name2_orig,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('lastparse',$this->lastparse,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}