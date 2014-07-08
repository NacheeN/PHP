<?php

class InmueblesController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','imagenes'),
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
		$model=new Inmuebles;

		$b=new Barrio;
		$c=new Ciudad;
		$d=new Departamento;

		$model->id_usuario=Yii::app()->user->id;
		if(isset($_POST['Inmuebles']))
		{
			$model->attributes=$_POST['Inmuebles'];

			$uploadedFile=CUploadedFile::getInstance($model,'imagen_portada');
			$aleatorio = rand(100000, 999999);
			$fileName = $aleatorio."{$uploadedFile}"; //file name
           
			if(!empty($uploadedFile))  // check if uploaded file is set or not
            {
              	
               	$uploadedFile->saveAs(Yii::app()->basePath.'/../images/inmueble/'.$fileName);
                $model->imagen_portada = $fileName;
            }

			if($model->save())
			{
				$this->redirect(array('imagenes','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'ciudad'=>$c,
			'dep'=>$d,
			'barrio'=>$b,
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
		$model->id_usuario=Yii::app()->user->id;
		if(isset($_POST['Inmuebles']))
		{
			$model->attributes=$_POST['Inmuebles'];
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

	public function actionImagenes($id)
	{
		$model=new Imagenes;
		
		if(isset($_POST['Imagenes']))
		{

			$model->id_inmueble=$id;
			$model->attributes=$_POST['Imagenes'];
			
			$images=CUploadedFile::getInstancesByName('ruta');

			if(count($images)===0)
			{
				$msg="Nos has seleccionado ninguna imagen";
			}
			else if(!$imagenes->validate())
			{
				$msg="error al enviar el formulario";
			}
			else
			{
				foreach ($images as $image => $value) 
				{
					$aleatorio = rand(100000, 999999);
					$nombre = $aleatorio.'-'.$value->nombre;
					$value->saveAs(Yii::app()->basePath.'/../images/inmueble/'.$nombre);
					
					$model->id_inmueble=$id;
					$model->ruta=$nombre;

				}
				
				if($model->save())
				$this->redirect(array('site/index'));
			}

			
		}

		
		$this->render('imagenes',array(
			'model'=>$model,
		));
	}
	
	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Inmuebles');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Inmuebles('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Inmuebles']))
			$model->attributes=$_GET['Inmuebles'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Inmuebles the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Inmuebles::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Inmuebles $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='inmuebles-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


}
