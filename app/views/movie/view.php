<?php
/* @var $this MovieController */
/* @var $model Movie */

/*
$this->breadcrumbs=array(
	'Movies'=>array('index'),
	$model->id,
);
*/

if (user()->hasRole('Admin-zone')) {
    $this->menu=array(
        array('label'=>'List Movie', 'url'=>array('index')),
        array('label'=>'Create Movie', 'url'=>array('create')),
        array('label'=>'Update Movie', 'url'=>array('update', 'id'=>$model->id)),
        array('label'=>'Delete Movie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
        array('label'=>'Manage Movie', 'url'=>array('admin')),
    );
}

// show poster
echo CHtml::image('/video/images/film/c' . $model->id . '_1.jpg', 'Poster', array('width'=>'200'));
//CHtml::image('/images/film/c' . $model->id . '_1.jpg');

$this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'itemCssClass'=>array(
        'caption',
        'orig_caption',
        'description',
        'produce_date',
        'post_date',
        'poster_uid',
        'prop',
        'length',
//        'company',
        'translation',
        'mpaa',
    //        'top',
    //        'bestseller',
    //        'waiting',
        'view_cnt',
    //        'ufb_cnt',
    //        'ufb_avg',
        'imdb_rating',
    //        'kinopoisk_rating',
    //        'approved',
    ),
    'cssFile'=>'false',
	'tagName'=>null,
	'itemTemplate'=>'<div class="{class}"><div class="label">{label}</div><div class="value">{value}</div></div>',
    'attributes'=>array(
    //		'id',
        'caption',
        'orig_caption',
    //		'short_desc',
        'description',
        array('label'=>'Производство:', 'value'=> substr($model->produce_date,0,4)),
        'post_date',
        array('label'=>'Добавил', 'value'=>$model->posterU->username),
        'prop',
        'length',
//        array('label'=>'Компания', 'value'=>$model->'company' ? ),
        isset($model->translation0) ? array('label'=>'Перевод', 'value'=>$model->translation0->name) : array('label'=>'', 'value'=>''),
        isset($model->mpaa0) ? array('label'=>'MPAA', 'value'=>$model->mpaa0->name) : array('label'=>'', 'value'=>''),
//        array('label'=>'MPAA', 'value'=>$model->mpaa0->name),
    //		array('label'=>'', 'value'=>$model->top ? '<div class="movie_in_top"></div>' : ''),
    //		array('label'=>'', 'value'=>$model->bestseller ? '<div class="movie_is_bestseller"></div>' : ''),
    //		'waiting',
        'view_cnt',
    //		'ufb_cnt',
    //		'ufb_avg',
        array('label'=>'IMDB', 'value'=>$model->imdb_rating/10),
    //		'imdb_id',
    //		array('label'=>'Рейтиниг кинопоиска', 'value'=>$model->kinopoisk_rating ? ,
    //		'kinopoisk_id',
    //		'approved',
    //		'mod_date',
    //		'app_date',
    ),
));
?>
<div class='genres'><div class='label'>Жанр</div><div class='list'>
<?php $i=1;
foreach ($model->movieGenres as $genre) {
    echo $i ? '' : ' / ';
    echo $genre->g->name;
    $i=0;
}
?></div></div><div class='rubrics'><div class='label'>Рубрика</div><div class='list'>
<?php $i=1;
foreach ($model->movieRubrics as $rubric) {
    echo $i ? '' : ' / ';
    echo $rubric->r->name;
    $i=0;
}?></div></div>
<?php

if (defined($model->company)) {
	echo '<div class="company">' . $model->company . '</div>';
}
if (defined($model->kinopoisk_rating)) {
    echo '<div class="kinopoisk_rating">' . $model->kinopoisk_rating . '</div>';
}
if ($model->top == 1) {
    echo '<div class="movie_in_top"></div>';
}
if ($model->bestseller == 1) {
    echo '<div class="movie_is_bestseller"></div>';
}
if ($model->waiting == 1) {
    echo '<div class="movie_waiting"></div>';
}

// Добавить вывод ссылок на фильм -- отдельный портлет

// Добавить актеров -- отдельный портлет

// FIXME: Вывод комментариев, их редактирование, модерацию сделать отдельным портлетом

echo '<hr />';
$this->widget('comments.widgets.ECommentsListWidget', array(
    'model' => $model,
));

echo '<hr />';

/*
if ($model->opinionsCount>0) {
	$criteria = new CDbCriteria();
	$criteria->condition = 'mid = :mid';
	$criteria->params = array(':mid'=>$model->id);
	$sort = new CSort();
	$sort->defaultOrder = 'tstamp DESC';
	$dataProvider = new CActiveDataProvider(Opinion::model()->find(),
		array(
			'criteria'=>$criteria,
			'sort'=>$sort,
			'pagination'=>array(
				'pageSize'=>5,
			),
		)
	);

	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'//opinion/view0',
		'itemsCssClass'=>'comments',
	));

}
*/