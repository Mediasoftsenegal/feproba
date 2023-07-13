<?php 
require '../connexion.php';
session_start();
$id=$_GET['asx'];
$rest=editreps($id);
$row=mysqli_fetch_array($rest);
$out=list_camp(); 
$res=liste_saison();
$ter=attr_parcelle($id);
$dow=mysqli_fetch_array($ter);

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
        
          <div class="col-sm-12">
		  
            <!-- /.card -->
            <div class="card">
			<p> &nbsp; &nbsp;Etape 2 : 66% Complëte</code></p>
			<div class="progress progress-sm active">
                  <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: 66%">
                    <span class="sr-only">66% Complete</span>
                  </div>
                </div>
              <div class="card-header">
                <h3> Mise à jour Installation des cultures</h3>
				
    		</div>
			
              <!-- /.card-header -->
              <div class="card-body">
			  <form  action="menu_sa.php?page=form_ins_cul03" method="POST" >
              <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >Prénom et Nom </label>								
                            <input class="form-control"  type="text" name="prenomnom" value="<?php echo $row['prenom_nom'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >Village</label>								
                            <input class="form-control"  type="text" name="village" value="<?php echo $row['village'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >N° CIN</label>								
                            <input class="form-control"  type="text" name="numcin" value="<?php echo $row['numcin'];?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >Secteur </label>								
                            <input class="form-control"  type="text" name="secteur" value="<?php echo $row['organi_base'];?>" readonly>
                        </div>
                    </div>
                </div>
                
                <div class="row">				
				    <div class="col-sm-3">
					    <div class="form-group">
                            <label class="col-sm-3 col-sm-3 control-label" >Bloc</label>
						    <input type="text" name="numbloc" id="fname" class="form-control"  value="<?php echo $dow['nombloc'];?>" readonly>
					    </div>	
				    </div>				
				    <div class="col-sm-3">
					    <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >CT</label>
                            <input type="text" name="ct" id="fname" class="form-control"  value="<?php echo $dow['ct'];?>" readonly>
					    </div>
				    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >N° Parcelle</label>
                            <input type="text" name="numparcelle" id="fname" class="form-control"  value="<?php echo $dow['numparcelle'];?>" readonly>
                        </div>
			        </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="col-sm-4 col-sm-4 control-label" >Nature Parcelle</label>
                            <input type="text" name="nature_parcelle" id="fname" class="form-control"  value="<?php echo $dow['nature_parcelle'];?>" readonly>
                        </div>
                    </div>
			    </div>
					
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-5">
						<div class="form-group">
							<label class="col-sm-3 col-sm-3 control-label" >Campagne</label>
							<select class="form-control" name="id_campagne"> 
                            <option>Choisir la campagne </option>
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
					<div class="col-sm-5">
						<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
								<select class="form-control" name="id_saison"> 
                                    <option>Choisir la saison </option>
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
                            <label class="col-sm-4 col-sm-4 control-label" >Date saisie</label>								
                            <input class="form-control"  type="date" name="date_saisie" value="<?php echo date('Ymd');?>">
                        </div>
                    </div>
                    <div class="col-sm-5"></div>				
                    <div class="col-sm-1"></div>
		        </div>

             <!-- /.card-body -->
	    <div class="card-footer">
            <div class="row">
                <div class="col-sm-6">
                <a href="javascript:history.go(-1)"><button  class="btn btn-warning"> <i class="fa fa-tasks"></i> << Précédent </button><a/>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-warning"> <i class="fa fa-tasks" name="bt_installation"></i>  Suivant >> </button><a/>
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