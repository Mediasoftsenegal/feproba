
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
     <meta name="Feproba" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
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
            <a href="" class="logo"><b>FEPROBA</b></a>
            <!--logo end-->
			
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
					
                    <!-- inbox dropdown start-->
						<a href="menu_sa.php?page=tab_carte3"><button type="button" class="btn btn-theme01"><i class="fa fa-female"></i> Cartograhie des parcelles </button></a>
						<a href="menu_sa.php?page=tab_ins_cul"><button type="button" class="btn btn-theme02"><i class="fa fa-book"></i> Installation des cultures</button></a>
						<a href="menu_sa.php?page=tab_ent_cul"><button type="button" class="btn btn-theme03"><i class="fa fa-tasks"></i> Entretien  des cultures</button></a>
						<a href="menu_sa.php?page=tab_op_recol"><button type="button" class="btn btn-theme06"><i class="fa fa-bar-chart-o"></i> Opérations  post récoltes</button></a>
					
						
						
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
              	  <h5 class="centered">FEPROBA</h5>
				   <li><h4 style="color:white"><center><?php Echo ' '.$_SESSION['nom'];?></center></h4>
                  </li>
                  <li class='sub-menu'>
					<a class='active' href='javascript:;' >
					<i class='fa fa-cogs'></i>
					<span>Suivi Agronomique</span>
					</a>
						<ul class='sub'>
							<li><a href='menu_sa.php?page=tab_carte3'><i class='fa fa-book'></i>Cartographie des parcelles</a></li>
							<li><a href='menu_sa.php?page=tab_ins_cul'><i class='fa fa-tasks'></i>Installations des cultures</a></li>
							<li><a href='menu_sa.php?page=tab_ent_cul'><i class='fa fa-th'></i>Entretien des cultures</a></li>
							<li><a href='menu_sa.php?page=tab_op_recol'><i class='fa fa-bar-chart-o'></i>Opérations post récolte</a></li>
							<li><a href='menu_sa.php?page=tab_recap'><i class='fa fa-adjust'></i>Tableau synthèse</a></li>
						</ul>
					</li>
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
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
