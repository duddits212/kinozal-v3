<?php
/* @var $this MovieRubricNameController */
/* @var $model MovieRubricName */

$this->breadcrumbs=array(
	'Movie Rubric Names'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MovieRubricName', 'url'=>array('index')),
	array('label'=>'Create MovieRubricName', 'url'=>array('create')),
	array('label'=>'Update MovieRubricName', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MovieRubricName', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovieRubricName', 'url'=>array('admin')),
);
?>

<h1>View MovieRubricName #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
	),
)); ?>
