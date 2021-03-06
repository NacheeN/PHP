<?php

class EventosController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('create','update','calendarevents','view','admin','delete','nuevo'),
				'users'=>array('@'),
			),
			//array('allow', // allow admin user to perform 'admin' and 'delete' actions
			//	'actions'=>array('admin','delete'),
			//	'users'=>array('admin'),
			//),
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
		
		if(isset($_GET['id']))
			$id=$_GET['id'];
		if (@$_GET['asModal']==true)
        {
            $this->renderPartial('view',
                array('model'=>$this->loadModel($id)),false,true
            );
        }
        else{
            //$this->layout = 'column2';
            $this->renderPartial('view',array(
                'model'=>$this->loadModel($id),
            ));
        }

	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Eventos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		//$model->id_inmueble=$id;
		//$model->id_agente=Yii::app()->user->id;
		//$model->id_cliente=Yii::app()->user->id;



		if(isset($_POST['Eventos']))
		{
			$model->attributes=$_POST['Eventos'];
			if($model->save()){
				
				Yii::import('application.extensions.phpmailer.JPhpMailer');
	
				$mail = new JPhpMailer;

				
				$mail->IsSMTP();
				$mail->SMTPDebug = 1;
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl"; 
				$mail->Username = "php.inmobiliaria.2014@gmail.com";
				$mail->Port = '465'; 
				$mail->Password = "grupophp";
				$mail->SetFrom($model->cliente->email,$model->cliente->nombre);
				$mail->AddAddress("");
				$mail->Subject = "Cita Inmmobiliaria";
				$mail->Body = "Se genero la cita fecha desde: ".$model->fecha_hora_desde." hasta: ".$model->fecha_hora_desde.".";

				$mail->Send();

				$this->redirect(array('index'));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	public function actionNuevo($id)
	{
		$model=new Eventos;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$model->id_inmueble=$id;
		//$model->id_agente=Yii::app()->user->id;
		//$model->id_cliente=Yii::app()->user->id;

		if(isset($_POST['Eventos']))
		{
			$model->attributes=$_POST['Eventos'];
			if($model->save())
				//$this->redirect(array('view','id'=>$model->id));
				$this->redirect(array('index'));
		}

		$this->render('nuevo',array(
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

		if(isset($_POST['Eventos']))
		{
			$model->attributes=$_POST['Eventos'];
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Eventos');

		$model=new Eventos;

		//$calendarEventsUrl = $this->actionCalendarEvents();

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			//'calendario'=>$calendario,
			//'calendarEventsUrl'=>$calendarEventsUrl,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Eventos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Eventos']))
			$model->attributes=$_GET['Eventos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Eventos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Eventos::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Eventos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='eventos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	public function actionCalendarEvents()
	{

		$items = array();
        $model=Eventos::model()->findAll();    

	    foreach ($model as $value) {
            $items[]=array(
            	'id'=>$value->id,
                'title'=>$value->titulo,
                'start'=>$value->fecha_hora_desde,
               	//'end'=>date('Y-m-d', strtotime('+1 day', strtotime($value->fecha_hora_hasta))),
                'end'=>$value->fecha_hora_hasta,
                'url'=>'#',
                //'allDay'=>true,
                //'color'=>'blue',
            );
        }
        echo CJSON::encode($items);
        Yii::app()->end();
	}
	
}
