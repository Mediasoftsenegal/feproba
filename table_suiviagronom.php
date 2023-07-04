<?php
require'connexion.php';
session_start();
echo $_POST['select_campagne'];
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
					  	  <div style="overflow:scroll; border:#000000 1px solid;">	
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Suivi agronomique année <?php echo  $_POST['select_campagne'];?> </h4>
	                  	  	  <hr>
							  <div class="widget-main">
							  <label for="form-field-select-1">Choisir une campagne</label>
									<form  action="menugen.php?page=table_suiviagronom" method='POST' >
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div >
											<?php $out=list_camp(); ?>															
												<select class="form-control" name="select_campagne" id="form-field-select-1">
													<option value="select_campagne"></option>
														<?php
															while ($row=mysqli_fetch_array($out))
															{
															?>	
															<option><?php echo $row['campagne'] ; ?></option>
															<?php 
															}
															mysqli_free_result($result);							
															?>	
												</select>	
											</div>	
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<button  class="btn btn-danger"  type="submit" >Rechercher</button>
									</div>
									</form>

                              <thead>
						  
                              <tr>
							  <th><i class="fa fa-bullhorn"></i>CAMPAGNE</th>
								<th><i class="fa fa-bullhorn"></i>SAISON</th>
								<th><i class="fa fa-bullhorn"></i>PRENOM & NOM</th>
								<th><i class="fa fa-bullhorn"></i>REGION</th>
								<th><i class="fa fa-bullhorn"></i>DEPARTEMENT </th>
								<th><i class="fa fa-bullhorn"></i>COMMUNE </th>
								<th><i class="fa fa-bullhorn"></i>VILLAGE </th>
								<th><i class="fa fa-bullhorn"></i>STATUT PRODUCTEUR </th>
								<th><i class="fa fa-bullhorn"></i>VILLAGE LOCALISATION </th>
								<th><i class="fa fa-bullhorn"></i>CODE PARCELLE </th>
								<th><i class="fa fa-bullhorn"></i>PARCELLE SEMENCE </th>
								<th><i class="fa fa-bullhorn"></i>SUPERFICIE DECALEE </th>
								<th><i class="fa fa-bullhorn"></i>SUPERFICIE MESUREE </th>
								<th><i class="fa fa-bullhorn"></i>COORDONNEES Y </th>
								<th><i class="fa fa-bullhorn"></i>COORDONNEES X </th>
								<th><i class="fa fa-bullhorn"></i>TOPO SEQUENCE </th>
								<th><i class="fa fa-bullhorn"></i>TRAVAIL SOL </th>
								<th><i class="fa fa-bullhorn"></i>PRATIQUES CF </th>
								<th><i class="fa fa-bullhorn"></i>USER RIPER </th>
								<th><i class="fa fa-bullhorn"></i>DATE REMPLISSAGE </th>
								<th><i class="fa fa-bullhorn"></i>MODE SEMIS </th>
								<th><i class="fa fa-bullhorn"></i>DATE MISE EN PLACE PEPINIERE </th>
								<th><i class="fa fa-bullhorn"></i>DATE SEMIS REPIQUAGE </th>
								<th><i class="fa fa-bullhorn"></i>QUANTITE SEMENCE UTILISEE </th>
								<th><i class="fa fa-bullhorn"></i>VARIETES RIZICULTURE</th>
								<th><i class="fa fa-bullhorn"></i>NIVEAU SEMENCE UTILISEE</th>
								<th><i class="fa fa-bullhorn"></i>UTILISATEUR SEMCERTAME </th>
								<th><i class="fa fa-bullhorn"></i>UTILISATION SEMOIR A RIZ </th>
								<th><i class="fa fa-bullhorn"></i>DATE 1ERE SARCLAGE DESHERBAGE  </th>
								<th><i class="fa fa-bullhorn"></i>QUANTITE PK APPLIQUEE </th>
								<th><i class="fa fa-bullhorn"></i>DATE APPLICATION PK </th>
								<th><i class="fa fa-bullhorn"></i>UTILISATION DE FUMURE APPLIQUEE </th>
								<th><i class="fa fa-bullhorn"></i>DATE 2EME SARCLAGE </th>
								<th><i class="fa fa-bullhorn"></i>DATE DE MARIAGE </th>
								<th><i class="fa fa-bullhorn"></i>QUANTIRE UREE APPLIQUEE </th>
								<th><i class="fa fa-bullhorn"></i>DATE APPLICATION UREE </th>
								<th><i class="fa fa-bullhorn"></i>DATE 3EME SARCLAGE DESHERBAGE </th>
								<th><i class="fa fa-bullhorn"></i>QUANTITEE2 UREE APPLIQUEE </th>
								<th><i class="fa fa-bullhorn"></i>DATE 2 UREE APPLIQUEE </th>
								<th><i class="fa fa-bullhorn"></i>TYPE D ATTAQUE </th>
								<th><i class="fa fa-bullhorn"></i>INDICE CLIMATIQUE </th>
								<th><i class="fa fa-bullhorn"></i>NOMBRE LIGNE MOYENNE </th>
								<th><i class="fa fa-bullhorn"></i>NOMBRE PIEDS MOYEN </th>
								<th><i class="fa fa-bullhorn"></i>NOMBRE PANICULE MOYEN </th>
								<th><i class="fa fa-bullhorn"></i>POIDS MOYEN PANICULE </th>
								<th><i class="fa fa-bullhorn"></i>DENSITE MOYENNE </th>
								<th><i class="fa fa-bullhorn"></i>RENDEMENT ESTIMEE </th>
								<th><i class="fa fa-bullhorn"></i>PRODUCTION ESTIMEE </th>
								<th><i class="fa fa-bullhorn"></i>PARCELLE RECOLTEE </th>
								<th><i class="fa fa-bullhorn"></i>DATE RECOLTEE </th>
								<th><i class="fa fa-bullhorn"></i>PRODUCTION OBTENUE </th>
								<th><i class="fa fa-bullhorn"></i>RENDEMENT A L HA </th>
								<th><i class="fa fa-bullhorn"></i>QUANTITE REMBOURSEE </th>
								<th><i class="fa fa-bullhorn"></i>QUANTITE COMMERCIALISEE </th>
								<th><i class="fa fa-bullhorn"></i>QUANTITE AUTOCONSOMMEE </th>
								<th><i class="fa fa-bullhorn"></i>OBSERVATIONS </th>
								<th><i class="fa fa-bullhorn"></i>NOM OP(RESEAU)</th>								  
                                <th><?php echo "
                                      <a href='menugen.php?page=form_suiviagro'><button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button><a/>" ?>  </th>
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							
									$result=listesuivi($_POST['select_campagne']);
									
								 while ($row=mysqli_fetch_array($result))
									{
								?>							
                              <tr>
							<td><?php echo $row['CAMPAGNE'];?></td>
							<td><?php echo $row['SAISON'];?></td>
							<td><?php echo $row['PRENOM'];?></td>
							<td><?php echo $row['REGION'];?></td>
							<td><?php echo $row['DEPARTEMENT'];?></td>
							<td><?php echo $row['COMMUNE'];?></td>
							<td><?php echo $row['VILLAGE'];?></td>
							<td><?php echo $row['STATUT_PRODUCTEUR'];?></td>
							<td><?php echo $row['VILLAGE_LOCALISATION'];?></td>
							<td><?php echo $row['CODE_PARCELLE'];?></td>
							<td><?php echo $row['PARCELLES_SEMENCE'];?></td>
							<td><?php echo $row['SUPERFICIE_DECALEE'];?></td>
							<td><?php echo $row['SUPERFICIE_MESUREE'];?></td>
							<td><?php echo $row['COORDONNEESY'];?></td>
							<td><?php echo $row['COORDONNEESX'];?></td>
							<td><?php echo $row['TOPOSEQUENCE'];?></td>
							<td><?php echo $row['TRAVAILSOL'];?></td>
							<td><?php echo $row['PRATIQUECF'];?></td>
							<td><?php echo $row['USER_RIPER'];?></td>
							<td><?php echo $row['DATEPREMPLIS'];?></td>
							<td><?php echo $row['MODE_SEMIS'];?></td>
							<td><?php echo $row['DATE_MISE_PLACE_PEPINIERE'];?></td>
							<td><?php echo $row['DATE_SEMISREPIQ'];?></td>
							<td><?php echo $row['QANTITES_SEMENCEUTILISEE'];?></td>
							<td><?php echo $row['VARIETES_RIZCULTURE'];?></td>
							<td><?php echo $row['NIVEAU_SEMENCEUTILISEE'];?></td>
							<td><?php echo $row['UTILISATEUR_SEMCERTAME'];?></td>
							<td><?php echo $row['UTILISATION_SEMOIRARIZ'];?></td>
							<td><?php echo $row['DATE_PREMSARCDESH'];?></td>
							<td><?php echo $row['QUANTITENPKAPPL'];?></td>
							<td><?php echo $row['DATE_APPLICNPK'];?></td>
							<td><?php echo $row['UTILISATION_FUMURE_ORGANIQ'];?></td>
							<td><?php echo $row['DATE_DEUXIEME_SARCLAGE'];?></td>
							<td><?php echo $row['DATE_DE_MARIAGE'];?></td>
							<td><?php echo $row['QUANTITEUR_APPLIQUEE'];?></td>
							<td><?php echo $row['DATE_APPLICATIONURE'];?></td>
							<td><?php echo $row['DATE_TROISIEME_SACDESH'];?></td>
							<td><?php echo $row['QUANTITEUREE2APPLI'];?></td>
							<td><?php echo $row['DATE_APPLICATIONUREE2'];?></td>
							<td><?php echo $row['TYPE_ATTAQUE'];?></td>
							<td><?php echo $row['INDICECLIMATIQUE'];?></td>
							<td><?php echo $row['NBR_LIGNEMOY'];?></td>
							<td><?php echo $row['NBR_PIEDMOY'];?></td>
							<td><?php echo $row['NBR_PANICULESMOY'];?></td>
							<td><?php echo $row['POIDS_MOY_PANICULE'];?></td>
							<td><?php echo $row['DENSITE_MOY'];?></td>
							<td><?php echo $row['RENDEMENT_ESTIME'];?></td>
							<td><?php echo $row['PRODUCTION_ESTIMEE'];?></td>
							<td><?php echo $row['PARCELLE_RECOLTEE'];?></td>
							<td><?php echo $row['DATE_RECOLTE'];?></td>
							<td><?php echo $row['PRODUCTION_OBTENUE'];?></td>
							<td><?php echo $row['RENDEMENTTHA'];?></td>
							<td><?php echo $row['QTE_REMBOURSEE'];?></td>
							<td><?php echo $row['QTE_COMMERCIALEE'];?></td>
							<td><?php echo $row['QTE_AUTOCONSOMMEE'];?></td>
							<td><?php echo $row['OBSERVATION'];?></td>
							<td><?php echo $row['NOM_RESEAU'];?></td>
                        <td> <?php echo "
                                      <a href='menugen.php?page=form_entree'><button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button><a/>
                                      <a href='menugen.php?page=form_edit_entre&&id=$row[id_entree]'><button class='btn btn-primary btn-xs'><i class='fa fa-pencil'></i></button><a/>
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
