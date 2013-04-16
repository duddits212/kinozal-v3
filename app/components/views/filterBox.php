<?php

Yii::app()->clientScript->registerScript('filters',
    'function filterGenre (data) {
            $.fn.yiiListView.update("yw0", {
                data: $(this).serialize(),
                complete: function () {
                        alert("asdf");
                    },
                });
                return false;

    }',
    CClientScript::POS_HEAD
);

$this->widget('ext.select2.ESelect2', array(
	'name' => 'filterRubric',
    'options' => array(
        'allowClear' => true,
        'width' => '100%',
        'placeholder' => 'Все рубрики',
    ),
    'htmlOptions' => array(
        'multiple'=>'multiple',
        'onChange'=>CHtml::ajax(array(
            'type'=>'POST',
            'url'=>Yii::app()->createUrl('/movie/filterByRubric'),
            'update'=>'#yw0',
            'dataType' => 'json',
            'data' => 'js:$("#filterRubric").serialize()',
            'success'=>'js:filterGenre(event)',
        ))
    ),
    'data' => CHtml::listData(MovieRubricName::model()->findAll(array('order'=>'name')), 'id', 'name')
));



?><br />

<?php
//    echo CHtml::textField('filterGenre','',array('class'=>'span5'));
/*
    $form = $this->beginWidget('CInputWidget', array(
        'name'=>'inputGenre',
        'htmlOptions'=>array('class'=>'well'),
    ));
    echo $form->textFieldRow( $model, 'textField', array('class'=>'input-small'));
*/
    $this->widget('ext.select2.ESelect2', array(
//        'selector'=>'#inputGenre',
        'name' => 'inputGenreN',
        'attribute' => 'gid',
        'options' => array(
           'allowClear' => true,
           'width' => '100%',
           'placeholder' => 'Все жанры',
        ),
        'htmlOptions' => array(
            'multiple'=>'multiple',
        ),
        'data' => CHtml::listData(MovieGenreName::model()->findAll(array('order'=>'name')), 'id', 'name')
    ));
//    $this->endWidget();
?><br />


<?php
//    $country = new Country();
    $this->widget('ext.select2.ESelect2', array(
         'name' => 'selectInput3',
         'options' => array(
            'allowClear' => true,
            'width' => '100%',
            'placeholder' => 'Все страны',
         ),
        'htmlOptions' => array(
            'multiple'=>'multiple',
        ),
        'data' => CHtml::listData(Country::model()->findAll(array('order'=>'name')), 'id', 'name')
    ));
?><br />
