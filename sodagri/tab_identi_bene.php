<?php
require'connexion_sa.php';
session_start();
$_SESSION['table']=`so_benef`;
//$un=1;
//$deux=25;
include('pagi.php');
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
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">

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
      <h3> SSE <i class="fa fa-angle-right"></i> Identification des bénéficiaires </h3>
      <div class="row mt">
			  <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Liste des identifications des bénéficiaires</h4>
              <div class="col-lg-6"></div>	
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-3">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">+ Nouvel Identification <br>des bénéficiaires</button>
                    <form class="form-horizontal style-form" action="insert_so.php" method="GET" >
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Formulaire d'un nouvel identification des bénéficiaires</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                             <label> Région:</label>
                              <select class="form-control" name="id_region" id="region"> 
                               <option>Choisir une région</option>
                               <?php
                               $reso=liste_reg();
                               while ($rowg=mysqli_fetch_array($reso))
                               {
                               ?>	
                               <option value="<?php echo $rowg['Id_Region']; ?>"><?php echo $rowg['Region']; ?></option>
                               <?php 
                               }
                                mysqli_free_result($reso);
                               ?>
                              </select>	
                            </div>
                            <div class="form-group">
                             <label> Département:</label>
                              <select class="form-control" name="id_departement" id="departement"> 
                               <option>Choisir un département</option>
                               <?php
                               $resd=liste_dep();
                               while ($rowd=mysqli_fetch_array($resd))
                               {
                               ?>	
                               <option value="<?php echo $rowd['ID_DEPARTEMENT']; ?>"><?php echo $rowd['DEPARTEMENT']; ?></option>
                               <?php 
                               }
                                mysqli_free_result($resd);
                               ?>
                              </select>	
                            </div>
                            <div class="form-group">
                             <label> Commune:</label>
                              <select class="form-control" name="id_commune" id="commune"> 
                               <option>Choisir une commune</option>
                               <?php
                               $resc=liste_comm();
                               while ($rowc=mysqli_fetch_array($resc))
                               {
                               ?>	
                               <option value="<?php echo $rowc['ID_COMMUNE']; ?>"><?php echo $rowc['COMMUNE']; ?></option>
                               <?php 
                               }
                                mysqli_free_result($resc);
                               ?>
                              </select>	
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Village </label>
                                <div class="col-sm-6">
                                 <input type="text" name="nom_village" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Prénom et Nom </label>
                                <div class="col-sm-6">
                                 <input type="text" name="prenom_nom" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Genre </label>
                                <div class="col-sm-6">
                                 <select class="form-control" name="genre" required="required">
                                  <option value="">Choisir un genre</option>
                                  <option value="HOMME">HOMME</option>
                                  <option value="FEMME">FEMME</option>
                                 </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Carte d'Identité Nationale </label>
                                <div class="col-sm-6">
                                 <input type="text" name="cin" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Quantité de semence reçue </label>
                                <div class="col-sm-6">
                                 <input type="text" name="qte_semence_recue" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Quantité de semence remboursée </label>
                                <div class="col-sm-6">
                                 <input type="text" name="qte_semence_remb" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Spéculation </label>
                                <div class="col-sm-6">
                                 <input type="text" name="speculation" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Variété </label>
                                <div class="col-sm-6">
                                 <input type="text" name="variete" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Superficie </label>
                                <div class="col-sm-6">
                                 <input type="text" name="superficie" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >OP/Individuel </label>
                                <div class="col-sm-6">
                                 <input type="text" name="op_individuel" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Année </label>
                                <div class="col-sm-6">
                                 <input type="text" name="annee" class="form-control">
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="bt_benef" >Enregistrer</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    </form>
                  </div>
                  <div class="col-lg-9">
                    <form action="menu_so.php?page=tab_identi_bene" class="form-signin" method="POST"> 			
                      <div class="col-lg-4"> 	
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Prénom et Nom</label>								
                             <div class="col-sm-6">
                                <input type="text" id="prenom_nom" name="prenom_nom" class="form-control col-lg-6" />
                             </div>
                        </div>
                      </div>	
                      <div class="col-lg-5"> 	
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Village</label>								
                             <div class="col-sm-6">
                                <input type="text" id="nom_village" name="nom_village" class="form-control col-lg-6" />
                             </div>
                        </div>
                      </div>								
                      <div class="col-lg-3"> 
                        <button class="btn text-muted text-center btn-danger" name ="recher" type="submit">Rechercher</button>
                      </div> 
                    </form>
                  </div> 
                  		 <?php
                    if (!empty($_POST['prenom_nom'])|| !empty($_POST['nom_village']))
					{
						$result=select_benef($_POST['prenom_nom'],$_POST['nom_village']);
                    }
					else
					{
						$result=liste_benef();
					}		
					$nbr=mysqli_num_rows($result);
                    
                    ?>			
                </div>
              </div><br>&nbsp; &nbsp; Nombre d'enregistrements : <?php 	echo $nbr; ?>
			    <!--Nombre de site par page -->
				 <div class="col-lg-1"></div>
				 <div class="col-lg-5">
					<form method="GET">
						<Label> Nombre de site par page</label>
							<select name="pp">
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="75">75</option>
								<option value="100">100</option>
							</select>
							<input type="hidden" name="num" value="<?php echo $current; ?>">
						<button class="btn btn-primary btn-xs" type="submit">Appliquer</button>
					</form> 
				</div>
				<div class="col-lg-5">
					<ul class="pagination">
						<li class="<?php if($current =='1'){echo "disabled";} ?>"><a href="&&num=<?php if($current!='1'){echo $current-1;}else {echo $current;} ?>&&pp=<?php echo $_GET['pp']; ?>">&laquo;</a></li>
						<?php 
							
							for ($i=1; $i<$nbpage; $i++){
								
								if($i==$current){
									?>
									<li class="active"><a href="&&num=<?php echo $i;?>&&pp=<?php echo $_GET['pp']; ?>"><?php echo $i;?></a></li>
								<?php
							}
							else {
								?>
								<li ><a href="&&num=<?php echo $i;?>&&pp=<?php echo $_GET['pp']; ?>"><?php echo $i;?></a></li>
								<?php
							}
							}
						?>
					
						<li class="<?php if($current == $nbpage){echo "disabled";} ?>"><a href="&&num=<?php if($current!=$nbpage){echo $current+1;}else {echo $current;} ?>&&num=<?php echo $_GET['num']; ?>">&raquo;</a></li>
					</ul>
				</div>
				<div class="col-lg-1"></div>  <br><br>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th><i class="fa fa-bullhorn"></i> Région</th>
                      <th class="hidden-phone"><i class="fa fa-question-circle"></i> Département </th>
                      <th><i class="fa fa-bookmark"></i>Commune</th>
                      <th><i class="fa fa-edit"></i> Prénom et Nom</th>
					   <th><i class="fa fa-edit"></i> Village</th>
                      <th><i class="fa fa-edit"></i> Genre</th>
                      <th><i class="fa fa-edit"></i> C.I.N</th>
                      <th><i class="fa fa-edit"></i> Qté semence reçue</th>
                      <th><i class="fa fa-edit"></i> Qté semence remboursée</th>
                      <th><i class="fa fa-edit"></i> Spéculation</th>
                      <th><i class="fa fa-edit"></i> Variété</th>
                      <th><i class="fa fa-edit"></i> Superficie</th>
                      <th><i class="fa fa-edit"></i> OP/Individuel</th>
                      <th><i class="fa fa-edit"></i> Année</th>
                      <th align="center"></th>
                      <th align="center"></th> 	
                    </tr>
                  </thead>
                  <tbody>
                   	<?php 
					while ($row=mysqli_fetch_array($result))
                      {
                        $cpt++;
                        $id=$row['id_benef']; ?>							
                    <tr>
                      <td style="display:none"><?php echo $id; ?></td>
                      <td align="center"><?php echo $cpt; ?></td>
                      <td align="center"><?php echo $row['Region']; ?></td>
                      <td align="center"><?php echo $row['DEPARTEMENT']; ?></td>
                      <td align="center"><?php echo $row['COMMUNE']; ?> </td>
                      <td align="center"><?php echo $row['prenom_nom']; ?></span></td>
                      <td align="center"><?php echo $row['nom_village']; ?></span></td>
                      <td align="center"><?php echo $row['genre']; ?></span></td>
                      <td align="center"><?php echo $row['cin']; ?></span></td>
                      <td align="center"><?php echo $row['qte_semence_recue']; ?></span></td>
                      <td align="center"><?php echo $row['qte_semence_remb']; ?></span></td>
                      <td align="center"><?php echo $row['speculation']; ?></span></td>
                      <td align="center"><?php echo $row['variete']; ?></span></td>
                      <td align="center"><?php echo $row['superficie']; ?></span></td>
                      <td align="center"><?php echo $row['op_individuel']; ?></span></td>
                      <td align="center"><?php echo $row['annee']; ?></span></td>
                      <td>
                        <a href="menu_so.php?page=form_edit_be&&id=<?php echo $row['id_benef']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a>
                      </td>
                      <td><a href="#"><button class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
                    </tr>
                  <?php 
                  }
                    mysqli_free_result($result);
                    echo '</tr>';
                  ?>	
								
                  </tbody>
                </table>
              </section>
          </div>
        </div>
      </div>
        </div>
      </div>
      
    </section>
  </section>
</section>

<!-- js placed at the end of the document so the pages load faster >
    <script src="/assets/js/jquery.js"></script>
    <script src="/../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/../assets/js/jquery.scrollTo.min.js"></script>
    <script src="/../assets/js/jquery.nicescroll.js" type="text/javascript"></script-->


    <!--common script for all pages>
    <script src="/../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
 

</body>
</html>
