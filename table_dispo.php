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
  </head>
  <body>
<!-- BEGIN MODAL -->  
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
					  <div class="col-lg-7">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h3>&nbsp; GESTION DE STOCK <i class="fa fa-angle-right"></i>&nbsp; Disponibilité pour la vente</h3>
	                  	  	  <hr>
								<form  action="menu_ve.php?page=table_dispo" method='POST'>
									<div class="col-lg-2 col-md-2 col-sm-6">
										<div>
											<?php $out=an_production(); ?>				
												<select class="form-control" name="select_campagne" id="form-field-select-1">
													<option value="select_campagne"></option>
														<?php
															while ($row=mysqli_fetch_array($out))
															{
															?>	
													<option><?php echo $row['annee'] ; ?></option>
															<?php 
															}
															mysqli_free_result($out);							
															?>	
												</select>	
										</div>	
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
									<label for="form-field-select-1">Choisir une année</label>
										<button  class="btn btn-danger"  type="submit" >Rechercher</button>
									</div>
								</form>
								
							<br><!-- Large modal -->
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							  + Disponibilité
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
								<div class="modal-content">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Formulaire disponibilité</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">&times;</span>
									</button>
								  </div>
								  <div class="modal-body">
								  <?php $rest=listeunion(); ?>
                                    <form class="form-horizontal" action="insert_fep.php"  method="GET" >
										<div class="card-body">
											<div class="form-group row">
													<label for="lname" class="col-sm-3 text-right control-label col-form-label">Union</label>
														<div class="col-sm-9">
															<select class="form-control" name="id_union"> 
															<option>Choisir une union</option>
																<?php
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
														<input type="text" class="form-control"  name="nom_magasin" id="fname" placeholder="nom du magasin">
													</div>	
											</div>
											<div class="form-group row">
												<label for="lname" class="col-sm-3 text-right control-label col-form-label">Date dépôt</label>
													<div class="col-sm-9">
														<input type="date" class="form-control"  name="date_depot" id="fname" >
													</div>	
											</div>
												<div class="form-group row">
													<label for="lname" class="col-sm-3 text-right control-label col-form-label">Type d'opération</label>
														<div class="col-sm-9">
															<select class="form-control" name="type_op"> 
															<option>Choisir un type d'opéation</option>
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
															<option>Choisir une nature de culture</option>
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
															<option>Choisir une variété</option>
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
														<input type="text" class="form-control"  name="quantite" id="fname" placeholder="Quantité">
													</div>	
											</div>
										</div>		
										
										
                                    </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
									<button type="submit" class="btn btn-primary" Name="btn_dispo">Enregistrer</button>
								  </div>
								  </form>
								</div>
							  </div>
							</div><br>
						
							
						
                              <thead>
                              <tr>
                                  <th><i class=""></i> Union</th>
								  <th><i class=""></i> Nom du magasin</th>
								  <th><i class=""></i> Date Opération</th>
								  <th><i class=""></i> Type d'opération</th>
								  <th><i class=""></i> Nature</th>
								  <th><i class=""></i> varietes</th>
								  <th><i class=""></i> Quantité (en Tonnes)</th>
                                  <th><i class=""></i> Actions</th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							  $result=listedispo();
								 while ($row=mysqli_fetch_array($result))
									{
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['id_dispo']; ?></td>
								  <td align='center'><?php echo $row['nom_union']; ?></td>
                                  <td align='center'><?php echo $row['nom_magasin']; ?></td>
								  <?php $ldate=explode('-',$row['date_depot']);?>
								  <td><?php echo ($ldate[2].'/'.$ldate[1].'/'.$ldate[0]); ?></td>
								  <td><?php echo $row['type_op']; ?></td>
								  <td><?php echo $row['nature']; ?></td>
								  <td><?php echo $row['variete']; ?></td>
								  <td><?php echo $row['quantite']; ?></td>
                                  <td><?php echo"                                      
                                      <a href='menu_ve.php?page=form_edit_dispo&&id=$row[id_dispo]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button><a/>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button>" ?> 
                                  </td>
                              </tr>
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	
                              </tbody>
                          </table>
						  </div>
						  <div class="col-lg-5">
						  <h3> Situation de la disponibilité : </h4>
						  <hr>
							<table class="table table-striped table-advance table-hover">
							<thead><h5><b>=><u>PADDY->NERICA L19</u></b></h5>
                              <tr>
								  <th><i class=""></i> Type opération</th>
								  <th><i class=""></i> Nature</th>
								  <th><i class=""></i> varietes</th>
								  <th><i class=""></i> Quantité (en Tonnes)</th>
                              </tr>
                              </thead>
							
							  <tbody>
							  <?php
							  $depots=Calcul_type('PADDY','NERICA L19','Depot')	;
								$row=mysqli_fetch_array($depots);
								$depots=$row['Total_depot']
								?>							
                              <tr>
								  <td><?php echo $row['type_op']; ?></td>
								  <td><?php echo $row['nature']; ?></td>
								  <td><?php echo $row['variete']; ?></td>
								  <td><?php echo $depots; ?></td>
							  </tr>	
							  <?php
								$ventes=Calcul_type('PADDY','NERICA L19','vente');
								$rows=mysqli_fetch_array($ventes);
								$vente=$rows['Total_depot'];
								?>							
                              <tr>
								  <td><?php echo $rows['type_op']; ?></td>
								  <td><?php echo $rows['nature']; ?></td>
								  <td><?php echo $rows['variete']; ?></td>
								  <td><?php echo $vente; ?></td>
							  </tr>	
							  <tr>
								  <td> Reste en Stock </td>
								  <td><?php echo $rows['nature']; ?></td>
								  <td><?php echo $rows['variete']; ?></td>
								  <td><?php echo ($depots-$vente); ?></td>
							  </tr>	
							  </table>
							  <hr>
							<table class="table table-striped table-advance table-hover">
							<thead><h5><b>=><u>PADDY->SAHEL 108</u></b></h5>
                              <tr>
								  <th><i class=""></i> Type opération</th>
								  <th><i class=""></i> Nature</th>
								  <th><i class=""></i> varietes</th>
								  <th><i class=""></i> Quantité (en Tonnes)</th>
                              </tr>
                              </thead>
							
							  <tbody>
							  <?php
							  $depots2=Calcul_type('PADDY','SAHEL 108','Depot')	;
								$row2=mysqli_fetch_array($depots2);
								$depots2=$row2['Total_depot']
								?>							
                              <tr>
								  <td><?php echo $row2['type_op']; ?></td>
								  <td><?php echo $row2['nature']; ?></td>
								  <td><?php echo $row2['variete']; ?></td>
								  <td><?php echo $depots2; ?></td>
							  </tr>	
							  <?php
								$ventes2=Calcul_type('PADDY','SAHEL 108','vente');
								$rows2=mysqli_fetch_array($ventes2);
								$vente2=$rows2['Total_depot'];
								?>							
                              <tr>
								  <td><?php echo $rows2['type_op']; ?></td>
								  <td><?php echo $rows2['nature']; ?></td>
								  <td><?php echo $rows2['variete']; ?></td>
								  <td><?php echo $vente2; ?></td>
							  </tr>	
							  <tr>
								  <td> Reste en Stock </td>
								  <td><?php echo $rows2['nature']; ?></td>
								  <td><?php echo $rows2['variete']; ?></td>
								  <td><?php echo ($depots2-$vente2); ?></td>
							  </tr>	
							  </table>
							  <hr>
							<table class="table table-striped table-advance table-hover">
							<thead><h5><b>=><u>SEMENCE->NERICA L19</u></b></h5>
                              <tr>
								  <th><i class=""></i> Type opération</th>
								  <th><i class=""></i> Nature</th>
								  <th><i class=""></i> varietes</th>
								  <th><i class=""></i> Quantité (en Tonnes)</th>
                              </tr>
                              </thead>
							
							  <tbody>
							  <?php
							  $depots3=Calcul_type('SEMENCE','NERICA L19','Depot');
								$row3=mysqli_fetch_array($depots3);
								$depots3=$row3['Total_depot']
								?>							
                              <tr>
								  <td><?php echo $row3['type_op']; ?></td>
								  <td><?php echo $row3['nature']; ?></td>
								  <td><?php echo $row3['variete']; ?></td>
								  <td><?php echo $depots3; ?></td>
							  </tr>	
							  <?php
								$ventes3=Calcul_type('SEMENCE','NERICA L19','vente');
								$rows3=mysqli_fetch_array($ventes3);
								$vente3=$rows3['Total_depot'];
								?>							
                              <tr>
								  <td><?php echo $rows3['type_op']; ?></td>
								  <td><?php echo $rows3['nature']; ?></td>
								  <td><?php echo $rows3['variete']; ?></td>
								  <td><?php echo $vente3; ?></td>
							  </tr>	
							  <tr>
								  <td> Reste en Stock </td>
								  <td><?php echo $rows3['nature']; ?></td>
								  <td><?php echo $rows3['variete']; ?></td>
								  <td><?php echo ($depots3-$vente3); ?></td>
							  </tr>	
							  </table>
							  <hr>
							<table class="table table-striped table-advance table-hover">
							<thead><h5><b>=><u>SEMENCE->SAHEL 108</u></b></h5>
                              <tr>
								  <th><i class=""></i> Type opération</th>
								  <th><i class=""></i> Nature</th>
								  <th><i class=""></i> varietes</th>
								  <th><i class=""></i> Quantité (en Tonnes)</th>
                              </tr>
                              </thead>
							
							  <tbody>
							  <?php
							  $depots4=Calcul_type('SEMENCE','SAHEL 108','Depot')	;
								$row4=mysqli_fetch_array($depots4);
								$depots4=$row4['Total_depot']
								?>							
                              <tr>
								  <td><?php echo $row4['type_op']; ?></td>
								  <td><?php echo $row4['nature']; ?></td>
								  <td><?php echo $row4['variete']; ?></td>
								  <td><?php echo $depots4; ?></td>
							  </tr>	
							  <?php
								$ventes4=Calcul_type('SEMENCE','SAHEL 108','vente');
								$rows4=mysqli_fetch_array($ventes4);
								$vente4=$rows4['Total_depot'];
								?>							
                              <tr>
								  <td><?php echo $rows4['type_op']; ?></td>
								  <td><?php echo $rows4['nature']; ?></td>
								  <td><?php echo $rows4['variete']; ?></td>
								  <td><?php echo $vente4; ?></td>
							  </tr>	
							  <tr>
								  <td> Reste en Stock </td>
								  <td><?php echo $rows4['nature']; ?></td>
								  <td><?php echo $rows4['variete']; ?></td>
								  <td><?php echo ($depots4-$vente4); ?></td>
							  </tr>	
							  </table>
                      </div><!-- /content-panel -->
					  </div>
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
