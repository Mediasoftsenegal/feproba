<?php
require'../connexion.php';
?>
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<!-- Mirrored from showwp.com/demos/ws-garden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 08:46:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Fédération des producteurs du bassin de l'Anambé">
    <meta name="mediasoft" content="">
    <meta name="keywords" content="Producteur, Riz, Sénégal, Anambé,Fédération,Soutouré, Intrant, Agriculture, Organisation paysanne, Kolda, Vélingara ">

    <title>FEPROBA | Fédération des Producteurs des Bassins de l'ANAMBE</title>

    <link rel="shortcut icon" href="images/" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>  
    <div id="loader">
        <div class="loader-container">
            <img src="images/load.gif" alt=""  witdth="25" lenght="25" class="loader-site spinner">
        </div>
    </div>
    <div id="wrapper">
        <div class="topbar clearfix">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-6 text-left">
                        <div class="social">
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        </div><!-- end social -->
                    </div><!-- end left -->
                    <div class="col-md-3 text-middle">
                        <p>
                            <strong><i class="fa fa-phone"></i></strong> +221.77 510 94 51. &nbsp;&nbsp;<br>
                            <strong><i class="fa fa-envelope"></i></strong> <a href=mailto:feproba.anambe@gmail.com> feproba.anambe@gmail.com</a>
                        </p>
					</div>
					<div class="col-md-3 text-right">					
							<ul class="nav pull-right top-menu">
								<li><a href="../login.php" class="btn btn-default">Connexion</a></li>
							</ul>
                    </div><!-- end left -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <header class="header">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <nav class="navbar yamm navbar-default">
                            <div class="container-full">
                                <div class="navbar-table">
                                    <div class="navbar-cell">
                                        <div class="navbar-header">
                                            <a class="rounded-circle" href="i"><img src="images/logo2.jpg"   height="100" width="100"  alt="Feproba"></a>
                                            <div>
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="fa fa-bars"></span>
                                                </button>
                                            </div>
                                        </div><!-- end navbar-header -->
                                    </div><!-- end navbar-cell -->

                                    <div class="navbar-cell stretch">
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                            <div class="navbar-cell">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle active">Accueil <b class=""></b></a>
                                                    </li>
                                                    <li><a href="#Apropos">A propos de </a></li>
                                                    <li><a href="#servic">Services</a></li>
                                                    <li><a href="#dispo">Disponibilité</a></li>
                                                    <li><a href="#actualites">Actualités</a></li>
                                                    <li><a href="#cont">Contact</a></li>
                                                </ul>
                                            </div><!-- end navbar-cell -->
                                        </div><!-- /.navbar-collapse -->        
                                    </div><!-- end navbar cell -->
                                </div><!-- end navbar-table -->
                            </div><!-- end container fluid -->
                        </nav><!-- end navbar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </header>

        <div class="slider-section">
            <div class="tp-banner-container">
                <div class="tp-banner">
                    <ul>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_02.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_02.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Organiser la production agricole
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Concertation et échanges entre <br>les organisations de producteurs 
                            </div>
							
                        </li>
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_01.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_01.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Rechercher des partenaires techniques et financiers

                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Représenter et défendre <br> les intérêts des producteurs 
                            </div>
                        </li>
						 <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_03.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_03.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Faciliter l’accès aux marchés agricoles 
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Assurer des services agricoles <br> aux producteurs

                            </div>
                        </li>
						 <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_04.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_04.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Renforcer les capacités des producteurs 

                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Coopération et une concertation <br> permanente entre ses membres 
                            </div>
                        </li>
						 <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_05.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_05.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Promouvoir l’égalité et l’équité de genre 

                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"> le respect de l’équité et <br> de l’égalité de genre <br>au sein de la fédération 
                            </div>
                        </li>
						<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_06.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_06.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Renforcer les cadres de concertation et de partenariat entre les acteurs de sa zone d’intervention

                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Servir de cadre d’information, <br> de réflexion et d’analyse aux producteurs 
                            </div>
                        </li>
						<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_07.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_07.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Outils de prévention des risques
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">la prévention et <br> la gestion des conflits.

                            </div>
                        </li>
						<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_08.jpg"  data-saveperformance="off"  data-title="FEPROBA">
                            <img src="upload/slider_08.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <div class="tp-caption slider_layer_02 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="230" 
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Plan stratégique
                            </div>
                            <div class="tp-caption slider_layer_01 text-center lft tp-resizeme"
                                data-x="center"
                                data-y="295" 
                                data-speed="1000"
                                data-start="1200"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="1000"
                                style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Elaboration et mise en Oeuvre <br> des programmes d'activité
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
		<div class="container">
			<div id="Apropos" class="blog-title">
					<h2><a href="#" title="" >A propos de</a></h2>
                    <p align="justify">La FEPROBA regroupe 5 449 personnes physiques appartenant à quatre (04) Unions Hydrauliques dont les membres sont 264 Groupements d’Intérêt Economique (GIE), Une union des femmes étuveuses et une Association des Eleveurs du Bassin de l'Anambé. Les organes exécutifs, de contrôle et de délibération de la FEPROBA sont :
					<ul>
						<li> Le Bureau Exécutif, </li>
						<li> Le Conseil d’Administration,</li>
						<li> La Commission de Contrôle et l’Assemblée Générale.</li>
					</ul>
					A cela, s’ajoutent les diverses Commissions Techniques chargées de l’élaboration et de la mise en œuvre des programmes d’activités.</p><br>
					<p align="justify"> 
					Quant à l’Union Hydraulique, elle est administrée par un Bureau Exécutif, un Comité Directeur et une Commission de Contrôle. Des commissions techniques sont également mises en place pour accompagner les dirigeants dans l’élaboration et la mise en œuvre des programmes d’activités. Au niveau de l’échelon inférieur de l’organigramme de la FEPROBA, nous retrouvons les groupements de base qui ont le statut juridique de Groupement d’Intérêt Economique. Chaque groupement de base est dirigé par un Bureau Exécutif qui s’appuie sur des Commissions Techniques pour réaliser les activités de production agricole. Il est également créé une Commission de Contrôle au niveau de chaque groupement de base.
					</p>
					<div class="col-md9">
                        <div class="content-widget">
                            <div class="widget-title">
                               
                                <hr>
                            </div>
                            
                            <div class="alert alert-warning" role="alert">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Union/secteur</th>
                                        <th> Nombre de GIE </th>
                                        <th> Date de création</th> 
                                        <th> Nombre de membres</th>
										<th> Superficies aménagées en ha </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Union des secteurs 1 et 2 </td>
                                        <td>42</td>
                                        <td>1992</td>
                                        <td>1 299</td>
										<td>1 365</td>
                                    </tr>
                                    <tr>
                                        <td> Union des secteurs 3 et 4</td>
                                        <td>81 </td>
                                        <td>1992</td>
                                        <td>1 310 </td>
										<td>1 090</td>   
                                    </tr>
                                    <tr>
                                        <td>Union du secteur 5</td>
                                        <td>54</td>
                                        <td>1996</td>
                                        <td>1 331</td>
										<td>1 345</td>  
                                    </tr>
									<tr>
                                        <td>Union du secteur G</td>
                                        <td>93</td>
                                        <td>1992</td>
                                        <td>1 509</td>
										<td>1 200</td>
                                    </tr>
									<tr>
                                        <td><b>Total</b></td>
                                        <td><b>270</b></td>
                                        <td></td>
                                        <td><b>5 449</b></td>
										<td><b>5 000</b></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            
                        </div><!-- end content-widget -->
                    </div><!-- end col -->
            </div><!-- end desc -->
		</div>	
        <section class="section grey">
            <div class="container">
                <div class="general-title text-center">
                    <h4>Activités</h4>
                    <p class="lead">4 raisons de nous choisir </p>
                    <hr>
                </div><!-- end general title -->

                <div class="row module-wrapper text-center">
                    <div class="col-md-3 col-sm-3 why-us">
                        <img src="images/icons/icon_01.png" alt="" class="wow fadeIn">
                        <strong>Agriculture (céréaliculture, maraîchage, Arboriculture, floriculture) </strong> 
                        <p>La fédération des producteurs du bassin de l’Anambé (Feproba) veut se positionner en leader dans la production de semences de riz. </p>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-3 why-us">
                        <img src="images/icons/icons_02.png" alt="" class="wow fadeIn">
                        <strong>Elevage (bovins, ovin, caprins, volaille ; production, transformation et commercialisation du lait) </strong> 
                        <p>Toutes ces activités sont accompagnées par le développement de moyens, d’instruments</p>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-3 why-us">
                        <img src="images/icons/icons_03.png" alt="" class="wow fadeIn">
                        <strong> Apiculture </strong> 
                        <p>Mécanismes de financement des initiatives des membres dans tous les domaines</p>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-3 why-us">
                        <img src="images/icons/icons_04.png" alt="" class="wow fadeIn">
                        <strong>Pêche continentale</strong> 
                        <p>la promotion de leur esprit d’entreprise et du renforcement de leurs capacités organisationnelles, techniques  </p>
                    </div><!-- end col -->
                </div><!-- end module-wrapper -->

                <hr class="invis">
				
            </div><!-- end container -->
        </section><!-- end section -->
  <section class="section white">
            <div class="container">
                <div id="dispo" class="general-title text-center">
                    <h4>Disponibilité de la Production Agricole en 2020</h4>
                    <p class="lead">Liste des disponibilités</p>
                    <hr>
                </div><!-- end general title -->
				<?php
					// ---------------------- PADDY-DEPOT-NERICA L19 ----------------
					$depots=Calcul_type('PADDY','NERICA L19','Depot');
					$row=mysqli_fetch_array($depots);
					$depot_ner=$row['Total_depot'];
					// PADDY-VENTE-NERICA L19
					$ventes=Calcul_type('PADDY','NERICA L19','vente');
					$rows=mysqli_fetch_array($ventes);
					$vente_ner=$rows['Total_depot'];
					
					// RESTE 
					$reste_paddy_ner=$depot_ner-$vente_ner;
					// -------------------- PADDY-DEPOT-SAHEL 108 -------------
					$depots2=Calcul_type('PADDY','SAHEL 108','Depot');
					$row2=mysqli_fetch_array($depots2);
					$depot2_108=$row2['Total_depot'];
					// PADDY-VENTE-SAHEL 108
					$ventes2=Calcul_type('PADDY','SAHEL 108','vente');
					$rows2=mysqli_fetch_array($ventes2);
					$vente2_108=$rows2['Total_depot'];
					// RESTE 
					$reste2_paddy_108=$depot2_108-$vente2_108;
					// -------------------- SEMENCES-DEPOT-NERICA L19 -------------
					$depots3=Calcul_type('SEMENCE','NERICA L19','Depot');
					$row3=mysqli_fetch_array($depots3);
					$depot3_ner=$row3['Total_depot'];
					// PADDY-VENTE-SAHEL 108
					$ventes3=Calcul_type('SEMENCE','NERICA L19','vente');
					$rows3=mysqli_fetch_array($ventes3);
					$vente3_ner=$rows3['Total_depot'];
					// RESTE 
					$reste3_paddy_ner=$depot3_ner-$vente3_ner;
					// -------------------- SEMENCES-DEPOT-SAHEL 108  -------------
					$depots4=Calcul_type('SEMENCE','SAHEL 108','Depot');
					$row4=mysqli_fetch_array($depots4);
					$depot4_108=$row4['Total_depot'];
					// PADDY-VENTE-SAHEL 108
					$ventes4=Calcul_type('SEMENCE','SAHEL 108','vente');
					$rows4=mysqli_fetch_array($ventes4);
					$vente4_108=$rows4['Total_depot'];
					// RESTE 
					$reste4_paddy_108=$depot4_108-$vente4_108;
				?>				
                <div class="pricing-tables">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="plan">
                                <div class="head">
                                    <h2>Paddy :Nérica L19</h2>
                                </div>  
                                <div class="price">
                                    <h3><?php echo $reste_paddy_ner;?><span class="symbol">&nbsp;tonnes</span></h3>
                                  
                                </div>
                                
                                <a href="#Appeler"><button type="button" class="btn btn-primary">Acheter</button></a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="plan">
                                <div class="head">
                                    <h2>Paddy : Sahel 108</h2>
                                </div>  
                                <div class="price">
                                    <h3><?php echo $reste2_paddy_108 ;?><span class="symbol">&nbsp;tonnes</span></h3>
                                 
                                </div>
                               
                                <a href="#Appeler"><button type="button" class="btn btn-primary">Acheter</button></a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="plan">
                                <div class="head">
                                    <h2>Semences : Nérica L19</h2>
                                </div>  
                                <div class="price">
                                    <h3><?php echo $reste3_paddy_ner; ?><span class="symbol">&nbsp;tonnes</span></h3>
                               
                                </div>
                                <a href="#Appeler"><button type="button" class="btn btn-primary">Acheter</button></a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <div class="plan">
                                <div class="head">
                                    <h2>Semences : Sahel 108</h2>
                                </div>  
                                <div class="price">
                                    <h3><?php echo $reste4_paddy_108; ?><span class="symbol">&nbsp;tonnes</span></h3>
                                   
                                </div>
                                <a href="#Appeler"><button type="button" class="btn btn-primary">Acheter</button></a>
                            </div>
                        </div>
                    </div> <!-- row-->
                </div> <!-- pricing-tables -->
            </div><!-- end container -->
        </section><!-- end section -->
        <section class="section grey">
            <div class="container">
                <div class="general-title text-center">
                    <h4>Niveau de Production par variétes</h4>
					<?php $lannee=date("Y")-1; ?>
                    <p class="lead">Taux de production des unions! <?php echo $lannee ;?></p>
                    <hr>
                </div><!-- end general title -->
				<?php 
				//
				$tonn=tonnage($lannee);
				$rowt=mysqli_fetch_array($tonn);
				$tot=$rowt['QTE_TOTALE']*1000;
				//
				$res=union_qtevendue($lannee);
				
					while($rowp = mysqli_fetch_array($res))
						{
						 switch ($rowp['nom_union'])
						 {
							case 'UNION I ET II':
								 $union1=$rowp['nom_union'];
								 $val1=$rowp['qtetotale'];
								 $tx=($val1/$tot);
								 $tx1=number_format(($tx*100),0,'.','');
								 break;
										 
								 case 'UNION III ET IV':
								 $union2=$rowp['nom_union'];
								 $val2=$rowp['qtetotale'];
								 $tx=($val2/$tot);
								 $tx2=number_format(($tx*100),0,'.','');
								 break;
									 
								 case 'UNION V':
								 $union3=$rowp['nom_union'];
								 $val3=$rowp['qtetotale'];
								 $tx=($val3/$tot);
								 $tx3=number_format(($tx*100),0,'.','');
								 break;
										 
								 case 'UNION DES GIES SECTEUR G':
								 $union4=$rowp['nom_union'];
								 $val4=$rowp['qtetotale'];
								 $tx=($val4/$tot);
								 $tx4=number_format(($tx*100),0,'.','');
								 break;
						}
					}		
				?>
                <div class="row module-wrapper shop-layout text-center">
                    <div class="col-md-3 col-sm-3 shop-item">
                        <div class="entry">
                            <img class="img-responsive" src="upload/shop_01.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-shopping-cart"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4><a href="">UNION I ET II  :</a></h4>
                        <small><?php echo ($tx1);?>%</small>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span>(12)</span>
                        </div>
                    </div><!-- end shop_item -->

                    <div class="col-md-3 col-sm-3 shop-item">
                        <div class="entry">
                            <img class="img-responsive" src="upload/shop_02.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-shopping-cart"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4><a href="shop-single.html">UNION III ET IV : </a></h4>
                        <small><?php echo ($tx2).'%';?></small>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>(3)</span>
                        </div>
                    </div><!-- end shop_item -->

                    <div class="col-md-3 col-sm-3 shop-item">
                        <div class="entry">
                            <img class="img-responsive" src="upload/shop_03.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-shopping-cart"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4><a href="shop-single.html">UNION V :</a></h4>
                        <small><?php echo ($tx3).'%';?></small>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <span>(6)</span>
                        </div>
                    </div><!-- end shop_item -->

                    <div class="col-md-3 col-sm-3 shop-item">
                        <div class="entry">
                            <img class="img-responsive" src="upload/shop_04.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-shopping-cart"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-link"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4><a href="#">UNION DES GIES SECTEUR G </a></h4>
                        <small><?php echo ($tx4).'%';?></small>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span>(22)</span>
                        </div>
                    </div><!-- end shop_item -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
		      <section class="section white">
            <div class="container">
                <div class="general-title text-center">
                    <h4>Bureau</h4>
                    <p class="lead">Les membres du bureau </p>
                    <hr>
                </div><!-- end general title -->
                <div class="row module-wrapper text-center">
                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="entry">
                            <img class="img-responsive" src="upload/team_02.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4>Oumar BALDE</h4>
                        <p>Président FEPROBA </p>
                    </div><!-- end team_member -->

                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="entry">
                            <img class="img-responsive" src="upload/team_02.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4> Fatoumata SABALY</h4>
                        <p>Vice-Présidente </p>
                    </div><!-- end team_member -->

                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="entry">
                            <img class="img-responsive" src="upload/team_01.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4> Issa BALDE</h4>
                        <p>Trésorier</p>
                    </div><!-- end team_member -->

                    <div class="col-md-3 col-sm-3 team-member">
                        <div class="entry">
                            <img class="img-responsive" src="upload/team_02.jpg" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
                        <h4> Moctarou SABALY</h4>
                        <p>Secrétaire Général </p>
                    </div><!-- end team_member -->
                </div><!-- row -->
            </div><!-- end container -->
        </section><!-- end section -->
        <section class="section darkbg fullscreen paralbackground parallax" style="background-image:url('upload/parallax_01.jpg');" data-img-width="1688" data-img-height="1125" data-diff="100">
            <div class="overlay customoverlay"></div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="videobg text-right">
                            <h1>Partenaires Stratégiques de la FEPROBA</h1>
							<div class="col-md-12 col-sm-6">
							<section class="section white">
            <div class="container">
                <div class="row service-style-2 text-center">
                    <div class="col-md-6 col-sm-6">
					<div class="services-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div align="left">
						<img src="upload/logo_sodagri.jpg">&nbsp;&nbsp;<b>LA SODAGRI</b> &nbsp; <br>
                        <br><img src="upload/cl.jpg">&nbsp;&nbsp;<b>LES COLLECTIVITES LOCALES</b>  &nbsp; <br>
                        <br><img src="upload/logo_veco.jpg"><b>&nbsp;&nbsp;RIKOLTO EN AFRIQUE DE L'OUEST</b> &nbsp;<br>
                        <br><img src="upload/logo_fao.jpg"><b>&nbsp;&nbsp;LA FAO </b>&nbsp;<br>
						<br><img src="upload/logo_UICN.jpg">&nbsp;&nbsp;<b>L’UICN/GWI</b> &nbsp; <br>
						</div>
						</div><!-- end custom-module -->
                    </div><!-- end col -->

                    <div class="col-md-5 col-sm-6">
                        <div class="services-1 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div align="left">
								
								<br><img src="upload/logo_UE.jpg">&nbsp;&nbsp;<b>L’UNION EUROPEENNE </b>  &nbsp; <br>
								<br><img src="upload/logo_Pam.jpg"><b>&nbsp;&nbsp;LE PROGRAMME ALIMENTAIRE MONDIAL</b> &nbsp;<br>
								<br><img src="upload/logo_fongip.jpg"><b>&nbsp;&nbsp;LE FONGIP </b>&nbsp;<br>
								<br><img src="upload/logo_BA.jpg"><b>&nbsp;&nbsp;LA BANQUE AGRICOLE</b>&nbsp;<br>
								<br><img src="upload/darre.png"><b>&nbsp;&nbsp;Tiers SUD/ BEY DAREE</b>&nbsp;<br>
							</div>
                        </div><!-- end custom-module -->
                    </div><!-- end col -->

                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
							
                        
                    
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

      

        <section class="section darkbg fullscreen paralbackground parallax" style="background-image:url('upload/parallax_01.jpg');" data-img-width="1688" data-img-height="1125" data-diff="100">
            <div class="overlay lightoverlay"></div>
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="Appeler" class="contact-details">
                            <h2>POUR UN RENDEZ-VOUS EN LIGNE, VEUILLEZ NOUS APPELER AUJOURD'HUI</h2>
                            <h1>+221.77 510 94 51</h1>
                            <h2>Soutouré. Kolda</h2>
                        </div>  
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section grey">
            <div id="actualites" class="container">
                <div class="general-title text-center">
                    <h4>Actualités</h4>
                    <p class="lead">Actualités de la fédération</p>
                    <hr>
                </div><!-- end general title -->

                <div class="row module-wrapper blog-widget">
					 <div class="col-md-4 col-sm-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">S’unir pour contribuer à l’autosuffisance en riz du Sénégal</a>
                                <h2><a href="#" title="">13 Décembre 2017 - FAO</a></h2>
                                <div class="blog-image">
                                    <a href="#" title=""><img src="upload/blog_02.jpg" alt="" class="img-responsive"></a>
                                </div><!-- end image -->
                                
                                <p align="justify">Les acteurs de la filière riz du Bassin de l’Anambé se réunissent pour mettre en place une plateforme multiacteurs
								Réunir autour d’une même table tous les acteurs de la chaine de valeur du riz pluvial, c’est la mission que s’est assignée l’Organisation des Nations Unies pour l’alimentation et l’agriculture (FAO) lors d’un atelier visant à jeter les bases de la création d’une plateforme multiacteurs riz, dans le bassin de l’Anambé, à Kolda.</p>
                                <a href="#" class="readmore">Lire la suite</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->
                    </div><!-- end col -->

                    <div class="col-md-4 col-sm-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">SODAGRI : La Feproba, leader en production de semences de riz</a>
                                <h2><a href="#" title="">23 août 2016 - Auteur : B. DIOUF </a></h2>
                                <div class="blog-image">
                                    <a href="#" title=""><img src="upload/blog_01.jpg" alt="" class="img-responsive"></a>
                                </div><!-- end image -->
                                <p align="justify">La fédération des producteurs du bassin de l’Anambé (Feproba) veut se positionner en leader dans la production de semences de riz. En tout cas, elle ambitionne de fournir toute la commande en semences pour les régions centres et sud du Sénégal. D’ailleurs pour la présente campagne elle a pu « satisfaire une demande de l’Etat pour 1148 tonnes de semences certifiées, toutes produites dans l’Anambé. </p>
                                <a href="#" class="readmore">Lire la suite</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->
                    </div><!-- end col -->

                   
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-wrapper">
                            <div class="blog-title">
                                <a class="category_title" href="#" title="">Attrait du riz de l'Anambé : Ruée vers l'or blanc</a>
                                <h2><a href="#" title="">08 août 2016 - sen360.sn </a></h2>
                                <div class="blog-image">
                                    <a href="#" title=""><img src="upload/blog_03.jpg" alt="" class="img-responsive"></a>
                                </div><!-- end image -->
                                
                                <p align="justify">Le bassin rizicole de Anambé attire de plus en plus de candidats à l'agriculture. Cette saison, sur 4 000 ha de terres aménagées dis­po­nibles 3 610 sont déjà emblavées à la date du 3 août dernier. Une attirance qui s'explique par prévalence de conditions de travail favorables, selon producteurs et techniciens.Agents de la Fonction publique, commerçants, artisans et paysans se bousculent sur les terres aménagées du bassin de l'Anambé. «Nous ne parvenons plus à satisfaire toutes les demandes d'emblavure dans le bassin.</p>
                                <a href="blog-single-1.html" class="readmore">Lire la suite</a>
                            </div><!-- end desc -->
                        </div><!-- end blog-wrapper -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section white">
            <div class="container">
                <div id="cont" class="general-title text-center">
                    <h4>Formulaire de Rendez-vous</h4>
                    <hr>
                    <p class="lead">Prenez un Rendez-vous maintenant via notre formulaire personnalisé</p>
                </div><!-- end general title -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="appoform-wrapper noborder">
                            <form method="post">
                                <fieldset class="row-fluid appoform">
                                    <div class="col-md-6">
                                        <label class="sr-only">Date de rendez-vous</label>
                                        <input id="datepicker" type="text" placeholder="Date de rendez-vous" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="sr-only">Prénom et nom</label>
                                        <input type="text" placeholder="Prénom et nom *" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="sr-only">Tél.</label>
                                        <input type="text" placeholder="Tel *" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="sr-only">Email </label>
                                        <input type="email" placeholder="Email  *" class="form-control">
                                    </div>
									<div class="col-md-6">
                                        <label class="sr-only">Captcha </label>
                                        <input type="email" placeholder="9+6  *" class="form-control">
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <textarea placeholder="Add extra notes" class="form-control"> 
                                            
                                        </textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="reset" class="btn btn-primary btn-block btn-lg">Envoyé</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div><!-- end form-container -->
                    </div><!-- end col -->
                    <div class="col-md-4">
                        <div class="workinghours">
                            <ul>
                                <li>Semaine <span>9:00 - 14:00</span></li>
                                <li>Week-end <span>Fermé</span></li>
                                <li>Tel. <span>+221.77 510 94 51.</span></li>
                                <li>E-Mail <span><a class="__cf_email__" href=mailto:feproba.anambe@gmail.com>feproba.anambe@gmail.com</a></span></li>
                                <li>site! <span>www.feproba.org</span></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="callout-section grey">
            <div id="servic" class="container">
                <div class="row callout text-left">
                    <div class="col-md-7">
                        <h3>Perspectives</h3>
                        <p class="lead">
						<ul>
							<li>Poursuite de la Production de semences pour satisfaire les besoins de la zone sud et au-delà </li>
							<li>Production et la labellisation du riz de Anambé</li>
							<li>Développement de la filière riz étuvé</li>
							<li>Densification du réseau partenarial</li>
							<li>Etablissement de contrats formels et durables pour la commercialisation du paddy, des semences et du riz étuvé produits dans le Bassin </li>
							<li>Plus de présence dans le mouvement associatif sénégalais et sous-régional </li>
							
						</p>
                        <a href="#" class="btn btn-default">En savoir plus</a>
                    </div>

                    <div class="col-md-5 hidden-xs hidden-sm">
                         <div class="text-center image-center image-center2">
                            <img src="upload/woman.png" alt="" class="img-responsive wow fadeInUp">
                        </div>
                    </div>
                </div><!-- end callout -->
            </div><!-- end container -->
        </section><!-- end section -->

        <footer class="footer">
            <div class="container">
                <div class="row module-wrapper">
                    <div class="col-md-6 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Contact</h4>
                            </div>
                            <ul class="site-links">
                                <li><i class="fa fa-link"></i> www.feproba.org</li>
                                <li><i class="fa fa-envelope"></i><a href:mailto:feproba.anambe@gmail.com>feproba.anambe@gmail.com</a></li>
                                /* <li><i class="fa fa-phone"></i> +221.77 510 94 51.</li> */
                                <li><i class="fa fa-home"></i> Soutouré, Kolda, Sénégal</li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-6 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Menu Général</h4>
                            </div>
                            <ul class="site-links">
                                <li><a href="depart.php">Accueil</a></li>
                                <li><a href="#Apropos">A propos de</a></li>
                                <li><a href="#servic">Services</a></li>
                                <li><a href="#dispo">disponibilité</a></li>
                                <li><a href="#actualites">Actualités</a></li>
                                <li><a href="#cont">Contact</a></li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </footer>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p>© 2020 Médiasoft@ </p>
                    </div><!-- end col -->
                    <div class="col-md-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Conditions d'utilisation</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                            
                        </ul>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    </div><!-- end wrapper -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/carousel.js"></script>
    <script src="js/custom.js"></script>

    <!-- SLIDER REV -->
    <script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:10000,
            startwidth:1170,
            startheight:600,
            hideThumbs:200,     
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,  
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview2",  
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,          
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",           
            keyboardNavigation:"off",   
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,  
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",  
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",  
            autoHeight:"off",           
            forceFullWidth:"off",                         
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,            
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""  
            }); 
        });
    </script>

    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery-ui-timepicker-addon.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script type="text/javascript">
        (function($) {
        "use strict";
            $('.selectpicker').selectpicker();
            $( "#datepicker" ).datepicker();
        })(jQuery);
    </script>

<script>/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/\>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>

<!-- Mirrored from showwp.com/demos/ws-garden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Mar 2017 08:46:39 GMT -->
</html>