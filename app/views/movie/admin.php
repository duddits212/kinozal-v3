<?php
/* @var $this MovieController */
/* @var $model Movie */

$this->breadcrumbs=array(
	'Movies'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Movie', 'url'=>array('index')),
	array('label'=>'Create Movie', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#movie-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Movies</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'movie-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'caption',
		'orig_caption',
		'short_desc',
		'description',
		'produce_date',
		/*
		'post_date',
		'poster_uid',
		'prop',
		'length',
		'company',
		'translation',
		'mpaa',
		'top',
		'bestseller',
		'waiting',
		'view_cnt',
		'ufb_cnt',
		'ufb_avg',
		'imdb_rating',
		'imdb_id',
		'kinopoisk_rating',
		'kinopoisk_id',
		'approved',
		'mod_date',
		'app_date',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
