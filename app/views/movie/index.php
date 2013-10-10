<?php
/* @var $this MovieController */
/* @var $dataProvider CActiveDataProvider */

if (user()->hasRole('Admin-zone')) {
    $this->menu=array(
        array('label'=>'Create Movie', 'url'=>array('create')),
        array('label'=>'Manage Movie', 'url'=>array('admin')),
    );
}

$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'id'=>'movieIndex',
    'pager'=>array('maxButtonCount'=>16,'class'=>'CLinkPager','header'=>''),
    'pagerCssClass'=>'pagination',
    'template'=>'{sorter}{pager}{items}{pager}',
    'sortableAttributes'=>array('post_date', 'caption', 'imdb_rating')
));

