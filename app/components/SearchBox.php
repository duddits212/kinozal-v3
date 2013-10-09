<?php

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