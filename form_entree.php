<?php 
require 'connexion.php';
session_start();
$result=listeunion();
$result2=listevariete();
$result3=listespeculs();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
 

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
        
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
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>  Formulaire entrée de stock</h4>
                      <form class="form-horizontal style-form" action="insert_fep.php" method="POST" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Année</label>
                              <div class="col-sm-10">
							  <input type="hidden" name="etat" value="entreeajout";>
                               <input type="text" name="annee_entree" class="form-control">
                              </div>
							  
                          </div>
                         <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Union </label>
                              <div class="col-sm-10">
							  
                                  <select class="form-control" name="nom_union"> 
								  <option>VIDE</option>
									<?php
								 while ($row=mysqli_fetch_array($result))
									{
									?>	
									<option><?php echo $row['nom_union']; ?></option>
									<?php 
									}
									mysqli_free_result($result);
								
								?>
									</select>								
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Nature </label>
                              <div class="col-sm-10">
							  
                                  <select class="form-control" name="nom_varietes"> 
								  <option>VIDE</option>
									<?php
								 while ($row2=mysqli_fetch_array($result2))
									{
									?>	
									<option><?php echo $row2['nature']; ?></option>
									<?php 
									}
									mysqli_free_result($result2);
								
								?>
									</select>								
                              </div>
                          </div>
						 <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Variétés </label>
                              <div class="col-sm-10">
							  
                                  <select class="form-control" name="nom_speculation"> 
								  <option>VIDE</option>
									<?php
								 while ($row3=mysqli_fetch_array($result3))
									{
									?>	
									<option><?php echo $row3['nom_type_varietes']; ?></option>
									<?php 
									}
									mysqli_free_result($result3);
								
								?>
									</select>
									
                              </div>
                          </div>
						   <label class="col-sm-2 col-sm-2 control-label" > Quantitée récoltée(en Tonnes)</label>
                              <div class="col-sm-10">
                               <input type="text" name="qte_entree" class="form-control">
                              </div>
                         
                         
						  <p align="center"> <div > <button type="submit" class="btn btn-theme">Valider</button></p>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->   
			</div>
			<div class="col-lg-1"></div>
          	</div><!-- /row -->
          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->    
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
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
