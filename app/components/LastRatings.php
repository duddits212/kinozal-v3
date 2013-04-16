<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Администратор
 * Date: 26.03.13
 * Time: 23:34
 * To change this template use File | Settings | File Templates.
 */

Yii::import('zii.widgets.CPortlet');

class LastRatings extends CPortlet
{
    public function init()
    {
        //$this->title=CHtml::encode(Yii::app()->user->name);
        $this->contentCssClass='lastRatings';
        $this->titleCssClass='lastRatingsTitle';
        $this->decorationCssClass='lastRatingsDecoration';
        $this->title='последние оценки';
        $this->id='lastRatings';
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('lastRatings');
    }

}