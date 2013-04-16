<?php

/**
 * This is the model class for table "opinion".
 *
 * The followings are the available columns in table 'opinion':
 * @property string $id
 * @property string $mid
 * @property string $uid
 * @property string $tstamp
 * @property string $message
 * @property integer $blocked
 * @property string $blocked_by_uid
 * @property string $block_tstamp
 * @property integer $edited_cnt
 * @property string $edited_by_uid
 * @property string $edit_tstamp
 * @property integer $ip
 *
 * The followings are the available model relations:
 * @property User $blockedByU
 * @property Movie $m
 * @property User $u
 * @property User $editedByU
 */
class Opinion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opinion the static model class
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
		return 'opinion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('edited_cnt, ip', 'required'),
			array('blocked, edited_cnt, ip', 'numerical', 'integerOnly'=>true),
			array('mid, uid, blocked_by_uid, edited_by_uid', 'length', 'max'=>20),
			array('tstamp, message, block_tstamp, edit_tstamp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mid, uid, tstamp, message, blocked, blocked_by_uid, block_tstamp, edited_cnt, edited_by_uid, edit_tstamp, ip', 'safe', 'on'=>'search'),
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
			'blockedByU' => array(self::BELONGS_TO, 'User', 'blocked_by_uid'),
			'm' => array(self::BELONGS_TO, 'Movie', 'mid'),
			'u' => array(self::BELONGS_TO, 'User', 'uid'),
			'editedByU' => array(self::BELONGS_TO, 'User', 'edited_by_uid'),
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
			'uid' => 'Uid',
			'tstamp' => 'Tstamp',
			'message' => 'Message',
			'blocked' => 'Blocked',
			'blocked_by_uid' => 'Blocked By Uid',
			'block_tstamp' => 'Block Tstamp',
			'edited_cnt' => 'Edited Cnt',
			'edited_by_uid' => 'Edited By Uid',
			'edit_tstamp' => 'Edit Tstamp',
			'ip' => 'Ip',
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
		$criteria->compare('uid',$this->uid,true);
		$criteria->compare('tstamp',$this->tstamp,true);
		$criteria->compare('message',$this->message,true);
		$criteria->compare('blocked',$this->blocked);
		$criteria->compare('blocked_by_uid',$this->blocked_by_uid,true);
		$criteria->compare('block_tstamp',$this->block_tstamp,true);
		$criteria->compare('edited_cnt',$this->edited_cnt);
		$criteria->compare('edited_by_uid',$this->edited_by_uid,true);
		$criteria->compare('edit_tstamp',$this->edit_tstamp,true);
		$criteria->compare('ip',$this->ip);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function findLastOpinions($limit=10)
    {
        return $this->with('m')->findAll(array(
            'condition'=>'t.blocked=0',
            'order'=>'t.tstamp DESC',
            'limit'=>$limit,
        ));
/*
        $criteria=new CDbCriteria;
        $sort=new CSort('Opinion');
        $sort->defaultOrder = 'tstamp DESC';
        $sort->applyOrder($criteria);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>$sort,
            'pagination'=>array('pageSize'=>10,'pageVar'=>'page'),
        ));
*/
    }

    public function getAuthorLink() {
        return CHtml::link(CHtml::encode($this->u->username), array('profile/profile/view', 'id'=>$this->u->id));
    }

	public function getMovieLink() {
		return CHtml::link(CHtml::encode($this->m->caption), array('movie/view', 'id'=>$this->m->id));
	}
}
