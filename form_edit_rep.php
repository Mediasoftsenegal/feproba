<?php
require'connexion.php';
session_start();
?>
<?php
 $id=$_GET['asx'];
 $result=editreps($id);
 $row=mysqli_fetch_array($result);
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
  </head>

  <body>
		<section id="container" >      
			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<div class="row mt">
						<div class="col-md-12">
							<div class="content-panel">
								<div class="row">
								<div><h3>&nbsp;&nbsp;&nbsp; Paramètres&nbsp;<i class="fa fa-angle-right"></i> Formulaire de modification membre </h3><br></div>
								<div class="col-sm-1"></div>
								<div class="col-sm-10"> 	
									<div class="col-sm-6" >
									<form method="POST" action="insert_fep.php" >
										<div class="form-group has-success">
											<label> Prénom et Nom :</label>
											<input type="text" name="up_prenom_nom" id="up_prenom_nom" class="form-control" value="<?php echo  $row['prenom_nom']; ?>">
										</div>
										<div class="form-group has-success">
											<label> date de naissance :</label>
												<input type="date" name="up_date_naissance" id="up_date_naissance" class="form-control"  value="<?php echo  $row['date_naissance']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Genre:</label>
												<select name="up_genre"class="form-control" id="up_genre" >
													<option value="<?php echo  $row['genre']; ?>"><?php echo  $row['genre']; ?></option>
													<option value="Homme">Homme</option>
													<option value="Femme">Femme</option>
												</select>
										</div>
										<div class="form-group has-success">
											<label> Région:</label>
												<select class="form-control" name="up_region" id="up_region"> 
													<option><?php echo  $row['region']; ?></option>
													<?php
													$reso=liste_reg();
													while ($rowg=mysqli_fetch_array($reso))
													{
													?>	
													<option value="<?php echo $rowg['Region']; ?>"><?php echo $rowg['Region']; ?></option>
													<?php 
													}
														mysqli_free_result($reso);
													?>
												</select>	
										</div>
										<div class="form-group has-success">
											<label> Département:</label>
												<select class="form-control" name="up_departement" id="up_departement"> 
													<option><?php echo  $row['departement']; ?></option>
													<?php
													$resd=liste_dep();
													while ($rowd=mysqli_fetch_array($resd))
													{
													?>	
													<option value="<?php echo $rowd['DEPARTEMENT']; ?>"><?php echo $rowd['DEPARTEMENT']; ?></option>
													<?php 
													}
														mysqli_free_result($resd);
													?>
												</select>	
										</div>
										<div class="form-group has-success">
											<label> Commune:</label>
												<select class="form-control" name="up_commune" id="up_commune"> 
													<option><?php echo  $row['commune']; ?></option>
													<?php
													$resc=liste_comm();
													while ($rowc=mysqli_fetch_array($resc))
													{
													?>	
													<option value="<?php echo $rowc['COMMUNE']; ?>"><?php echo $rowc['COMMUNE']; ?></option>
													<?php 
													}
														mysqli_free_result($resc);
													?>
												</select>	
										</div>
										<div class="form-group has-success">
											<label> Village</label>
												<input type="text" name="up_village" id="up_village" class="form-control"  value="<?php echo  $row['village']; ?>">
										</div>
										<div class="form-group has-success">
											<label> N° Téléphone</label>
												<input type="text" name="up_numtel" id="up_numtel" class="form-control" value="<?php echo  $row['numtel']; ?>">
										</div>
										<div class="form-group has-success">
											<label> N° CIN</label>
												<input type="text" name="up_numcin" id="up_numcin" class="form-control" value="<?php echo  $row['numcin']; ?>">
										</div>
									</div>
									<div class="col-sm-6" >
										<div class="form-group has-success">
											<label> Statut Producteur:</label>
												<select name="up_statut_producteur"class="form-control" id="up_statut_producteur" >
													<option value="<?php echo  $row['statut_producteur']; ?>"><?php echo  $row['statut_producteur']; ?></option>
													<option value="Leader">Leader</option>
													<option value="Satellite">Satellite</option>
												</select>
										</div>
										<div class="form-group has-success">
											<label> Organisation de Base</label>
												<input type="text" name="up_organi_base" id="up_organi_base" class="form-control" value="<?php echo  $row['organi_base']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Statut organique</label>
												<input type="text" name="up_statut_organi" id="up_statut_organi" class="form-control"  value="<?php echo  $row['statut_organi']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Année implication :</label>
											<input type="text" name="up_annee_implic" id="up_annee_implic" class="form-control" value="<?php echo  $row['annee_implic']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Droit d'adhésion :</label>
											<input type="text" name="up_droit_adhesion" id="up_droit_adhesion" class="form-control"  value="<?php echo  $row['droit_adhesion']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Source de financement:</label>
											<input type="text" name="up_source_financement" id="up_source_financement" class="form-control" placeholder="Source de financement " value="<?php echo  $row['source_financement']; ?>">
										</div>
										<div class="form-group has-success">
											<div class="checkbox">
											<label>
											 <input type="checkbox"	name="chef_menage" value="1" <?php if ( isset( $_POST['chef_menage'])) echo  'checked="checked"'; ?>>Chef de ménage<br />
											</label>
											</div>
										</div>	
										<div class="form-group has-success">
											<div class="checkbox">
											<label>
											<input type="checkbox" name="membre_menage" value="1" <?php if ( isset( $_POST['membre_menage'])) echo  'checked="checked"'; ?>>Membre ménage<br />
											</label>
											</div>
										</div>	
										<div class="form-group has-success">
											<div class="checkbox">
											<label>
												<input type="checkbox" name="menage_appui" value="1" <?php if ( isset( $_POST['menage_appui'])) echo  'checked="checked"'; ?>>Ménage d'appui<br />
											</label>
											</div>
										</div>	
										<div class="form-group has-success">
											<label> Animateur:</label>
											<input type="text" name="up_animateur" id="up_animateur	" class="form-control" value="<?php echo $row['animateur']; ?>">
										</div>	
										<div class="form-group has-success">
											<label> Observations:</label>
											<textarea name="up_observations" id="up_observations"	class="form-control"  value="<?php echo  $row['observations']; ?>"></textarea>
										</div>	
									</div>
									<button type="submit" class="btn btn-success" name="bt_membreup">Mettre à jour</button>
									<a href="menu_pr.php?page=table_rep">
									<button type="button" class="btn btn-danger" >Fermer</button></a>
									<input type="hidden"  name="sid_repertoire" id="id_repertoire" value="<?php echo  $row['id_repertoire']; ?>">
								</div>
								<div class="col-sm-1"></div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
	</body>
</html>