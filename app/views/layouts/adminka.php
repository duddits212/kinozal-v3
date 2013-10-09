<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="ru" />

    <title><?php echo e($this->pageTitle); ?></title>

    <?php //app()->bootstrap->registerCoreScripts(); ?>
    <?php //app()->less->register(); ?>
    <?php css('css/main.css'); ?>
    <?php css('css/responsive.css'); ?>
</head>
<body>

<?php
    $this->widget('bootstrap.widgets.TbNavbar', array(
    //    'type'=>'inverse', // null or 'inverse'
    //    'brand'=>'Project name',
    //    'brandUrl'=>'#',
        'collapse'=>true, // requires bootstrap-responsive.css
        'items'=>array(
            array(
                'class'=>'bootstrap.widgets.TbNav',
                'items'=>array(
                    array('label'=>'Countries','url'=>array('/adm/Country/admin')),
                    array('label'=>'Genres','url'=>array('/adm/movieGenreName/admin')),
                    array('label'=>'Categories','url'=>array('adm/movieRubricName/admin')),
                    array('label'=>'Translations','url'=>array('/adm/movieTranslation/admin')),
                    array('label'=>'Persons','url'=>array('/adm/persons/admin')),
                    array('label'=>'Flavors','url'=>array('/adm/movieFlavor/admin')),
                ),
            ),
        ),
    ));
?>

<div class="container" id="page">

    <?php if(!empty($this->breadcrumbs)):?>
    <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
        'links'=>$this->breadcrumbs,
    )); ?>
    <?php endif?>

    <?php echo $content; ?>

    <hr />

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by kinozal.tomsk.ru<br/>
    </div>
</div>
</body>
</html>
