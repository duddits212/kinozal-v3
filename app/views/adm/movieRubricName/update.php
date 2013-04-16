<?php
/* @var $this MovieRubricNameController */
/* @var $model MovieRubricName */

$this->breadcrumbs=array(
	'Movie Rubric Names'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovieRubricName', 'url'=>array('index')),
	array('label'=>'Create MovieRubricName', 'url'=>array('create')),
	array('label'=>'View MovieRubricName', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovieRubricName', 'url'=>array('admin')),
);
?>

<h1>Update MovieRubricName <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>