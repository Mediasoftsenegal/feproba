<?php 
require '../connexion.php';
session_start();
$_SESSION['id_saison']=$_POST['id_saison'];
$_SESSION['id_campagne']=$_POST['id_campagne'];
$rest=select_saison($_POST['id_saison']);
$rsai=mysqli_fetch_array($rest);
$res=select_camp($_POST['id_campagne']);
$row=mysqli_fetch_array($res);
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
<!-- Button trigger modal -->
 <!-- Main content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <!-- /.card -->
            <div class="card">
            <p> &nbsp; &nbsp;Etape 3 : 100% Complëte</code></p>
			<div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100% Complete</span>
                  </div>
                </div>
              <div class="card-header">
                <h3> Mise à jour Installation des cultures</h3>
                <a href="menu_sa.php?page=form_ins_cul"><button type="button" class="btn btn-warning float-right" ><i class="fa fa-tasks"></i> << Précédent </button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <form  action="insert_fep.php" method="POST" >
				<div class="row">
					<div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >Prénom et Nom </label>								
                            <input class="form-control"  type="text" name="prenomnom" value="<?php echo $_POST['prenomnom'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >Village</label>								
                            <input class="form-control"  type="text" name="village" value="<?php echo $_POST['village'];?>" readonly>
                        </div>
                    </div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-sm-3 col-sm-3 control-label" >Campagne</label>
							<input type="text" name="campagne" id="fname" class="form-control"  value="<?php echo $row['campagne'];?>" readonly>
						</div>		
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label" >Saison </label>
							<input type="text" name="campagne" id="fname" class="form-control"  value="<?php echo $rsai['Saison'];?>" readonly>
						</div>
					</div>
				</div>	

				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label" >Secteur </label>
							<input type="text" name="secteur" id="fname" class="form-control"  value="<?php echo $_POST['secteur'];?>" readonly>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label" >Bloc </label>
							<input type="text" name="numbloc" id="fname" class="form-control"  value="<?php echo $_POST['numbloc'];?>" readonly>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label" >N° Parcelle </label>
							<input type="text" name="numparcelle" id="fname" class="form-control"  value="<?php echo $_POST['numparcelle'];?>" readonly>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label" >Date de saisie </label>
							<input type="text" name="datejour" id="fname" class="form-control"  value="<?php echo date('d/m/Y');?>" readonly>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-4">
						<div class="form-group">
							<label class="col-sm-6 col-sm-6 control-label" >Parcelle de production </label>
							<input type="text" name="parcelle_prod" id="fname" class="form-control"  placeholder="Parcelle de production ">
							<input type="hidden" name="id_ins" class="form-control"  value=<?php echo $id;?>>
						</div>			
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label" >Mode de sémis</label>
							<input type="text" name="mode_semis" id="fname" class="form-control"  placeholder="Mode de sémis">
						</div>		
					</div>							
				</div>

				<div class="row">
					<div class="col-sm-1"></div>
						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-sm-4 col-sm-4 control-label" >Superficie déclarée </label>
								<input type="text" name="superficiedeclaree" id="fname" class="form-control"  placeholder="Superficie déclarée">
							</div>			
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label class="col-sm-4 col-sm-4 control-label" >Superficie mesurée </label>
								<input type="text" name="superficiemesuree" id="fname" class="form-control"  placeholder="Superficie mesurée">
							</div>			
						</div>
						<div class="col-sm-3">
							<div class="form-group">
								<label class="">Toposéquence</label>
								<select class="form-control" name="toposequence" placeholder="Toposéquence">
									<option>Choisir la Toposéquence</option>
									<option value="BAS FOND">BAS FOND</option>
									<option value="PLATEAU">PLATEAU</option>
								</select>		
							</div>
						</div>				
				</div>

				<div class="row">
					<div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 col-sm-4 control-label">Travail sol</label>
								<input class="form-control"  type="text" id="fname" name="travailsol"  placeholder="Travail sol">
							</div>	
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 col-sm-4 control-label">Pratiques paysannes</label>
								<input class="form-control"  type="text" id="fname" name="pratiquescf"  placeholder="Pratiques paysannes">
							</div>	
						</div>
				</div>

				<div class="row">
					<div class="col-sm-1"></div>
						<div class="col-sm-4">
							<div class="form-group">
							<label class="col-sm-4 col-sm-4 control-label">SRP</label>
								<select class="form-control" name="srp" >
									<option>Choisir le SRP </option>
									<option value="OUI">OUI</option>
									<option value="NON">NON</option>
								</select>
							</div>	
						</div>	
						<div class="col-sm-4">
							<div class="form-group">
								<label class="col-sm-4 col-sm-4 control-label" >Utilisation ripper</label>
								<input class="form-control"  type="text" id="fname" name="utilisationripper"  placeholder="Utilisation ripper">
							</div>
						</div>
				</div>
	
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-info"> <i class="fa fa-save" name="bt_installation"></i>  Enregistrer</button>
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