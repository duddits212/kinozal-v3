<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Администратор
 * Date: 26.03.13
 * Time: 23:34
 * To change this template use File | Settings | File Templates.
 */

Yii::import('zii.widgets.CPortlet');

class SearchBox extends CPortlet
{
    public function init()
    {
        //$this->title=CHtml::encode(Yii::app()->user->name);
        $this->contentCssClass='searchBox';
        $this->titleCssClass='searchBoxTitle';
        $this->decorationCssClass='searchBoxDecoration';
        $this->title='Поиск тут';
        $this->id='searchBox';
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('searchBox');
    }

}