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
      <h3> SSE <i class="fa fa-angle-right"></i> Suivi des indicateurs </h3>
      <div class="row mt">
			  <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Liste des suivis des indicateurs</h4>
              <div class="col-lg-6"></div>	
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-3">
                    <!-- Trigger the modal with a button -->
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">+ Nouveau Suivi des indicateurs</button>
                    <form class="form-horizontal style-form" action="insert_so.php" method="GET" >
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Formulaire d'un nouveau suivi des indicateurs</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Indicateur </label>
                                <div class="col-sm-6">
                                 <input type="text" name="indicateur" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Objectif </label>
                                <div class="col-sm-6">
                                 <input type="text" name="objectif" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Réalisation </label>
                                <div class="col-sm-6">
                                 <input type="text" name="realisation" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Performence </label>
                                <div class="col-sm-6">
                                 <input type="text" name="performence" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Commentaire </label>
                                <div class="col-sm-6">
                                 <input type="text" name="commentaire" class="form-control">
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="bt_suivi_in" >Enregistrer</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    </form>
                  </div>
                  <div class="col-lg-9">
                    <form action="menu_so.php?page=tab_suivi_indicateur" class="form-signin" method="POST"> 			
                      <div class="col-lg-4"> 	
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Indicateur</label>								
                             <div class="col-sm-6">
                                <input type="text" id="indicateur" name="indicateur" class="form-control col-lg-6" />
                             </div>
                        </div>
                      </div>	
                      <div class="col-lg-5"> 	
                        <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label">Réalisation</label>								
                             <div class="col-sm-6">
                                <input type="text" id="indicateur" name="realisation" class="form-control col-lg-6" />
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
                      <th><i class="fa fa-bullhorn"></i> Indicateur</th>
                      <th class="hidden-phone"><i class="fa fa-question-circle"></i> Objectif </th>
                      <th><i class="fa fa-bookmark"></i>Réalisation</th>
                      <th><i class=" fa fa-edit"></i> Preformence</th>
                      <th><i class=" fa fa-edit"></i> Commentaire</th>
                      <th align="center"></th>
                      <th align="center"></th> 	
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                   if (!empty($_POST['indicateur'])|| !empty($_POST['realisation'])){
							$result=select_indi($_POST['indicateur'],$_POST['realisation']);
							   }
							else
							{
								$result=liste_indi();
							}
                   								  
                     while ($row=mysqli_fetch_array($result))
                      {
                        $cpt++;
                        $id=$row['id_so_suivi_indicateur'];
                    ?>							
                    <tr>
                      <td style="display:none"><?php echo $id; ?></td>
                      <td align="center"><?php echo $cpt; ?></td>
                      <td align="center"><?php echo $row['indicateur']; ?></td>
                      <td align="center"><?php echo $row['objectif']; ?></td>
                      <td align="center"><?php echo $row['realisation']; ?> </td>
                      <td align="center"><?php echo $row['performence']; ?></span></td>
                      <td align="center"><?php echo $row['commentaire']; ?></span></td>
                      <td>
                        <a href="#&&id=<?php echo $row['id_so_suivi_indicateur']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a>
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
