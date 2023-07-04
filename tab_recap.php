<?php
require'connexion.php';
?>
<?php
echo "Traitement en cours ...";
session_start();
$resultes=recap_entree($_POST['anne_rec']);
$resan=sel_annuel();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Médiasoft" content="Gestion agricole de Féproba">
    <meta name="keyword" content="Suivi des entrées des unionss">

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
						  
								 	
	                  	  	  <h3> &nbsp; Suivi Agronomique <i class="fa fa-angle-right"></i> Récapitulatif des entrées pour l'année : <?php echo $_POST['anne_rec'];?></h3>
							  </br>
	                  	  	  <hr>
							  <div class="col-sm-10">
							  <p>Choisir une année:</p>
									<form action="menu_sa.php?page=tab_recap" method="POST">
									  <input type = "text" list = "annee" name="anne_rec"> 
									  <datalist id = "annee">
										<?php
										while ($rowa=mysqli_fetch_array($resan))
										{
										?>	
											<option><?php echo $rowa['annee']; ?></option>
										<?php 
										}
										mysqli_free_result($resan);
										?>
									  </datalist>
									  <input type = "submit" value = "Visualiser">
									</form>
									
                              </div>
                              <thead>
                              <tr>
                                 
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Année </th>
                                  <th><i class="fa fa-bookmark"></i>Nom union  </th>
                                  <th><i class=" fa fa-edit"></i> Variété</th>
								  <th><i class=" fa fa-edit"></i> Spéculation </th>
								  <th><i class=" fa fa-edit"></i> Quantité (en T)</th>
								  <th></th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
								 while ($row=mysqli_fetch_array($resultes))
									{
								?>							
                              <tr>
								
                                  <td><?php echo $row['annee']; ?></td>
                                  <td class="hidden-phone"><?php echo $row['nom_union']; ?></td>
								  <td class="hidden-phone"><?php echo $row['nom_variete']; ?></td>
                                  <td><?php echo $row['nom_specul']; ?> </td>
								  <td align="left"><?php echo $row['tonnage']; ?> </td>
								  <td></td>
                                  
                              </tr>
							  <?php 
								}
									mysqli_free_result($resultes);
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
