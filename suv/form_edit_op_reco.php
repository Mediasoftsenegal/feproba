<?php 
require '../connexion.php';
session_start();
$id=$_GET['id'];
$rest=select_op($id);
$row=mysqli_fetch_array($rest);
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
		  <h3>Suivi agronomique >> <i class="nav-icon fas fa-lemon"></i> Opérations post récoltes </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active"> Opérations post récoltes</li>
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
                <h3> Fiche d'édition</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form class="form-horizontal style-form" action="../insert_fep.php" method="GET" >
					</div>
						<div class="row">
                            <div class="col-sm-1"></div>
						    <div class="col-sm-4">
								<div class="form-group">
									<label class="col-sm-3 col-sm-3 control-label" >Campagne</label>
										<select class="form-control" name="id_campagne"> 
                                            <option value=<?php echo $row['ID_CAMPAGNE'];?>><?php echo $row['CAMPAGNE']; ?></option>
												<?php
											 while ($rowx=mysqli_fetch_array($out))
												{
												?>	
												<option value=<?php echo $rowx['ID_CAMPAGNE'];?>><?php echo $rowx['campagne']; ?></option>
												<?php 
												}
												mysqli_free_result($out);
											?>
										</select>	
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
										<select class="form-control" name="id_saison"> 
                                            <option value=<?php echo $row['ID_SAISON'];?>><?php echo $row['Saison']; ?></option>
												<?php
												while ($rowd=mysqli_fetch_array($res))
												{
												?>	
												<option value=<?php echo $rowd['ID_SAISON'];?>><?php echo $rowd['Saison']; ?></option>
												<?php 
												}
												mysqli_free_result($res);
												?>
										</select>
								</div>
							</div>
                        </div>
                          
                        <div class="row">
                            <div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label"  >Secteur </label>
									<select id="mySelect" class="form-control" name="nomsecteur" > 
                                    <option value="<?php echo $row['nomsecteur']; ?>" ><?php echo $row['nomsecteur']; ?></option>
										<?php
										$ress=liste_secteur();
										while ($rows=mysqli_fetch_array($ress))
										{
										?>	
										<option value="<?php echo $rows['nomsecteur']; ?>" ><?php echo $rows['nomsecteur']; ?></option>
										<?php 
										}
										mysqli_free_result($ress);
										?>
										</select>
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label" >Bloc </label>
										<select class="form-control" name="nombloc"> 
										<option value="<?php echo $row['nombloc']; ?>" ><?php echo $row['nombloc']; ?></option>
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
                        
                        <div class="row">
                        <div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="form-group">
                                    <label class="" >N° Parcelle </label>
                                    <select class="form-control" name="numparcelle"> 	
                                    <option value="<?php echo $row['numparcelle']; ?>" ><?php echo $row['numparcelle']; ?></option>
                                    <?php
                                    $ress=liste_parcelles2();
                                    while ($rowp=mysqli_fetch_array($ress))
                                    {
                                    ?>	
                                    <option value="<?php echo $rowp['numparcelle']; ?>" ><?php echo $rowp['numparcelle']; ?></option>
                                    <?php 
                                    }
                                    mysqli_free_result($ress);
                                    ?>
                                    </select>		
								</div>
							</div>
							<div class="col-sm-1"></div>
							<div class="col-sm-4">
								<div class="form-group">
									<label class="" >CT </label>
										<select class="form-control" name="ct"> 	
                                        <option value="<?php echo $row['ct']; ?>" ><?php echo $row['ct']; ?></option>
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
                            
                    <div class="row">   
						<div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="" >Indice climatique</label>
								<input type="text" name="INDICE_CLIMATIQUE" id="fname" class="form-control" value="<?php echo $row['INDICE_CLIMATIQUE']; ?>">
							</div>
						</div>
						<div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="" >Poids carré rendement</label>
								<input type="text" name="POIDS_CARRE_RENDEMENT" id="fname" class="form-control" value="<?php echo $row['POIDS_CARRE_RENDEMENT']; ?>">
							</div>
						</div>
                    </div> 
                    
                    <div class="row">  
                        <div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="" >Rendement moyenne estimé</label>
								<input type="text" name="RENDEMENT_MOY_EST" id="fname" class="form-control" value="<?php echo $row['RENDEMENT_MOY_EST']; ?>">
							</div>
						</div>	
						<div class="col-sm-1"></div>
						<div class="col-sm-4">
                            <div class="form-group">
								<label class="" >Production estimée </label>
								<input type="text" name="PRODUCTION_EST" id="fname" class="form-control" value="<?php echo $row['PRODUCTION_EST']; ?>">
							</div>
						</div>	
                    </div> 				
                        
                    <div class="row">
                        <div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="" >Date de récolte </label>
								<input type="date" name="DATE_RECOLTE" id="fname" class="form-control" value="<?php echo $row['DATE_RECOLTE']; ?>">
							</div>
						</div>	
						<div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="">Récolte moyenne</label>
								<input class="form-control"  type="text" id="fname" name="RECOLTE_MOYENNE" value="<?php echo $row['RECOLTE_MOYENNE']; ?>"/>
							</div>
						</div>
                    </div>     	
                    <div class="row">
                    <div class="col-sm-1"></div>
						<div class="col-sm-4">	
							<div class="form-group">
								<label class="">Production réelle</label>
								<input class="form-control"  type="text" id="fname" name="PRODUCTION_REELLE" value="<?php echo $row['PRODUCTION_REELLE']; ?>"/>
							</div>
						</div>
						<div class="col-sm-1"></div>	
						<div class="col-sm-4">	
							<div class="form-group">
							<label class="">Taux d'humité au moment des récoltes </label>
							<input class="form-control"  type="text" id="fname" name="TAUX_HUMIDITE" value="<?php echo $row['TAUX_HUMIDITE']; ?>"/>
						    </div>
					    </div>	
                    </div>    
					<div class="modal-footer">
					    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary" name="bt_post_recolt" >Enregistrer</button>
					</div>
						   </div>
							</div>
						  </div>
						</div>      				
      				</div>
					</form>
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
