<?php
/* @var $this MovieRubricNameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Rubric Names',
);

$this->menu=array(
	array('label'=>'Create MovieRubricName', 'url'=>array('create')),
	array('label'=>'Manage MovieRubricName', 'url'=>array('admin')),
);
?>

<h1>Movie Rubric Names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
