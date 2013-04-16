<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Администратор
 * Date: 26.03.13
 * Time: 23:34
 * To change this template use File | Settings | File Templates.
 */

Yii::import('zii.widgets.CPortlet');

class LastOpinions extends CPortlet
{
    public $maxOpinions=10;

    public function init()
    {
        $this->contentCssClass='lastOpinions';
        $this->titleCssClass='lastOpinionsTitle';
        $this->decorationCssClass='lastOpinionsDecoration';
        $this->title='Последние комментарии';
        $this->id='lastOpinions';
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('lastOpinions');
    }

    public function getLastComments() {
        return Opinion::model()->findLastOpinions($this->maxOpinions);
    }

}