<?php
/* @var $this MovieCategoryController */
/* @var $model MovieCategory */

$this->breadcrumbs=array(
	'Movie Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovieCategory', 'url'=>array('index')),
	array('label'=>'Manage MovieCategory', 'url'=>array('admin')),
);
?>

<h1>Create MovieCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>