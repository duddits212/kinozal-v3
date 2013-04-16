<?php 

Yii::import('zii.widgets.CPortlet');
 
class MovieLinks extends CPortlet
{
    public function init()
    {
        //$this->title=CHtml::encode(Yii::app()->user->name);
		$this->contentCssClass='movieLinks';
		$this->titleCssClass='movieLinksTitle';
		$this->decorationCssClass='movieLinksDecoration';
		$this->title='ссылки на порнушку';
		$this->id='movieLinks';
        parent::init();
    }
 
    protected function renderContent()
    {
        $this->render('movieLinks');
    }
}