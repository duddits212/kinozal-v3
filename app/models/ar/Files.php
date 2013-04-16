<?php

/**
 * This is the model class for table "files".
 *
 * The followings are the available columns in table 'files':
 * @property string $id
 * @property string $movie_id
 * @property string $REALWAY
 * @property string $WAY
 * @property string $NAME
 * @property string $SIZE
 * @property string $DESC
 * @property string $type
 * @property integer $DOWNLOAD_CNT
 * @property integer $converting
 * @property string $order
 *
 * The followings are the available model relations:
 * @property FileType $type0
 * @property Movie $movie
 */
class Files extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Files the static model class
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
		return 'files';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('movie_id, REALWAY, WAY, NAME, SIZE, DESC, type, DOWNLOAD_CNT, order', 'required'),
			array('DOWNLOAD_CNT, converting', 'numerical', 'integerOnly'=>true),
			array('movie_id, SIZE, type', 'length', 'max'=>20),
			array('REALWAY', 'length', 'max'=>1000),
			array('WAY', 'length', 'max'=>500),
			array('NAME', 'length', 'max'=>100),
			array('DESC', 'length', 'max'=>300),
			array('order', 'length', 'max'=>11),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, movie_id, REALWAY, WAY, NAME, SIZE, DESC, type, DOWNLOAD_CNT, converting, order', 'safe', 'on'=>'search'),
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
			'type0' => array(self::BELONGS_TO, 'FileType', 'type'),
			'movie' => array(self::BELONGS_TO, 'Movie', 'movie_id'),
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
			'REALWAY' => 'Realway',
			'WAY' => 'Way',
			'NAME' => 'Name',
			'SIZE' => 'Size',
			'DESC' => 'Desc',
			'type' => 'Type',
			'DOWNLOAD_CNT' => 'Download Cnt',
			'converting' => 'Converting',
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
		$criteria->compare('movie_id',$this->movie_id,true);
		$criteria->compare('REALWAY',$this->REALWAY,true);
		$criteria->compare('WAY',$this->WAY,true);
		$criteria->compare('NAME',$this->NAME,true);
		$criteria->compare('SIZE',$this->SIZE,true);
		$criteria->compare('DESC',$this->DESC,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('DOWNLOAD_CNT',$this->DOWNLOAD_CNT);
		$criteria->compare('converting',$this->converting);
		$criteria->compare('order',$this->order,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}