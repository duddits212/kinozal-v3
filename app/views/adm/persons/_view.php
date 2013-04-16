<?php
/* @var $this PersonsController */
/* @var $data Persons */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name2')); ?>:</b>
	<?php echo CHtml::encode($data->name2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname_orig')); ?>:</b>
	<?php echo CHtml::encode($data->surname_orig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_orig')); ?>:</b>
	<?php echo CHtml::encode($data->name_orig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name2_orig')); ?>:</b>
	<?php echo CHtml::encode($data->name2_orig); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastparse')); ?>:</b>
	<?php echo CHtml::encode($data->lastparse); ?>
	<br />

	*/ ?>

</div>