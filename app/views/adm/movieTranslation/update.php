<?php
/* @var $this MovieTranslationController */
/* @var $model MovieTranslation */

$this->breadcrumbs=array(
	'Movie Translations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovieTranslation', 'url'=>array('index')),
	array('label'=>'Create MovieTranslation', 'url'=>array('create')),
	array('label'=>'View MovieTranslation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovieTranslation', 'url'=>array('admin')),
);
?>

<h1>Update MovieTranslation <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>