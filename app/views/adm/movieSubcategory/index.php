<?php
/* @var $this MovieSubcategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Subcategories',
);

$this->menu=array(
	array('label'=>'Create MovieSubcategory', 'url'=>array('create')),
	array('label'=>'Manage MovieSubcategory', 'url'=>array('admin')),
);
?>

<h1>Movie Subcategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
