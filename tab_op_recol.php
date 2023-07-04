<?php
require'connexion.php';
session_start();
?>
<?php
if (isset($_POST['recherop']))
	{
		$result0=list_op_recolte($_POST['search_saison'],$_POST['searchCAMPAGNE']);
	}
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
    <meta name="author" content="Dashboard">
    <meta name="Feproba" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	function myFunction(select) {
  var valeur = select.options[select.selectedIndex].value;
  document.getElementById("nval").value = valeur;
}
</script>

  </head>

  <body>

  
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Suivi agronomique : Opérations post récoltes </h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Opérations post récoltes</h4>
						<div class="col-lg-12"></div>	
						<div class="row">
		<div class="col-lg-12">
                           <div class="col-lg-3">
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Nouvelle opération
						</button>
						<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle opération post récoltes</h4>
						      </div>
						      <div class="modal-body">
						        <div class="col-sm-5">
									<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Campagne</label>
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
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
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
									<div class="col-sm-5">
										<div class="form-group">
										<label class="col-sm-2 col-sm-2 control-label"  >Secteur </label>
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
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="col-sm-2 col-sm-2 control-label" >Bloc </label>
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
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >N° Parcelle </label>
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
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >CT </label>
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
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Indice climatique</label>
												<input type="text" name="INDICE_CLIMATIQUE" id="fname" class="form-control" placeholder="Indice climatique">
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Poids carré rendement</label>
												<input type="text" name="POIDS_CARRE_RENDEMENT" id="fname" class="form-control" placeholder="Poids carré rendement">
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Rendement moyenne estimé</label>
													<input type="text" name="RENDEMENT_MOY_EST" id="fname" class="form-control" placeholder="Rendement moyenne estimé">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Production estimée </label>
												<input type="text" name="PRODUCTION_EST" id="fname" class="form-control" placeholder="Production estimée">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Date de récolte </label>
												<input type="date" name="DATE_RECOLTE" id="fname" class="form-control" placeholder="Date récolte">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="">Récolte moyenne</label>
												<input class="form-control"  type="text" id="fname" name="RECOLTE_MOYENNE" placeholder="Récolte moyenne"/>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
									  <div class="form-group">
										<label class="">Production réelle</label>
											<input class="form-control"  type="text" id="fname" name="PRODUCTION_REELLE" placeholder="Production réelle"/>
										</div>
									</div>
									<div class="col-sm-1"></div>	
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">Taux d'humité au moment des récoltes </label>
												<input class="form-control"  type="text" id="fname" name="TAUX_HUMIDITE" placeholder="Taux d'humité"/>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5"></div>	 
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_post_recolt" >Enregistrer</button>
						      </div>
						   </div>
							</div>
						  </div>
						</div>      				
      				</div>
					</form>
						</div> <div class="col-lg-9">
						<form action="menu_sa.php?page=tab_op_recol" class="form-signin" method="POST"> 			
							<div class="col-lg-5"> 	
								<div class="form-group">						
										
										 <select class="form-control" name="search_saison"> 
											<option>Choisir une saison</option>
												<?php
												$out=liste_saison(); 
											 while ($row=mysqli_fetch_array($out))
												{
												?>	
												<option value="<?php echo $row['Id_Saison']; ?>"><?php echo $row['Saison']; ?></option>
												<?php 
												}
												mysqli_free_result($out);
											?>
											?>
								</select>	
								</div>
							</div>	
							<div class="col-lg-4"> 	
								<div class="form-group">
									<select class="form-control" name="searchCAMPAGNE"> 
											<option>Choisir une campagne</option>
												<?php
												$out=list_camp(); 
											 while ($row=mysqli_fetch_array($out))
												{
												?>	
												<option value="<?php echo $row['ID_CAMPAGNE']; ?>"><?php echo $row['campagne']; ?></option>
												<?php 
												}
												mysqli_free_result($out);
											?>
											?>
								</select>	
								</div>
							</div>								
							<div class="col-lg-3"> 
								<button class="btn text-muted text-center btn-danger" name ="recherop" type="submit">Rechercher</button>
							</div> 
						</form> </div> 
										
			</div>
			
	</div><br>&nbsp; &nbsp; Nombre d'enregistrements : <?php echo $nbr; ?><br><br>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
								  <th>N°</th>
                                  <th align="center"> Campagne</th>
                                  <th align="center"> Saison </th>
								  <th align="center"> Secteur </th>
								  <th align="center"> Nom bloc </th>
                                  <th align="center"> N°Parcelle</th>
                                  <th align="center"> Attributaire</th>
								  <th align="center"> Indice climatique</th>
								  <th align="center"> Poids carré rendement</th>
								  <th align="center"> Rendement moyenne estimé</th>
								  <th align="center"> Production estimée</th>
								  <th align="center"> Date de récolte</th>
								  <th align="center"> Récolte moyenne</th>
								  <th align="center"> Production réelle</th>
								  <th align="center"> Taux d'humité</th>
								  <th align="center"> Action</th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							 								  
								 while ($row=mysqli_fetch_array($result0))
									{
										$cpt++;
										// identification parcelle
										$ter=identite_parcelle($row['id_parcelle']);
										$rew=mysqli_fetch_array($ter);
										
										// Identité attributaire
										 $ret= identification($rew['attributaire']);
										 $rang=mysqli_fetch_array($ret);
										 
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['id_ins_cult']; ?></td>
								  <td align="center"><?php echo $cpt; ?></td>
                                  <td align="center"><?php echo $row['CAMPAGNE']; ?></td>
                                  <td align="center"><?php echo $row['Saison']; ?></td>
								  <td align="center"><?php echo $rew['nomsecteur']; ?></td>
								  <td align="center"><?php echo $rew['nombloc']; ?></td>
                                  <td align="center"><?php echo $rew['numparcelle']; ?> </td>
								  <td align="center"><?php echo $rang['prenom_nom']; ?> </td>
								  <td align="center"><?php echo $row['INDICE_CLIMATIQUE']; ?> </td>
								  <td align="center"><?php echo $row['POIDS_CARRE_RENDEMENT']; ?> </td>
								  <td align="center"><?php echo $row['RENDEMENT_MOY_EST']; ?> </td>
								  <td align="center"><?php echo $row['PRODUCTION_EST']; ?> </td>
                                  <?php $par=explode('-',$row['DATE_RECOLTE']); ?>
								  <td align="center"><?php echo $par[2].'-'.$par[1].'-'.$par[0];?></span></td>
								  <td align="center"><?php echo $row['RECOLTE_MOYENNE']; ?></span></td>
								  <td align="center"><?php echo $row['PRODUCTION_REELLE']; ?></span></td>
								  <td align="center"><?php echo $row['TAUX_HUMIDITE']; ?></span></td>
								  <td><?php echo"<a href='menu_sa.php?page=form_edit_op_recol&&id=$row[id_ins_cult]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>
                                  </td>" ?></td> 
                              </tr>
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->
		</section><!--/wrapper -->
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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
