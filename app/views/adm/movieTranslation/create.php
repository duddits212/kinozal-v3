<?php
/* @var $this MovieTranslationController */
/* @var $model MovieTranslation */

$this->breadcrumbs=array(
	'Movie Translations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovieTranslation', 'url'=>array('index')),
	array('label'=>'Manage MovieTranslation', 'url'=>array('admin')),
);
?>

<h1>Create MovieTranslation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>