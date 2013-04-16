<?php
/* @var $this MovieSubcategoryController */
/* @var $model MovieSubcategory */

$this->breadcrumbs=array(
	'Movie Subcategories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovieSubcategory', 'url'=>array('index')),
	array('label'=>'Manage MovieSubcategory', 'url'=>array('admin')),
);
?>

<h1>Create MovieSubcategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>