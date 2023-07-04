<?php
require'connexion.php';
session_start();
$result=listeEntree($_POST['select_campagne']);
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
	                  	  	  <h3>&nbsp; GESTION DE STOCK <i class="fa fa-angle-right"></i>&nbsp; Production agricole</h3>
	                  	  	  <hr>
							  
									<form  action="menu_en.php?page=table_entree" method='POST' >
									
										<div class="col-lg-2 col-md-2 col-sm-12">
											<div >
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
									<div class="col-lg-6 col-md-6 col-sm-12">
									<label for="form-field-select-1">Choisir une année</label>
										<button  class="btn btn-danger"  type="submit" >Rechercher</button>
									</div>
									</form>
									<br><br>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Année</th>
								  <th><i class="fa fa-bullhorn"></i> Union</th>
								  <th><i class="fa fa-bullhorn"></i> Nature</th>
								  <th><i class="fa fa-bullhorn"></i> Variétés</th>
								  <th><i class="fa fa-bullhorn"></i> Quantité (en Tonnes)</th>
                                  <th><?php echo "
                                      <a href='menu_en.php?page=form_entree'><button class='btn btn-success btn-xs'> + Nouvelle entrée en stock</i></button><a/>"; ?>  </th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
								 while ($row=mysqli_fetch_array($result))
									{
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['id_entree']; ?></td>
                                  <td align='center'><?php echo $row['annee']; ?></td>
								  <td><?php echo $row['nom_union']; ?></td>
								  <td><?php echo $row['nom_variete']; ?></td>
								  <td><?php echo $row['nom_specul']; ?></td>
								  <td align='center'><?php echo $row['tonnage']; ?></td>
                                  <td> <?php echo "
                                      
                                      <a href='menu_en.php?page=form_edit_entre&&id=$row[id_entree]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button><a/>
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
