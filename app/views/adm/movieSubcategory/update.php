<?php
/* @var $this MovieSubcategoryController */
/* @var $model MovieSubcategory */

$this->breadcrumbs=array(
	'Movie Subcategories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovieSubcategory', 'url'=>array('index')),
	array('label'=>'Create MovieSubcategory', 'url'=>array('create')),
	array('label'=>'View MovieSubcategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovieSubcategory', 'url'=>array('admin')),
);
?>

<h1>Update MovieSubcategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>