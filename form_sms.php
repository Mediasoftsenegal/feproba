<?php
  require 'form_config.php';
	//$sms = new SMS();
	
	//$sms->set_user_login($user_login);
	//$sms->set_api_key($api_key);
	//$sms->set_sms_mode($sms_mode);
	//$sms->set_sms_text($sms_text);
	//$sms->set_sms_recipients($sms_recipients);
	//$sms->set_sms_type($sms_type);
	//$sms->set_sms_sender($sms_sender);
	//$sms->set_sms_request_id(uniqid());
	//$xml = $sms->send();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	<style type="text/css" media="screen">@import url(css/normal.css);</style>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		ul {
		  float: right;
		  margin-top: 16px;
		  margin-right: 16px;
		  margin-bottom: 0px;
		  margin-left: 0px;
		  padding: 0px;
		  list-style: none;
		}
		li {
			  float: left;
			  margin-left: 3px;
			}
		#en-tete {
		  overflow: hidden;
		  background-color: #dae0d2;
		  background-image: url(../img/fond.png);
		  background-position: bottom;
		  background-repeat: repeat-x;
		}
	#en-tete ul li a {
	  float: left;
	  text-decoration: none;
	  letter-spacing: 1px;
	  padding-left: 10px;
	  background-image: url(../img/coin-gauche.png);
	  background-repeat: no-repeat;
	  background-position: 0% -250px;
	  
	}
	#en-tete ul li a span {
	  float: left;
	  padding-right: 10px;
	  padding-top: 4px;
	  padding-bottom: 3px;
	  padding-left: 0px;
	  background-image: url(../img/coin-droit.png);
	  background-repeat: no-repeat;
	  background-position: 100% -250px;
	  color: #ffffff;
	  
	  #en-tete ul li#actif {
	  float: left;
	  text-decoration: none;
	  letter-spacing: 1px;
	  padding-left: 10px;
	  background-image: url(../img/coin-gauche.png);
	  background-repeat: no-repeat;
	  background-position: 0% 0%;
	}
	#en-tete ul li#actif span {
	  float: left;
	  padding-right: 10px;
	  padding-top: 6px;
	  padding-bottom: 3px;
	  padding-left: 0px;
	  background-image: url(../img/coin-droit.png);
	  background-repeat: no-repeat;
	  background-position: 100% 0%;
	  color: #333333;
	}
		#en-tete ul li a:hover {
	  background-position: 0% -500px;
	}
	#en-tete ul li a:focus {
  background-position: 0% -500px;
}
	#en-tete ul li a:hover span {
	  background-position: 100% -500px;
	}
	#en-tete ul li a:focus span {
  background-position: 100% -500px;
}
}	
	</style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <!--header end-->
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 	  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		<div class="row mt">
      			<div class="col-lg-6 col-md-6 col-sm-12">
					<div id="en-tete">
      				<div class="showback">
      					<h4><i class="fa fa-angle-right"></i> Envoi sms</h4>
							<section class="panel">
                          <header class="panel-heading tab-bg-primary ">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#home">1.-Le texte</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#about">2.- Les destinataires</a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#profile">3.- Les options</a>
                                  </li>
                                 
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="home" class="tab-pane active">
                                     <div class="row mt">
										<div class="col-lg-12">
											<div class="form-panel">
												<h4 class="mb"><i class="fa fa-angle-right"></i> 1 - Rédigez votre texte</h4>
												<h6> Les retours à la ligne (touche "Entrée") comptent pour 2 caractères.</h6>
													<form class="form-horizontal style-form" method="get">
													  <div class="form-group">
														  <label class="col-sm-4 col-sm-6 control-label">Texte du sms à envoyer =></label>
														  <div class="col-sm-8">
															  <textarea id="w3review" name="textesms" rows="5" cols="50"></textarea>
															  <span class="help-block">Nombre de caractères  /1224. <br> Coût en SMS par contact :1 SMS</span>
														  </div>
														<div class="col-lg-8">
													   <button type="submit" class="btn btn-theme">Sauvegarder mon texte</button>
													   </div>
													   <div class="col-lg-4"> <a data-toggle="tab" href="#about">Etape suivante 2/3 >></a> </div>  
													  </div>
													</form>
											</div>
										</div><!-- col-lg-12-->      	
									</div>
                                  </div>
                                  <div id="about" class="tab-pane">
									<div class="row mt">
										<div class="col-lg-12">
											<div class="form-panel">
												<h4 class="mb"><i class="fa fa-angle-right"></i> 2 - Destinataires de la campagne</h4>					
													<form class="form-horizontal style-form" method="get">
													  <div class="row mt">
														<div class="col-lg-12">
															<div class="radio">
															<label>
															  <input type="radio" name="liste_eng" id="optionsRadios1" value="id_liste" checked>
															  je choisis une liste que j'ai déjà enregistrée
															</label>
															</div>
															<div class="radio">
															  <label>
																<input type="radio" name="num_clavier" id="optionsRadios2" value="id_clavier">
																je tape mes numéros au clavier
															  </label>
															</div> <br>
															<div class="col-lg-12">
															<select class="form-control">
															  <option value="Liste 1">Liste 1</option>
															  <option value="Liste 2">Liste 2</option>
															  <option value="Liste 3">Liste 3</option>
															  <option value="Liste 4">Liste 4</option>
															  <option value="Liste 5">Liste 5</option>
															</select>
															<br>
															<label>Tapez au clavier les numéros de vos destinataires, précédés du préfixe international, séparés par une virgule <br>(+221770001012,22177640030201, ...).</labels>
															<br>
															<div class="col-sm-8">
															  <textarea id="w3review" name="textedestinataire" rows="5" cols="50"></textarea>
															</div>
													   </div>
													   <br><br>
															<div class="col-lg-8">
													   <div class="col-lg-8"> <a data-toggle="tab" href="#home"> << Etape Précédente 1/3 </a> </div> 
													   </div>
													   
													   <div class="col-lg-4"> <a data-toggle="tab" href="#profile"> Etape suivante 3/3 >> </a> </div>  
													  </div>
														</div>
													  </div>
													</form>
											</div>
										</div><!-- col-lg-12-->      	
									</div>
								  <div id="profile" class="tab-pane">
								  
								  <div class="row mt">
									<div class="col-lg-12">
										<div class="form-panel">
										  <h4 class="mb"><i class="fa fa-angle-right"></i> 3 - Choisissez vos options</h4>
										  <hr>
										  <form class="form-horizontal tasi-form" method="POST">
											<label class="checkbox-inline">
											  <div class="radio">
												<label>
													<input type="radio" name="optionsInstantane" id="optionsRadios1" value="1">
													Instantané
												</label>
											  </div>
											</label>
											<label class="checkbox-inline">
											  <div class="radio">
												<label>
													<input type="radio" name="optionsDiffere" id="optionsRadios2" value="1">
													Différé
												</label>
											  </div>
											</label>
											  <div class="form-group"></div>
												  <div class="form-group has-success">
													  <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Type d'envoi</label>
													 <div class="col-lg-10">
														<select class="form-control" name="type_envoi">
															  <option value="SMS MONDE">SMS MONDE</option>
														</select>
													</div>	
												  </div>
												  <div class="form-group has-warning">
													  <label class="col-sm-2 control-label col-lg-2" for="inputWarning">Expéditeur personnalisé</label>
													  <div class="col-lg-10">
														  <input type="text" class="form-control" id="inputWarning" name="exp_person">
													  </div>
												  </div>
												  <div class="col-lg-4"> <a data-toggle="tab" href="#about"> << Etape précédente 2/3  </a> </div>  
											  </form>
											</div><!-- /form-panel -->
										</div><!-- /col-lg-12 -->
									</div><!-- /row --></div>
								  </div>
                              </div>
                          </div>
                      </section>
						</div>
      				</div><!--/showback -->
      				
      				<! -- STRIPPED PROGRESS BARS -->
      				
					
      				<! -- ANIMATED PROGRESS BARS -->
      				<!-- /showback -->
      				
      				<! -- MODALS -->
      				<!-- /showback -->
      				
      				<! -- GRITTER NOTICES -->
      				<!-- /showback -->
      				
      			</div><! --/col-lg-6 -->
      			
      			
      			<div class="col-lg-6 col-md-6 col-sm-12">
      				
      				
      				<! -- DISMISSABLE ALERT -->
      				
      				
      				<! -- BADGES -->
      				<!-- /showback -->
      				
      				<! -- LABELS -->
      				<!-- /showback -->
      			
      			</div><!-- /col-lg-6 -->
      			
      		</div><!--/ row -->
          </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jjquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>




</body>
</html>