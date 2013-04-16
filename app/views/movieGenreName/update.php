<?php
/* @var $this MovieGenreNameController */
/* @var $model MovieGenreName */

$this->breadcrumbs=array(
	'Movie Genre Names'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovieGenreName', 'url'=>array('index')),
	array('label'=>'Create MovieGenreName', 'url'=>array('create')),
	array('label'=>'View MovieGenreName', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovieGenreName', 'url'=>array('admin')),
);
?>

<h1>Update MovieGenreName <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>