<?php
require'connexion_sa.php';
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

    <title>SODAGRI - Fédération des Producteurs du Bassin de l'Anambé</title>

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
      <h3> SSE <i class="fa fa-angle-right"></i> Suivi Agronomique </h3>
      <div class="row mt">
			  <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Suivi agronomique</h4>
              <div class="col-lg-6"></div>	
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-3">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">+ Nouveau Suivi agronomique</button>
                    <form class="form-horizontal style-form" action="insert_so.php" method="GET" >
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Formulaire de suivi agronomique</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-12 col-sm-2 control-label"> Parcelle:</label>
                                    <div class="col-sm-6">
                                      <select class="form-control" name="id_parcelles" id="id_parcelles"> 
                                          <option>Choisir une parcelle</option>
                                          <?php
                                          $reso=liste_parcelles2();
                                          while ($rowg=mysqli_fetch_array($reso))
                                          {
                                          ?>	
                                          <option value="<?php echo $rowg['numparcelle']; ?>"><?php echo $rowg['numparcelle']; ?></option>
                                          <?php 
                                          }
                                                mysqli_free_result($reso);
                                          ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Prénom et Nom </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="prenom_noms" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Village </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="village" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Type de travail du sol </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="type_travail_sol" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Quantité semence </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="qte_semence" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Varieté riz </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="variete_riz" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date de Semis ou Repiquage </label>
                                    <div class="col-sm-6">
                                     <input type="date" name="date_semi_repiq" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Quantité NPK appliquée </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="qte_npk_appli" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date application NPK </label>
                                    <div class="col-sm-6">
                                     <input type="data" name="date_appli_npk" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Quantité Urée appliquuée </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="qte_uree_appli" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date application Urée 1(50%) </label>
                                    <div class="col-sm-6">
                                     <input type="date" name="date_appli_uree_1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date application Urée 2(50%) </label>
                                    <div class="col-sm-6">
                                     <input type="date" name="date_appli_uree_2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date sarclage 1er</label>
                                    <div class="col-sm-6">
                                     <input type="text" name="date_sarclage_1" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date sarclage 2ème </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="date_sarclage_2" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Type d'attaques </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="type_attaque" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Stade Tallage D </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="stade_tallage_d" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Stade Tallage F</label>
                                    <div class="col-sm-6">
                                     <input type="text" name="stade_tallage_f" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Initiation Paniculaire </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="init_panicul" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date Epiasion-Floraison </label>
                                    <div class="col-sm-6">
                                     <input type="date" name="date_epia_florai" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Date de maturité </label>
                                    <div class="col-sm-6">
                                     <input type="date" name="date_mature" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-sm-12 col-sm-2 control-label" >Nombre de mains d'oeuvre hors familiale </label>
                                    <div class="col-sm-6">
                                     <input type="text" name="variete_riz" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary" name="bt_suivi_ag" >Enregistrer</button>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                    </form>
                  </div>
                  <div class="col-lg-9">
                    <form action="menu_so.php?page=tab_suivi_agro" class="form-signin" method="POST"> 			
                      <div class="col-lg-4"> 	
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Variété riz</label>								
                             <div class="col-sm-6">
                                <input type="text" id="variete_riz" name="variete_riz" class="form-control col-lg-6" />
                             </div>
                        </div>
                      </div>	
                      <div class="col-lg-5"> 	
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Type d'attaques</label>								
                             <div class="col-sm-6">
                                <input type="text" id="variete_riz" name="type_attaque" class="form-control col-lg-6" />
                             </div>
                        </div>
                      </div>								
                      <div class="col-lg-3"> 
                        <button class="btn text-muted text-center btn-danger" name ="recher" type="submit">Rechercher</button>
                      </div> 
                    </form>
                  </div> 
                  			
                </div>
              </div><br>&nbsp; &nbsp; Nombre d'enregistrements : <?php echo $nbr; ?><br><br>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th><i class="fa fa-bullhorn"></i> Parcelles</th>
                      <th class="hidden-phone"><i class="fa fa-question-circle"></i> Prénom Nom </th>
                      <th><i class="fa fa-bookmark"></i>Village</th>
                      <th><i class=" fa fa-edit"></i> Type de travail du sol</th>
                      <th><i class=" fa fa-edit"></i> Quantité semence</th>
                      <th><i class=" fa fa-edit"></i> Variété riz</th>
                      <th><i class=" fa fa-edit"></i> Date Semid ou Repiquage</th>
                      <th><i class=" fa fa-edit"></i> Quantité d'application NPK</th>
                      <th><i class=" fa fa-edit"></i> Date d'application NPK</th>
                      <th><i class=" fa fa-edit"></i> Quantité Urée appliquée</th>
                      <th><i class=" fa fa-edit"></i> Date d'application Urée 1</th>
                      <th><i class=" fa fa-edit"></i> Date d'application Urée 2</th>
                      <th><i class=" fa fa-edit"></i> Date sarclage 1er</th>
                      <th><i class=" fa fa-edit"></i> Date sarclage 2ème</th>
                      <th><i class=" fa fa-edit"></i> Type d'attaques</th>
                      <th><i class=" fa fa-edit"></i> Stade Tallage D</th>
                      <th><i class=" fa fa-edit"></i> Stade Tallage F</th>
                      <th><i class=" fa fa-edit"></i> Initiation Paniculaire</th>
                      <th><i class=" fa fa-edit"></i> Date Epiasion-Floraison</th>
                      <th><i class=" fa fa-edit"></i> Date de maturité</th>
                      <th><i class=" fa fa-edit"></i> Quantité mains d'oeuvre hors familiale</th>
                      <th align="center"></th>
                      <th align="center"></th> 	
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($_POST['indicateur'])){
                    $result=list_parcelles($_POST['indicateur'],$_POST['realisation']);
                    }
                   							  
                     while ($row=mysqli_fetch_array($result))
                      {
                        $cpt++;
                        $id=$row['id_so_suivi_indicateur'];
                    ?>							
                    <tr>
                      <td style="display:none"><?php echo $id; ?></td>
                      <td align="center"><?php echo $cpt; ?></td>
                      <td align="center"><?php echo $row['id_parcelles']; ?></td>
                      <td align="center"><?php echo $row['prenom_nom']; ?></td>
                      <td align="center"><?php echo $row['village']; ?> </td>
                      <td align="center"><?php echo $row['type_travail_sol']; ?></span></td>
                      <td align="center"><?php echo $row['qte_semence']; ?></span></td>
                      <td align="center"><?php echo $row['variete_riz']; ?></span></td>
                      <td align="center"><?php echo $row['date_semi_repiq']; ?></span></td>
                      <td align="center"><?php echo $row['qte_npk_appli']; ?></span></td>
                      <td align="center"><?php echo $row['date_appli_npk']; ?></span></td>
                      <td align="center"><?php echo $row['qte_uree_appli']; ?></span></td>
                      <td align="center"><?php echo $row['date_appli_uree_1']; ?></span></td>
                      <td align="center"><?php echo $row['date_appli_uree_2']; ?></span></td>
                      <td align="center"><?php echo $row['date_sarclage_1']; ?></span></td>
                      <td align="center"><?php echo $row['date_sarclage_2']; ?></span></td>
                      <td align="center"><?php echo $row['type_attaque']; ?></span></td>
                      <td align="center"><?php echo $row['stade_tallage_d']; ?></span></td>
                      <td align="center"><?php echo $row['stade_tallage_f']; ?></span></td>
                      <td align="center"><?php echo $row['init_panicul']; ?></span></td>
                      <td align="center"><?php echo $row['date_epia_florai']; ?></span></td>
                      <td align="center"><?php echo $row['date_mature']; ?></span></td>
                      <td align="center"><?php echo $row['nbre_main_oeuvre_hors_fam']; ?></span></td>
                      <td>
                        <a href="#&&id=<?php echo $row['id_so_suivi_agro']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a>
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
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages>
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script-->

</body>
</html>
