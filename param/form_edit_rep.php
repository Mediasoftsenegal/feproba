<?php
require'../connexion.php';
session_start();
?>
<?php
 $id=$_GET['asx'];
 $result=editreps($id);
 $row=mysqli_fetch_array($result);
?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> Liste des Exploitants</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Paramètres</li>
              <li class="breadcrumb-item active">Exploitants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section id="container" >  
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
      <section id="main-content">
          <section class="wrapper">          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt"><div class="col-lg-1"></div>
          		<div class="col-lg-8">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>  Formulaire exploitant</h4>
									<form method="POST" action="insert_fep.php" >
										<div class="form-group has-success">
											<label> Prénom et Nom :</label>
											<input type="text" name="up_prenom_nom" id="up_prenom_nom" class="form-control" value="<?php echo  $row['prenom_nom']; ?>">
										</div>
										<div class="form-group has-success">
											<label> date de naissance :</label>
												<input type="date" name="up_date_naissance" id="up_date_naissance" class="form-control"  value="<?php echo  $row['date_naissance']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Genre:</label>
												<select name="up_genre"class="form-control" id="up_genre" >
													<option value="<?php echo  $row['genre']; ?>"><?php echo  $row['genre']; ?></option>
													<option value="Homme">Homme</option>
													<option value="Femme">Femme</option>
												</select>
										</div>
										<div class="form-group has-success">
											<label> Région:</label>
												<select class="form-control" name="up_region" id="up_region"> 
													<option><?php echo  $row['region']; ?></option>
													<?php
													$reso=liste_reg();
													while ($rowg=mysqli_fetch_array($reso))
													{
													?>	
													<option value="<?php echo $rowg['Region']; ?>"><?php echo $rowg['Region']; ?></option>
													<?php 
													}
														mysqli_free_result($reso);
													?>
												</select>	
										</div>
										<div class="form-group has-success">
											<label> Département:</label>
												<select class="form-control" name="up_departement" id="up_departement"> 
													<option><?php echo  $row['departement']; ?></option>
													<?php
													$resd=liste_dep();
													while ($rowd=mysqli_fetch_array($resd))
													{
													?>	
													<option value="<?php echo $rowd['DEPARTEMENT']; ?>"><?php echo $rowd['DEPARTEMENT']; ?></option>
													<?php 
													}
														mysqli_free_result($resd);
													?>
												</select>	
										</div>
										<div class="form-group has-success">
											<label> Commune:</label>
												<select class="form-control" name="up_commune" id="up_commune"> 
													<option><?php echo  $row['commune']; ?></option>
													<?php
													$resc=liste_comm();
													while ($rowc=mysqli_fetch_array($resc))
													{
													?>	
													<option value="<?php echo $rowc['COMMUNE']; ?>"><?php echo $rowc['COMMUNE']; ?></option>
													<?php 
													}
														mysqli_free_result($resc);
													?>
												</select>	
										</div>
										<div class="form-group has-success">
											<label> Village</label>
												<input type="text" name="up_village" id="up_village" class="form-control"  value="<?php echo  $row['village']; ?>">
										</div>
										<div class="form-group has-success">
											<label> N° Téléphone</label>
												<input type="text" name="up_numtel" id="up_numtel" class="form-control" value="<?php echo  $row['numtel']; ?>">
										</div>
										<div class="form-group has-success">
											<label> N° CIN</label>
												<input type="text" name="up_numcin" id="up_numcin" class="form-control" value="<?php echo  $row['numcin']; ?>">
										</div>
									</div>
									<div class="col-sm-6" >
										<div class="form-group has-success">
											<label> Statut Producteur:</label>
												<select name="up_statut_producteur"class="form-control" id="up_statut_producteur" >
													<option value="<?php echo  $row['statut_producteur']; ?>"><?php echo  $row['statut_producteur']; ?></option>
													<option value="Leader">Leader</option>
													<option value="Satellite">Satellite</option>
												</select>
										</div>
										<div class="form-group has-success">
											<label> Organisation de Base</label>
												<input type="text" name="up_organi_base" id="up_organi_base" class="form-control" value="<?php echo  $row['organi_base']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Statut organique</label>
												<input type="text" name="up_statut_organi" id="up_statut_organi" class="form-control"  value="<?php echo  $row['statut_organi']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Année implication :</label>
											<input type="text" name="up_annee_implic" id="up_annee_implic" class="form-control" value="<?php echo  $row['annee_implic']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Droit d'adhésion :</label>
											<input type="text" name="up_droit_adhesion" id="up_droit_adhesion" class="form-control"  value="<?php echo  $row['droit_adhesion']; ?>">
										</div>
										<div class="form-group has-success">
											<label> Source de financement:</label>
											<input type="text" name="up_source_financement" id="up_source_financement" class="form-control" placeholder="Source de financement " value="<?php echo  $row['source_financement']; ?>">
										</div>
										<div class="form-group has-success">
											<div class="checkbox">
											<label>
											 <input type="checkbox"	name="chef_menage" value="1" <?php if ( isset( $_POST['chef_menage'])) echo  'checked="checked"'; ?>>Chef de ménage<br />
											</label>
											</div>
										</div>	
										<div class="form-group has-success">
											<div class="checkbox">
											<label>
											<input type="checkbox" name="membre_menage" value="1" <?php if ( isset( $_POST['membre_menage'])) echo  'checked="checked"'; ?>>Membre ménage<br />
											</label>
											</div>
										</div>	
										<div class="form-group has-success">
											<div class="checkbox">
											<label>
												<input type="checkbox" name="menage_appui" value="1" <?php if ( isset( $_POST['menage_appui'])) echo  'checked="checked"'; ?>>Ménage d'appui<br />
											</label>
											</div>
										</div>	
										<div class="form-group has-success">
											<label> Animateur:</label>
											<input type="text" name="up_animateur" id="up_animateur	" class="form-control" value="<?php echo $row['animateur']; ?>">
										</div>	
										<div class="form-group has-success">
											<label> Observations:</label>
											<textarea name="up_observations" id="up_observations"	class="form-control"  value="<?php echo  $row['observations']; ?>"></textarea>
										</div>	
									</div>
									<button type="submit" class="btn btn-success" name="bt_membreup">Mettre à jour</button>
									<a href="menu_pr.php?page=table_rep">
									<button type="button" class="btn btn-danger" >Fermer</button></a>
									<input type="hidden"  name="sid_repertoire" id="id_repertoire" value="<?php echo  $row['id_repertoire']; ?>">
								</div>
								<div class="col-sm-1"></div>
								</form>
								</div>
          		</div><div class="row mt"><div class="col-lg-1"></div>    	
          	</div><!-- /row -->          

          	
          	
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->    
  </section>
  </div>
              <!-- /.card-body -->
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
  <!-- /.content-wrapper -->

  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
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

<!-- ./wrapper --