<div class="links-block">

<?php foreach($links as $link):
    switch ($link->type) {
        case '1': // video file
?>
        <div class="link" id="c<?php echo $link->id; ?>">
            Тут ссылка на просмотр файла с ид =
            <?php echo $link->id; ?>
        </div><!-- comment -->
<?php
            break;
        case '2': // audio file
            break;
        case '3': // subtitles file
            break;
    };

endforeach; ?>

</div>