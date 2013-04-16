<?php
/* @var $this MovieFlavorController */
/* @var $model MovieFlavor */

$this->breadcrumbs=array(
	'Movie Flavors'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MovieFlavor', 'url'=>array('index')),
	array('label'=>'Create MovieFlavor', 'url'=>array('create')),
	array('label'=>'View MovieFlavor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MovieFlavor', 'url'=>array('admin')),
);
?>

<h1>Update MovieFlavor <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>