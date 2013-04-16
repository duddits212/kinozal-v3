<?php
/* @var $this MovieSubcategoryController */
/* @var $model MovieSubcategory */

$this->breadcrumbs=array(
	'Movie Subcategories'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MovieSubcategory', 'url'=>array('index')),
	array('label'=>'Create MovieSubcategory', 'url'=>array('create')),
	array('label'=>'Update MovieSubcategory', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MovieSubcategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovieSubcategory', 'url'=>array('admin')),
);
?>

<h1>View MovieSubcategory #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id',
		'name',
		'description',
	),
)); ?>
