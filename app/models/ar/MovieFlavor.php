<?php

/**
 * This is the model class for table "movie_flavor".
 *
 * The followings are the available columns in table 'movie_flavor':
 * @property string $id
 * @property string $name
 * @property string $label
 * @property integer $order
 * @property integer $adult
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property MovieFlavorLnkCategory[] $movieFlavorLnkCategories
 */
class MovieFlavor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MovieFlavor the static model class
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
		return 'movie_flavor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, label, comment', 'required'),
			array('order, adult', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>60),
			array('label', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, label, order, adult, comment', 'safe', 'on'=>'search'),
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
			'movieFlavorLnkCategories' => array(self::HAS_MANY, 'MovieFlavorLnkCategory', 'f_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'label' => 'Label',
			'order' => 'Order',
			'adult' => 'Adult',
			'comment' => 'Comment',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('adult',$this->adult);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function menu() {
        $criteria = new CDbCriteria(array('order'=>'order'));

        $flavors=MovieFlavor::model()->findAll(array('condition'=>'active=1', 'order'=>'`order`'));
        $row='';
        $i=0;
        foreach ($flavors as $flavor) {
//            $row[]=$flavor->attributes;
            $row[$i]['label']=$flavor->attributes['label'];
            $row[$i]['url']=array('/movie/flavor&id=' . $flavor->attributes['id'] );
            $i++;
        }
        return $row;
    }
}