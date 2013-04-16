<?php
/* @var $this MovieFlavorController */
/* @var $model MovieFlavor */

$this->breadcrumbs=array(
	'Movie Flavors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MovieFlavor', 'url'=>array('index')),
	array('label'=>'Manage MovieFlavor', 'url'=>array('admin')),
);
?>

<h1>Create MovieFlavor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>