<?php

/**
 * This is the model class for table "movie_flavor_lnk_category".
 *
 * The followings are the available columns in table 'movie_flavor_lnk_category':
 * @property string $id
 * @property string $f_id
 * @property string $genre_id
 * @property string $rubric_id
 *
 * The followings are the available model relations:
 * @property MovieRubricName $rubric
 * @property MovieFlavor $f
 * @property MovieGenreName $genre
 */
class MovieFlavorLnkCategory extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MovieFlavorLnkCategory the static model class
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
		return 'movie_flavor_lnk_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('f_id', 'required'),
			array('f_id, genre_id, rubric_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, f_id, genre_id, rubric_id', 'safe', 'on'=>'search'),
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
			'rubric' => array(self::BELONGS_TO, 'MovieRubricName', 'rubric_id'),
			'f' => array(self::BELONGS_TO, 'MovieFlavor', 'f_id'),
			'genre' => array(self::BELONGS_TO, 'MovieGenreName', 'genre_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'f_id' => 'F',
			'genre_id' => 'Genre',
			'rubric_id' => 'Rubric',
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
		$criteria->compare('f_id',$this->f_id,true);
		$criteria->compare('genre_id',$this->genre_id,true);
		$criteria->compare('rubric_id',$this->rubric_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}