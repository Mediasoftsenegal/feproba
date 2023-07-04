<?php
require'connexion.php';
session_start();
?>
<?php
if (isset($_POST['search_camp']))
{
$ann=explode("/",$_POST['search_camp']);
$annee=$ann[0];
}	
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
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
	<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> STATISTIQUES DE LA PRODUCTION <?php echo $annee;?> </h3>
          	<div class="row mt">
			<br><br>
				<div class="col-lg-12">  <form action="menu_en.php?page=stat_prod" method="POST">
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
				  </form></div>
			<br>
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-12">
          		
					<! -- 1st ROW OF PANELS -->
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="weather-3 pn centered">
								<i class="fa fa-suitcase"></i>
								<h1>PRODUCTION ANNUELLE </h1>
								<div class="info">
								<?php  $tonn=tonnage($annee); 
									$rowt=mysqli_fetch_array($tonn);	
									?>
									<div class="row">
											<h3 class="centered"><?php echo $rowt['QTE_TOTALE'];?> T </h3>
										<div class="col-sm-6 col-xs-6 pull-left">
											<p class="goleft"><i class="fa fa-tint"></i> <?php echo $annee;?></p>
										</div>
										<div class="col-sm-6 col-xs-6 pull-right">
											<p class="goright"><i class="fa fa-flag"></i> Unions</p>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="grey-panel pn">
							<div class="grey-header">
									<h5>REPARTITION PRODUCTION : <?php echo $annee;?></h5>
								</div>
								<div class="row">
										<div class="col-md-6"><h3>PADDY</h3><br>
											<?php $res=tonnage_spec($annee,'PADDY','NERICA L19');
											$ron=mysqli_fetch_array($res) ;?>
											<h4>NERICA L19 : <?php echo $ron['Tonne'] ;?> T </h4><br>
											<?php $res=tonnage_spec($annee,'PADDY','SAHEL 108');
											$ron=mysqli_fetch_array($res) ;?>
											<h4>SAHEL 108: <?php echo $ron['Tonne'] ;?> T </h4>
										</div>
										<div class="col-md-6"> <h3>SEMENCE</h3><br>
										<?php $res=tonnage_spec($annee,'SEMENCE','NERICA L19');
											$ron=mysqli_fetch_array($res) ;?>
												<h4>NERICA L19: <?php echo $ron['Tonne'] ;?> T </h4><br>
										<?php $res=tonnage_spec($annee,'SEMENCE','SAHEL 108');
											$ron=mysqli_fetch_array($res) ;?>
												<h4>SAHEL 108: <?php echo $ron['Tonne'] ;?> T </h4>	
										</div>
									</div>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="weather-2 pn">
								<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6">
											<p>PRODUCTION PADDY PAR UNION : <?php echo $annee;?></p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
											<p class="big">en Tonnes</p>
										</div>
									</div>
								</div><!-- /weather-2 header -->
								
								<div class="row data">
									
									<div class="col-sm-6 col-xs-6 goleft">
										<h4><b>UNION I ET II</b></h4>
										<?php  $ter0=prod_variete_union($annee,"PADDY","NERICA L19","UNION I ET II");
											$rang0=mysqli_fetch_array($ter0);	
											// Total PADDY nerica L19
											$totner=$rang0['Tonne'];
											?>
										<h5>NERICA L19 :---> <?php echo $rang0['Tonne'];?> Tonnes</h5>
										<?php  $ter1=prod_variete_union($annee,"PADDY","SAHEL 108","UNION I ET II");
											$rang1=mysqli_fetch_array($ter1);
											$tot1=$rang0['Tonne']+$rang1['Tonne'];	
											// Total PADDY Sahel 108
											$totsh=$rang1['Tonne'];
											?>
										<h5>SAHEL 108 :---> <?php echo $rang1['Tonne'];?> Tonnes</h5>
									
										<h4><b>UNION III ET IV</b></h4>
										<?php  $ter2=prod_variete_union($annee,"PADDY","NERICA L19","UNION III ET IV");
											$rang2=mysqli_fetch_array($ter2);
											// Total PADDY nerica L19		
											$totner=$rang0['Tonne']+$rang2['Tonne'];											
											?>
										<h5>NERICA L19 :---> <?php echo $rang2['Tonne'];?> Tonnes</h5>
										<?php  $ter3=prod_variete_union($annee,"PADDY","SAHEL 108","UNION III ET IV");
											$rang3=mysqli_fetch_array($ter3);
											$tot2=$rang2['Tonne']+$rang3['Tonne'];
											// Total PADDY Sahel 108
											$totsh=$rang1['Tonne']+$rang3['Tonne'];	
											?>
										<h5>SAHEL 108 :---> <?php echo $rang3['Tonne'];?> Tonnes</h5>
									</div>
									<div class="col-sm-6 col-xs-6 goright">
										<h4><b>UNION V</b></h4>
										<?php  $ter4=prod_variete_union($annee,"PADDY","NERICA L19","UNION V");
											$rang4=mysqli_fetch_array($ter4);
											// Total PADDY nerica L19
											$totner=$rang0['Tonne']+$rang2['Tonne']+$rang4['Tonne'];
											?>
										<h5>NERICA L19 :---> <?php echo $rang4['Tonne'];?> Tonnes</h5>
										<?php  $ter5=prod_variete_union($annee,"PADDY","SAHEL 108","UNION V");
											$rang5=mysqli_fetch_array($ter5);	
											$tot3=$rang4['Tonne']+$rang5['Tonne'];	
											// Total PADDY sahel 108
											$totsh=$rang1['Tonne']+$rang3['Tonne']+$rang5['Tonne'];
											?>
										<h5>SAHEL 108 :---> <?php echo $rang5['Tonne'];?> Tonnes</h5>
										<h4><b>UNION DES GIES SECTEUR G</b></h4>
										<?php  $ter6=prod_variete_union($annee,"PADDY","NERICA L19","UNION DES GIES SECTEUR G");
											$rang6=mysqli_fetch_array($ter6);
											// Total PADDY nerica L19	
											$totner=$rang0['Tonne']+$rang2['Tonne']+$rang4['Tonne']+$rang6['Tonne'];
											?>
										<h5>NERICA L19 :---> <?php echo $rang6['Tonne'];?> Tonnes</h5>
										<?php  $ter7=prod_variete_union($annee,"PADDY","SAHEL 108","UNION DES GIES SECTEUR G");
											$rang7=mysqli_fetch_array($ter7);	
											$tot4=$rang6['Tonne']+$rang7['Tonne'];
											// Total PADDY sahel 108
											$totsh=$rang1['Tonne']+$rang3['Tonne']+$rang5['Tonne']+$rang7['Tonne'];											
											?>
										<h5>SAHEL 108 :---> <?php echo $rang7['Tonne'];?> Tonnes</h5>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->
					</div><! --/END 1ST ROW OF PANELS -->
					
					<! -- 2ND ROW OF PANELS -->
					<div class="row">
						<! -- TODO PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="weather-2 pn">
								<div class="weather-2-header">
									<div class="row">
										<div class="col-sm-6 col-xs-6">
											<p>PRODUCTION SEMENCE PAR UNION : <?php echo $annee;?></p>
										</div>
										<div class="col-sm-6 col-xs-6 goright">
											<p class="big">en Tonnes</p>
										</div>
									</div>
								</div><!-- /weather-2 header -->
								
								<div class="row data">
									<div class="col-sm-6 col-xs-6 goleft">
									<h4><b>UNION I ET II</b></h4>
										<?php  $tera0=prod_variete_union($annee,"SEMENCE","NERICA L19","UNION I ET II");
											$ranga0=mysqli_fetch_array($tera0);		
											// Total semence Nerica L19	
											$tosemne=$ranga0['Tonne'];
											?>
										<h5>NERICA L19 :---> <?php echo $ranga0['Tonne'];?> Tonnes</h5>
										<?php  $tera1=prod_variete_union($annee,"SEMENCE","SAHEL 108","UNION I ET II");
											$ranga1=mysqli_fetch_array($tera1);		
											$semtot1=$ranga0['Tonne']+$ranga1['Tonne'];
											// Total semence Sahel 108
											$totsensh=$ranga1['Tonne'];
											?>
										<h5>SAHEL 108 :---> <?php echo $ranga1['Tonne'];?> Tonnes</h5>
										
									
										<h4><b>UNION III ET IV</b></h4>
										<?php  $tera2=prod_variete_union($annee,"SEMENCE","NERICA L19","UNION III ET IV");
											$ranga2=mysqli_fetch_array($tera2);		
											// Total semence Nerica L19	
											$tosemne=$ranga0['Tonne']+$ranga2['Tonne'];
											?>
										<h5>NERICA L19 :---> <?php echo $ranga2['Tonne'];?> Tonnes</h5>
										<?php  $tera3=prod_variete_union($annee,"SEMENCE","SAHEL 108","UNION III ET IV");
											$ranga3=mysqli_fetch_array($tera3);	
											$semtot2=$ranga2['Tonne']+$ranga3['Tonne'];	
											// Total semence Sahel 108
											$totsensh=$ranga1['Tonne']+$ranga3['Tonne'];											
											?>
										<h5>SAHEL 108 :---> <?php echo $ranga3['Tonne'];?> Tonnes</h5>
											
									</div>
									<div class="col-sm-6 col-xs-6 goright">
										<h4><b>UNION V</b></h4>
										<?php  $tera4=prod_variete_union($annee,"SEMENCE","NERICA L19","UNION V");
											$ranga4=mysqli_fetch_array($tera4);	
											// Total semence Nerica L19	
											$tosemne=$ranga0['Tonne']+$ranga2['Tonne']+$ranga4['Tonne'];											
											?>
										<h5>NERICA L19 :---> <?php echo $ranga4['Tonne'];?> Tonnes</h5>
										<?php  $tera5=prod_variete_union($annee,"SEMENCE","SAHEL 108","UNION V");
											$ranga5=mysqli_fetch_array($tera5);	
											$semtot3=$ranga4['Tonne']+$ranga5['Tonne'];
											//Total semence Sahel 108
											$totsensh=$ranga1['Tonne']+$ranga3['Tonne']+$ranga5['Tonne'];
											?>
										<h5>SAHEL 108 :---> <?php echo $ranga5['Tonne'];?> Tonnes</h5>
										   
										<h4><b>UNION DES GIES SECTEUR G</b></h4>
										<?php  $tera6=prod_variete_union($annee,"SEMENCE","NERICA L19","UNION DES GIES SECTEUR G");
											$ranga6=mysqli_fetch_array($tera6);	
											// Total semence Nerica L19	
											$tosemne=$ranga0['Tonne']+$ranga2['Tonne']+$ranga4['Tonne']+$ranga6['Tonne'];
											?>
										<h5>NERICA L19 :---> <?php echo $ranga6['Tonne'];?> Tonnes</h5>
										<?php  $tera7=prod_variete_union($annee,"SEMENCE","SAHEL 108","UNION DES GIES SECTEUR G");
											$ranga7=mysqli_fetch_array($tera7);	
											$semtot4=$ranga6['Tonne']+$ranga7['Tonne'];	
											//Total semence Sahel 108
											$totsensh=$ranga1['Tonne']+$ranga3['Tonne']+$ranga5['Tonne']+$ranga7['Tonne'];											
											?>
										<h5>SAHEL 108 :---> <?php echo $ranga7['Tonne'];?> Tonnes</h5>
									</div>
								</div>
							</div>
						</div><! --/col-md-4 -->
						
						<! -- PROFILE 01 PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="green-panel pn">
								<div class="green-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div>
						<! -- PROFILE 02 PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="stock card">
					        	<table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Parcelles/Secteurs</th>
                                        <th scope="col">Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
									<?php   
										$sec=parcelle_nombre('SECTEUR 1');
										$ros=mysqli_fetch_array($sec);
									?>
                                        <td>SECTEUR I</td>
                                        <td><?php echo $ros['NBRE'];?> Parcelles</td>
                                    </tr>
                                    <tr>
									<?php   
										$sec1=parcelle_nombre('SECTEUR 2');
										$ros1=mysqli_fetch_array($sec1);
									?>
                                        <td>SECTEUR II</td>
                                        <td><?php echo $ros1['NBRE'];?> Parcelles</td>
                                    </tr>
                                    <tr>
									<?php   
										$sec2=parcelle_nombre('SECTEUR 4');
										$ros2=mysqli_fetch_array($sec2);
									?>
                                        <td>SECTEUR IV</td>
                                        <td><?php echo $ros2['NBRE'];?> Parcelles</td>
                                    </tr>
                                    <tr>
									<?php   
										$sec3=parcelle_nombre('SECTEUR 5');
										$ros3=mysqli_fetch_array($sec3);
									?>
                                        <td>SECTEUR V</td>
                                        <td><?php echo $ros3['NBRE'];?> Parcelles</td>
                                    </tr>
									 <tr>
									 <?php   
										$sec4=parcelle_nombre('SECTEUR G');
										$ros4=mysqli_fetch_array($sec4);
									?>
                                        <td>SECTEUR G</td>
                                        <td><?php echo $ros4['NBRE'];?> Parcelles</td>
                                    </tr>
                              </tbody>
                            </table>
					        </div>
						</div>
						<!--/ col-md-4 -->
					</div><! --/END 2ND ROW OF PANELS -->
					
					<! -- 3RD ROW OF PANELS -->
                      <!-- CHART PANELS -->
                      <div class="row">
                      	<!-- /col-md-4-->
                      	

                      	<!-- /col-md-4 -->

                      	<! --/col-md-4 -->
						<div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0"></h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">PRODUCTION TOTALE : <?php echo $annee;?></th>
                                        <th scope="col">Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
									<tr>
                                        <td><b>PADDY </b></td>
                                        <td> </td>
                                    </tr>
                                   <tr>
                                        <td> ====> NERICA L19</td>
                                        <td> <?php echo $totner; ?> Tonnes </td>
                                    </tr>
                                    <tr>
                                        <td> ====> SAHEL 108</td>
                                        <td><?php echo $totsh; ?> Tonnes </td>
                                    </tr>
                                    <tr>
                                        <td><b>SEMENCE</b></td>
                                        <td> </td>
                                    </tr>
									<tr>
                                        <td> ====> NERICA L19</td>
                                        <td> <?php echo $tosemne; ?> Tonnes </td>
                                    </tr>
									<tr>
                                        <td> ====> SAHEL 108 </td>
                                        <td> <?php echo $totsensh; ?> Tonnes </td>
                                    </tr>
                              </tbody>
                            </table>
                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0"></h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">PRODUCTION TOTALE PADDY : <?php echo $annee;?></th>
                                        <th scope="col">Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UNION I ET II - PADDY</td>
                                        <td> <?php echo $tot1; ?> Tonnes </td>
                                    </tr>
                                    <tr>
                                        <td>UNION III ET IV - PADDY </td>
                                        <td><?php echo $tot2; ?> Tonnes </td>
                                    </tr>
                                    <tr>
                                        <td>UNION V - PADDY </td>
                                        <td> <?php echo $tot3; ?> Tonnes </td>
                                    </tr>
									<tr>
                                        <td>UNION DES GIES SECTEUR G - PADDY</td>
                                        <td> <?php echo $tot4; ?> Tonnes </td>
                                    </tr>
                                   
                                    
                              </tbody>
                            </table>
                        </div>
                    </div>
					<div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0"></h5>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Production totale SEMENCE EN <?php echo $annee;?></th>
                                        <th scope="col">Quantité</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UNION I ET II - SEMENCE</td>
                                        <td> <?php echo $semtot1; ?> Tonnes </td>
                                    </tr>
                                    <tr>
                                        <td>UNION III ET IV - SEMENCE </td>
                                        <td><?php echo $semtot2; ?> Tonnes </td>
                                    </tr>
                                    <tr>
                                        <td>UNION V - SEMENCE </td>
                                        <td> <?php echo $semtot3; ?> Tonnes </td>
                                    </tr>
									<tr>
                                        <td>UNION DES GIES SECTEUR G - SEMENCE</td>
                                        <td> <?php echo $semtot4; ?> Tonnes </td>
                                    </tr>
                                   
                              </tbody>
                            </table>
                        </div>
                    </div>
                    </div><!-- /END CHART - 4TH ROW OF PANELS -->
                   
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
	  
	   <!--main content end-->
      
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
