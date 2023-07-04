<?php
require'connexion_sa.php';
$bef=edite_benef($_GET['id']);
$ben=mysqli_fetch_array($bef);

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
<form class="form-horizontal style-form" action="insert_so.php" method="POST" >
                    <!-- Modal -->
                   
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Formulaire de modification identification des bénéficiaires</h4>
                          </div>
						 
                          <div class="modal-body">
                            <div class="form-group">
							<input type="Hidden" name="id_benef" value="<?php echo $ben['id_benef']; ?>" class="form-control">
                             <label> Région:</label>
                              <select class="form-control" name="id_region"  id="region"> 
                               <option><?php echo $ben['Region'] ?></option>
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
                               <option><?php echo $ben['DEPARTEMENT'] ?></option>
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
                               <option><?php echo $ben['COMMUNE'] ?></option>
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
                                 <input type="text" name="nom_village" value="<?php echo $ben['nom_village'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Prénom et Nom </label>
                                <div class="col-sm-6">
                                 <input type="text" name="prenom_nom"  value="<?php echo $ben['prenom_nom'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Genre </label>
                                <div class="col-sm-6">
                                 <select class="form-control" name="genre" >
                                  <option value=""><?php echo $ben['genre'] ?></option>
                                  <option value="HOMME">HOMME</option>
                                  <option value="FEMME">FEMME</option>
                                 </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Carte d'Identité Nationale </label>
                                <div class="col-sm-6">
                                 <input type="text" name="cin" value="<?php echo $ben['cin'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Quantité de semence reçue </label>
                                <div class="col-sm-6">
                                 <input type="text" name="qte_semence_recue"  value="<?php echo $ben['qte_semence_recue'] ?>"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Quantité de semence remboursée </label>
                                <div class="col-sm-6">
                                 <input type="text" name="qte_semence_remb"  value="<?php echo $ben['qte_semence_remb'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Spéculation </label>
                                <div class="col-sm-6">
                                 <input type="text" name="speculation"  value="<?php echo $ben['speculation'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Variété </label>
                                <div class="col-sm-6">
                                 <input type="text" name="variete"  value="<?php echo $ben['variete'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Superficie </label>
                                <div class="col-sm-6">
                                 <input type="text" name="superficie" value="<?php echo $ben['superficie'] ?>"  class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >OP/Individuel </label>
                                <div class="col-sm-6">
                                 <input type="text" name="op_individuel" value="<?php echo $ben['op_individuel'] ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-12 col-sm-2 control-label" >Année </label>
                                <div class="col-sm-6">
                                 <input type="text" name="annee" value="<?php echo $ben['annee'] ?>"  class="form-control">
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary" name="bt_edit_benef" >Enregistrer</button>
                          </div>
                        </div>
                        
                      </div>
                  
                    </form>
	</body>
</html>
					