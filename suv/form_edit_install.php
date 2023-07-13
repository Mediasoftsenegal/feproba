<?php 
require '../connexion.php';
session_start();
$id=$_GET['id'];
$rest=select_installe($id);
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
		  <h3>Suivi agronomique >> <i class="nav-icon fas fa-tasks"></i> Installation des cultures </h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active"> Installation des cultures</li>
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
			  <form  action="insert_fep.php" method="POST" >

				<div class="row">
					<div class="col-sm-1"></div>
						<div class="col-sm-5">
							<div class="form-group">
								<label class="col-sm-3 col-sm-3 control-label" >Campagne</label>
									<select class="form-control" name="id_campagne"> 
										<option><?php echo $row['camp']; ?></option>
										<?php
										while ($rowc=mysqli_fetch_array($out))
										{
										?>	
										<option value=<?php echo $rowc['ID_CAMPAGNE'];?>><?php echo $rowc['campagne']; ?></option>
										<?php 
										}
										mysqli_free_result($out);
										?>
									</select>	
							</div>
						</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
								<select class="form-control" name="id_saison"> 
									<option><?php echo $row['Saison']; ?></option>
									<?php
									while ($rows=mysqli_fetch_array($res))
									{
									?>	
									<option value=<?php echo $rows['Id_Saison'];?>><?php echo $rows['Saison']; ?></option>
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
					<div class="col-sm-5">
						<div class="form-group">
							<label class="col-sm-3 col-sm-3 control-label" >Secteur</label>
								<select class="form-control" name="nomsecteur"> 
									<option><?php echo $row['nomsecteur']; ?></option>
									<?php
									$resc=liste_secteur();
									while ($rowse=mysqli_fetch_array($resc))
									{
									?>	
									<option value="<?php echo $rowse['nomsecteur']; ?>" ><?php echo $rowse['nomsecteur']; ?></option>
									<?php 
									}
									mysqli_free_result($resc);
									?>
								</select>
						</div>
					</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-sm-2 col-sm-2 control-label" >Bloc </label>
							<select class="form-control" name="nombloc"> 
							<option><?php echo $row['nombloc']; ?></option>
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
				<div class="col-sm-5">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label" >N° Parcelle </label>
							<select class="form-control" name="numparcelle"> 	
								<option><?php echo $row['numparcelle']; ?></option>
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
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label" >Parcelle de production </label>
						<input type="text" name="parcelle_prod" id="fname" class="form-control"  value=<?php echo $row['PARCELLE_PRODUCTION'];?>>
						<input type="hidden" name="id_ins" class="form-control"  value=<?php echo $id;?>>
					</div>		
				</div>							
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label" >Mode de sémis</label>
						<input type="text" name="mode_semis" id="fname" class="form-control"  value=<?php echo $row['MODE_SEMIS'];?>>
					</div>		
				</div>
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label" >Superficie déclarée </label>
						<input type="text" name="superficiedeclaree" id="fname" class="form-control"  value=<?php echo $row['SUPERFICIE_DECLAREE'];?>>
					</div>		
				</div>				
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group">
						<label class="">Topo séquence</label>
						<select class="form-control" name="toposequence" value=<?php echo $row['TOPOSEQUENCE'];?>>
							<option><?php echo $row['TOPOSEQUENCE'];?></option>
							<option value="BAS FOND">BAS FOND</option>
							<option value="PLATEAU">PLATEAU</option>
						</select>		
					</div>
				</div>	
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label">Travail sol</label>
						<input class="form-control"  type="text" id="fname" name="travailsol"  value=<?php echo $row['TRAVAILSOL'];?>>
					</div>		
				</div>
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label">Pratiques paysannes</label>
						<input class="form-control"  type="text" id="fname" name="pratiquescf"  value=<?php echo $row['SUPERFICIE_DECLAREE'];?>>
					</div>
				</div>	
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-sm-4 col-sm-4 control-label">SRP</label>
						<select class="form-control" name="toposequence" value=<?php echo $row['SRP'];?>>
							<option><?php echo $row['SRP'];?></option>
							<option value="OUI">OUI</option>
							<option value="NON">NON</option>
						</select>
				</div>	
			</div>
		</div>

		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="form-group">
						<label class="col-sm-4 col-sm-4 control-label" >Utilisation ripper</label>
						<input class="form-control"  type="text" id="fname" name="utilisationripper"  value=<?php echo $row['USER_RIPER'];?>>
					</div>
				</div>	
			<div class="col-sm-6">
				<div class="form-group">
					<label class="col-sm-4 col-sm-4 control-label" >Date saisie</label>								
					<input class="form-control"  type="date" name="date_saisie" value=<?php echo $row['DATE_COLLECTE'];?>>
				</div>
			</div>
		</div>

	</div>

         <!-- /.card-body -->
	<div class="card-footer">
		<button type="submit" class="btn btn-info"> <i class="fa fa-save"></i>  Enregistrer</button>
		<a href="menu_sa.php?page=tab_ins_cul"><button type="button" class="btn btn-danger float-right" ><i class="fa fa-minus-square"></i>  Fermer</button></a>
	</div>   </form> 
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
