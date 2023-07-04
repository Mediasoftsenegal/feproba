<?php
require'connexion.php';
session_start();
$result=listevariete();
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
	function ConvertirEnMajuscule(id) {
		var x = document.getElementById(id);
		x.value = x.value.toUpperCase();
	}
	</script>
  </head>

  <body>

  
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
			  <div class="col-sm-4"></div><div class="col-sm-4"></div><div class="col-sm-4"></div>
						
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire nature de parcelle</h4>
								</div>
								 <form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
								  <div class="modal-body">
									<div class="col-sm-12">
										<div class="form-panel">
											 <div class="form-group">
											  <label class="col-sm-2 col-sm-2 control-label" >Nature parcelle</label>
											  <div class="col-sm-10">
												  <input type="hidden" name="modif" value="0";>
												  <input type="text" name="nom_variete"  id="nom_variete" onkeyup="ConvertirEnMajuscule('nom_variete')" class="form-control">
											  </div>
											</div>
										</div>
									</div>
								</div>	
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
									<button type="submit" class="btn btn-primary" name="bt_nature" >Enregistrer</button>
								 </div>
								</form>
						</div>
					</div>	
					</div>
					</div>
					
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Liste des natures de parcelle</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Nature de parcelle</th>
                                  <th></th>
                              </tr>
							  <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Nature de parcelle
						</button>
                              </thead>
                              <tbody>
							  <?php
								 while ($row=mysqli_fetch_array($result))
									{
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['id_nature']; ?></td>
                                  <td><?php echo $row['nature']; ?></td>
                                  <td> <?php echo "
                                      
                                      <a href='param.php?page=form_edit_variete&&id=$row[id_nature]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button><a/>
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
