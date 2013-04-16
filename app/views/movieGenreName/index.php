<?php
/* @var $this MovieGenreNameController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Genre Names',
);

$this->menu=array(
	array('label'=>'Create MovieGenreName', 'url'=>array('create')),
	array('label'=>'Manage MovieGenreName', 'url'=>array('admin')),
);
?>

<h1>Movie Genre Names</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
