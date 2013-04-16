<?php
/* @var $this MovieController */
/* @var $model Movie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caption'); ?>
		<?php echo $form->textField($model,'caption',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orig_caption'); ?>
		<?php echo $form->textField($model,'orig_caption',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'short_desc'); ?>
		<?php echo $form->textField($model,'short_desc',array('size'=>60,'maxlength'=>240)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'produce_date'); ?>
		<?php echo $form->textField($model,'produce_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_date'); ?>
		<?php echo $form->textField($model,'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'poster_uid'); ?>
		<?php echo $form->textField($model,'poster_uid',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prop'); ?>
		<?php echo $form->textField($model,'prop',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'length'); ?>
		<?php echo $form->textField($model,'length'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'company'); ?>
		<?php echo $form->textField($model,'company',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'translation'); ?>
		<?php echo $form->textField($model,'translation',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mpaa'); ?>
		<?php echo $form->textField($model,'mpaa',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'top'); ?>
		<?php echo $form->textField($model,'top',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bestseller'); ?>
		<?php echo $form->textField($model,'bestseller',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waiting'); ?>
		<?php echo $form->textField($model,'waiting',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view_cnt'); ?>
		<?php echo $form->textField($model,'view_cnt',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ufb_cnt'); ?>
		<?php echo $form->textField($model,'ufb_cnt',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ufb_avg'); ?>
		<?php echo $form->textField($model,'ufb_avg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imdb_rating'); ?>
		<?php echo $form->textField($model,'imdb_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imdb_id'); ?>
		<?php echo $form->textField($model,'imdb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kinopoisk_rating'); ?>
		<?php echo $form->textField($model,'kinopoisk_rating'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kinopoisk_id'); ?>
		<?php echo $form->textField($model,'kinopoisk_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'approved'); ?>
		<?php echo $form->textField($model,'approved'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mod_date'); ?>
		<?php echo $form->textField($model,'mod_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'app_date'); ?>
		<?php echo $form->textField($model,'app_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->