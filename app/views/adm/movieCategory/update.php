<?php
/* @var $this MovieCategoryController */
/* @var $model MovieCategory */

$this->breadcrumbs=array(
	'Movie Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovieCategory', 'url'=>array('index')),
	array('label'=>'Create MovieCategory', 'url'=>array('create')),
	array('label'=>'View MovieCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovieCategory', 'url'=>array('admin')),
);
?>

<h1>Update MovieCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>