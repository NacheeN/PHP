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
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

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
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','busqueda'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','imagenes','delete','activa','destacado'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin'),
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

		//$model->id_usuario=Yii::app()->user->id;
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
				$this->redirect(array('/imagenes/create?id_inmueble='.$model->id));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('site/index'));
	}

	public function actionImagenes($id)
	{
		$model=new Imagenes;

		if(isset($_POST['Imagenes']))
			echo "<script>alert('".isset($_POST['Imagenes']['ruta'])."');</script>";


		if(isset($_POST['Imagenes']))
		{
			echo "<script>alert('".($_POST['Imagenes']['ruta'])."');</script>";

			$model->attributes=$_POST['Imagenes'];
			
			$uploadedFile=CUploadedFile::getInstance($model,'ruta');
			
			$aleatorio = rand(100000, 999999);
			
			$fileName = $aleatorio."{$uploadedFile}"; //file name
			
           
			if(!empty($uploadedFile))  // check if uploaded file is set or not
            {           	
               	$uploadedFile->saveAs(Yii::app()->basePath.'/../images/inmueble/'.$fileName);  	
                $model->ruta = $fileName;
            }
            
			if($model->save())
			{
				echo "<script>alert('message10');</script>";
				$this->redirect(array('imagenes','id'=>$model->id));
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

	public function actionActiva($id,$activa)
	{
		
		$model=$this->loadModel($id);

		$model->activo=$activa;
		$model->save();
				            echo "<script type='text/javascript'>alert('Valor de la cuota: US$ $model->destacado');</script>";

		if($model->save()){

			$this->redirect(array('site/index'));
		}

	}

	public function actionDestacado($id,$des)
	{
		
		$model=$this->loadModel($id);
		$model->destacado=$des;
		if($model->save()){
			$this->redirect(array('site/index'));
		}

	}


	//**************************************************
	public function actionBusqueda()
	{
			
			$correo=new ContactForm;


			$criteria = new CDbCriteria();
			$model=new BusquedaForm;


    		$cuerpo_mensaje=null;

			$conditions=array();
			$id=0;


			if(isset($_POST['ContactForm']))
					{		

				Yii::import('application.extensions.phpmailer.JPhpMailer');
				
				$mail = new JPhpMailer;


				$correo->email=$_POST['ContactForm']['email'];
				$correo->name=$_POST['ContactForm']['name'];
				$correo->subject=$_POST['ContactForm']['subject'];
				$correo->body=$_POST['ContactForm']['body'];
				
				$mail->IsSMTP();
				$mail->SMTPDebug = 1;
				$mail->Host = 'smtp.gmail.com';
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = "ssl"; 
				$mail->Username = "php.inmobiliaria.2014@gmail.com";
				$mail->Port = '465'; 
				$mail->Password = "grupophp";
				$mail->SetFrom($correo->email,$correo->name);
				$mail->AddAddress("php.inmobiliaria.2014@gmail.com");
				$mail->Subject = $correo->subject;
				$mail->Body = $correo->body;
				//$mail->MsgHTML('JUST A TEST!'); 
				


				if($mail->Send()){

					
					$url = $this->createAbsoluteUrl('/site/index');
					$this->redirect($url, true);
				} 



		}		







			if(isset($_POST['BusquedaForm']))

			{	
				//$model->attributes=$_POST['BusquedaForm'];

					$conditions=array();

					if(isset($_POST['BusquedaForm']['id_departamento']))
					{

						$model->id_departamento=$_POST['BusquedaForm']['id_departamento'];

						if(mb_strlen($model->id_departamento)>0){
							
							$texto_msj=$cuerpo_mensaje;
							$criterio = new CDbCriteria();
							$criterio->select = 'nombre';
							$criterio->condition=('id = '.$model->id_departamento);
							
							
							$resultados = Departamento::model()->findAll($criterio);

							 foreach ($resultados as $resultado){
								$texto_dep=$resultado->nombre;
								 }

							 $cuerpo_mensaje=$texto_msj."Departamento: ".$texto_dep."\n";
						}


						if(isset($_POST['BusquedaForm']['id_ciudad'])){

							$model->id_ciudad=$_POST['BusquedaForm']['id_ciudad'];

							if(mb_strlen($model->id_departamento)>0){	
							
									$texto_msj=$cuerpo_mensaje;
									$criterio = new CDbCriteria();
									$criterio->select = 'nombre';
									$criterio->condition=('id = '.$model->id_ciudad);
									
									$resultados = Ciudad::model()->findAll($criterio);

								 	foreach ($resultados as $resultado){
										$texto_ciu=$resultado->nombre;
						 			}

							 		$cuerpo_mensaje=$texto_msj."Ciudad: ".$texto_ciu."\n";
								}


							if(isset($_POST['BusquedaForm']['id_barrio'])){

								$model->id_barrio=$_POST['BusquedaForm']['id_barrio'];

								if(mb_strlen($model->id_barrio)>0){

									$texto_msj=$cuerpo_mensaje;

									$criterio = new CDbCriteria();
									$criterio->select = 'nombre';
									$criterio->condition=('id = '.$model->id_barrio);
									
									$resultados = Barrio::model()->findAll($criterio);

									 foreach ($resultados as $resultado){
	        							$texto_barrio=$resultado->nombre;
   								 	}

									$cuerpo_mensaje=$texto_msj."Barrio: ".$texto_barrio."\n";

									$conditions[$id]=('id_barrio = '.$model->id_barrio);
									$id=$id+1;


								}
								
							}
						}

					}

					if(isset($_POST['BusquedaForm']['tipo'])){

						$model->tipo=$_POST['BusquedaForm']['tipo'];

						if(mb_strlen($model->tipo)>0){
						
							$tipos=array("Tipo","Casa","Apartamento","Local","Terreno","Oficina");

							$texto_msj=$cuerpo_mensaje;

							$cuerpo_mensaje=$texto_msj."Tipo Inmueble: ".$tipos[$model->tipo]."\n";

							$conditions[$id]=('tipo = '.$model->tipo);
							$id=$id+1;


						}
					}

					if(isset($_POST['BusquedaForm']['operacion'])){

						$model->operacion=$_POST['BusquedaForm']['operacion'];

						if(mb_strlen($model->operacion)>0){

							$operaciones=array("Tipo","Venta","Alquiler","AlquilerTemporada","Permuta");

							$texto_msj=$cuerpo_mensaje;

							$cuerpo_mensaje=$texto_msj."Tipo Operacion: ".$operaciones[$model->operacion]."\n";

							$conditions[$id]=('operacion = '.$model->operacion);
							$id=$id+1;
						}
					}




					if(isset($_POST['BusquedaForm']['precio_desde'])){

						$model->precio_desde=$_POST['BusquedaForm']['precio_desde'];

						$precio=$model->precio_desde;

						if(mb_strlen($precio)>0){


							$texto_msj=$cuerpo_mensaje;

							$cuerpo_mensaje=$texto_msj."Precio desde: ".$model->precio_desde.' $USD'."\n";

							$conditions[$id]=('valor >= '.$precio);	

							//$conditions[$id]=('valor > '.$model->precio_desde);
							$id=$id+1;
						}
					}

					if(isset($_POST['BusquedaForm']['precio_hasta'])){

						$model->precio_hasta=$_POST['BusquedaForm']['precio_hasta'];
						
						$precio_D=$model->precio_hasta;


						if(mb_strlen($precio_D)>0){


							$texto_msj=$cuerpo_mensaje;

							$cuerpo_mensaje=$texto_msj."Precio hasta: ".$model->precio_hasta.' $USD'."\n";

							$conditions[$id]=('valor <= '.$precio_D);	
							$id=$id+1;
						}
					}

					if(isset($_POST['BusquedaForm']['texto'])){

						$model->texto=$_POST['BusquedaForm']['texto'];

						$texto=$model->texto;
						if(mb_strlen($texto)>0){

							$texto_msj=$cuerpo_mensaje;

							$cuerpo_mensaje=$texto_msj."Opcion busqueda: ".$model->texto."\n";
							$conditions[$id]="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('*{$texto}*' IN BOOLEAN MODE)";		

						}

							//$model->texto=strlen($_POST['BusquedaForm']['texto']);

					//	$criteria->condition="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('{$model->texto}' IN BOOLEAN MODE)";
						//$conditions[$id]="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('*{$texto}*' IN BOOLEAN MODE)";
						//$conditions[0]="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('Casa' IN BOOLEAN MODE)";

					}


					//$model->id_departamento=$_POST['BusquedaForm']['id_departamento'];
					
					//$model->id_ciudad=$_POST['BusquedaForm']['id_ciudad'];

					//$model->id_barrio=$_POST['BusquedaForm']['id_barrio'];

					//$model->tipo=$_POST['BusquedaForm']['tipo'];	
	
					//$model->precio_desde=$_POST['BusquedaForm']['precio_desde'];	

					//$model->precio_hasta=$_POST['BusquedaForm']['precio_hasta'];

					//$model->texto=$_POST['BusquedaForm']['texto'];
				

					


					/*$conditions=array();
					$conditions[0]="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('{$model->texto}' IN BOOLEAN MODE)";

					$conditions[1]=('valor > '.$model->precio_desde);
					$conditions[2]=('valor < '.$model->precio_hasta);*/

					$criteria->condition = implode(' AND ', $conditions);





					//if (($_GET['search_key']))

					//$q = $_GET['search_key'];
					//$criteria->compare('nombre', $q, true,'OR');
					//$criteria->compare('tipo', $q, true,'OR');
			      	
			      	//$criteria->condition = "MATCH (nombre,direccion,titulo,descripcion) AGAINST (   IN BOOLEAN MODE) ";

			      	//$criteria->condition ="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('*{$_GET['search_key']}*'  IN BOOLEAN MODE)";

					//$criteria->condition ="MATCH (nombre,direccion,titulo,descripcion) AGAINST (   IN BOOLEAN MODE)";
				   
				   $dataProvider=new CActiveDataProvider("Inmuebles", array('criteria'=>$criteria));

					$itemCount=$dataProvider->itemCount;


				   if	($itemCount>0){

				   	$this->render('busqueda',array('dataProvider'=>$dataProvider));


				   //	$model=new ContactForm;
				   	//$this->render('contact',array('model'=>$model));
				   }

				   else
				   {

				   
				   	$correo->subject="Consulta de Inmueble";
				   	$correo->body="Busco un inmueble con estas caracteristicas:\n".$cuerpo_mensaje."\nSaludos ";
				   	$this->render('contact',array('model'=>$correo));

				   	//$this->render('busqueda',array('dataProvider'=>$dataProvider));

				   }

				  	 /*$criteria->condition ="MATCH (nombre,direccion,titulo,descripcion) AGAINST ('*{$_POST['search_key']}*'  IN BOOLEAN MODE)";

				    $dataProvider=new CActiveDataProvider("Inmuebles", array('criteria'=>$criteria));

				    $this->render('busqueda',array('dataProvider'=>$dataProvider));*/

				    // $this->render('busqueda',array('dataProvider'=>$dataProvider));
				
		 	}

		 	else{

			 	
			 	$dataProvider=new CActiveDataProvider("Inmuebles", array('criteria'=>$criteria));
			 	}
}
	//***********************************************


}
