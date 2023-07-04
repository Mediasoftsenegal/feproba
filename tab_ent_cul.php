<?php
require'connexion.php';
session_start();
?>
<?php
if (isset($_POST['recher']))
	{
	$result0=list_entretien($_POST['numpacello'],$_POST['searchCAMPAGNE']);	
	}
	$result=prenomnom();
	$result2=listevariete();
	$result3=listespeculs();
	$result4=list_camp();
	$out=list_camp(); 
	$res=liste_saison();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

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
          	<h3><i class="fa fa-angle-right"></i> Suivi agronomique : Entretien des cultures </h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Entretien des cultures</h4>
						<div class="col-lg-12"></div>	
						<div class="row">
		<div class="col-lg-12">
                           <div class="col-lg-3">
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Entretien
						</button>
						<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'entretien de culture</h4>
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
										<label class="col-sm-2 col-sm-2 control-label" >Secteur </label>
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
													
														$resp=liste_parcelles2();
														while ($rowp=mysqli_fetch_array($resp))
														{
														?>	
														<option value="<?php echo $rowp['numparcelle']; ?>" ><?php echo $rowp['numparcelle']; ?></option>
														<?php 
														}
														mysqli_free_result($resp);
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
											<label >Date de mise en place pépinière</label>
											  <div class="col-sm-10">
												  <input type="date"  name="datepepiniere" class="form-control" placeholder="Date de mise en place pépinière">
											  </div>
										</div>
									</div>	
									<div class="col-sm-5">
										<div class="form-group">
											<label >Rendement estimé</label>
												<div class="col-sm-10">
													<input type="text" name="rendement_est" class="form-control" placeholder="Rendement estimé" >
												</div>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label >Production estimée</label>
												<div class="col-sm-10">
													<input type="text" name="production_est" class="form-control" placeholder="Production estimée" >
												</div>
										</div>
									</div>	
									<div class="col-sm-5">
										<div class="form-group">
											<label >Niveau de semences utilisées...</label>
												<div class="col-sm-10">
													<input type="text" name="niveau_sem" class="form-control" placeholder="Niveau de semences utilisées" >
												</div>
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">									
									<div class="form-group">
										<label >Variété de riz cultivée... </label>
												<div class="col-sm-10">
													<input type="text" name="variete_riz" class="form-control" placeholder="Variété de riz cultivée">
												</div>
									</div>
									</div>
									<div class="col-sm-5">
									<div class="form-group">
										<label >Date de semis ou Repiquage </label>
												<div class="col-sm-10">
													<input type="date" name="date_semisrepiq" class="form-control" placeholder="Date de semis ou Repiquage">
												</div>
									</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
									<div class="form-group">
										<label >Quantité semences utilisée (Kg)</label>
											<div class="col-sm-10">
												<input type="int" name="quantite_sem" class="form-control" placeholder="Quantité semences utilisée (Kg)">
											</div>
									</div>
									</div>
									<div class="col-sm-5">
									<div class="form-group">
										 <label >Utilisation de semences certifiées ou améliorées</label>
											  <div class="col-sm-10">
												  <select name="utilisateur_sem"class="form-control" placeholder="Utilisation de semences certifiées ou améliorées">
														  <option>Utilisation de semences certifiées ou améliorées</option>
														  <option>OUI</option>
														  <option>NON</option>
												  </select>
											</div>
									</div>	
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
									<div class="form-group">
										 <label>Utilisation semoir ...</label>
										   <div class="col-sm-10">
											  <select class="form-control" name="ustilisation_sem" placeholder="utilisation semoir à riz">
												<option>Utilisation semoir à riz</option>
												<option>OUI</option>
												<option>NON</option>
											</select>
										 </div>  
									</div>
									</div>
									<div class="col-sm-5">	
									 <div class="form-group">
										<label> Date de sarclage ----- </label>
											<div class="col-sm-10">
												<input type="date" name="date_sarclage" class="form-control" placeholder="Date de premiere Sarclage">
											</div>
									</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">									
									<div class="form-group">
										<label >Quantité NPK appliquée (Kg)</label>
											<div class="col-sm-10">
												<input type="text" name="quantitenpk" class="form-control" placeholder="Quantité NPK appliquée (Kg)">
											</div>
									</div>
									</div>
									<div class="col-sm-5">
									<div class="form-group">
										<label >Date d'application NPK </label>
											<div class="col-sm-10">
												<input type="date" name="date_applNPK" class="form-control" placeholder="Date d'application NPK">
											</div>
									</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label >Utilisation fumure organique </label>
												<input type="text" name="utilisation_fumure" class="form-control" placeholder="Utilisation fumure organique">
										</div>
									</div>	
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Date saisie</label>								
												<input class="form-control"  type="date" name="date_saisie2" placeholder="Date de saisie" />
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5"></div>
<div class="col-sm-1"></div>									
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_entretien" >Enregistrer</button>
						      </div>
						   </div>
							</div>
						  </div>
						</div>      				
      				</div>
					</form>
						</div> <div class="col-lg-9">
						<form action="menu_sa.php?page=tab_ent_cul" class="form-signin" method="POST"> 			
							<div class="col-lg-5"> 	
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Numéro Parcelle</label>								
										 <div class="col-sm-6">
												<input type="text" id="fcasse" name="numpacello" class="form-control col-lg-6" />
										 </div>
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
								</select>	
								</div>
							</div>								
							<div class="col-lg-3"> 
								<button class="btn text-muted text-center btn-danger" name ="recher"  value ="recher" type="submit">Rechercher</button>
							</div> 
						</form> </div> 
								
			</div>
			
			
	</div><br>&nbsp; &nbsp; Nombre d'enregistrements : <?php echo $nbr;  ?><br><br>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th align="center"> Campagne</th>
                                  <th align="center"> Saison </th>
								  <th align="center"> Secteur </th>
								  <th align="center"> Nom bloc </th>
                                  <th align="center"> N°Parcelle</th>
								  <th align="center"> Attributaire</th>
                                  <th align="center"> Date de mise en place pépinière</th>
								  <th align="center"> Rendement estimé</th>
								  <th align="center"> Production estimée</th>
								  <th align="center"> Date de semis ou Repiquage</th>
								  <th align="center"> Quantité semences utilisée (Kg)</th>
								  <th align="center"> Variété de riz cultivée... )</th>
								  <th align="center"> Niveau de semences utilisées...</th>
								  <th align="center"> Utilisation de semences certifiées ou améliorées</th>
								  <th align="center"> Utilisation semoir ...</th>
								  <th align="center"> Date de sarclage</th>
								  <th align="center"> Quantité NPK appliquée (Kg)</th>
								  <th align="center"> Date d'application NPK </th>
								  <th align="center"> Utilisation fumure organique</th>
								  <th align="center"> Date de saisie entretien</th>
								  <th align="center"> Action</th>
                              </tr>
                              </thead>
                              <tbody>
							  	<?php 
															  
									 while ($row=mysqli_fetch_array($result0))
										{	
															
										// identification parcelle
										$ter=identite_parcelle($row['id_parcelle']);
										$rew=mysqli_fetch_array($ter);
											
										// Identité attributaire
										 $ret= identification($rew['attributaire']);
										 $rang=mysqli_fetch_array($ret);
										 
										 $pare=explode('-',$row['DATE_MISE_PLACE_PEPINIERE']);
										 $par1=explode('-',$row['DATE_SEMISREPIQ']);
										 $par2=explode('-',$row['DATE_PREMSARCDESH']);
										 $par3=explode('-',$row['DATE_APPLICNPK']);
										
								?>								
                              <tr>
                                  <td align="center"><?php echo $row['CAMPAGNE']; ?></td>
                                  <td align="center"><?php echo $row['Saison']; ?></td>
								  <td align="center"><?php echo $row['nomsecteur']; ?></td>
								  <td align="center"><?php echo $row['nombloc']; ?></td>
                                  <td align="center"><?php echo $row['numparcelle']; ?> </td>
								  <td align="center"><?php echo $rang['prenom_nom']; ?> </td>
								  <td align="center"><?php echo $pare[2].'-'.$pare[1].'-'.$pare[0]; ?> </td>
								  <td align="center"><?php echo $row['RENDEMENT_ESTIME']; ?> </td>
								  <td align="center"><?php echo $row['PRODUCTION_ESTIMEE']; ?> </td>
								  <td align="center"><?php echo $par1[2].'-'.$par1[1].'-'.$par1[0]; ?> </td>
                                  <td align="center"><?php echo $row['QUANTITES_SEMENCEUTILISEE']; ?></span></td>
								  <td align="center"><?php echo $row['VARIETES_RIZCULTURE']; ?></span></td>
								  <td align="center"><?php echo $row['NIVEAU_SEMENCEUTILISEE']; ?></span></td>
								  <td align="center"><?php echo $row['UTILISATEUR_SEMCERTAME']; ?></span></td>
								  <td align="center"><?php echo $row['UTILISATION_SEMOIRARIZ']; ?></span></td>
								  <td align="center"><?php echo $par2[2].'-'.$par2[1].'-'.$par2[0];  ?></span></td>
								  <td align="center"><?php echo $row['QUANTITENPKAPPL']; ?></span></td>
								  <td align='center'><?php echo $par3[2].'-'.$par3[1].'-'.$par3[0];  ?></td>
								  <td align='center'><?php echo $row['UTILISATION_FUMURE_ORGANIQ']; ?></td>

								  <?php $par=explode('-',$row['DATE_COLLECTE2']); ?>
								  <td align="center"><?php echo $par[2].'-'.$par[1].'-'.$par[0];?></span></td>
								  <td><?php echo"<a href='menu_sa.php?page=form_ent_cut&&id=$row[id_entr_cult]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>
                                  </td>" ?></td>
								 
								  
                              </tr>
							  <?php 
								}
									$nbr=mysqli_num_rows($result); 
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
