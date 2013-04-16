<?php
/* @var $this MovieController */
/* @var $model Movie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'movie-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'caption'); ?>
		<?php echo $form->textField($model,'caption',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orig_caption'); ?>
		<?php echo $form->textField($model,'orig_caption',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'orig_caption'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_desc'); ?>
		<?php echo $form->textField($model,'short_desc',array('size'=>60,'maxlength'=>240)); ?>
		<?php echo $form->error($model,'short_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'produce_date'); ?>
		<?php echo $form->textField($model,'produce_date'); ?>
		<?php echo $form->error($model,'produce_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_date'); ?>
		<?php echo $form->textField($model,'post_date'); ?>
		<?php echo $form->error($model,'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poster_uid'); ?>
		<?php echo $form->textField($model,'poster_uid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'poster_uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prop'); ?>
		<?php echo $form->textField($model,'prop',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'prop'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
		<?php echo $form->error($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'company'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'translation'); ?>
		<?php echo $form->textField($model,'translation',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'translation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mpaa'); ?>
		<?php echo $form->textField($model,'mpaa',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'mpaa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'top'); ?>
		<?php echo $form->textField($model,'top',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'top'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bestseller'); ?>
		<?php echo $form->textField($model,'bestseller',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'bestseller'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waiting'); ?>
		<?php echo $form->textField($model,'waiting',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'waiting'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view_cnt'); ?>
		<?php echo $form->textField($model,'view_cnt',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'view_cnt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ufb_cnt'); ?>
		<?php echo $form->textField($model,'ufb_cnt',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'ufb_cnt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ufb_avg'); ?>
		<?php echo $form->textField($model,'ufb_avg'); ?>
		<?php echo $form->error($model,'ufb_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imdb_rating'); ?>
		<?php echo $form->textField($model,'imdb_rating'); ?>
		<?php echo $form->error($model,'imdb_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imdb_id'); ?>
		<?php echo $form->textField($model,'imdb_id'); ?>
		<?php echo $form->error($model,'imdb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kinopoisk_rating'); ?>
		<?php echo $form->textField($model,'kinopoisk_rating'); ?>
		<?php echo $form->error($model,'kinopoisk_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kinopoisk_id'); ?>
		<?php echo $form->textField($model,'kinopoisk_id'); ?>
		<?php echo $form->error($model,'kinopoisk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'approved'); ?>
		<?php echo $form->textField($model,'approved'); ?>
		<?php echo $form->error($model,'approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mod_date'); ?>
		<?php echo $form->textField($model,'mod_date'); ?>
		<?php echo $form->error($model,'mod_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'app_date'); ?>
		<?php echo $form->textField($model,'app_date'); ?>
		<?php echo $form->error($model,'app_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->