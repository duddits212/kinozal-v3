<?php
/* @var $this PersonsController */
/* @var $model Persons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persons-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name2'); ?>
		<?php echo $form->textField($model,'name2',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname_orig'); ?>
		<?php echo $form->textField($model,'surname_orig',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'surname_orig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_orig'); ?>
		<?php echo $form->textField($model,'name_orig',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name_orig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name2_orig'); ?>
		<?php echo $form->textField($model,'name2_orig',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'name2_orig'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastparse'); ?>
		<?php echo $form->textField($model,'lastparse'); ?>
		<?php echo $form->error($model,'lastparse'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->