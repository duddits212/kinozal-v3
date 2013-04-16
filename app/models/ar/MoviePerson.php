<?php

/**
 * This is the model class for table "movie_person".
 *
 * The followings are the available columns in table 'movie_person':
 * @property string $id
 * @property string $mid
 * @property string $pid
 * @property string $ptype_id
 * @property integer $order
 *
 * The followings are the available model relations:
 * @property PersonRole $ptype
 * @property Movie $m
 * @property Person $p
 */
class MoviePerson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MoviePerson the static model class
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
		return 'movie_person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mid, pid, ptype_id, order', 'required'),
			array('order', 'numerical', 'integerOnly'=>true),
			array('mid, pid, ptype_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mid, pid, ptype_id, order', 'safe', 'on'=>'search'),
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
			'ptype' => array(self::BELONGS_TO, 'PersonRole', 'ptype_id'),
			'm' => array(self::BELONGS_TO, 'Movie', 'mid'),
			'p' => array(self::BELONGS_TO, 'Person', 'pid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mid' => 'Mid',
			'pid' => 'Pid',
			'ptype_id' => 'Ptype',
			'order' => 'Order',
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
		$criteria->compare('mid',$this->mid,true);
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('ptype_id',$this->ptype_id,true);
		$criteria->compare('order',$this->order);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}