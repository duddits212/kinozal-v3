<?php
/* @var $this OpinionController */
/* @var $data Opinion */
?>

<div class='comment'>
    <div class='username'>
        <?php echo $data->u->username; ?>
    </div>
    <div class='date'>
        <?php echo $data->tstamp; ?>
    </div>
    <div class='message'>
        <?php echo $data->message; ?>
    </div>
</div>
