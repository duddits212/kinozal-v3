<?php
/* @var $this MovieFlavorController */
/* @var $model MovieFlavor */

$this->breadcrumbs=array(
	'Movie Flavors'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List MovieFlavor', 'url'=>array('index')),
	array('label'=>'Create MovieFlavor', 'url'=>array('create')),
	array('label'=>'Update MovieFlavor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MovieFlavor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MovieFlavor', 'url'=>array('admin')),
);
?>

<h1>View MovieFlavor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'label',
		'order',
		'active',
		'adult',
		'comment',
	),
)); ?>
