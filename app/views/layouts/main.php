<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />

    <link rel="icon" href="<?php echo baseUrl('/favicon.ico'); ?>" type="image/x-icon"/>

    <title>Кинозал версии 3. Версия 0.02</title>

    <?php css('css/main.css'); ?>
    <?php css('css/responsive.css'); ?>

    <?php app()->bootstrap->registerAllScripts(); ?>
    <?php Yii::app()->bootstrap->register(); ?>


</head>


<?php
    $this->widget('MyNavbar');
?>


<body class="layout-main">
    <div class="container-fluid" id="page">
        <div class="row-fluid">

            <div class="sidebar-nav left">
                <?php $this->widget('SearchBox'); ?>
                <?php $this->widget('FilterBox'); ?>
            </div>

            <div class="sidebar-nav right">
                <?php //$this->widget('LastOpinions'); ?>
                <?php $this->widget('LastRatings'); ?>
            </div>

            <div class="content fixed-fixed">
                <?php echo $content; ?>
            </div>
        </div>

        <div id="footer">
            <hr />
            Copyright &copy; <?php echo date('Y'); ?> by kinozal.tomsk.ru<br/>
        </div>
    </div>

</body>
</html>
