<?php
/* @var $this MovieGenreNameController */
/* @var $model MovieGenreName */

$this->breadcrumbs=array(
	'Movie Genre Names'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovieGenreName', 'url'=>array('index')),
	array('label'=>'Manage MovieGenreName', 'url'=>array('admin')),
);
?>

<h1>Create MovieGenreName</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>