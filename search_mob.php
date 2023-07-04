<?php
require'connexion.php';
?>
<?php
$result=prenomnom();
$result2=listevariete();
$result3=listespeculs();
$result4=list_camp();
$out=list_camp(); 
$res=liste_saison()
	
?>
<!DOCTYPE html>
<html lang="fr">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Recherches">
    <meta name="Feproba" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
<header class="header black-bg">
	<div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
			  <a href="" class="logo"><b>FEPROBA</b></a>
			  <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
						<a href="menu_mob.php"><button type="button" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i></button></a>
						<a href="menu_mob.php"><button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button></a>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div> <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Déconnexion</a></li>
            	</ul>
		</header>  
      <!--header end>$      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Editions</h3>
              <!-- page start-->
			 <div class="col-lg-6 col-md-6 col-sm-12">
				<div class="showback">
					<h4><i class="fa fa-angle-right"></i> Critères de recherches</h4>
					<div class="radio">
						<label>
						    <input type="radio" name="optionsRadios" id="installation" value="installation" checked>
						    Installations des cultures
						</label>
					</div>
					<div class="radio">
						<label>
						    <input type="radio" name="optionsRadios" id="Entretien" value="entretien">
						    Entretien des cultures
						</label>
					</div>
					<div class="radio">
						<label>
						    <input type="radio" name="optionsRadios" id="postrecoltes" value="postrecoltes">
						    Opérations Post-récoltes
						</label>
					</div>
				</div>
			</div>	
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="showback">
					<form action="search_mob.php" class="form-signin" method="POST"> 				
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
							</select>	
						</div>
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
							</select>	
						</div>
						<button class="btn text-muted text-center btn-danger" name ="recher" type="submit">Rechercher</button>
					</form> 
				</div> 	
      		</div>
              <!-- page end-->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
<! -- BADGES -->
<?php 
	if (isset($_POST['recher'])){
		$result0=list_installe($_POST['search_saison'],$_POST['searchCAMPAGNE']);
		$result=prenomnom();
	echo"<section id='main-content'>
         <section class='wrapper'>
      		<div class='showback'>
      			<h4><i class='fa fa-angle-right'></i> Résultats : ".$_POST['search_saison']. ",". $_POST['searchCAMPAGNE']."</h4>
				<span class='badge'>5</span>
				<span class='badge bg-inverse'>".$nbr."</span>
      		</div><!-- /showback -->
			<section id='unseen'>
                <table class='table table-bordered table-striped table-condensed'>
                <thead>
                <tr>
                <th>Campagne</th>
                <th>Secteur</th>
                <th>Nom bloc</th>
                <th>N°Parcelle</th>
				<th>Attributaire</th>
				<th>Edit</th>
				<th>Annuler</th>
				</thead>
                    <tbody>";
					 while ($row=mysqli_fetch_array($result0))
						{
						$cpt++;
						// identification parcelle
						$ter=identite_parcelle($row['id_parcelles']);
						$rew=mysqli_fetch_array($ter);		
						// Identité attributaire
						 $ret= identification($rew['attributaire']);
						 $rang=mysqli_fetch_array($ret);
						echo "<tr>
                            <td>".$row['CAMPAGNE']."</td>
                            <td>".$row['nomsecteur']."</td>
                            <td>".$row['nombloc']."</td>
                            <td>".$row['numparcelle']."</td>
							<td>".$rang['prenom_nom']."</td>
							<td><a href='form_edit_install&&id=".$row['id_ins_cult']."><button class='btn btn-primary btn-xs'>
							<i class='fa fa-pencil'></i></button></a></td>
							<td><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o'>
							</i></button>
                             </td>
						</tr>";
						}
					 echo "</tbody>";
	echo "</table>";}
				 ?>
			 </section>
		</section>
	</section><!-- /MAIN CONTENT -->	
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <a href="search_mob.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>  
  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });

  </script>
  </body>
</html>
