<?php
require'../connexion.php';
session_start();
$result=liste_saison();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> Saisons</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
              <li class="breadcrumb-item active">Paramètres </li>
              <li class="breadcrumb-item active">Saisons </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listes des saisons</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Saisons</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
								 while ($row=mysqli_fetch_array($result))
									{
								?>			
                  <tr>
                  <td><?php echo $row['Saison']; ?></td>
                  <td> <?php echo "
                    <a href='param.php?page=form_edit_saison&&id=$row[Id_Saison]'><button class='btn btn-primary btn-xs'><i class='fa fa-address-card'></i></button><a/>
                    <button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>" ?> 
                  </td>   
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Saisons</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar >
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


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
  </head>

  <body>

  
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Liste des saisons</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
								   <th></th>
                                  <th><i class="fa fa-bullhorn"></i> Saison</th>							
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  <div class="col-lg-12">
                           <div class="col-lg-3">
						<!-- Button trigger modal -->
						<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Nouvelle saison
						</button>
						<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle saison</h4>
						      </div>
						      <div class="modal-body">
						        <div class="col-sm-5">
									
									
										<div class="form-group">
											<label class="" >Saison</label>
												<input type="text" name="saison" id="fname" class="form-control" placeholder="Saison">
										</div>
									</div>	 
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_campagne" >Enregistrer</button>
						      </div>
						   
							</div>
						  </div>
						</div>      				
      				</div>
					</div> 
					</form>
						</div> 
						</div> 
							  <?php
								 while ($row=mysqli_fetch_array($result))
									{
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['Id_Saison']; ?></td>
								  <td></td>
								  <td><?php echo $row['Saison']; ?></td>
                                  <td> <?php echo "
                                      <a href='param.php?page=form_edit_saison&&id=$row[Id_Saison]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button><a/>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></button>" ?> 
                                  </td>
                              
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
