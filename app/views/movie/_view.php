<?php
/* @var $this MovieController */
/* @var $data Movie */
?>

<div class="view">


<!--
    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
-->

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('caption')); ?>:</b> -->
	<h4><?php echo CHtml::link(CHtml::encode($data->caption), array('view', 'id'=>$data->id)); ?></h4>
	<br />

<!--	<b><?php echo CHtml::encode($data->getAttributeLabel('orig_caption')); ?>:</b> -->
    <?php echo CHtml::link(CHtml::encode($data->orig_caption), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_desc')); ?>:</b>
	<?php echo CHtml::encode($data->short_desc); ?>
	<br />

<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
-->
	<b><?php echo CHtml::encode($data->getAttributeLabel('produce_date')); ?>:</b>
	<?php echo CHtml::encode($data->produce_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_date')); ?>:</b>
	<?php echo CHtml::encode($data->post_date); ?>
	<br />

    <b><?php echo(''); ?></b>

    <hr>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('poster_uid')); ?>:</b>
	<?php echo CHtml::encode($data->poster_uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prop')); ?>:</b>
	<?php echo CHtml::encode($data->prop); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('length')); ?>:</b>
	<?php echo CHtml::encode($data->length); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('company')); ?>:</b>
	<?php echo CHtml::encode($data->company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('translation')); ?>:</b>
	<?php echo CHtml::encode($data->translation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mpaa')); ?>:</b>
	<?php echo CHtml::encode($data->mpaa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('top')); ?>:</b>
	<?php echo CHtml::encode($data->top); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bestseller')); ?>:</b>
	<?php echo CHtml::encode($data->bestseller); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waiting')); ?>:</b>
	<?php echo CHtml::encode($data->waiting); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_cnt')); ?>:</b>
	<?php echo CHtml::encode($data->view_cnt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufb_cnt')); ?>:</b>
	<?php echo CHtml::encode($data->ufb_cnt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ufb_avg')); ?>:</b>
	<?php echo CHtml::encode($data->ufb_avg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imdb_rating')); ?>:</b>
	<?php echo CHtml::encode($data->imdb_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imdb_id')); ?>:</b>
	<?php echo CHtml::encode($data->imdb_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kinopoisk_rating')); ?>:</b>
	<?php echo CHtml::encode($data->kinopoisk_rating); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kinopoisk_id')); ?>:</b>
	<?php echo CHtml::encode($data->kinopoisk_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->approved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mod_date')); ?>:</b>
	<?php echo CHtml::encode($data->mod_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('app_date')); ?>:</b>
	<?php echo CHtml::encode($data->app_date); ?>
	<br />

	*/ ?>

</div>