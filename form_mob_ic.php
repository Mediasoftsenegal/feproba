<?php
require'connexion.php';
$result=prenomnom();
$result2=listevariete();
$result3=listespeculs();
$result4=list_camp();
$out=list_camp(); 
$res=liste_saison()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Installation des cultures">
    <meta name="Feproba" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
<header class="header black-bg">
		 <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
			  <a href="" class="logo"><b>FEPROBA</b></a>
			  <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
					
                    <!-- inbox dropdown start-->
						<a href="menu_mob.php"><button type="button" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i></button></a>
						<a href="menu_mob.php"><button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button></a>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div> <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Deconnexion</a></li>
            	</ul>
		 </header>  
            </div>
	<section id="main-content">
		<section class="wrapper">
			<h3><i class="fa fa-angle-right"></i> Installation des cultures</h3>
				<form class="form-horizontal style-form" action="insert_mob.php" method="POST">	
					<!--section id="main-content">
						<!--section class="wrapper">
							<!-- BASIC FORM ELELEMNTS -->
							<div class="row mt">
								<div class="col-lg-12">
									<div class="form-panel">
									 <h4 class="mb"><i class="fa fa-angle-right"></i> Formulaire d'installation des cultures</h4>
										<div class="col-md-2"> </div>	
										<div class="form-group">
										<label class="col-md-2 col-md-2 control-label">Campagne</label>
										<div class="col-md-2">
											<select class="form-control" name="id_campagne"> 
											<option>Choisir une campagne</option>
											<?php
											while ($row=mysqli_fetch_array($out))
											{
											?>	
											<option value=<?php echo $row['ID_CAMPAGNE'];?>><?php echo $row['campagne']; ?></option>
											<?php 
											}
											mysqli_free_result($out);
											?>
											</select>
										</div>
										<label class="col-md-2 col-md-2 control-label">Saison</label>
										<div class="col-md-2">
											<select class="form-control" name="id_saison"> 
											<option>Choisir une saison</option>
											<?php
											while ($row=mysqli_fetch_array($res))
											{
											?>	
											<option value=<?php echo $row['Id_Saison'];?>><?php echo $row['Saison']; ?></option>
											<?php 
											}
											mysqli_free_result($res);
											?>
											</select>
										</div>
										</div>  
										<div class="col-md-2"> </div>	
										<div class="form-group">
										<label class="col-md-2 col-md-2 control-label">Secteur</label>
										<div class="col-md-2">
											<select id="mySelect" class="form-control" name="nomsecteur" > 
												<option>Choisir un secteur</option>
												<?php
												$ress=liste_secteur();
												while ($rows=mysqli_fetch_array($ress))
												{
												?>	
												<option value="<?php echo $rows['nomsecteur']; ?>" ><?php echo $rows['nomsecteur']; ?></option>
												<?php 
												}
												mysqli_free_result($ress);
												?>
											</select>
										</div>
										<label class="col-md-2 col-md-2 control-label">Bloc</label>
										<div class="col-md-2">
										<select class="form-control" name="nombloc"> 
											<option>Choisir un bloc</option>
											<?php
											$resb=liste_bloc();
											while ($rowb=mysqli_fetch_array($resb))
											{
											?>	
											<option value="<?php echo $rowb['nombloc']; ?>" ><?php echo $rowb['nombloc']; ?></option>
											<?php 
											}
											mysqli_free_result($resb);
											?>
										</select>
										</div>
									</div>
									<div class="col-md-2"> </div>	
									<div class="form-group">
									<label class="col-md-2 col-md-2 control-label">CT</label>
										<div class="col-md-2">
										<select class="form-control" name="ct"> 	
										<option>Choisir un CT</option>
										<?php				
										$resct=liste_ct();
										while ($rowct=mysqli_fetch_array($resct))
										{
										?>	
										<option value="<?php echo $rowct['CT']; ?>" ><?php echo $rowct['CT']; ?></option>
										<?php 
										}
										mysqli_free_result($resct);
										?>
										</select>
										</div>
											<label class="col-md-2 col-md-2 control-label">N° Parcelle</label>
										<div class="col-md-2">
											<select class="form-control" name="numparcelle"> 	
												<option>Choisir une parcelle</option>
												<?php
												$ress=liste_parcelles2();
												while ($rowp=mysqli_fetch_array($ress))
												{
												?>	
												<option value="<?php echo $rowp['numparcelle']; ?>" ><?php echo $rowp['numparcelle']; ?></option>
												<?php 
												}
												mysqli_free_result($ress);
												?>
											</select>
										</div>
										</div>
										<div class="col-md-2"> </div>	
										<div class="form-group">
											<label class="col-md-2 col-md-2 control-label">Parcelle de production</label>
										<div class="col-md-2">
											<input type="text" name="parcelle_prod" id="fname" class="form-control" placeholder=" Choisir Parcelle de production">
										</div>
											<label class="col-md-2 col-md-2 control-label">Mode de sémis</label>
										<div class="col-md-2">
											<input type="text" name="mode_semis" id="fname" class="form-control" placeholder="Choisir Mode de sémis">
										</div>
										</div>
										<div class="col-md-2"> </div>	
										<div class="form-group">
											<label class="col-md-2 col-md-2 control-label">Superficie déclarée</label>
										<div class="col-md-2">
											<input type="text" name="superficiedeclaree" id="fname" class="form-control" placeholder="Choisir Superficie déclarée">
										</div>
											<label class="col-md-2 col-md-2 control-label">Supérficie mesurée</label>
										<div class="col-md-2">
											<input type="text" name="superficiemesuree" id="fname" class="form-control" placeholder="Choisir Supericie mesurée">
										</div>
										</div>
										<div class="col-md-2"> </div>	
										<div class="form-group">
											<label class="col-md-2 col-md-2 control-label">Topo séquence</label>
										<div class="col-md-2">
											<select class="form-control" name="toposequence" placeholder="Choisir Topo Séquence">
												<option>choisir une topo séquence</option>
												<option value="BAS FOND">BAS FOND</option>
												<option value="PLATEAU">PLATEAU</option>
											</select>
										</div>
										<label class="col-md-2 col-md-2 control-label">Travail sol</label>
										<div class="col-md-2">
										  <input class="form-control"  type="text" id="fname" name="travailsol" placeholder="Choisir Travail au sol"/>
										</div>
										</div>
										<div class="col-md-2"> </div>
										<div class="form-group">
											<label class="col-md-2 col-md-2 control-label">Pratiques payannes</label>
										<div class="col-md-2">
											<input class="form-control"  type="text" id="fname" name="pratiquescf" placeholder="Choisir Pratiques paysannes"/>
										</div>
											<label class="col-md-2 col-md-2 control-label">SRP</label>
										<div class="col-md-2">
											<select class="form-control" name="srp" placeholder="Choisir parcelle srp (oui/non)">
												<option>Choisir Parcelle SRP ?</option>
												<option value="NON">OUI</option>
												<option value="NON">NON</option>
											</select>
										</div>
										</div>
										<div class="col-md-2"> </div>	
										<div class="form-group">
											<label class="col-md-2 col-md-2 control-label">Utilisation ripper</label>
										<div class="col-md-2">
											<input class="form-control"  type="text" id="fname" name="utilisationripper" placeholder="Choisir Utilisation Ripper" />
										</div>
											<label class="col-md-2 col-md-2 control-label">Date de saisie</label>
										<div class="col-md-2">
											<input class="form-control"  type="date" name="date_saisie" placeholder="Choisir Date de saisie" />
										</div>
										</div>
										<div class="col-md-2"> </div>
										<div class="form-group">
											<label class="col-md-2 col-md-2 control-label">Nom exploitant</label>
										<div class="col-md-2">
											<input class="form-control"  type="text" id="exploitant" name="nom_exploitant_ins" placeholder="Choisir Nom exploitant" />
										</div>
											
										</div>
										<div class="col-md-2"> </div>	
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
											<button type="submit" class="btn btn-primary" name="bt_install_mob" >Enregistrer</button>
										</div>
									</div>
								</div><!-- cfol-lg-12-->      	
							</div><!-- /row -->				    
					<!--/section><! --/wrapper -->	
				<!--/section><!-- /MAIN CONTENT -->
			</form>	
		</section>
	  </section>	
  </body>
     <!--footer start-->
     <footer class="site-footer">
          <div class="text-center"> 2019 - @Mediasoft <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a></div>
     </footer>
      <!--footer end-->
</html>

