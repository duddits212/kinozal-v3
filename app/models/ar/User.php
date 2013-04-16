<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $salt
 * @property string $email
 * @property string $activationKey
 * @property integer $createtime
 * @property integer $lastvisit
 * @property integer $lastaction
 * @property integer $lastpasswordchange
 * @property integer $failedloginattempts
 * @property integer $superuser
 * @property integer $status
 * @property string $avatar
 * @property string $notifyType
 *
 * The followings are the available model relations:
 * @property Movie[] $movies
 * @property Opinion[] $opinions
 * @property Opinion[] $opinions1
 * @property Opinion[] $opinions2
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, salt', 'required'),
			array('createtime, lastvisit, lastaction, lastpasswordchange, failedloginattempts, superuser, status', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>20),
			array('password, salt, activationKey, email', 'length', 'max'=>128),
			array('avatar', 'length', 'max'=>255),
			array('notifyType', 'length', 'max'=>9),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, salt, activationKey, createtime, lastvisit, lastaction, lastpasswordchange, failedloginattempts, superuser, status, avatar, notifyType', 'safe', 'on'=>'search'),
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
			'movies' => array(self::HAS_MANY, 'Movie', 'poster_uid'),
			'opinions' => array(self::HAS_MANY, 'Opinion', 'blocked_by_uid'),
			'opinions1' => array(self::HAS_MANY, 'Opinion', 'uid'),
			'opinions2' => array(self::HAS_MANY, 'Opinion', 'edited_by_uid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'salt' => 'Salt',
            'email' => 'Email',
			'activationKey' => 'Activation Key',
			'createtime' => 'Createtime',
			'lastvisit' => 'Lastvisit',
			'lastaction' => 'Lastaction',
			'lastpasswordchange' => 'Lastpasswordchange',
			'failedloginattempts' => 'Failedloginattempts',
			'superuser' => 'Superuser',
			'status' => 'Status',
			'avatar' => 'Avatar',
			'notifyType' => 'Notify Type',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('activationKey',$this->activationKey,true);
		$criteria->compare('createtime',$this->createtime);
		$criteria->compare('lastvisit',$this->lastvisit);
		$criteria->compare('lastaction',$this->lastaction);
		$criteria->compare('lastpasswordchange',$this->lastpasswordchange);
		$criteria->compare('failedloginattempts',$this->failedloginattempts);
		$criteria->compare('superuser',$this->superuser);
		$criteria->compare('status',$this->status);
		$criteria->compare('avatar',$this->avatar,true);
		$criteria->compare('notifyType',$this->notifyType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}