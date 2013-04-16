<?php

Yii::import('zii.widgets.CPortlet');

class FilterBox extends CPortlet
{
    public function init()
    {
        //$this->title=CHtml::encode(Yii::app()->user->name);
        $this->contentCssClass='filterBox';
        $this->titleCssClass='filterBoxTitle';
        $this->decorationCssClass='filterBoxDecoration';
        $this->title='А тут фильтр';
        $this->id='filterBox';
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('filterBox');
    }

}