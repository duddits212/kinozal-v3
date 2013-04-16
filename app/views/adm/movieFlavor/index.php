<?php
/* @var $this MovieFlavorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Flavors',
);

$this->menu=array(
	array('label'=>'Create MovieFlavor', 'url'=>array('create')),
	array('label'=>'Manage MovieFlavor', 'url'=>array('admin')),
);
?>

<h1>Movie Flavors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
