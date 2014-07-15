<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$dataProvider=new CActiveDataProvider('Inmuebles', array(
		    'criteria'=>array(
		        //'condition'=>'status=1',
		        'order'=>'id DESC',
		        //'with'=>array('author'),
		    ),
		    'pagination'=>array(
		        'pageSize'=>6,
		    ),
		));


		
		$inm=new CActiveDataProvider('Inmuebles', array(
		    'criteria'=>array(
		        'condition'=>'destacado=1',

		    ),		    
		));
		//$inm=Inmuebles::model()->findAll('destacado=1');
		//$lista=$inm->findAllByAttributes(array('destacado'=>1));


		$this->render('index',array('dataProvider'=>$dataProvider, 'lista'=>$inm));

	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	public function ActionRegistro()
	{
		$model = new Usuarios;
		//$model->perfil='Usuario';
		
		$this->performAjaxValidation($model);

		if(isset($_POST['Usuarios']))
		{
			$model->attributes=$_POST['Usuarios'];
			$model->pass=sha1($model->pass);
			/*
			$uploadedFile=CUploadedFile::getInstance($model,'foto');
			$fileName = "{$uploadedFile}"; //file name
           
			if(!empty($uploadedFile))  // check if uploaded file is set or not
            {
               	$uploadedFile->saveAs(Yii::app()->basePath.'/../images/usuarios/'.$fileName);
                $model->foto = $fileName;
            }
			*/

			//agregar esta linea antes del save() lo mismo en la funcion de modificar actionUpdate()
			if($model->save())
				$this->redirect(array('index'));
		}
		//$this->render('registro', array(
			//'model'=>$model
			//));
		$this->render('registro', array(
			'model'=>$model
			));

	}

	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registro-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

	}

	public function actionRecargaCiudades()
	{
	    $data=Ciudad::model()->findAllByAttributes(array('id_departamento'=>array($_POST['Inmuebles']['idDepartamento'])));
	 
	    $data=CHtml::listData($data,'id','nombre');
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }

	}

	public function actionRecargaBarrios()
	{
	    $data=Barrio::model()->findAllByAttributes(array('id_ciudad'=>array($_POST['Inmuebles']['idCiudad'])));
	 
	    $data=CHtml::listData($data,'id','nombre');
	    foreach($data as $value=>$name)
	    {
	        echo CHtml::tag('option',
	                   array('value'=>$value),CHtml::encode($name),true);
	    }
	}
	
	public function actionLlamar()
    {
        try 
        { 


            $client = new SoapClient("http://www.webservicex.net/FinanceService.asmx?WSDL",
              array('cache_wsdl' => WSDL_CACHE_NONE,'trace' => TRUE));
            $param = array(
                            'LoanAmount' => $_GET['LoanAmount'],
                            'InterestRate' => $_GET['InterestRate'],
                            'Months' => $_GET['Months']
                            );
         
            $ready = $client->LoanMonthlyPayment($param) ->LoanMonthlyPaymentResult;

            echo "<script type='text/javascript'>alert('Valor de la cuota: US$ $ready');</script>";

        } catch (Exception $e) {

            trigger_error($e->getMessage(), E_USER_WARNING);
        }
    }          
}