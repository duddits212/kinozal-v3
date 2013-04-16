<?php
/* @var $this OpinionController */
/* @var $model Opinion */
?>

<div class='comment'>
    <div class='username'>
        <?php echo $model->u->username; ?>
    </div>
    <div class='date'>
        <?php echo $model->tstamp; ?>
    </div>
    <div class='message'>
        <?php echo $model->message; ?>
    </div>
</div>
