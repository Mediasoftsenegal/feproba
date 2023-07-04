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

    <![endif]-->
	
  <!-- Font Awesome >
  <link rel="stylesheet" href="assets/css/all.min.css"-->
  <!-- Ionicons >
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"-->
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <!-- Theme style>
  <link rel="stylesheet" href="assets/css/adminlte.min.css" -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>

  <body>
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3> Paramètres <i class="fa fa-angle-right"></i> Gestion des Parcelles Allouées </h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Liste des parcelles</h4>
						<div class="col-lg-6"></div>	
						<div class="row">
						<div class="col-lg-12">
                           <div class="col-lg-3">
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Nouvelle Parcelle
						</button>
						<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle parcelle</h4>
						      </div>
						      <div class="modal-body">
						        
									<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Secteur</label>
										<div class="col-sm-6">
										<select class="form-control" name="nomsecteur" required="required">
										  <option value="">Choisir un secteur</option>
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
									   <input type="text" name="nombloc" class="form-control">
									  </div>
									</div>
									<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >CT </label>
									  <div class="col-sm-6">
									   <input type="text" name="nomct" class="form-control">
									  </div>
									</div>
									<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >N° Parcelle </label>
									  <div class="col-sm-6">
									   <input type="text" name="numparcelle" class="form-control">
									  </div>
									</div>
									<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Nature parcelle </label>
									  <div class="col-sm-6">
									   <select class="form-control" name="natureparcelle" required="required">
										  <option value="">Choisir un secteur</option>
										  <option value="PRODUCTION SEMENCE">PRODUCTION SEMENCE</option>
										  <option value="PRODUCTION RIZ MARCHAND">PADDY</option>
										</select>
									  </div>
									</div>
									<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Longitude </label>
									  <div class="col-sm-6">
									   <input type="text" name="xlongitude" class="form-control">
									  </div>
									</div>
									<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Latitude </label>
									  <div class="col-sm-6">
									   <input type="text" name="xLatitude" class="form-control">
									  </div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 col-sm-2 control-label" >Bénéficiaire </label>
										<div class="col-sm-6">
											<select class="form-control" name="id_repertoire"> 
											<option>VIDE</option>
											<?php
											$res=listereps();
											while ($row=mysqli_fetch_array($res))
											{
											?>	
											<option value="<?php echo $row['id_repertoire']; ?>" ><?php echo $row['prenom_nom']; ?></option>
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
									<input class="form-control"  type="date" name="date_attribution"/>
								</div>
							</div>
						
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_parcelle" >Enregistrer</button>
						      </div>
						    </div>
						  </div>
						</div>      				
      				</div>
					</form>
						</div> <div class="col-lg-9">
						<form action="menu_pr.p?page=tab_parcelles" class="form-signin" method="POST"> 			
							<div class="col-lg-4"> 	
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Secteur</label>								
										 <div class="col-sm-6">
												<input type="text" id="nomsec" name="nomsecteur" class="form-control col-lg-6" />
										 </div>
								</div>
							</div>	
							<div class="col-lg-5"> 	
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Longitude</label>								
										 <div class="col-sm-6">
												<input type="text" id="nomsec" name="xlongitude" class="form-control col-lg-6" />
										 </div>
								</div>
							</div>								
							<div class="col-lg-3"> 
								<button class="btn text-muted text-center btn-danger" name ="recher" type="submit">Rechercher</button>
							</div> 
						</form> </div> 
		<?php  if (isset($_POST['nomsecteur'])){
								$result=list_parcelles($_POST['nomsecteur'],$_POST['xlongitude']);
							  }
							  else
							  {
								$result=list_parcelles($nomsecteur,$longitude);
							  }	
		$nbr=mysqli_num_rows($result); ?>						
			</div>
			
	</div><br>&nbsp; &nbsp; Nombre d'enregistrements : <?php echo $nbr; ?><br><br>
                          <section id="unseen">
						  
                            <table id="example1"  class="table table-bordered table-hover">
                              <thead>
                              <tr>
								  <th>N°</th>
                                  <th><i class="fa fa-bullhorn"></i> Secteur</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Bloc </th>
                                  <th><i class="fa fa-bookmark"></i>CT</th>
                                  <th><i class=" fa fa-edit"></i> N°Parcelle</th>
								  <th><i class=" fa fa-edit"></i> Nature de la parcelle</th>
								  <th><i class=" fa fa-edit"></i> Longitude</th>
								  <th><i class=" fa fa-edit"></i> Latitude</th>
								  <th><i class=" fa fa-edit"></i> Attributaire</th>
								  <th><i class=" fa fa-edit"></i> Date attribution</th>
								  <th><i class=" fa fa-edit"></i> Durée attribution</th>
								  <th align="center"> Situation</th>
								  <th align="center"></th>
								  <th align="center"></th> 	
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							  if (isset($_POST['nomsecteur'])){
								$result=list_parcelles($_POST['nomsecteur'],$_POST['xlongitude']);
							  }
							  else
							  {
								$result=list_parcelles($nomsecteur,$longitude);
							  }								  
								 while ($row=mysqli_fetch_array($result))
									{
										$cpt++;
										$id=$row['id_parcelles'];
								?>							
                              <tr>
							  
								  <td style="display:none"><?php echo $id; ?></td>
								  <td align="center"><?php echo $cpt; ?></td>
                                  <td align="center"><?php echo $row['nomsecteur']; ?></td>
                                  <td align="center"><?php echo $row['nombloc']; ?></td>
                                  <td align="center"><?php echo $row['ct']; ?> </td>
                                  <td align="center"><?php echo $row['numparcelle']; ?></span></td>
								   <td align="center"><?php echo $row['nature_parcelle']; ?></span></td>
								  <td align="center"><?php echo $row['longitude']; ?></span></td>
								  <td align="center"><?php echo $row['latitude']; ?></span></td>
								  <?php
									$date=$row['date_attribution'];
									if ($row['attributaire']<>0){
										$rest=identification($row['attributaire']);
										$rows=mysqli_fetch_array($rest);
										$prenom=$rows['prenom_nom'];
									}else
									{
										$prenom="";
									}
								  ?>
								  <td align="right"><?php  echo $prenom; ?></span></td>
								  <td align="center"><?php echo $row['date_attribution']; ?></span></td>
								  <?php $datejour=date('yy-m-d');
								  $diff = date_diff(date_create($row['date_attribution']), date_create($datejour)); 
								  $ann=$diff->format('%y');
								  if ($row['date_attribution']=='0000-00-00'){ 
										$etat='Non défini';
										 $an='';
										 $mois='';
										 $jour='';
										
										}
								  
								  if (($ann>=2) && ($row['date_attribution']<>'0000-00-00')){
										$etat='Dépassement';
										$an=$diff->format('%y').' ans-';
										$mois=$diff->format('%m').' mois-';
										$jour=$diff->format('%d').' Jours ';
									
									}		
									if (($ann<2) && ($row['date_attribution']<>'0000-00-00')){
										$etat='Valide';
										$an=$diff->format('%y').' ans-';
										$mois=$diff->format('%m').' mois-';
										$jour=$diff->format('%d').' Jours ';
									
										
										}
									?>
								  <td><?php echo ($an.' '.$mois.' '.$jour); ?></td>
								  <td align="center"><?php echo $etat; ?></td>
								  <td>
								  <a href="menu_pr.php?page=form_edit_parcelle&&id=<?php echo $row['id_parcelles']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a></td>
                                      <td><a href="#"><button class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash" aria-hidden="true"></spam></button></a>
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

<!-- jQuery -->
<script src="../assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/dataTables.responsive.min.js"></script>
<script src="../assets/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="../assets/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/js/jszip.min.js"></script>
<script src="../assets/js/pdfmake/pdfmake.min.js"></script>
<script src="../assets/js/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<script src="../assets/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

  </body>
</html>
