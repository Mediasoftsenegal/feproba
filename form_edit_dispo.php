<?php
require'connexion.php';
$resul=select_dispo($_GET['id']);
$rowd=mysqli_fetch_array($resul);
?>
!DOCTYPE html>
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
  </head>

  <body>

  <section id="container" >  
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h3 class="mb">&nbsp;Disponibilité &nbsp;<i class="fa fa-angle-right"></i>&nbsp;Formulaire Edition  </h3>
						<form class="form-horizontal" action="insert_fep.php"  method="POST" >
							<div class="card-body">
								<input type="hidden" class="form-control"  name="id_dispo" id="id_dispo" value="<?php echo $rowd['id_dispo'];?>">
									<div class="form-group row">
										<label for="lname" class="col-sm-3 text-right control-label col-form-label">Union</label>
											<div class="col-sm-9">
												<select class="form-control" name="id_union"> 
													<option value=<?php echo $rowd['ID_UNION'];?>><?php echo $rowd['nom_union'];?></option>
														<?php
														 $rest=listeunion(); 
														 while ($row=mysqli_fetch_array($rest))
															{
															?>	
															<option value=<?php echo $row['ID_UNION'];?>><?php echo $row['nom_union']; ?></option>
															<?php 
															}
															mysqli_free_result($rest);
														?>
												</select>	
											</div>
										</div>
										<div class="form-group row">
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Nom magasin</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"  name="nom_magasin" id="fname" value="<?php echo $rowd['nom_magasin'];?>">
												</div>	
										</div>
										<div class="form-group row">
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Date dépôt</label>
												<div class="col-sm-9">
													<input type="date" class="form-control"  name="date_depot" id="fname"  value="<?php echo $rowd['date_depot'];?>">
												</div>	
										</div>
										<div class="form-group row">
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Type d'opération</label>
												<div class="col-sm-9">
													<select class="form-control" name="type_op"> 
														<option><?php echo $rowd['type_op'];?></option>
														<option value="Depot">Dépôt</option>
														<option value="Vente">Vente</option>																
													</select>	
												</div>
										</div>
										<div class="form-group row">
											<? $resv=listevariete();?>
												<label for="lname" class="col-sm-3 text-right control-label col-form-label">Nature de culture</label>
													<div class="col-sm-9">
														<select class="form-control" name="nature"> 
														<option><?php echo $rowd['nature'];?></option>
																<?php
															 while ($rowv=mysqli_fetch_array($resv))
																{
																?>	
														<option value=<?php echo $rowv['nature'];?>><?php echo $rowv['nature']; ?></option>
																<?php 
																}
																mysqli_free_result($resv);
															?>
														</select>	
													</div>
												</div>
										<div class="form-group row">					
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Variété</label>
												<div class="col-sm-9">
													<select class="form-control" name="nom_type_varietes"> 
														<option><?php echo $rowd['variete'];?></option>
															<?php
																$result3=listespecul();
															 while ($row2=mysqli_fetch_array($result3))
																{
																?>	
														<option><?php echo $row2['nom_type_varietes']; ?></option>
																<?php 
																}
																mysqli_free_result($result3);
															
															?>
													</select>	
												</div>
											</div>
										<div class="form-group row">
											<label for="lname" class="col-sm-3 text-right control-label col-form-label">Quantité(en Tonnes)</label>
												<div class="col-sm-9">
													<input type="text" class="form-control"  name="quantite" id="fname" value="<?php echo $rowd['quantite'];?>">
												</div>	
										</div>
									</div>		
	
                                    </div>
								  <div class="modal-footer">
									<input type="button" value="Annuler" onclick="history.back()">
									
									<button type="submit" class="btn btn-primary" Name="btn_up_dispo">Enregistrer</button>
								  </div>
								  </form>