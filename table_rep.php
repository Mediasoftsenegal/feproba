<?php
require'connexion.php';
session_start();
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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
	
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript" class="init">

$(document).ready(function () {
	$('#example').DataTable();
});
	</script>
  </head>

  <body>
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <h3> Paramètres <i class="fa fa-angle-right"></i> Exploitants </h3>
              <div class="row mt">
				<div class="col-lg-12">
                    <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Liste des exploitants</h4>
						<div class="col-lg-6"></div>	
							<div class="row">
								<div class="col-lg-12">
									<div class="col-lg-3">
									<!-- Button trigger modal -->									
										<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
											+ Nouveau exploitant
										</button>
											<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
												<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																		<h4 class="modal-title" id="myModalLabel">Formulaire exploitant </h4>
																</div>
															<div class="modal-body">
																<div class="col-sm-5">								
																	<div class="form-group">
																		<label class="col-sm-2 col-sm-2 control-label">Prénom et nom </label>
																		<div class="col-sm-10">
																			<input type="text" name="prenom_nom" class="form-control" placeholder="Prénom et Nom">
																		</div>
																	</div>
																</div>
																<div class="col-sm-5">
																	<div class="form-group">	
																		<label class="col-sm-2 col-sm-2 control-label">Date de naissance</label>
																			<div class="col-sm-10">
																				<input type="date" name="date_naissance" class="form-control" placeholder="Date de naissance">
																			</div>
																	  </div>	
																</div>	
																<div class="col-sm-5">
																	<div class="form-group">
																		<label class="col-sm-2 col-sm-2 control-label">Genre </label>
																			<div class="col-sm-10">
																				<select name="genre"class="form-control" placeholder="choisir le genre">
																					<option value="Choisir le genre">Choisir le genre</option>
																					<option value="Homme">Homme</option>
																					<option value="Femme">Femme</option>
																				</select>
																			</div>
																	</div>	
																</div>
																<div class="col-sm-5">
																	<div class="form-group">
																		<label class="col-sm-2 col-sm-2 control-label">Région</label>
																			<div class="col-sm-10">
																				<select class="form-control" name="region"> 
																					<option>Choisir une région</option>
																					<?php
																						$reso=liste_reg();
																						while ($rowg=mysqli_fetch_array($reso))
																						{
																					?>	
																					<option><?php echo $rowg['Region']; ?></option>
																					<?php 
																						}
																					mysqli_free_result($reso);
																					?>
																				</select>								
																			</div>
																	</div>	
																</div>
																<div class="col-sm-5">												
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Département </label>
																			<div class="col-sm-10">
																				<select class="form-control" name="departement"> 
																					<option>Choisir un département</option>
																					<?php
																						$resd=liste_dep();
																						while ($rowd=mysqli_fetch_array($resd))
																						{
																						?>	
																						<option><?php echo $rowd['DEPARTEMENT']; ?></option>
																						<?php 
																						}
																						mysqli_free_result($resd);
																					?>
																				</select>								
																			</div>
																	</div>	
																</div>		
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-2 col-sm-2 control-label">Commune</label>
																			<div class="col-sm-10">
																				<select class="form-control" name="commune"> 
																					<option>Choisir une commune</option>
																						<?php
																							$resc=liste_comm();
																							while ($rowc=mysqli_fetch_array($resc))
																							{
																							?>	
																							<option value="<?php echo $rowc['COMMUNE']; ?>"><?php echo ($rowc['COMMUNE'].'('.$rowc['DEPART'].')'); ?></option>
																							<?php 
																							}
																							mysqli_free_result($resc);
																						?>
																				</select>								
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-2 col-sm-2 control-label">Village</label>
																		  <div class="col-sm-10">
																			  <input type="text"  name="village" class="form-control" placeholder="Village">
																		  </div>
																	</div>
																</div>	
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">N°Téléphone </label>
																		<div class="col-sm-10">
																			<input type="text"  name="numtel" class="form-control" placeholder="N° Téléphone">
																		</div>
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">N°Identification nationale </label>
																			<div class="col-sm-10">
																				<input type="text"  name="numcin" class="form-control" placeholder="N° Identification nationale">
																			</div>
																	</div>											
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Statut producteur </label>
																			<div class="col-sm-10">
																				<input type="text"  name="statut_producteur" class="form-control" placeholder="Statut producteur">
																			</div>
																	</div>
																</div>	
																<div class="col-sm-5">		
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Organisation de Base  </label>
																			<div class="col-sm-10">
																				<input type="text"  name="organi_base" class="form-control" placeholder="Organisation de Base">
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">											
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Statut organisation  </label>
																			<div class="col-sm-10">
																				<input type="text"  name="statut_organi" class="form-control" placeholder="Statut organisation">
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">		
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Année implication  </label>
																			<div class="col-sm-10">
																				<input type="text"  name="annee_implic" class="form-control" placeholder="Année implication">
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">			
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Droit d'adhésion </label>
																			<div class="col-sm-10">
																				<input type="text"  name="droit_adhesion" class="form-control" placeholder="Droit d'adhésion">
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Source de financement  </label>
																			<div class="col-sm-10">
																				<input type="text"  name="source_financement" class="form-control" placeholder="Source de financement">
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Chef de ménage  </label>
																			<div class="col-sm-10">
																				<input type="text"  name="chef_menage" class="form-control" placeholder="Chef de ménage">
																			</div>
																	</div>
																</div>	
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Membre ménage  </label>
																			<div class="col-sm-10">
																				<input type="text"  name="membre_menage" class="form-control" placeholder="Membre ménage">
																			</div>
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Menage d'appui </label>
																			<div class="col-sm-10">
																				<input type="text"  name="menage_appui" class="form-control" placeholder="Menage d'appui">
																			</div>
																	</div>
																</div>	
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">Animateur </label>
																			<div class="col-sm-10">
																				<input type="text"  name="animateur" class="form-control" placeholder="Animateur">
																			</div>
																	</div>
																</div>		
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-3 col-sm-3 control-label">	Observations </label>
																			<div class="col-sm-10">
																				<input type="hidden"  name="id_repertoire" id="id_repertoire" />
																				<input type="text"  name="observations" class="form-control" placeholder="	Observations">
																			</div>
																	</div>
																</div>																
																<div class="col-sm-1"></div>
																<div class="col-sm-5"></div>	
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button><br>
																<button type="submit" id="insert" class="btn btn-primary" name="bt_membre" >Enregistrer</button>
															</div>
									
														</div>      				
													</div>				
												</div>				
											</div>
										</div>	
									</form>
								</div>	
							<div class="col-lg-9">
								<form action="menu_pr.php?page=table_rep" class="form-signin" method="POST"> 			
									<div class="col-lg-5"> 	
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Prénom et Nom</label>								
												 <div class="col-sm-6">
														<input type="text" id="prenomnom" name="prenomnom" class="form-control col-lg-6" />
												 </div>
										</div>
									</div>	
									<div class="col-lg-5"> 	
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label">Organisation de Base</label>								
												 <div class="col-sm-6">
														<input type="text" id="nomsec" name="organise" class="form-control col-lg-6" />
												 </div>
										</div>
									</div>								
									<div class="col-lg-2"> 
										<button class="btn text-muted text-center btn-danger" name ="recher" valeur='Recherche' type="submit">Rechercher</button>
									</div> 
							</form> 
						</div> 
						<?php  if (isset($_POST['prenomnom'])|| ($_POST['organise']))
							{
								$result=listerep($_POST['prenomnom'],$_POST['organise']);							  
							}	
						$nbr=mysqli_num_rows($result); ?>					
					</div>
					<div class="fw-container">
						<div class="demo-html">
				<br> &nbsp; &nbsp;Nombre d'enregistrements : <?php echo $nbr; ?><br><br>
				 <section id="unseen">
                          <table   id="example" class="table table-bordered table-striped table-condensed" style="width:100%">	   
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Prénoms & Nom</th>
								  <th><i class="fa fa-edit"></i> Date de naissance </th>
								  <th><i class="fa fa-edit"></i> Age</th>
                                  <th><i class="fa fa-edit"></i> Genre </th>
                                  <th><i class="fa fa-edit"></i> Region </th>
								  <th><i class="fa fa-edit"></i> Commune </th>
								  <th><i class="fa fa-edit"></i> Village </th>
								  <th><i class="fa fa-edit"></i> N°Tél </th>
								  <th><i class="fa fa-edit"></i> N°CIN </th>
								  <th><i class="fa fa-edit"></i> Statut producteur </th>
								  <th><i class="fa fa-edit"></i> Organisation de base </th>
								  <th><i class="fa fa-edit"></i> statut Organisation </th>
								  <th><i class="fa fa-edit"></i> Année implication </th>
								  <th><i class="fa fa-edit"></i> Droit d'adhésion </th>
								  <th><i class="fa fa-edit"></i> Sources de financement </th>
								  <th><i class="fa fa-edit"></i> Chef de ménage </th>
								  <th><i class="fa fa-edit"></i> Membre ménage </th>
								  <th><i class="fa fa-edit"></i> Ménage d'appui </th>
								  <th><i class="fa fa-edit"></i> Animateur </th>
                                  <th></th>
								  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
								 while ($row=mysqli_fetch_array($result))
									{
									$age=calcul_age($row['date_naissance']);	
								?>		
								
                              <tr>
							  
								  <td style="display:none"><?php echo $row['id_repertoire']; ?></td>
                                  <td><?php echo $row['prenom_nom']; ?></td>
								  <td><?php echo $row['date_naissance']; ?></td>
								  <td><?php echo $age;?> ans</td>
                                  <td><?php echo $row['genre']; ?></td>
								  <td><?php echo $row['region']; ?> </td>
								  <td><?php echo $row['commune']; ?> </td>
								  <td><?php echo $row['village']; ?> </td>
								  <td><?php echo $row['numtel']; ?> </td>
								  <td><?php echo $row['numcin']; ?> </td>
								  <td><?php echo $row['statut_producteur']; ?> </td>
                                  <td><?php echo $row['organi_base']; ?></td>
								  <td><?php echo $row['statut_organi']; ?> </td>
								  <td><?php echo $row['annee_implic']; ?> </td>
								  <td><?php echo $row['droit_adhesion']; ?> </td>
								  <td><?php echo $row['source_financement']; ?> </td>
								  <td><?php echo $row['chef_menage']; ?> </td>
								  <td><?php echo $row['membre_menage']; ?> </td>
								  <td><?php echo $row['menage_appui']; ?> </td>	  
								  <td><?php echo $row['animateur']; ?> </td>
                                  <td> 
								  <a href="menu_pr.php?page=form_edit_rep&&asx=<?php echo $row['id_repertoire']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a></td>
								  <td><a href="#"><button class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash" aria-hidden="true"></spam></button></a>
                                  </td>
                              </tr>
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	

                              </tbody>
                          </table>
						 </section> 
						 </div>
						 </div>
						</div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

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

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

    </body>
</html>
