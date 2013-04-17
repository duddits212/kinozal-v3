<?php

/**
 * This is the model class for table "movie".
 *
 * The followings are the available columns in table 'movie':
 * @property string $id
 * @property string $caption
 * @property string $orig_caption
 * @property string $short_desc
 * @property string $description
 * @property string $produce_date
 * @property string $post_date
 * @property string $poster_uid
 * @property string $prop
 * @property integer $length
 * @property string $company
 * @property string $translation
 * @property string $mpaa
 * @property string $top
 * @property string $bestseller
 * @property string $waiting
 * @property string $view_cnt
 * @property string $ufb_cnt
 * @property integer $ufb_avg
 * @property integer $imdb_rating
 * @property integer $imdb_id
 * @property integer $kinopoisk_rating
 * @property integer $kinopoisk_id
 * @property integer $approved
 * @property string $mod_date
 * @property string $app_date
 *
 * The followings are the available model relations:
 * @property Files[] $files
 * @property Mpaa $mpaa0
 * @property User $posterU
 * @property MovieTranslation $translation0
 * @property MovieCountry[] $movieCountries
 * @property MovieFrame[] $movieFrames
 * @property MovieGenre[] $movieGenres
 * @property MoviePerson[] $moviePeople
 * @property MoviePoster[] $moviePosters
 * @property MovieRubric[] $movieRubrics
 * @property Opinion[] $opinions
 */
class Movie extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Movie the static model class
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
		return 'movie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('top, bestseller, waiting, view_cnt, ufb_cnt, ufb_avg, imdb_rating, mod_date, app_date', 'required'),
			array('length, ufb_avg, imdb_rating, imdb_id, kinopoisk_rating, kinopoisk_id, approved', 'numerical', 'integerOnly'=>true),
			array('caption, orig_caption, company', 'length', 'max'=>200),
			array('short_desc', 'length', 'max'=>240),
			array('poster_uid, prop, view_cnt, ufb_cnt', 'length', 'max'=>20),
			array('translation, mpaa', 'length', 'max'=>11),
			array('top, bestseller, waiting', 'length', 'max'=>1),
			array('description, produce_date, post_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, caption, orig_caption, short_desc, description, produce_date, post_date, poster_uid, prop, length, company, translation, mpaa, top, bestseller, waiting, view_cnt, ufb_cnt, ufb_avg, imdb_rating, imdb_id, kinopoisk_rating, kinopoisk_id, approved, mod_date, app_date', 'safe', 'on'=>'search'),
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
			'files' => array(self::HAS_MANY, 'Files', 'movie_id'),
            'filesCount' => array(self::STAT, 'Files', 'movie_id'),
			'mpaa0' => array(self::BELONGS_TO, 'Mpaa', 'mpaa'),
			'posterU' => array(self::BELONGS_TO, 'User', 'poster_uid'),
			'translation0' => array(self::BELONGS_TO, 'MovieTranslation', 'translation'),
            'movieCountries' => array(self::HAS_MANY, 'MovieCountry', 'mid'),
			'movieFrames' => array(self::HAS_MANY, 'MovieFrame', 'mid'),
            'movieFramesCount' => array(self::STAT, 'MovieFrame', 'mid'),
			'movieGenres' => array(self::HAS_MANY, 'MovieGenre', 'mid'),
			'moviePeople' => array(self::HAS_MANY, 'MoviePerson', 'mid'),
            'moviePeopleCount' => array(self::STAT,  'MoviePerson', 'mid'),
			'moviePosters' => array(self::HAS_MANY, 'MoviePoster', 'mid'),
            'moviePostersCount' => array(self::STAT, 'MoviePoster', 'mid'),
			'movieRubrics' => array(self::HAS_MANY, 'MovieRubric', 'mid'),
			'opinions' => array(self::HAS_MANY, 'Opinion', 'mid', 'order'=>'opinion.tstamp DESC'),
            'opinionsCount' => array(self::STAT, 'Opinion', 'mid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
            'caption' => 'Название','Caption',
            'orig_caption' => 'Оригинальное название','Orig Caption',
            'short_desc' => 'Коротко','Short Desc',
            'description' => 'О фильме','Description',
            'produce_date' => 'Производство','Produce Date',
            'post_date' => 'Добавлен','Post Date',
            'poster_uid' => 'Добавил','Poster Uid',
            'prop' => 'Prop',
            'length' => 'Длительность','Length',
            'company' => 'Компания','Company',
            'translation' => 'Перевод','Translation',
            'mpaa' => 'MPAA','Mpaa',
            'top' => 'Топ','Top',
            'bestseller' => 'Бестселлер','Bestseller',
            'waiting' => 'Ожидается','Waiting',
            'view_cnt' => 'Просмотров','View Cnt',
            'ufb_cnt' => 'Количество голосов','Ufb Cnt',
            'ufb_avg' => 'Оценка фильма','Ufb Avg',
            'imdb_rating' => 'Рейтинг IMDB','Imdb Rating',
            'imdb_id' => 'IMDB ID','Imdb',
            'kinopoisk_rating' => 'Рейтинг Kinopoisk','Kinopoisk Rating',
            'kinopoisk_id' => 'Kinopoisk ID','Kinopoisk',
            'approved' => 'Одобрено','Approved',
            'mod_date' => 'Mod Date',
            'app_date' => 'Дата одобрения','App Date',
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
		$criteria->compare('caption',$this->caption,true);
		$criteria->compare('orig_caption',$this->orig_caption,true);
		$criteria->compare('short_desc',$this->short_desc,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('produce_date',$this->produce_date,true);
		$criteria->compare('post_date',$this->post_date,true);
		$criteria->compare('poster_uid',$this->poster_uid,true);
		$criteria->compare('prop',$this->prop,true);
		$criteria->compare('length',$this->length);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('translation',$this->translation,true);
		$criteria->compare('mpaa',$this->mpaa,true);
		$criteria->compare('top',$this->top,true);
		$criteria->compare('bestseller',$this->bestseller,true);
		$criteria->compare('waiting',$this->waiting,true);
		$criteria->compare('view_cnt',$this->view_cnt,true);
		$criteria->compare('ufb_cnt',$this->ufb_cnt,true);
		$criteria->compare('ufb_avg',$this->ufb_avg);
		$criteria->compare('imdb_rating',$this->imdb_rating);
		$criteria->compare('imdb_id',$this->imdb_id);
		$criteria->compare('kinopoisk_rating',$this->kinopoisk_rating);
		$criteria->compare('kinopoisk_id',$this->kinopoisk_id);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('mod_date',$this->mod_date,true);
		$criteria->compare('app_date',$this->app_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function index() {
        $criteria = new CDbCriteria;
        $sort = new CSort('Movie');
        $sort->attributes = array('caption','orig_caption','post_date','imdb_rating');
        $sort->defaultOrder = 'post_date DESC';
        $sort->applyOrder($criteria);

        $dataProvider=new CActiveDataProvider('Movie', array(
            'criteria'=>$criteria,
            'sort'=>$sort,
            'pagination'=>array('pageSize'=>10,'pageVar'=>'page'),
        ));

        return $dataProvider;
    }

    public function searchByFlavor($flavor=1)
    {

        if (Yii::app()->user->getState('fltRubric'))
            return $this->filterByRubric(unserialize(Yii::app()->user->getState('fltRubric')));

        $criteria=new CDbCriteria;
        $sort = new CSort('Movie');
        $sort->attributes = array('caption','orig_caption','post_date','imdb_rating');
        $sort->defaultOrder = 'post_date DESC';
        $sort->applyOrder($criteria);

        $where_string='';

        $categories = MovieFlavorLnkCategory::model()->findAll('f_id=:fid', array(':fid'=>$flavor));
        foreach ($categories as $cat) {
            if($where_string == '') {
                if($cat->attributes['rubric_id']) {
                    $where_string .= 'rid=' . $cat->attributes['rubric_id'] . ' ';
                }
            } else {
                if($cat->attributes['rubric_id']) {
                    $where_string .= 'or rid=' . $cat->attributes['rubric_id'] . ' ';
                }
            }
        }

        $criteria->with = array('movieRubrics');
        $criteria->together = true;
        $criteria->condition = $where_string;
        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>$sort,
            'pagination'=>array('pageSize'=>10,'pageVar'=>'page'),
        ));
    }

    private function applyFilters() {

        $rubric = unserialize(Yii::app()->user->getState('fltRubric'));
        $rubric = $rubric ? $rubric : array();
        $genre = unserialize(Yii::app()->user->getState('fltGenre'));
        $genre = $genre ? $genre : array();
        $country = unserialize(Yii::app()->user->getState('fltCountry'));
        $country = $country ? $country : array();

        $criteria = new CDbCriteria;
        $sort = new CSort('Movie');
        $sort->attributes = array('caption','orig_caption','post_date','imdb_rating');
        $sort->defaultOrder = 'post_date DESC';
        $sort->applyOrder($criteria);
        $together = array();
        $where_string='';

        if (count($rubric)>0)
            array_push($together, 'movieRubrics');
        for ($i=0; $i<count($rubric); $i++) {
            if ($where_string == '') {
                $where_string = 'rid=' . $rubric[$i] . ' ';
            } else {
                $where_string .= 'or rid=' . $rubric[$i] . ' ';
            }
        }

        if (count($genre)>0)
            array_push($together, 'movieGenres');
        for ($i=0; $i<count($genre); $i++) {
            if ($where_string == '') {
                $where_string = 'rid=' . $genre[$i] . ' ';
            } else {
                $where_string .= 'or rid=' . $genre[$i] . ' ';
            }
        }

        if (count($country)>0)
            array_push($together, 'movieCountries');
        for ($i=0; $i<count($country); $i++) {
            if ($where_string == '') {
                $where_string = 'rid=' . $country[$i] . ' ';
            } else {
                $where_string .= 'or rid=' . $country[$i] . ' ';
            }
        }



        $criteria->with = $together;
        $criteria->together = true;
        $criteria->condition = $where_string;

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>$sort,
            'pagination'=>array('pageSize'=>10,'pageVar'=>'page'),
        ));
    }

    public function filterByRubric(array $rubric = array()) {
        Yii::app()->user->setState('fltRubric', serialize($rubric));
        return $this->applyFilters();
    }

    public function filterByGenre(array $genre = array()) {
        Yii::app()->user->setState('fltGenre', serialize($genre));
        return $this->applyFilters();
    }

    public function filterByCountry(array $country = array()) {
        Yii::app()->user->setState('fltCountry', serialize($country));
        return $this->applyFilters();
    }
}