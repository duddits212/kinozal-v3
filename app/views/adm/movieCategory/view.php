<?php
/* @var $this MovieCategoryController */
/* @var $model MovieCategory */

$this->breadcrumbs=array(
	'Movie Categories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MovieCategory', 'url'=>array('index')),
	array('label'=>'Create MovieCategory', 'url'=>array('create')),
	array('label'=>'Update MovieCategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MovieCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovieCategory', 'url'=>array('admin')),
);
?>

<h1>View MovieCategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'name',
		'description',
	),
)); ?>
