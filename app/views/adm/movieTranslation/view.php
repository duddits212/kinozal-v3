<?php
/* @var $this MovieTranslationController */
/* @var $model MovieTranslation */

$this->breadcrumbs=array(
	'Movie Translations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MovieTranslation', 'url'=>array('index')),
	array('label'=>'Create MovieTranslation', 'url'=>array('create')),
	array('label'=>'Update MovieTranslation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MovieTranslation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovieTranslation', 'url'=>array('admin')),
);
?>

<h1>View MovieTranslation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'name',
	),
)); ?>
