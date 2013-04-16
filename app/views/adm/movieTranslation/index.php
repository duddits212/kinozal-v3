<?php
/* @var $this MovieTranslationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Movie Translations',
);

$this->menu=array(
	array('label'=>'Create MovieTranslation', 'url'=>array('create')),
	array('label'=>'Manage MovieTranslation', 'url'=>array('admin')),
);
?>

<h1>Movie Translations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
