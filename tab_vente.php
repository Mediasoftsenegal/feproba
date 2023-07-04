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

  
 <section id="container" >      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h3> &nbsp;Etat des ventes<i class="fa fa-angle-right"></i> Liste des ventes</h3>
							  <hr>
							  <div class="col-lg-6 col-md-6 col-sm-12">
	                  	  	  
							  <label for="form-field-select-1">Choisir une année</label>
									<form  action="menu_ve.php?page=tab_vente" method='POST' >
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div >
											<?php $out=an_production(); ?>															
												<select class="form-control" name="select_an" id="form-field-select-1">
													<option value="select_campagne"></option>
														<?php
															while ($rows=mysqli_fetch_array($out))
															{
															?>	
															<option><?php echo $rows['annee'] ; ?></option>
															<?php 
															}
															mysqli_free_result($out);							
															?>	
												</select>	
											</div>	
									</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<button  class="btn btn-danger"  type="submit" >Rechercher</button>
									</div>
									
									</form>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Année</th>
								  <th><i class="fa fa-bullhorn"></i> Union</th>
								  <th><i class="fa fa-bullhorn"></i> Nature</th>
								  <th><i class="fa fa-bullhorn"></i> Variété</th>
								  <th><i class="fa fa-bullhorn"></i> Quantité (en Tonnes)</th>
								  <th><i class="fa fa-bullhorn"></i> Prix kg</th>
								  <th><i class="fa fa-bullhorn"></i> Montant </th>
                                  <th><?php echo "<a href='menu_ve.php?page=form_vente'><button class='btn btn-success btn-xs'> + Nouvelle vente</i></button><a/>" ;?>  </th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							  $res_vente=liste_vente($_POST['select_an']);
							
								 while ($row=mysqli_fetch_assoc($res_vente))
									{
									$dte=$row['date_vente'];
									$an=explode("-",$dte);
									$qtetot=$row['quantite_vendu']*1000;
									$montant=$qtetot*$row['prix_vente'];
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['id_vente']; ?></td>
                                  <td align='center'><?php echo $an[0]; ?></td>
								  <td><?php echo $row['nom_union']; ?></td>
								  <td><?php echo $row['variete']; ?></td>
								  <td><?php echo $row['nom_speculation']; ?></td>
								  <td align='center'><?php echo $row['quantite_vendu']; ?></td>
								  <td><?php echo $row['prix_vente']; ?> F CFA</td>
								  <td align='center'><?php echo (number_format($montant,0,'',' ')); ?>F CFA</td>
								  
                                  <td> <?php echo "
                                      <a href='menu_ve.php?page=form_vente'><button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button><a/>
                                      <a href='menu_ve.php?page=form_edit_vente&&id=$row[id_vente]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button><a/>
                                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button>" ?> 
                                  </td>
								  <?php $mont=$mont+$montant;?>
                              </tr>
							  <?php 
								}
								mysqli_free_result($res_vente);
									echo '</tr>';
								?>	
								<tr>
									<td></td>
									<td>Montant Total</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td align='center'><?php echo (number_format($mont,0,'',' ')); ?>F CFA </td>
									<td></td>
								</tr>
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
