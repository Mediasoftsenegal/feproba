<?php
require'connexion.php';
session_start();
?>
<?php
 $id=$_GET['id'];
 $result=identite_parcelle($id);
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
						<h4>&nbsp;&nbsp;&nbsp;<b>Formulaire de modification d'une parcelle </b></h4>
						<div class="col-sm-1"></div>
						<div class="col-sm-10"> 	
							<div class="col-sm-6" >
							<form class="form-horizontal style-form" action="insert_fep.php" method="POST" >
								<h4 >Modification d'une parcelle</h4>
									<div >	
										<div class="form-group">
										<input type="hidden" name="pid_parcelles" value="<?php echo $row['id_parcelles'];?>">
										<label class="col-sm-12 col-sm-2 control-label" >Secteur</label>
											<div class="col-sm-6">
												<select class="form-control" name="pnomsecteur" required="required">
												  <option value="<?php echo $row['nomsecteur']; ?>"><?php echo $row['nomsecteur']; ?></option>
												  <option value="SECTEUR 1">SECTEUR 1</option>
												  <option value="SECTEUR 2">SECTEUR 2</option>
												  <option value="SECTEUR 4">SECTEUR 4</option>
												  <option value="SECTEUR 5">SECTEUR 5</option>
												  <option value="SECTEUR G">SECTEUR G</option>
												</select>
											</div>
										</div>
											<div class="form-group">
												<label class="col-sm-12 col-sm-2 control-label" >Bloc </label>
												  <div class="col-sm-6">
												   <input type="text" name="pnombloc" class="form-control" value="<?php echo $row['nombloc']; ?>">
												  </div>
											</div>
											<div class="form-group">
												<label class="col-sm-12 col-sm-2 control-label" >CT </label>
											  <div class="col-sm-6">
												<input type="text" name="pnomct" class="form-control" value="<?php echo $row['ct']; ?>">
											  </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 col-sm-2 control-label" >N° Parcelle </label>
												  <div class="col-sm-6">
											 	    <input type="text" name="pnumparcelle" class="form-control" value="<?php echo $row['numparcelle']; ?>">
												  </div>
											</div>
											<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label" >Nature parcelle </label>
											  <div class="col-sm-6">
												<select class="form-control" name="pnatureparcelle" required="required">
												  <option value="<?php echo $row['nature_parcelle']; ?>"><?php echo $row['nature_parcelle']; ?></option>
												  <option value="PRODUCTION SEMENCE">PRODUCTION SEMENCE</option>
												  <option value="PRODUCTION RIZ MARCHAND">PRODUCTION RIZ MARCHAND</option>
												</select>
											  </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 col-sm-2 control-label" >Longitude </label>
												 <div class="col-sm-6">
												   <input type="text" name="pxlongitude" class="form-control"  value="<?php echo $row['longitude']; ?>">
												  </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 col-sm-2 control-label" >Latitude </label>
											<div class="col-sm-6">
											   <input type="text" name="pxlatitude" class="form-control" value="<?php echo $row['latitude']; ?>">
											 </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 col-sm-2 control-label" >Bénéficiaire </label>
												<div class="col-sm-6">
												<input type="hidden" value="<?php echo $row['attributaire']; ?>" name="pattributaire">
												<?php $rest=identification($row['attributaire']); 
												   $ros=mysqli_fetch_array($rest)?>
													<select class="form-control" name="pid_repertoire"> 
														<option value="<?php echo $ros['id_repertoire'];?>"><?php echo $ros['prenom_nom'];?></option>
														<?php
														$res=listereps();
														while ($rowd=mysqli_fetch_array($res))
														{
														?>	
														<option value="<?php echo $rowd['id_repertoire']; ?>" ><?php echo $rowd['prenom_nom']; ?></option>
														<?php 
														}
														mysqli_free_result($res);
														?>
													</select>
												</div>
											</div>
											<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label" >Date attribution </label>
											<div class="col-sm-6">
												<input class="form-control"  type="date" name="pdate_attribution" value="<?php echo $row['date_attribution']; ?>">
											</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-primary" name="bt_up_parcelle" >Mettre à jour</button>
												<button type="button" class="btn btn-default" >Fermer</button>
											</div>
										</div> 				
							</div>
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