<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
	<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://bootswatch.com/slate/bootstrap.css" media="screen">
    <link rel="stylesheet" href="http://bootswatch.com/assets/css/bootswatch.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/estilo_inmobiliaria.css" />
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/inmobiliaria.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
   
  	<style id="clearly_highlighting_css" type="text/css">/* selection */ html.clearly_highlighting_enabled ::-moz-selection { background: rgba(246, 238, 150, 0.99); } html.clearly_highlighting_enabled ::selection { background: rgba(246, 238, 150, 0.99); } /* cursor */ html.clearly_highlighting_enabled {    /* cursor and hot-spot position -- requires a default cursor, after the URL one */    cursor: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--cursor.png") 14 16, text; } /* highlight tag */ em.clearly_highlight_element {    font-style: inherit !important; font-weight: inherit !important;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow.png");    background-repeat: repeat-x; background-position: top left; background-size: 100% 100%; } /* the delete-buttons are positioned relative to this */ em.clearly_highlight_element.clearly_highlight_first { position: relative; } /* delete buttons */ em.clearly_highlight_element a.clearly_highlight_delete_element {    display: none; cursor: pointer;    padding: 0; margin: 0; line-height: 0;    position: absolute; width: 34px; height: 34px; left: -17px; top: -17px;    background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite.png"); background-repeat: no-repeat; background-position: 0px 0px; } em.clearly_highlight_element a.clearly_highlight_delete_element:hover { background-position: -34px 0px; } /* retina */ @media (min--moz-device-pixel-ratio: 2), (-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2) {    em.clearly_highlight_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--yellow@2x.png"); }    em.clearly_highlight_element a.clearly_highlight_delete_element { background-image: url("chrome-extension://pioclpoplcdbaefihamjohnefbikjilc/clearly/images/highlight--delete-sprite@2x.png"); background-size: 68px 34px; } } </style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style></head>
	

	<body style="padding-top: 10px;">
		<div class="container" id="page">
          <?php #if(Yii::app()->user->isGuest){ ?>
		        <div class="bs-component">
              <div class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">Inmobiliaria Control</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">
                    <?php 
                    if(Yii::app()->user->isGuest){ ?>
                    <li><a href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/site/page.html?view=about'?>">Acerca de</a></li>
                    <li><a href="<?php echo Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/site/contact'?>">Contacto</a></li>
                    <?php } ?>
                    <?php 
                    	if((Yii::app()->user->id != '') and (Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 1))
                    		echo '<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/usuarios/admin">Panel Control</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/solicitudes/index">Solicitudes</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/eventos/create">Agendar Visita</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/destacados/index">Destacados</a></li>' ?>  
                     <?php 
                    	if((Yii::app()->user->id != '') and (Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 3))
                      {
                    		echo '<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/eventos/index">Calendario</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/solicitudes/index">Solicitudes</a></li>';
                      }
                        ?>
                      <?php 
                      if((Yii::app()->user->id != '') and (Usuarios::model()->find('id='.Yii::app()->user->id)->id_rol == 2))
                      {

                        echo '<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/inmuebles/create">Alta Inmueble</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/usuarios/create">Clientes</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/solicitudes/index">Solicitudes</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/eventos/create">Agendar Visita</a></li>'.'<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/destacados/index">Destacados</a></li>';

                      }
                        ?>
                      
                  </ul>          
                  <ul class="nav navbar-nav navbar-right">        
                  	 <?php 
                    	if(Yii::app()->user->isGuest)
                    		echo '<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/site/login">Login</a></li>';
                    	else
                    		echo '<li><a href="'.Yii::app()->request->hostInfo.Yii::app()->request->baseUrl.'/site/logout">Logout('.Yii::app()->user->name.')</a></li>'; 
                    	   ?>

                  </ul>
                </div>
              </div>
            </div>
          <?php #} 
          #else{}
          ?>

		<!-- CONTENIDO PAGINA -->
		
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