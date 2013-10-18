<?php

Yii::import('zii.widgets.CPortlet');

class SearchBox extends CPortlet
{
    public function init()
    {
        $this->contentCssClass='searchBox';
        $this->titleCssClass='searchBoxTitle';
        $this->decorationCssClass='searchBoxDecoration';
        $this->title='Поиск тут';
        $this->id='searchBox';
        parent::init();
    }

    protected function renderContent()
    {
        $this->widget('yiiwheels.widgets.typeahead.WhTypeAhead', array(
                'name'=>'sometest',
                'pluginOptions' => array(
                    'name'=>'sometest',
                    'limit'=>'8',
                    'placeholder'=>'Искать',
                    'minLength' => 3,
                    'template'=>"js:function(datum) { return '<p>' + datum.caption + '&nbsp;' + datum.year + '</p>'}",
                    'remote'=>'/v3/yii-app/web/index.php?r=movie/autocomplete&str=%QUERY',
                )
            )
        );
    }
}