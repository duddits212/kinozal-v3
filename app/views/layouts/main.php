<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en" />

    <link rel="icon" href="<?php echo baseUrl('/favicon.ico'); ?>" type="image/x-icon"/>

    <title><?php echo e($this->pageTitle); ?></title>

    <?php css('css/main.css'); ?>
    <?php css('css/responsive.css'); ?>

    <?php app()->bootstrap->registerAllScripts(); ?>

    <?php if (YII_DEBUG): ?>
        <?php js('js/main.js'); ?>
    <?php else: ?>
        <?php js('js/main.min.js'); ?>
    <?php endif; ?>
</head>

<body class="layout-main">>
    <div class="container-fluid" id="page">
        <div class="row-fluid">

            <?php
                $items=array(
//                    array('label'=>'Home','url'=>array('/movie/index')),
//                    array('label'=>'About','url'=>array('/site/page','view'=>'about')),
//                    array('label'=>'Contact','url'=>array('/site/contact')),
                    array('label'=>'Login','url'=>array('/user/user/login'),'visible'=>user()->isGuest),
                    array('label'=>'Register','url'=>array('/registration/registration'),'visible'=>user()->isGuest),
                    array('label'=>'Профиль','url'=>array('/profile/profile/view'), 'visible'=>!user()->isGuest), // , 'active'=>true),
                    array('label'=>'Админка','url'=>array('/adm/country/admin'),'visible'=>user()->hasRole('Admin-zone')),
//                    array('label'=>'Logout ('.user()->name.')','url'=>array('/site/logout'),'visible'=>!user()->isGuest));
                    array('label'=>'Выйти','url'=>array('/site/logout'),'visible'=>!user()->isGuest));
                $items=array_merge(MovieFlavor::model()->menu(), $items);
                $this->widget('bootstrap.widgets.TbNavbar', array(
    //                'collapse'=>true,
    //                'type'=>'inverse',
                    //        'brand'=>'kinozal.tomsk.ru',
                    'items'=>array(
                        array(
                            'class'=>'bootstrap.widgets.TbMenu',
                            'items'=>$items,
                        ),
                    ),
            )); ?>

            <div class="well sidebar-nav left">
                <?php $this->widget('SearchBox'); ?>
                <?php $this->widget('FilterBox'); ?>
            </div>

            <div class="well sidebar-nav right">
                <?php //$this->widget('LastOpinions'); ?>
                <?php //$this->widget('LastRatings'); ?>
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
