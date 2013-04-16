<?php

class OpinionController extends Controller
{
	public function actionAdd()
	{
		$this->render('add');
	}

	public function actionBlock($id)
	{
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
	}

	public function actionDelete($id)
	{
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
	}

	public function actionUpdate($id)
	{
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
	}

	public function actionView($id)
	{
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
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
                'actions'=>array('index','view', 'flavor'),
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
     * @return array action filters
     */
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /*
	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
    */


    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Movie the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Opinion::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
}