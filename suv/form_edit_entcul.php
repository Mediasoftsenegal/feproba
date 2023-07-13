
<?php 
require '../connexion.php';
session_start();
$id=$_GET['id'];
$rest=select_entretien($id);
$rows=mysqli_fetch_array($rest);
$out=list_camp(); 
$res=liste_saison()
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
		  <h3>Suivi agronomique >> <i class="nav-icon fas fa-th"></i> Entretien des cultures  </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active"> Entretien des cultures </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<section class="content">
    <div class="container-fluid">
    	<div class="row">
          	<div class="col-sm-12">
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3> Fiche d'édition d'entretien de culture </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  	<form  action="../insert_fep.php" method="GET" >
					<div class=""   aria-hidden="true">
						<div class="row">
						    <div class="col-sm-5">
								<div class="form-group">
								<input type="hidden"  name="id_entr_cult" class="form-control" value ="<?php echo $rows['id_entr_cult']; ?>">
								<label class="col-sm-2 col-sm-2 control-label" >Campagne</label>
									<div class="col-sm-10">
									<select class="form-control" name="id_campagne"> 
									<option value=<?php echo $rows['ID_CAMPAGNE'];?>><?php echo $rows['camp']; ?></option>
									<?php
									while ($row=mysqli_fetch_array($out))
									{
									?>	
									<option value=<?php echo $row['ID_CAMPAGNE'];?>><?php echo $row['campagne']; ?></option>
									<?php 
									}
									mysqli_free_result($out);
									?>
									</select>	
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
								<div class="col-sm-10">
								<select class="form-control" name="id_saison"> 
								<option value=<?php echo $rows['Id_Saison'];?>><?php echo $rows['Saison']; ?></option>
								<?php
								while ($row=mysqli_fetch_array($res))
								{
								?>	
								<option value=<?php echo $row['Id_Saison'];?>><?php echo $row['Saison']; ?></option>
								<?php 
								}
								mysqli_free_result($res);
								?>
								</select>
								</div>
								</div>
							</div>
						</div>	
									
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" >Secteur </label>
								<div class="col-sm-10">
								<select id="mySelect" class="form-control" name="nomsecteur" > 
								<option value="<?php echo $rows['nomsecteur']; ?>" ><?php echo $rows['nomsecteur']; ?></option>
								<?php
								$ress=liste_secteur();
								while ($rowl=mysqli_fetch_array($ress))
								{
								?>	
								<option value="<?php echo $rowl['nomsecteur']; ?>" ><?php echo $rowl['nomsecteur']; ?></option>
								<?php 
								}
								mysqli_free_result($ress);
								?>
								</select>
								</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" >Bloc </label>
								<div class="col-sm-10">
								<select class="form-control" name="nombloc"> 
								<option value="<?php echo $rows['nombloc']; ?>" ><?php echo $rows['nombloc']; ?></option>
								<?php
								$resb=liste_bloc();
								while ($rowb=mysqli_fetch_array($resb))
								{
								?>	
								<option value="<?php echo $rowb['nombloc']; ?>" ><?php echo $rowb['nombloc']; ?></option>
								<?php 
								}
								mysqli_free_result($resb);
								?>
								</select>
								</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label class="" >N° Parcelle </label>
									<div class="col-sm-10">	
									<input type="hidden"  name="idparcelle" class="form-control" value ="<?php echo $rows['idparcelle']; ?>">	
									<select class="form-control" name="numparcelle"> 	
									<option value="<?php echo $rows['numparcelle']; ?>" ><?php echo $rows['numparcelle']; ?></option>
									<?php	
									$resp=liste_parcelles2();
									while ($rowp=mysqli_fetch_array($resp))
									{
									?>	
									<option value="<?php echo $rowp['numparcelle']; ?>" ><?php echo $rowp['numparcelle']; ?></option>
									<?php 
									}
									mysqli_free_result($resp);
									?>
									</select>
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
									<label class="" >CT </label>
										<div class="col-sm-10">	
										<select class="form-control" name="ct"> 	
										<option value="<?php echo $rows['ct']; ?>" ><?php echo $rows['ct']; ?></option>
											<?php
											
											$resct=liste_ct();
											while ($rowct=mysqli_fetch_array($resct))
											{
											?>	
											<option value="<?php echo $rowct['CT']; ?>" ><?php echo $rowct['CT']; ?></option>
											<?php 
											}
											mysqli_free_result($resct);
											?>
										</select>
										</div>
								</div>
							</div>
						</div>	
						
						<div class="row">
							<div class="col-sm-5">
							<div class="form-group">
								<label >Date de mise en place pépinière</label>
									<div class="col-sm-10">
									<input type="date"  name="datepepiniere" class="form-control" value ="<?php echo $rows['DATE_MISE_PLACE_PEPINIERE']; ?>">
									</div>
							</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
								<label >Rendement estimé</label>
									<div class="col-sm-10">
										<input type="text" name="rendement_est" class="form-control" value ="<?php echo $rows['RENDEMENT_ESTIME']; ?>">
									</div>
								</div>
							</div>	
						</div>	

						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
								<label >Production estimée</label>
									<div class="col-sm-10">
										<input type="text" name="production_est" class="form-control" value ="<?php echo $rows['PRODUCTION_ESTIMEE']; ?>" >
									</div>
								</div>
							</div>	
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
									<label >Niveau de semences utilisées...</label>
										<div class="col-sm-10">
											<input type="text" name="niveau_sem" class="form-control" value ="<?php echo $rows['QUANTITES_SEMENCEUTILISEE']; ?>"  >
										</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-5">									
								<div class="form-group">
								<label >Variété de riz cultivée... </label>
									<div class="col-sm-10">
										<input type="text" name="variete_riz" class="form-control" value="<?php echo $rows['VARIETES_RIZCULTURE']; ?>">
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
									<label >Date de semis ou Repiquage </label>
									<div class="col-sm-10">
										<input type="date" name="date_semisrepiq" class="form-control" value="<?php echo $rows['DATE_SEMISREPIQ']; ?>">
									</div>
								</div>
							</div>
						</div>	

						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label >Quantité semences utilisée (Kg)</label>
										<div class="col-sm-10">
											<input type="int" name="quantite_sem" class="form-control" value="<?php echo $rows['QUANTITES_SEMENCEUTILISEE']; ?>">
										</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
									<label >Utilisation de semences certifiées ou améliorées</label>
										<div class="col-sm-10">
										<select name="utilisateur_semence"class="form-control" placeholder="Utilisation de semences certifiées ou améliorées">
											<option value="<?php echo $rows['UTILISATEUR_SEMCERTAME']; ?>" ><?php echo $rows['UTILISATEUR_SEMCERTAME']; ?></option>
											<option>OUI</option>
											<option>NON</option>
										</select>
										</div>
								</div>	
							</div>	
						</div>	

						<div class="row">
							<div class="col-sm-5">	
								<div class="form-group">
									<label>Utilisation semoir ...</label>
										<div class="col-sm-10">
											<select class="form-control" name="ustilisation_semoir">
											<option value="<?php echo $rows['UTILISATION_SEMOIRARIZ']; ?>" ><?php echo $rows['UTILISATION_SEMOIRARIZ']; ?></option>
											<option>OUI</option>
											<option>NON</option>
											</select>
										 </div>  
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">	
								<div class="form-group">
								<label> Date de sarclage ----- </label>
									<div class="col-sm-10">
										<input type="date" name="date_sarclage" class="form-control" value="<?php echo $rows['DATE_PREMSARCDESH']; ?>">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-5">									
								<div class="form-group">
								<label >Quantité NPK appliquée (Kg)</label>
									<div class="col-sm-10">
										<input type="text" name="quantitenpk" class="form-control" value="<?php echo $rows['QUANTITENPKAPPL']; ?>">
									</div>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-5">
								<div class="form-group">
									<label >Date d'application NPK </label>
										<div class="col-sm-10">
											<input type="date" name="date_applNPK" class="form-control" value="<?php echo $rows['DATE_APPLICNPK']; ?>">
										</div>
								</div>
							</div>
						</div>	

						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label >Utilisation fumure organique </label>
										<div class="col-sm-10">	
										<input type="text" name="utilisation_fumure" class="form-control" value="<?php echo $rows['UTILISATION_FUMURE_ORGANIQ']; ?>">
										</div>
								</div>
							</div>
							<div class="col-sm-1"></div>							
							<div class="col-sm-5">
								<div class="form-group">
									<label class="" >Date saisie</label>
										<div class="col-sm-10">									
										<input class="form-control"  type="date" name="date_saisie2" value="<?php echo $rows['DATE_COLLECTE2']; ?>" />
										</div>
								</div>
							</div>	
						</div>

						<div class="row">					
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_modif_entretien" >Enregistrer</button>
						      </div>
							</form> 
						</div>	
            </div>
            <!-- /.card -->
          </div>  
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
