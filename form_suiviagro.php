<?php 
require 'connexion.php';
session_start();
$result=prenomnom();
$result2=listevariete();
$result3=listespeculs();
$result4=list_camp();
$out=list_camp(); 
$res=liste_saison();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
 

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	<script type="text/javascript">
        //<!--
                function change_onglet(name)
                {
                        document.getElementById('onglet_'+anc_onglet).className = 'onglet_0 onglet';
                        document.getElementById('onglet_'+name).className = 'onglet_1 onglet';
                        document.getElementById('contenu_onglet_'+anc_onglet).style.display = 'none';
                        document.getElementById('contenu_onglet_'+name).style.display = 'block';
                        anc_onglet = name;
                }
        //-->
        </script>
    
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
	<style type="text/css">
        .onglet
        {
                display:inline-block;
                margin-left:3px;
                margin-right:3px;
                padding:3px;
                border:1px solid black;
                cursor:pointer;
        }
        .onglet_0
        {
                background:#bbbbbb;
                border-bottom:1px solid black;
        }
        .onglet_1
        {
                background:#ffffff;
                border-bottom:0px solid black;
                padding-bottom:4px;
        }
        .contenu_onglet
        {
                background-color:#ffffff;
                border:1px solid black;
                margin-top:-1px;
                padding:5px;
                display:none;
        }
        ul
        {
                margin-top:0px;
                margin-bottom:0px;
                margin-left:-10px
        }
        h1
        {
                margin:0px;
                padding:0px;
        }
        </style>
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
			 <!-- Les onglets -->
	
	<div class="systeme_onglets">
	<h4 class="mb"><i class="fa fa-angle-right"></i>  Formulaire suivi agronomique</h4>
	<form class="form-horizontal style-form" action="insert_fep.php" method="POST">
	<input name="mode" type="hidden" value="ajout"
        <div class="onglets">
            <span class="onglet_0 onglet" id="onglet_quoi" onclick="javascript:change_onglet('quoi');">Identification</span>
            <span class="onglet_0 onglet" id="onglet_qui" onclick="javascript:change_onglet('qui');">Etape 2</span>
            <span class="onglet_0 onglet" id="onglet_pourquoi" onclick="javascript:change_onglet('pourquoi');">Etape 3</span>
        </div>
        <div class="contenu_onglets">
            <div class="contenu_onglet" id="contenu_onglet_quoi">
              <div class="row mt"> 
                <div class="col-lg-6">
				<!--div class="form-panel"-->
					<div class="form-group">
                     <label >Campagne ......................</label>
                         <div class="col-sm-10">
                             <select class="form-control" name="CAMPAGNE"> 
								<option>Choisir une campagne</option>
									<?php
								 while ($row=mysqli_fetch_array($out))
									{
									?>	
									<option><?php echo $row['campagne']; ?></option>
									<?php 
									}
									mysqli_free_result($out);
								?>
								</select>								
						</div> 
					</div>  
					<div class="form-group">
                     <label  >Saison ......................</label>
                         <div class="col-sm-10">
                             <select class="form-control" name="SAISON"> 
								<option>Choisir une saison</option>
									<?php
								 while ($row=mysqli_fetch_array($res))
									{
									?>	
									<option><?php echo $row['Saison']; ?></option>
									<?php 
									}
									mysqli_free_result($res);
								?>
								</select>								
						</div> 
					</div>  
					<div class="form-group">
                     <label >Prénom et nom ......................</label>
                         <div class="col-sm-10">
                             <select class="form-control" name="PRENOM"> 
								<option>Choisir un prénom et nom</option>
									<?php
								 while ($row=mysqli_fetch_array($result))
									{
									?>	
									<option><?php echo $row['prenom_nom']; ?></option>
									<?php 
									}
									mysqli_free_result($result);
								?>
								</select>								
						</div> 
					</div>  
					<div class="form-group" >
						<label >Genre ......................</label>
                             <div class="col-sm-10">
								<select class="form-control" name="genre">
								  <option>Choisir un genre</option>
								  <option>Homme</option>
								  <option>femme</option>
								</select>
							  </div>  
						</div>	
								
						<div class="form-group">
                              <label >Région ...................... </label>
                              <div class="col-sm-10">
                                  <select class="form-control" name="REGION"> 
									<option>Choisir une région</option>
									<?php
										$reso=liste_reg();
										while ($rowg=mysqli_fetch_array($reso))
										{
										?>	
										<option><?php echo $rowg['Region']; ?></option>
										<?php 
										}
										mysqli_free_result($reso);
									?>
									</select>								
                              </div>
                          </div>						
						 
						  <div class="form-group">
                              <label >Département........... </label>
								<div class="col-sm-10">
                                  <select class="form-control" name="DEPARTEMENT"> 
									<option>Choisir un département</option>
									<?php
										$resd=liste_dep();
										while ($rowd=mysqli_fetch_array($resd))
										{
										?>	
										<option><?php echo $rowd['DEPARTEMENT']; ?></option>
										<?php 
										}
										mysqli_free_result($resd);
									?>
									</select>								
                              </div>
                          </div>
						  <div class="form-group">
                              <label >Commune ..................... .  </label>
								<div class="col-sm-10">
                                  <select class="form-control" name="COMMUNE"> 
									<option>Choisir une commune</option>
									<?php
										$resc=liste_comm();
										while ($rowc=mysqli_fetch_array($resc))
										{
										?>	
										<option><?php echo $rowc['COMMUNE']; ?></option>
										<?php 
										}
										mysqli_free_result($resc);
									?>
									</select>								
                              </div>
                          </div>
						  <div class="form-group">
                              <label>Village  ......................  </label>
                              <div class="col-sm-10">
                                  <input type="text"  name="VILLAGE" class="form-control" placeholder="Village">
                              </div>
                          </div>
						
						<div class="form-group">
                              <label >Statut producteur ........... </label>
                              <div class="col-sm-10">
                                  <input type="text"  name="STATUT_PRODUCTEUR" class="form-control" placeholder="Statut producteur">
                              </div>
                          </div>

					<div class="form-group">
                              <label >Code parcelle ...........................</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="CODE_PARCELLE" class="form-control" placeholder="Code parcelle">
                              </div>
                          </div>
						  <div class="form-group">
                              <label >Parcelle de Production de semences</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="PARCELLES_SEMENCE" class="form-control" placeholder="Parcelle de Production de semences">
                              </div>
                          </div>
					
					</br>
			
          	</div><!-- /col-lg-4 -->  
			 
			<div class="col-lg-4">
					
					<div class="form-group">
                              <label >Mode de semis ...</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="MODE_SEMIS" class="form-control" placeholder="Mode de semis">
                              </div>
                     </div>
					 <div class="form-group">
                              <label >Date de mise en place pépinière</label>
                              <div class="col-sm-10">
                                  <input type="date"  name="DATE_MISE_PLACE_PEPINIERE" class="form-control" placeholder="Date de mise en place pépinière">
                              </div>
                     </div>
					
					<div class="form-group">
						<label >Date de semis ou Repiquage </label>
								<div class="col-sm-10">
									<input type="date" name="DATE_SEMISREPIQ" class="form-control" placeholder="Date de semis ou Repiquage">
								</div>
					</div>
					<div class="form-group">
						<label >Quantité semences utilisée (Kg)</label>
								<div class="col-sm-10">
									<input type="int" name="QANTITES_SEMENCEUTILISEE" class="form-control" placeholder="Quantité semences utilisée (Kg)">
								</div>
					</div>
					<div class="form-group">
						<label >Variété de riz cultivée... </label>
								<div class="col-sm-10">
									<input type="text" name="VARIETES_RIZCULTURE" class="form-control" placeholder="Variété de riz cultivée">
								</div>
					</div>
					<div class="form-group">
						<label >Niveau de semences utilisées...</label>
								<div class="col-sm-10">
									<input type="text" name="NIVEAU_SEMENCEUTILISEE" class="form-control" placeholder="Niveau de semences utilisées" >
								</div>
					</div>
					<div class="form-group">
							 <label >Utilisation de semences certifiées ou améliorées</label>
                              <div class="col-sm-10">
							  <select name="UTILISATEUR_SEMCERTAME"class="form-control" placeholder="Utilisation de semences certifiées ou améliorées">
								  <option>Utilisation de semences certifiées ou améliorées</option>
								  <option>OUI</option>
								  <option>NON</option>
							</select>
						</div>  
				</div>	
			</div>	<!-- col-lg-4--> 
			</div>
		</div>
			</div> 
			</div><!-- /row -->
			
    <div class="contenu_onglet" id="contenu_onglet_qui">
		<div class="row mt"> 
            <div class="col-lg-6">
				<!--div class="form-panel"-->
					<div class="form-group">
						<label>Superficie déclarée (Ha)</label>
							<div class="col-sm-10">
								<input type="text" name="SUPERFICIE_DECLAREE" class="form-control" placeholder="Superficie déclarée (Ha)">
							</div>
					</div>
					 <div class="form-group">
						<label>Superficie mesurée (Ha)</label>
							<div class="col-sm-10">
								<input type="text" name="SUPERFICIE_MESUREE" class="form-control" placeholder="Superficie mesurée (Ha)">
							</div>
					</div>
					<div class="form-group">
						<label>Coordonnées géographiques X</label>
							<div class="col-sm-10">
								<input type="text" name="COORDONNEESY" class="form-control" placeholder="Coordonnées X">
							</div>
					</div>
					
					<div class="form-group">
						<label>Coordonnées géographiques Y</label>
							<div class="col-sm-10">
								<input type="text" name="COORDONNEESX" class="form-control" placeholder="Coordonnées Y">
							</div>
					</div>
					<div class="form-group">
						<label>Topo séquence (Bas fond ou Plateau)</label>
							<div class="col-sm-10">
								<input type="text" name="TOPOSEQUENCE" class="form-control" placeholder="Topo séquence (Bas fond ou Plateau)">
							</div>	
					</div>
					<div class="form-group">
						<label>Travail du sol  ---------    </label>
							<div class="col-sm-10">
								<input type="text" name="TRAVAILSOL" class="form-control" placeholder="Travail du sol">
							</div>
					</div>
					<div class="form-group">
						<label>Pratique du CF ---------  </label>
							<div class="col-sm-10">
								<input type="text" name="PRATIQUECF" class="form-control" placeholder="Pratique du CF">
							</div>
					</div>
					<div class="form-group">
						<label>Utilisation Ripper</label>
							<div class="col-sm-10">
								<input type="text" name="USER_RIPER" class="form-control" placeholder="Utilisation Ripper">
							</div>
					</div>
					
					
				
			</div>	<!-- col-lg-6-->
			<div class="col-lg-6"> 
			<div class="form-group">
						<label>Date 1ère pluie utile</label>
							<div class="col-sm-10">
								<input type="date" name="DATEPREMPLIS" class="form-control" placeholder="Date 1ère pluie utile">
							</div>
					</div>
					 
			<div class="form-group">
						 <label>Utilisation semoir ...</label>
                           <div class="col-sm-10">
							  <select class="form-control" name="UTILISATION_SEMOIRARIZ" placeholder="Mode de semis">
								<option>Utilisation semoir à riz</option>
								<option>OUI</option>
								<option>NON</option>
							</select>
						 </div>  
					</div>
				<div class="form-group">
					<label>Date de mise en place pépinière</label>
						<div class="col-sm-10">
							<input type="date" name="DATE_MISE_PLACE_PEPINIERE" class="form-control" placeholder="Date de mise en place pépinière">
						</div>
				</div>
				<div class="form-group">
					<label>Date de semis ou Repiquage </label>
						<div class="col-sm-10">
							<input type="date" name="daterep" class="form-control" placeholder="Date de semis ou Repiquage">
						</div>
				</div>
				<div class="form-group">
					<label>Quantité semences utilisée (Kg)</label>
						<div class="col-sm-10">
							<input type="text" name="QANTITES_SEMENCEUTILISEE" class="form-control" placeholder="Quantité semences utilisée (Kg)">
						</div>
				</div>
				<div class="form-group">
					<label>Variété de riz cultivée</label>
						<div class="col-sm-10">
							<input type="text" name="VARIETES_RIZCULTURE" class="form-control" placeholder="Variété de riz cultivée">
						</div>
				</div>
				<div class="form-group">
					<label>Niveau semences utilisées</label>
						<div class="col-sm-10">
							<input type="text" name="NIVEAU_SEMENCEUTILISEE" class="form-control" placeholder="Niveau semences utilisées">
						</div>
				</div>
				<div class="form-group">
					<label>Utilisation de semences certifiées ou améliorées</label>
						<div class="col-sm-10">
							<input type="text" name="UTILISATEUR_SEMCERTAME" class="form-control" placeholder="Utilisation de semences certifiées ou améliorées">
						</div>
				</div>
			</div>	 
        </div>
	</div>
    <div class="contenu_onglet" id="contenu_onglet_pourquoi">
        <div class="row mt">
			<div class="col-lg-6">
				<div class="form-group">
					<label> Date de sarclage ----- </label>
						<div class="col-sm-10">
							<input type="date" name="DATE_PREMSARCDESH" class="form-control" placeholder="Date de premiere Sarclage">
						</div>
				</div>
				<div class="form-group">
					<label >Quantité NPK appliquée (Kg)</label>
						<div class="col-sm-10">
							<input type="text" name="QUANTITENPKAPPL" class="form-control" placeholder="Quantité NPK appliquée (Kg)">
						</div>
				</div>
				<div class="form-group">
					<label >Date d'application NPK </label>
						<div class="col-sm-10">
							<input type="date" name="DATE_APPLICNPK" class="form-control" placeholder="Date d'application NPK">
						</div>
				</div>
				<div class="form-group">
					<label >Utilisation fumure organique </label>
						<div class="col-sm-10">
							<input type="text" name="UTILISATION_FUMURE_ORGANIQ" class="form-control" placeholder="Utilisation fumure organique">
						</div>
				</div>
				<div class="form-group">
					<label > Date de Deuxième Sarclage / Désherbage </label>
						<div class="col-sm-10">
							<input type="date" name="DATE_DEUXIEME_SARCLAGE" class="form-control" placeholder="Date de Deuxième Sarclage / Désherbage">
						</div>
				</div>
				<div class="form-group">
					<label >Quantité Urée 1 appliquée (Kg)</label>
						<div class="col-sm-10">
							<input type="text" name="QUANTITEUR_APPLIQUEE" class="form-control">
						</div>
				</div>
				<div class="form-group">
					<label >Date d'application Urée 1</label>
						<div class="col-sm-10">
							<input type="date" name="DATE_APPLICATIONURE" class="form-control" placeholder="Date d'application Urée 1">
						</div>
				</div>
				<div class="form-group">
					<label>Date de Troisième Sarclage/Désherbage</label>
						<div class="col-sm-10">
							<input type="date" name="DATE_TROISIEME_SACDESH" class="form-control" placeholder="Date de Troisième Sarclage/Désherbage">
						</div>
				</div>
				<div class="form-group">
					<label>Quantité Urée 2 appliquée (Kg) </label>
						<div class="col-sm-10">
							<input type="text" name="QUANTITEUREE2APPLI" class="form-control" placeholder="Quantité Urée 2 appliquée (Kg)">
						</div>
				</div>
				<div class="form-group">
					<label>Types d'Attaques ---- </label>
						<div class="col-sm-10">
							<input type="text" name="TYPE_ATTAQUE" class="form-control" placeholder="Types d'Attaques">
						</div>
				</div>
			</div>	<!-- col-lg-6--> 
			<div class="col-lg-4">
				
				<div class="form-group">
					<label >Incidences Climatiques (Innondation, sécheresse)</label>
						<div class="col-sm-10">
							<input type="text" name="INDICECLIMATIQUE" class="form-control" placeholder="Incidences Climatiques (Innondation, sécheresse)">
						</div>
				</div>
				<div class="form-group">
					<label > Nombre de lignes en moyenne (sur 1m) </label>
						<div class="col-sm-10">
							<input type="text" name="NBR_LIGNEMOY" class="form-control" placeholder="Nombre de lignes en moyenne (sur 1m) ">
						</div>
				</div>
				<div class="form-group">
					<label >Nombre de pieds en moyenne (sur 1m) </label>
						<div class="col-sm-10">
							<input type="text" name="NBR_PIEDMOY" class="form-control" placeholder="Nombre de pieds en moyenne (sur 1m)">
						</div>
				</div>
				
			</div>	<!-- col-lg-4--> 
			<div class="col-lg-4">
				<div class="form-group">
					<label >Date d'application Urée 1</label>
						<div class="col-sm-10">
							<input type="date" name="DATE_APPLICATIONURE" class="form-control" placeholder="Date d'application Urée 1">
						</div>
				</div>
				<div class="form-group">
					<label >Date de Troisième Sarclage / Désherbage</label>
						<div class="col-sm-10">
							<input type="date" name="DATE_TROISIEME_SACDESH" class="form-control" placeholder="Date de Troisième Sarclage / Désherbage">
						</div>
				</div>
				<div class="form-group">
					<label >Quantité Urée 2 appliquée (Kg) </label>
						<div class="col-sm-10">
							<input type="text" name="QUANTITEUREE2APPLI" class="form-control" placeholder="Quantité Urée 2 appliquée (Kg)">
						</div>
				</div>
				<div class="form-group">
					<label >Date d'application Urée 2</label>
						<div class="col-sm-10">
							<input type="date" name="DATE_APPLICATIONUREE2" class="form-control" placeholder="Date d'application Urée 2">
						</div>
				</div>
				<div class="form-group">
					<label >Incidences Climatiques (Innondation, sécheresse)</label>
						<div class="col-sm-10">
							<input type="text" name="INDICECLIMATIQUE" class="form-control" placeholder="Incidences Climatiques (Innondation, sécheresse)">
						</div>
				</div>
				<div class="form-group">
					<label > Nombre de lignes en moyenne (sur 1m) </label>
						<div class="col-sm-10">
							<input type="text" name="NBR_LIGNEMOY" class="form-control" placeholder="Nombre de lignes en moyenne (sur 1m)">
						</div>
				</div>
				<div class="form-group">
					<label >Nombre de pieds en moyenne (sur 1m) </label>
						<div class="col-sm-10">
							<input type="text" name="NBR_PANICULESMOY" class="form-control" placeholder="Nombre de pieds en moyenne (sur 1m)">
						</div>
				</div>
			</div>	<!-- col-lg-4--> 
		</div>
     </div>
 </div>
    </div>
    <script type="text/javascript">
        //<!--
                var anc_onglet = 'quoi';
                change_onglet(anc_onglet);
        //-->
        </script>		
<!-- fin des onglets -->
			
          	
          	
			
      
	<div>
		<p align="center"> <div> <button type="submit" class="btn btn-theme">Valider</button></p> </div>
		</form>
	</div>
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
