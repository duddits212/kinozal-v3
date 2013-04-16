<?php
/* @var $this MovieController */
/* @var $dataProvider CActiveDataProvider */

if (user()->hasRole('Admin-zone')) {
    $this->menu=array(
        array('label'=>'Create Movie', 'url'=>array('create')),
        array('label'=>'Manage Movie', 'url'=>array('admin')),
    );
}
?>

<?php 



// 'template'=>'{items}\n<div class=\"row-fluid\"><div class=\"span6\">{pager}</div><div class=\"span6\">{summary}</div></div>';


/*
$this->widget('bootstrap.widgets.TbListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'enableHistory'=>true,
    'enableSorting'=>true,
    'sorterCssClass'=>'sorter',
    'template'=>'{sorter}<div class="row-fluid"><div class="span6">{pager}</div></div>{items}<div class="row-fluid"><div class="span6">{pager}</div></div>',
	'sortableAttributes'=>array('post_date', 'caption', 'imdb_rating')
));
*/


$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'pager'=>array('maxButtonCount'=>16,'class'=>'CLinkPager','header'=>''),
    'pagerCssClass'=>'pagination',
    'template'=>'{sorter}{pager}{items}{pager}',
    'sortableAttributes'=>array('post_date', 'caption', 'imdb_rating')
));

