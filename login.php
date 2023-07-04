<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Mediasoft" content="Système de gestion de la Production agricole">
    <meta name="keyword" content="Plateforme de gestion agricole, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head> 
  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login"  method="POST" action="acces.php">
			  
		        <h2 class="form-login-heading">FEPROBA - Connexion</h2>
		        <div class="login-wrap">
		            <input type="text" name="login" class="form-control" placeholder="Login" autofocus>
		            <br>
		            <input type="password" name="pwd" class="form-control" placeholder="Mot de Passe">
		            <label class="checkbox">
		                
		            </label>
		            <button class="btn btn-theme btn-block" name="btconnexion"  type="submit"><i class="fa fa-lock"></i> Connexion</button>
		            <hr
		        </div>
		      </form>	  	
	  	</div>
	  </div>
	<!--footer start-->
      <footer >
      <div class="text-center">
		  <div class="col-lg-4 col-md-4 col-sm-4 mb"></div><div class="col-lg-4 col-md-4 col-sm-4 mb"></div><div class="col-lg-4 col-md-4 col-sm-4 mb"><div class="g-recaptcha" data-sitekey="6Lc7e7EZAAAAAOydfru_ppY4DaJJ5aTVnhPLGObO"></div></div>
      <div class="col-lg-12 col-md-12 col-sm-12 mb"></div>
		  <div class="col-lg-12 col-md-12 col-sm-12 mb"></div>
		  <div class="col-lg-12 col-md-12 col-sm-12 mb"></div>
      <div class="col-lg-4 col-md-4 col-sm-4 mb"><img src="img/N03_FR.jpg" width="220" ></div><div class="col-lg-4 col-md-4 col-sm-4 mb"><img src="img/fondation_france.jpg" width="110" height="84" ><div class="col-lg-4 col-md-4 col-sm-4 mb"><img src="img/cfsi.jpg" width="94" height="127" ></div></div><div class="col-lg-4 col-md-4 col-sm-4 mb"><img src="img/rikolto.jpg" width="120" height="80" ></div>  
          </div>
      </footer>
      <!--footer end-->
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
