<?php
/* @var $this MovieRubricNameController */
/* @var $model MovieRubricName */

$this->breadcrumbs=array(
	'Movie Rubric Names'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovieRubricName', 'url'=>array('index')),
	array('label'=>'Manage MovieRubricName', 'url'=>array('admin')),
);
?>

<h1>Create MovieRubricName</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>