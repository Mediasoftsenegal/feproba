<?php
if (!isset($_SESSION)) {
 session_start();
 $page=$_GET['page'];
if (isset($_GET['sec'])){
$sec=$_GET['sec'];
}}
?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fédération des Producteurs du Bassin de l'Anambé">
    <meta name="Feproba" content="Dashboard">
    <meta name="keyword" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>SODAGRI</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css">
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <script src="../assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="" class="logo"><b>SODAGRI</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
					<!--div class="showback"-->
      					
						<div class="btn-group">
						  <div class="btn-group">
						    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						      Identification
						      <span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu">
						      <li><a href="menu_so.php?page=tab_identi_bene&&num=1"><i class="fa fa-desktop"></i> Bénéficiaires </a></li>
						      <li><a href="menu_so.php?page=tab_ident_op"><i class="fa fa-desktop"></i> OP </a></li>
							  <li><a href="menu_so.php?page=tab_identi_cl"><i class="fa fa-bar-chart-o"></i> CL </a></li>
						    </ul>
						  </div>
						  
						  <div class="btn-group">
						    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						      Mise en place
						      <span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu">
						      <li><a href="#"><i class="fa fa-female"></i> Semences </a></li>
						      <li><a href="#"><i class="fa fa-tasks"></i> Par département </a></li>
						    </ul>
						  </div>
						  
						  <div class="btn-group">
						    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						      Cartographie
						      <span class="caret"></span>
						    </button>
						    <ul class="dropdown-menu">
						      <li><a href="#"><i class="fa fa-bar-chart-o"></i> Infrastructures </a></li>
						      <li><a href="menu_so.php?page=tab_cartographie_ca"><i class="fa fa-bar-chart-o"></i> CA </a></li>
						    </ul>
						  </div>
						  <a href="menu_so.php?page=tab_prev_embavure"><button type="button" class="btn btn-theme02"><i class="fa fa-book"></i> Prévisions emblavures</button></a>
						  <a href="menu_so.php?page=tab_materiel_agri"><button type="button" class="btn btn-theme03"><i class="fa fa-bar-chart-o"></i> Materiel Agricole</button></a>
						  <a href="menu_so.php?page=tab_suivi_indicateur"><button type="button" class="btn btn-theme06"><i class="fa fa-bar-chart-o"></i> Suivi Indicateur</button></a>
						<a href="menu_so.php?page=tab_suivi_agro"><button type="button" class="btn btn-theme04"><i class="fa fa-bar-chart-o"></i> Suivi Agronomique</button></a>
						</div>     
						<br><br>
      				<!--/div><!-- /showback -->
                    <!-- inbox dropdown start-->
						
						
						
						
						
						
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Deconnexion</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href=""><img src="img/logo.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php Echo 'SODAGRI '.$_SESSION['nom'];?></h5>
              	  	 <li class="mt">
                      <a  href="#">
                          <i class="fa fa-dashboard"></i>
                          <span>Tableau de bord</span>
                      </a>
                  </li>
                  <li class='sub-menu'>
					<a class='active' href='javascript:;' >
					<i class='fa fa-cogs'></i>
					<span>Paramètres</span>
					</a>
					<ul class='sub'>
						<li><a href='menu_so.php?page=tab_identi_bene&&num=1'><i class='fa fa-book'></i> Identification des beneficiares
</a></li>
						<li><a href='menu_pr.php?page=table_rep'><i class='fa fa-tasks'></i>Mise en place des semences
</a></li>
						<li><a href='menu_pr.php?page=tab_parcelles'><i class='fa fa-th'></i>Prevision emblavures
</a></li>
						<li><a href='menu_pr.php?page=table_variete'><i class='fa fa-bar-chart-o'></i>Mise en place par departement
</a></li>
						<li><a href='menu_pr.php?page=table_specul'><i class='fa fa-adjust'></i>Materiel Agricole
</a></li>
						<li><a href='menu_pr.php?page=tab_saison'><i class='fa fa-asterisk'></i>Identification OP
</a></li>
						<li><a href='menu_pr.php?page=tab_campagne'><i class='fa fa-anchor'></i>Suivi des indicateurs
</a></li>
						<li><a href='menu_pr.php?page=table_user'><i class='fa fa-users'></i>Cartographie des infrastructures
</a></li>
      <li><a href='menu_pr.php?page=table_user'><i class='fa fa-users'></i>Fiche de Suivi Agronomique

</a></li>
      <li><a href='menu_pr.php?page=tab_identi_cl'><i class='fa fa-users'></i>Identification des CL
</a></li>
      <li><a href='menu_so.php?page=tab_cartographie_ca'><i class='fa fa-users'></i>Cartographie des CA

</a></li>
					</ul>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <p><?php include ("$page.php"); ?></p>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2019 - @Mediasoft
              <a href="" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    <!--script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script-->

    <!--script for this page-->
	<script>
      //custom select box
      $(function(){
          $('select.styled').customSelect();
      });
  </script>
  </body>
</html>
