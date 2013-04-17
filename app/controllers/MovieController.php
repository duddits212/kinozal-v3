<?php

class MovieController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
            'ajaxOnly + filterByRubric',
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'flavor', 'filterByRubric', 'filterByGenre', 'filterByCountry'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Movie;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Movie']))
		{
			$model->attributes=$_POST['Movie'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Movie']))
		{
			$model->attributes=$_POST['Movie'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->render('index',array(
			'dataProvider'=>Movie::model()->index(),
		));
	}

    public function actionFlavor($id=1, $page=1, $sort='post_date.desc')
    {
        if(Yii::app()->request->isAjaxRequest) {
            if (!isset($_GET['page'])) {
                $_GET['page']=1;
            }
        } else {
            Yii::app()->user->setState('fltRubric', NULL);
            Yii::app()->user->setState('fltGenre', NULL);
            Yii::app()->user->setState('fltCountry', NULL);
        }

		if (isset($_GET['page'])) {
			Yii::app()->user->setState('menuPage' . $id, $page);
		} else {
            $page = Yii::app()->user->getState('menuPage' . $id);
            $_GET['page'] = isset($page) ? $page : 1;
            Yii::app()->user->setState('menuPage' . $id, $_GET['page']);
        }
		if (isset($_GET['sort'])) {
			Yii::app()->user->setState('menuSort' . $id, $sort);
		} else {
			$sort = Yii::app()->user->getState('menuSort' . $id);
			 if ( isset($sort) ) {
				$_GET['sort'] = $sort;
            }
        }
        if (!Yii::app()->request->isAjaxRequest) {
            $this->render('index',
                array('dataProvider'=>Movie::model()->searchByFlavor($id))
            );
        } else {
            $this->render('index', array(
                'dataProvider'=>Movie::model()->searchByFlavor($id),
            ));
        }
    }

    public function actionFilterByRubric() {
        $filterRubric = Yii::app()->request->getPost('filterRubric');
        if ($filterRubric === NULL) {
            $filterRubric = array();
        }
        if (!Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('index',
                array('dataProvider'=>Movie::model()->filterByRubric($filterRubric))
            );
        }
    }

    public function actionFilterByGenre() {
        $filterRubric = Yii::app()->request->getPost('filterGenre');
        if ($filterRubric === NULL) {
            $filterRubric = array();
        }
        if (!Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('index',
                array('dataProvider'=>Movie::model()->filterByGenre($filterRubric))
            );
        }
    }

    public function actionFilterByCountry() {
        $filterRubric = Yii::app()->request->getPost('filterCountry');
        if ($filterRubric === NULL) {
            $filterRubric = array();
        }
        if (!Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('index',
                array('dataProvider'=>Movie::model()->filterByCountry($filterRubric))
            );
        }
    }


    /**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Movie('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Movie']))
			$model->attributes=$_GET['Movie'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Movie the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Movie::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Movie $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='movie-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
