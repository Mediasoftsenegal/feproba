<?php 
require 'connexion.php';
session_start();
$id=$_GET['id'];
$rest=select_installe($id);
$row=mysqli_fetch_array($rest);
$out=list_camp(); 
$res=liste_saison()
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</style>
  </head>
  <body>
  <section id="container" >
	<section id="main-content">
         <section class="wrapper">   
		 <div class="row">
		  <div class="col-lg-1"></div>
		  <div class="col-lg-10">
			 <form class="form-horizontal style-form" action="insert_fep.php" method="POST" >
						        <h3>Formulaire d'une nouvelle installation de culture</h3>
						        <div class="col-sm-5">
									<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Campagne</label>
										<select class="form-control" name="id_campagne"> 
											<option><?php echo $row['camp']; ?></option>
												<?php
											 while ($rowc=mysqli_fetch_array($out))
												{
												?>	
												<option value=<?php echo $rowc['ID_CAMPAGNE'];?>><?php echo $rowc['campagne']; ?></option>
												<?php 
												}
												mysqli_free_result($out);
											?>
										</select>	
									</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
											   <select class="form-control" name="id_saison"> 
													<option><?php echo $row['Saison']; ?></option>
														<?php
													 while ($rows=mysqli_fetch_array($res))
														{
														?>	
														<option value=<?php echo $rows['Id_Saison'];?>><?php echo $rows['Saison']; ?></option>
														<?php 
														}
													mysqli_free_result($res);
												?>
												</select>
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
										<label class="col-sm-2 col-sm-2 control-label"  >Secteur </label>
										  <select id="mySelect" class="form-control" name="nomsecteur" > 
												<option><?php echo $row['nomsecteur']; ?></option>
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
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label" >Bloc </label>
												<select class="form-control" name="nombloc"> 
													<option><?php echo $row['nombloc']; ?></option>
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
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >N° Parcelle </label>
												<select class="form-control" name="numparcelle"> 	
													<option><?php echo $row['numparcelle']; ?></option>
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
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Parcelle de production </label>
												<input type="text" name="parcelle_prod" id="fname" class="form-control"  value=<?php echo $row['PARCELLE_PRODUCTION'];?>>
												<input type="hidden" name="id_ins" class="form-control"  value=<?php echo $id;?>>
												
										</div>
									</div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Mode de sémis</label>
													<input type="text" name="mode_semis" id="fname" class="form-control"  value=<?php echo $row['MODE_SEMIS'];?>>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Superficie déclarée </label>
												<input type="text" name="superficiedeclaree" id="fname" class="form-control"  value=<?php echo $row['SUPERFICIE_DECLAREE'];?>>
										</div>
									</div>	
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Supérficie mesurée </label>
												<input type="text" name="superficiemesuree" id="fname" class="form-control"  value=<?php echo $row['SUPERFICIE_DECLAREE'];?>>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="">Topo séquence</label>
												<select class="form-control" name="toposequence" value=<?php echo $row['TOPOSEQUENCE'];?>>
												  <option><?php echo $row['TOPOSEQUENCE'];?></option>
												  <option value="BAS FOND">BAS FOND</option>
												  <option value="PLATEAU">PLATEAU</option>
												</select>
										</div>
									</div>	
									<div class="col-sm-5">	
									  <div class="form-group">
										<label class="">Travail sol</label>
											<input class="form-control"  type="text" id="fname" name="travailsol"  value=<?php echo $row['TRAVAILSOL'];?>>
										</div>
									</div>
									<div class="col-sm-1"></div>	
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">Pratiques paysannes</label>
												<input class="form-control"  type="text" id="fname" name="pratiquescf"  value=<?php echo $row['SUPERFICIE_DECLAREE'];?>>
										</div>
									</div>	
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">SRP</label>
												<select class="form-control" name="toposequence" value=<?php echo $row['SRP'];?>>
												  <option><?php echo $row['SRP'];?></option>
												  <option value="OUI">OUI</option>
												  <option value="NON">NON</option>
												</select>
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Utilisation ripper</label>
												<input class="form-control"  type="text" id="fname" name="utilisationripper"  value=<?php echo $row['USER_RIPER'];?>>
										</div>
									</div>	
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Date saisie</label>								
												<input class="form-control"  type="date" name="date_saisie" value=<?php echo $row['DATE_COLLECTE'];?>>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5"></div>	 
						   
						        			
      				</div>
					<div class="col-sm-5"></div>
					<div class="col-sm-4"></div>
					<div class="col-sm-3">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary" name="bt_modif_installation" >Enregistrer</button>     
					</div>	
										
					<div class="col-lg-1"></div>
					</div>
					</form>
					</div>
					</section>	
					</section>	
				  </section>	
				<!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
	