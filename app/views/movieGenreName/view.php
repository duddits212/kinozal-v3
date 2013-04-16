<?php
/* @var $this MovieGenreNameController */
/* @var $model MovieGenreName */

$this->breadcrumbs=array(
	'Movie Genre Names'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MovieGenreName', 'url'=>array('index')),
	array('label'=>'Create MovieGenreName', 'url'=>array('create')),
	array('label'=>'Update MovieGenreName', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MovieGenreName', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovieGenreName', 'url'=>array('admin')),
);
?>

<h1>View MovieGenreName #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
