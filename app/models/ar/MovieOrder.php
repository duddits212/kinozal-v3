<?php

/**
 * This is the model class for table "movie_order".
 *
 * The followings are the available columns in table 'movie_order':
 * @property integer $id
 * @property integer $movie_id
 * @property integer $status
 * @property integer $slmod
 * @property integer $fb_good
 * @property integer $fb_bad
 */
class MovieOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MovieOrder the static model class
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
		return 'movie_order';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('movie_id, status, slmod, fb_good, fb_bad', 'required'),
			array('movie_id, status, slmod, fb_good, fb_bad', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, movie_id, status, slmod, fb_good, fb_bad', 'safe', 'on'=>'search'),
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
			'movie_id' => 'Movie',
			'status' => 'Status',
			'slmod' => 'Slmod',
			'fb_good' => 'Fb Good',
			'fb_bad' => 'Fb Bad',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('movie_id',$this->movie_id);
		$criteria->compare('status',$this->status);
		$criteria->compare('slmod',$this->slmod);
		$criteria->compare('fb_good',$this->fb_good);
		$criteria->compare('fb_bad',$this->fb_bad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}