<?php
/* @var $this MovieCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Categories',
);

$this->menu=array(
	array('label'=>'Create MovieCategory', 'url'=>array('create')),
	array('label'=>'Manage MovieCategory', 'url'=>array('admin')),
);
?>

<h1>Movie Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
