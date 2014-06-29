<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />

		<!--
		<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

		<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php #echo Yii::app()->request->baseUrl; ?>/css/form.css" />-->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilo_inmobiliaria.css" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>

	<body>
		<header>
			<?php $this->widget('booster.widgets.TbNavbar', array(
				'type'=>'inverse',
				'items'=>array(
					array(
						'class' => 'booster.widgets.TbMenu',
            			'type' => 'navbar',
						'items'=>array(
							array('label'=>'Inicio', 'url'=>array('/site/index')),
							array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
							array('label'=>'Contacto', 'url'=>array('/site/contact')),
							array('label'=>'Usuario', 'url'=>array('/usuarios/create')),
							array('label'=>'Inmueble', 'url'=>array('/inmuebles/create')),
							array('label'=>'Registrarse','url'=>array('/site/registro'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
							array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
					),
				),
			));?>
		</header><!-- /header -->

		<!-- CONTENIDO PAGINA -->
		<div class="container">
			<!-- BREADCRUMBS -->
			<div class="breadcrumbs">
				<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>
			</div><!--/ breadcrumbs -->

			<?php echo $content; ?>

		</div><!-- /contenido -->
		
		<!-- FOOTER -->
		<footer>

		</footer><!-- /footer -->
	</body>
</html>