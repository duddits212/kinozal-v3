<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Администратор
 * Date: 19.10.13
 * Time: 1:37
 * To change this template use File | Settings | File Templates.
 */

Yii::import('zii.widgets.CPortlet');

class myNavbar extends CPortlet
{
    public function init()
    {
        //$this->contentCssClass='searchBox';
        //$this->titleCssClass='searchBoxTitle';
        //$this->decorationCssClass='searchBoxDecoration';
        //$this->title='Поиск тут';
        $this->id='MyLovelyNavBar';
        parent::init();
    }

    protected function renderContent()
    {
            $sys_items=array(
            array('label'=>'Зарегистрироваться','url'=>array('/registration/registration'),'visible'=>user()->isGuest,'active'=>(Yii::app()->controller->getId() == 'registration')),
            array('label'=>'Войти', 'url'=>array('/user/user/login'),'visible'=>user()->isGuest,'active'=> (Yii::app()->controller->getId() == 'auth')),
            array('label'=>'Профиль','url'=>array('/profile/profile/view'), 'visible'=>!user()->isGuest,'active'=>(Yii::app()->controller->getId() == 'profile')),
            array('label'=>'Админка','url'=>array('/adm/country/admin'),'visible'=>user()->hasRole('Admin-zone')),
            array('label'=>'Выйти','url'=>array('/site/logout'),'visible'=>!user()->isGuest)
        );

        $items=MovieFlavor::model()->menu();

        $this->widget('bootstrap.widgets.TbNavbar', array(
            'brandLabel' => 'Кинозал',
            'items' => array(
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'items'=>$items,
                ),
                //TbHtml::navbarSearchForm('#', 'post', array('placeholder'=>'Искать!')),
                '<ul class="nav"><form class="navbar-search form-search" action="/movies/adadad"><input type="submit" value="Submit" style="display: none">' .
                $this->widget('yiiwheels.widgets.typeahead.WhTypeAhead', array(
                        'name'=>'gogno',
                        'pluginOptions' => array(
                            'class'=>'search-query',
                            'id'=>'search',
                            'name'=>'gogno',
                            'limit'=>'8',
                            'placeholder'=>'Искать',
                            'minLength' => 3,
                            'template'=>"js:function(datum) { return '<p>' + datum.caption + '&nbsp;' + datum.year + '</p>'}",
                            'remote'=>'/v3/yii-app/web/index.php?r=movie/autocomplete&str=%QUERY',
                        )
                    ),true
                ) . '</form></ul>',
                array(
                    'class'=>'bootstrap.widgets.TbMenu',
                    'htmlOptions' => array('class' => 'pull-right'),
                    'items'=>$sys_items,
                )
            ),
        ));
    }

}