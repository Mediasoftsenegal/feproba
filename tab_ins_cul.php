<?php
require'connexion.php';
?>
<?php
if (isset($_POST['recher']))
	{
		$result0=list_installe($_POST['search_saison'],$_POST['searchCAMPAGNE']);
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
          	<h3><i class="fa fa-angle-right"></i> Suivi agronomique : Installation des cultures </h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Installation des cultures</h4>
						<div class="col-lg-12"></div>	
						<div class="row">
						<div class="col-lg-12">
                           <div class="col-lg-3">
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Nouvelle installation
						</button>
						<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle installation de culture</h4>
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
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >N° Parcelle </label>
												<select class="form-control" name="numparcelle"> 	
													<option>Choisir une parcelle</option>
													<?php
													echo 'secteur='.$dsecteur;
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
													mysqli_free_result($resCT);
													?>
													</select>
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Parcelle de production </label>
												<input type="text" name="parcelle_prod" id="fname" class="form-control" placeholder="Parcelle de production">
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Mode de sémis</label>
													<input type="text" name="mode_semis" id="fname" class="form-control" placeholder="Mode de sémis">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Superficie déclarée </label>
												<input type="text" name="superficiedeclaree" id="fname" class="form-control" placeholder="Superficie déclarée">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Supérficie mesurée </label>
												<input type="text" name="superficiemesuree" id="fname" class="form-control" placeholder="Supericie mesurée">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									
									<div class="col-sm-5">
										<div class="form-group">
											<label class="">Topo séquence</label>
												<select class="form-control" name="toposequence" placeholder="Topo Séquence">
												  <option>choisir une topo séquence</option>
												  <option value="BAS FOND">BAS FOND</option>
												  <option value="PLATEAU">PLATEAU</option>
												</select>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
									  <div class="form-group">
										<label class="">Travail sol</label>
											<input class="form-control"  type="text" id="fname" name="travailsol" placeholder="Travail au sol"/>
										</div>
									</div>
									<div class="col-sm-1"></div>	
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">Pratiques payannes</label>
												<input class="form-control"  type="text" id="fname" name="pratiquescf" placeholder="Pratiques paysannes"/>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">SRP</label>
												<select class="form-control" name="srp" placeholder="parcelle srp (oui/non)">
												  <option>Parcelle SRP ?</option>
												  <option value="NON">OUI</option>
												  <option value="NON">NON</option>
												</select>
										</div>
									</div>
									
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Utilisation ripper</label>
												<input class="form-control"  type="text" id="fname" name="utilisationripper" placeholder="Utilisation Ripper" />
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Date saisie</label>								
												<input class="form-control"  type="date" name="date_saisie" placeholder="Date de saisie" />
										</div>
									</div>	
								<div class="col-sm-1"></div>	
								<div class="col-sm-5">	
									<div class="form-group"></div>								
								</div>
								<div class="col-sm-1"></div>
								<div class="col-sm-5">		
									<div class="form-group"></div>	
								</div>
								 </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_installation" >Enregistrer</button>
						      </div>
						  
							</div>
						  </div>
						</div>      				
      				</div>
					</form>
						</div> <div class="col-lg-9">
						<form action="menu_sa.php?page=tab_ins_cul" class="form-signin" method="POST"> 			
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
								<button class="btn text-muted text-center btn-danger" name ="recher" type="submit">Rechercher</button>
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
								  <th align="center"> Statut producteur</th>
								  <th align="center"> Genre</th>
								  <th align="center"> Village</th>
								  <th align="center"> Parcelle de production</th>
								  <th align="center"> Mode semis</th>
								  <th align="center"> Superfice déclarée</th>
								  <th align="center"> Superficie mesurée</th>
								  <th align="center"> Topo séquence</th>
								  <th align="center"> Travail sol</th>
								  <th align="center"> Pratiques Paysannes</th>
								  <th align="center"> SRP</th>
								  <th align="center"> Utilisation Ripper</th>
								  <th align="center"> date de saisie</th>
								  <th align="center"> Action</th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							 								  
								 while ($row=mysqli_fetch_array($result0))
									{
										$cpt++;
										// identification parcelle
										$ter=identite_parcelle($row['id_parcelles']);
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
								  <td align="center"><?php echo $row['nomsecteur']; ?></td>
								  <td align="center"><?php echo $row['nombloc']; ?></td>
                                  <td align="center"><?php echo $row['numparcelle']; ?> </td>
								  <td align="center"><?php echo $rang['prenom_nom']; ?> </td>
								  <td align="center"><?php echo $rang['statut_producteur']; ?> </td>
								  <td align="center"><?php echo $rang['genre']; ?> </td>
								  <td align="center"><?php echo $rang['village']; ?> </td>
                                  <td align="center"><?php echo $row['PARCELLE_PRODUCTION']; ?></span></td>
								  <td align="center"><?php echo $row['MODE_SEMIS']; ?></span></td>
								  <td align="center"><?php echo $row['SUPERFICIE_DECLAREE']; ?></span></td>
								  <td align="center"><?php echo $row['SUPERFICIE_MESUREE']; ?></span></td>
								  <td align="center"><?php echo $row['TOPOSEQUENCE']; ?></span></td>
								  <td align="center"><?php echo $row['TRAVAILSOL']; ?></span></td>
								  <td align="center"><?php echo $row['PRATIQUECF']; ?></span></td>
								  <td align="center"><?php echo $row['SRP']; ?></span></td>
								  <td align="center"><?php echo $row['USER_RIPER']; ?></span></td>
								  <?php $par=explode('-',$row['DATE_COLLECTE']); ?>
								  <td align="center"><?php echo $par[2].'-'.$par[1].'-'.$par[0];?></span></td>
								  <td><?php echo"<a href='menu_sa.php?page=form_edit_install&&id=$row[id_ins_cult]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button></a><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>
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
