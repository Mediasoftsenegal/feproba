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
  </head>

  <body>
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3> SSE <i class="fa fa-angle-right"></i> Mise en place par département</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Liste des Mises en place</h4>
						<div class="col-lg-6"></div>	
						<div class="row">
						<div class="col-lg-12">
                           <div class="col-lg-3">
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Nouvelle Mise en place
						</button>
						<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'une Nouvelle Mise en place</h4>
						      </div>
						      <div class="modal-body">
						        
									<div class="form-group">
								<label> Région:</label>
									<select class="form-control" name="region" id="region"> 
										<option>Choisir une région</option>
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
									<div class="form-group">
								<label> Département:</label>
									<select class="form-control" name="departement" id="departement"> 
										<option>Choisir un département</option>
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
									<div class="form-group">
								<label> Commune:</label>
									<select class="form-control" name="commune" id="commune"> 
										<option>Choisir une commune</option>
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
									<div class="form-group">
								<label> Point de dépôt</label>
									<input type="text" name="point_depot" id="point_depot" class="form-control" placeholder="point_depot">
							</div>
									<div class="form-group">
								<label> Quantité reçue</label>
									<input type="text" name="qte_recue_dep" id="qte_recue_dep" class="form-control" placeholder="qte_recue_dep">
							</div>
                                    <div class="form-group">
								<label> Fournisseur</label>
									<input type="text" name="fournisseur" id="fournisseur" class="form-control" placeholder="fournisseur">
							</div>
                                   
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_mise_dep" >Enregistrer</button>
						      </div>
						    </div>
						  </div>
						</div>      				
      				</div>
					</form>
						</div> <div class="col-lg-9">
						<form action="menugen.php?page=tab_parcelles" class="form-signin" method="POST"> 			
							<div class="col-lg-4"> 	
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Département</label>								
										 <div class="col-sm-6">
												<input type="text" id="departement" name="departement" class="form-control col-lg-6" />
										 </div>
								</div>
							</div>	
							<div class="col-lg-5"> 	
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Fournisseur </label>								
										 <div class="col-sm-6">
												<input type="text" id="fournisseur" name="fournisseur" class="form-control col-lg-6" />
										 </div>
								</div>
							</div>								
							<div class="col-lg-3"> 
								<button class="btn text-muted text-center btn-danger" name ="recher" type="submit">Rechercher</button>
							</div> 
						</form> </div> 
		<?php  if (isset($_POST['departement'])){
								$result=liste_op($_POST['departement'],$_POST['fournisseur']);
							  }
							  else
							  {
								$result=liste_op($departement,$fournisseur);
							  }	
		$nbr=mysqli_num_rows($result); ?>						
			</div>
			
	</div><br>&nbsp; &nbsp; Nombre d'enregistrements : <?php echo $nbr; ?><br><br>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
								  <th>N°</th>
                                  <th><i class="fa fa-bullhorn"></i> Région</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Département </th>
                                  <th><i class="fa fa-bookmark"></i>Commune</th>
                                  <th><i class=" fa fa-edit"></i> Point de dépôt</th>
								  <th><i class=" fa fa-edit"></i> Quantité reçue</th>
								  <th><i class=" fa fa-edit"></i> Fournisseur</th>
								  <th align="center"> </th>
								  <th align="center"> </th>
								  <th align="center"></th> 	
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							  if (isset($_POST['departement'])){
								$result=liste_op($_POST['departement'],$_POST['fournisseur']);
							  }
							  else
							  {
								$result=liste_op($departement,$fournisseur);
							  }								  
								 while ($row=mysqli_fetch_array($result))
									{
										$cpt++;
										$id=$row['id_so_mise_dep'];
								?>							
                              <tr>
							  
								  <td style="display:none"><?php echo $id; ?></td>
								  <td align="center"><?php echo $cpt; ?></td>
                                  <td align="center"><?php echo $row['region']; ?></td>
                                  <td align="center"><?php echo $row['departement']; ?></td>
                                  <td align="center"><?php echo $row['commune']; ?> </td>
                                  <td align="center"><?php echo $row['point_depot']; ?></span></td>
								   <td align="center"><?php echo $row['qte_recue_dep']; ?></span></td>
								  <td align="center"><?php echo $row['fournisseur']; ?></span></td>
								  <td align="center"><?php echo $etat; ?></td>
								  <td>
								  <a href="menu_pr.php?page=form_edit_parcelle&&id=<?php echo $row['id_so_mise_dep']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a></td>
                                      <td><a href="#"><button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
