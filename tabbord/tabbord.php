<?php 
require '../connexion.php';
session_start();
?>
<?php
$valeur=explode("/",$_POST['search_camp']);
$annee=$valeur[0];
$nbre=nbre_unite('fep_union');
$val=nbre_unite('fep_repertoire');
$tonn=tonnage($annee);
$srt=totale_vente($annee);
$_SESSION['nbre']=$val;
	
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fédération des Producteurs du Bassin de l'Anambé">
    <meta name="Feproba" content="tableau de bord">
    <meta name="keyword" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
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
            <a href="Tabbord.php" class="logo"><b>FEPROBA</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
					
                    <!-- inbox dropdown start-->
						<a href="../param/param.php?page=asm"><button type="button" class="btn btn-theme05" ><i class="fa fa-cogs"></i> Paramètres</button></a>
						<a href="../suv/menu_sa.php?page=assa"><button type="button" class="btn btn-theme05" ><i class="fa fa-cogs"></i> Suivi agronomique </button></a>
						<a href="menu_en.php?page=asentre"><button type="button" class="btn btn-theme02"><i class="fa fa-book"></i> Stock</button></a>
						<a href="menu_ve.php?page=asvente"><button type="button" class="btn btn-theme03"><i class="fa fa-tasks"></i> Etat de ventes</button></a>
						<a href="tabbord.php"><button type="button" class="btn btn-theme04"><i class="fa fa-bar-chart-o"></i> Tableau de bord</button></a>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../login.php">Déconnexion</a></li>
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
              
              	  <p class="centered"><a href=""><img src="../img/logo.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php Echo 'Bonjour '.$_SESSION['nom'];?></h5>
              	  	
                  <li class="mt">
                      <a class="active" href="tabbord.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Tableau de Bord</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="../param/param.php?page=asm" >
                          <i class="fa fa-cogs"></i>
                          <span>Paramètres</span>
                      </a>
                  </li>

                  
				  <li class="sub-menu">
                      <a href="../suv/menu_sa.php?page=assa" >
                          <i class="fa fa-book"></i>
                          <span>suivi agronomique</span>
                      </a>
                          
                  </li>
                  <li class="sub-menu">
                      <a href="menu_en.php?page=asentre" >
                          <i class="fa fa-book"></i>
                          <span>Gestion du Stock</span>
                      </a>
                      
                  </li>
                  <li class="sub-menu">
                      <a href="menu_ve.php?page=asvente" >
                          <i class="fa fa-tasks"></i>
                          <span>Etats des ventes</span>
                      </a>
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
      <section id="main-content">
          <section class="wrapper">
            <div class="row">
                  <div class="col-lg-9 main-chart">
				  <form action="tabbord.php" method="POST">
				  <div class="row">
				 
				  <div class="col-lg-4"></div>
					<div class="col-lg-4"><div class="form-group">		
						<select class="form-control" name="search_camp"> 
							<option>Choisir une Campagne</option>
								<?php
									$out=list_camp(); 
										while ($row=mysqli_fetch_array($out))
										{
								?>	
								<option value="<?php echo $row['campagne']; ?>"><?php echo $row['campagne']; ?></option>
								<?php 
									}
									mysqli_free_result($out);
									?>
								?>
						</select>	
					</div></div>	
					<div class="col-lg-4"><button type="submit" class="btn btn-primary" name="bt_recherhce" >Rechercher</button></div>	
				  </div>
				  </form>
				  <h3>Tableau de bord année :<?php echo $annee; ?></h3>
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
								<?php
								 while ($row=mysqli_fetch_array($nbre))
									{
									?>	
									<h3>Unions :<?php echo $row['total'];?></h3>
									<?php 
									}
									mysqli_free_result($nbre);
									?>	
                  			</div>
					  			<p>Nombre d'unions recensés pour l'organisation FEPROBA</p>
                  		</div>
						<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_world"></span>
					  			<h3>An :<?php echo $annee;?></h3>
                  			</div>
					  			<p>Année exercice</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
									<span class="li_user"></span>
							<?php
								 while ($rowd=mysqli_fetch_array($val))
									{
									?>	
									<h3>Mbr :<?php echo $rowd['total']; 
									$_SESSION['totmbr']=$rowd['total'];?> </h3>
									<?php
									}
									mysqli_free_result($val);
									?>
                  			</div>
					  			<p>Membres</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
								<?php
								 while ($rowt=mysqli_fetch_array($tonn))
									{
									?>	
					  			<h3>P : <?php echo $rowt['QTE_TOTALE'];$_SESSION['qtetot']=$rowt['QTE_TOTALE']*1000;?>  T </h3>
								<?php
									}
									mysqli_free_result($tonn);
									?>
								
                  			</div>
					  			<p>Quantité totale récoltée</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
								<?php 
								while ($rowf=mysqli_fetch_array($srt))
								{
								?>
					  			<h4> <?php echo (number_format($rowf['som'],0,'',' '));?>  F CFA</h4>
								<?php
									}
								mysqli_free_result($srt);
									?>
                  			</div>
					  			<p>Chiffres d'affaires </p>
                  		</div>
                  		
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
						<div class="product-panel-2 pn">
								<div class="badge badge-hot">
									<h5>GENRE</h5>
								</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-database"></i><?php echo ($annee);?></p>
									</div>
	                      		</div>
								<canvas id="serverstatus01" height="120" width="120"></canvas>
								<script>
								<?php  
								$gen=calcul_genre($_SESSION['nbre']);
								while ($rowg=mysqli_fetch_array($gen))
									{
										$ntot=$_SESSION['totmbr'];
										
										switch($rowg['genre'])
										{
										
										case 'Femme' :									
											 
											 $tx=$rowg['nbre']/$ntot;
											 $tf=$rowg['nbre'];
											 $txf=number_format(($tx*100),2,'.','');
											break;
										
										case 'Homme':
											
											$th=$rowg['nbre'];
											$txs=$rowg['nbre']/$ntot;
											$txh=number_format(($txs*100),2,'.','');
											break;
										}	
									}
									mysqli_free_result($gen);
								?>
							
									var doughnutData = [
											{
												value: <?php echo $txf; ?>,
												color:"#2E76DA"
											},
											{
												value : <?php echo $txh; ?>,
												color : "#259AAA"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
								
								<p></p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-male" style="color:#259AAA" ></i> <?php echo ('Homme ='.$txh);?> % </br> <?php echo ('Homme ='.$th);?> </h5>
									</div>
									<div class="pull-right">
										<h5><i class="fa fa-female" style="color:#2E76DA" ></i><?php echo('Femme ='.$txf);?> % </br><?php echo('Femme ='.$tf);?> </h5>
									</div>
								</footer>
								
	                      	</div><! --/grey-panel -->
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="weather-2 pn">
                      			<div class="weather-2-header">
						  			<h5 align='center'>MEILLEURE PRODUCTION</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-bank"></i><?php echo ($annee);?></p>
									</div>
									
	                      		</div>
								<div class="col-sm-10 col-xs-6">
								<?php 
								$i=0;
								//$annee=($annee);
								$res=union_qtevendue($annee);
									while($rowp = mysqli_fetch_array($res))
									{
									 switch ($rowp['nom_union'])
									 {
										 case 'UNION I ET II':
										 $union1=$rowp['nom_union'];
										 $val1=$rowp['qtetotale'];
										 $tx=($val1/$_SESSION['qtetot']);
										 $tx1=number_format(($tx*100),0,'.','');
										 break;
										 
										 case 'UNION III ET IV':
										 $union2=$rowp['nom_union'];
										 $val2=$rowp['qtetotale'];
										 $tx=($val2/$_SESSION['qtetot']);
										 $tx2=number_format(($tx*100),0,'.','');
										 break;
										 
										 case 'UNION V':
										 $union3=$rowp['nom_union'];
										 $val3=$rowp['qtetotale'];
										 $tx=($val3/$_SESSION['qtetot']);
										 $tx3=number_format(($tx*100),0,'.','');
										 break;
										 
										 case 'UNION DES GIES SECTEUR G':
										 $union4=$rowp['nom_union'];
										 $val4=$rowp['qtetotale'];
										 $tx=($val4/$_SESSION['qtetot']);
										 $tx4=number_format(($tx*100),0,'.','');
										 break;
									 }
									}
								?>	
							
	                      		<div class="centered">
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $tx1;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($tx1*2).'%';?>">
											<span class="sr-only"><?php echo ($tx1*2).'%';?> (success)</span><?php echo ($tx1.'% : '.$union1); ?>
										</div>
									</div>
									<div class="progress">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $tx2;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($tx2*2).'%';?>">
										<span class="sr-only"><?php echo ($tx2*2).'%';?></span><?php echo ($tx2.'% : '.$union2); ?>
										</div>
									</div>
									<div class="progress">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo $tx3;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($tx3*2).'%';?>">
										<span class="sr-only"><?php echo ($tx3*2).'%';?> (warning)</span><?php echo($tx3.'% : '.$union3); ?>
									  </div>
									</div>
									<div class="progress">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $tx4;?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($tx4*2).'%';?>">
										<span class="sr-only"><?php echo ($tx4*2).'%';?></span><?php echo($tx4.'% : '.$union4);?>
									  </div>
									</div>
	                      		</div>
								
								</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="grey-panel pn donut-chart">
								<div class="grey-header">
									<h5>MEILLEURE UNION</h5>
								</div>
								<p><?php 
									$resul=elite('SEMENCE',$annee);
									 while ($rowe=mysqli_fetch_array($resul))
									 {
										 $qtes=$rowe['tonnage'];
										 $nomunion=$rowe['nom_union'];
									}
									 mysqli_free_result($resul);
								?> </p>
								<div class="row">
									<div class="col-md-6">
											<p><b><?php echo ($nomunion);?></b></br></p>
											<p class="small mt"> VARIETE : SEMENCE</p>
											<p><?php echo "Production :". $qtes.' Tonnes';?></p>
										</div>
									
									<?php 
									$resul=elite('PADDY',$annee);
									 while ($rowp=mysqli_fetch_array($resul))
									 {
										 $qtesp=$rowp['tonnage'];
										 $nomunionp=$rowp['nom_union'];
									}
									 mysqli_free_result($resul);
								?>	<div class="col-md-6">
										<p><b><?php echo ($nomunionp); ?></b></p>
										<p class="small mt">VARIETE : PADDY</p>
										<p><?php echo "Production  :". $qtesp.' Tonnes';?></p>
									</div>

								</div>
							</div>
						</div><!-- /col-md-4 -->
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-md-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="grey-header">
						  			<br><h5>TYPE DE VARIETE</h5>
                      			</div>
								<canvas id="serverstatus02" height="120" width="120"></canvas>
								<?php  
									$rst=calc_specul($annee);
										 while ($rowx=mysqli_fetch_array($rst))
											{
											 switch ($rowx['nom_specul'])
												{
												case 'NERICA L19' :
												$ner=$rowx['Total'];
												break;
												case 'SAHEL 108':
												$sahe=$rowx['Total'];
												break;
												}
											}
											
										mysqli_free_result($rst);
								?>
								<script>
									var doughnutData = [
											{
												value: <?php echo ($ner); ?>,
												color:"#EC780A",
												label: 'NERICA L19'
											},
											{
												value : <?php echo ($sahe); ?>,
												color : "#A9DA2E",
												label: 'SAHEL 108'
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p></p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o" style="color:#A9DA2E" ></i> <?php echo('NERICA L19='.$ner);?> T </h5>
									</div>
									<div class="pull-right">
										<h5><i class="fa fa-hdd-o" style="color:#EC780A" ></i><?php echo('SAHEL 108='.$sahe);?> T</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
						</div><!-- /col-md-4 -->
						
						
						<div class="col-md-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
							
								<br><p>REVENUE PAR UNION</p><br>						
								<?php $ret=union_production($annee);
								while ($rowru=mysqli_fetch_array($ret))
								{
								switch ($rowru['nom_union'])
									 {
										 case 'UNION I ET II':
										 $union1=$rowru['nom_union'];
										 $val1=$rowru['som'];
										 break;
										 
										 case 'UNION III ET IV':
										 $union2=$rowru['nom_union'];
										 $val2=$rowru['som'];
										 break;
										 
										 case 'UNION V':
										 $union3=$rowru['nom_union'];
										 $val3=$rowru['som'];
										 break;
										 
										 case 'UNION DES GIES SECTEUR G':
										 $union4=$rowru['nom_union'];
										 $val4=$rowru['som'];
										 break;
									 }
								}
								mysqli_free_result($rowru);								
								?>
								<p> UNION I ET II : <?php echo number_format($val1,0,',', ' ');?><br><br>
								
									UNION III ET IV : <?php echo number_format($val2,0,',', ' ');?><br><br>
									 								
									UNION V : <?php  echo number_format($val3,0,',', ' ');?><br><br>
									
									UNION DES GIES SECTEUR G : <?php echo number_format($val4,0,',', ' ');?>
												
								</P>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="green-panel pn">
								<div class="green-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->
						
					</div><!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>Chiffres d'Affaires des 3 dernières années <?php echo $annee-2; ?> -<?php echo $annee-1; ?> - <?php echo $annee; ?> en millions de F CFA</h3>
                      </div>
                      <div class="custom-bar-chart">
					  
					  <?php 
							$rest1=vente_variete($annee);
						?>
                          <ul class="y-axis">
                              <li><span>100 </span></li>
                              <li><span>75</span></li>
                              <li><span>50 </span></li>
                              <li><span>25 </span></li>
                              <li><span>10 </span></li>
                              <li><span>0</span></li>
                          </ul>
						  <?php while($row1=mysqli_fetch_array($rest1)){ ?>
                          <div class="bar">
						  <?php  
						  $ret=max_vente($annee);
							$rowm=mysqli_fetch_array($ret);
							$max=$rowm['montant'];
							$pourc=($row1['montant']/$max)*100
						  ?>
                              <div class="title"><?php echo ($row1['variete'].'-'.$row1['AN']); ?></div>
                              <div class="value tooltips" data-original-title="<?php echo ($row1['montant'].'*'.$row1['variete']); ?>" data-toggle="tooltip" data-placement="top"><?php echo $pourc;?>%</div>
                          </div>
                          <?php
							}
						  ?>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>IDENTIFICATION </h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p>Nom du Réseau : FEPROBA<br/>
                      		   Statut Jurique : GIE<br/> Adresse du réseau: SOUTOURE<br/>
                      		</p>
                      	</div>
                      </div>
					 
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p>Responsable moral :ISSA BALDE <br/>
                      		   Téléphone: 77 615 97 20<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p>Adresse mail: feproba.anambe@gmail.com <br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p>Activités principales du réseau<br/>
                      		  Production, Consolidation, Commercialisation,Financement<br/>
                      		</p>
                      	</div>
                      </div>
                      

                       <!-- USERS ONLINE SECTION -->
						<h3>COMPOSITION DU BUREAU</h3>
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="../assets/img/homme.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p>ISSA BALDE<br/>
                      		   <muted>Président</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="../assets/img/femme.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p>ASSOUMAO  BALDE<br/>
                      		   <muted>Vice Présidente</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="../assets/img/homme.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p>OMAR  BALDE<br/>
                      		   <muted>Vice Président</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="../assets/img/homme.jpg" width="35px" height="35px" align="">
                      	</div>
                      	<div class="details">
                      		<p>MOCTAR  BALDE<br/>
                      		   <muted>Sécretaire</muted>
                      		</p>
                      	</div>
                      </div>
                      
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2019 - @Mediasoft
              <a href="tabbord.php#" class="go-top">
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
    
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
	<script src="../assets/js/zabuto_calendar.js"></script>	
	<script src="../assets/js/chart-master/Chart.js"></script>
    <script src="../assets/js/chartjs-conf.js"></script>
	
	<script type="application/javascript">
		$(document).ready(function () {
		
		  $("#my-calendar").zabuto_calendar({
			cell_border: true,
			today: true,
			show_days: false,
			weekstartson: 0,
			language: "fr",
			nav_icon: {
			  prev: '<i class="fa fa-chevron-circle-left"></i>',
			  next: '<i class="fa fa-chevron-circle-right"></i>'
			}
		  });
		});
		</script>
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
			
        
            $("#my-calendar").zabuto_calendar({
				
                action: function () {
                    return myDateFunction(this.id, true);
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
	
	<script>
	 var barChartData = {
        labels : ["Jan.","Fev.","Mars","Avril","Mai","Juin","Juil.","Août","Sept.","Oct.","Nov.","Dec"],
        datasets : [
            {
                fillColor : "rgba(220,220,220,0.5)",
                strokeColor : "rgba(220,220,220,1)",
                data : [65,59,90,81,56,55,40]
            },
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [28,48,40,19,96,27,100]
            }
        ]

    };
	var mybarChart = new Chart(document.getElementById("barchart").getContext("2d")).Doughnut(barChartData);
	</script>
  </body>
</html>
