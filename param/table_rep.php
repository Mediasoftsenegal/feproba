<?php
require'../connexion.php';
session_start();
$result=listerep();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> <i class='fa fa-tasks'></i> Exploitants</h1>
          </div>
		  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Paramètres</li>
              <li class="breadcrumb-item active"> Exploitants</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des exploitants</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Button trigger modal -->									
										<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
											+ Nouveau exploitant
										</button>
                    <form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
												<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-xl">
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
																		<h4 class="modal-title" id="myModalLabel">Formulaire exploitant </h4>
																</div>
															<div class="modal-body">
                                <div class="row">
                                  <div class="col-sm-5">								
                                    <div class="form-group">
                                      <label class="col-sm-12 col-sm-2 control-label">Prénom et nom </label>
                                        <input type="text" name="prenom_nom" class="form-control" placeholder="Prénom et Nom">
                                    </div>
                                  </div>

																<div class="col-sm-5">
																	<div class="form-group">	
																		<label class="col-sm-12 col-sm-2 control-label">Date de naissance</label>
																				<input type="date" name="date_naissance" class="form-control" placeholder="Date de naissance">
																	  </div>	
																</div>
                                </div>
                                <div class="row">
																<div class="col-sm-5">
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Genre </label>
																				<select name="genre"class="form-control" placeholder="choisir le genre">
																					<option value="Choisir le genre">Choisir le genre</option>
																					<option value="Homme">Homme</option>
																					<option value="Femme">Femme</option>
																				</select>
																	</div>	
																</div>
																<div class="col-sm-5">
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Région</label>
																				<select class="form-control" name="region"> 
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
                                </div>

                                <div class="row">
																<div class="col-sm-5">												
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-3 control-label">Département </label>
																				<select class="form-control" name="departement"> 
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
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Commune</label>
																				<select class="form-control" name="commune"> 
																					<option>Choisir une commune</option>
																						<?php
																							$resc=liste_comm();
																							while ($rowc=mysqli_fetch_array($resc))
																							{
																							?>	
																							<option value="<?php echo $rowc['COMMUNE']; ?>"><?php echo ($rowc['COMMUNE'].'('.$rowc['DEPART'].')'); ?></option>
																							<?php 
																							}
																							mysqli_free_result($resc);
																						?>
																				</select>								
																	</div>
																</div>
                                </div>

                                <div class="row">
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Village</label>
																			  <input type="text"  name="village" class="form-control" placeholder="Village">
																	</div>
																</div>	
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">N°Téléphone </label>
																			<input type="text"  name="numtel" class="form-control" placeholder="N° Téléphone">
																	</div>
																</div>
                                </div>

                                <div class="row">
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">N°Identification nationale </label>
																				<input type="text"  name="numcin" class="form-control" placeholder="N° Identification nationale">
																	</div>											
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Statut producteur </label>
																				<input type="text"  name="statut_producteur" class="form-control" placeholder="Statut producteur">
																	</div>
																</div>	
                                </div>

                              <div class="row">
																<div class="col-sm-5">		
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Organisation de Base  </label>
																				<input type="text"  name="organi_base" class="form-control" placeholder="Organisation de Base">
																	</div>
																</div>
																<div class="col-sm-5">											
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Statut organisation  </label>
																				<input type="text"  name="statut_organi" class="form-control" placeholder="Statut organisation">
																	</div>
																</div>
                                </div>

                              <div class="row">
																<div class="col-sm-5">		
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Année implication  </label>
																				<input type="text"  name="annee_implic" class="form-control" placeholder="Année implication">
																	</div>
																</div>
																<div class="col-sm-5">			
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Droit d'adhésion </label>
																				<input type="text"  name="droit_adhesion" class="form-control" placeholder="Droit d'adhésion">
																	</div>
																</div>
                                </div>
                                
                                <div class="row">
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Source de financement  </label>
																				<input type="text"  name="source_financement" class="form-control" placeholder="Source de financement">
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Chef de ménage  </label>
																				<input type="text"  name="chef_menage" class="form-control" placeholder="Chef de ménage">
																	</div>
																</div>
                                </div>

                                <div class="row">
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Membre ménage  </label>
																				<input type="text"  name="membre_menage" class="form-control" placeholder="Membre ménage">
																	</div>
																</div>
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Menage d'appui </label>
																				<input type="text"  name="menage_appui" class="form-control" placeholder="Menage d'appui">
																	</div>
																</div>
                                </div>

                                <div class="row">
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">Animateur </label>
																				<input type="text"  name="animateur" class="form-control" placeholder="Animateur">
																	</div>
																</div>		
																<div class="col-sm-5">	
																	<div class="form-group">
																		<label class="col-sm-12 col-sm-2 control-label">	Observations </label>
																				<input type="hidden"  name="id_repertoire" id="id_repertoire" />
																				<input type="text"  name="observations" class="form-control" placeholder="	Observations">
																	</div>
																</div>
                                </div>
                                	
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button><br>
																<button type="submit" id="insert" class="btn btn-primary" name="bt_membre" >Enregistrer</button>
															</div>
									
														</div>      				
													</div>				
												</div>				
										</div>	
									</form>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th> Prénoms & Nom</th>
                    <th> Genre </th>
                    <th> Region </th>
                    <th> Commune </th>
                    <th> Village </th>
                    <th> N°Tél </th>
                    <th> N°CIN </th>
                    <th> Statut producteur </th>
                    <th> Organisation de base </th>
                    <th> statut Organisation </th>
                    <th> Année implication </th>
                    <th> Droit d'adhésion </th>
                    <th> Sources de financement </th>
                    <th> Actions </th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php
				while ($row=mysqli_fetch_array($result))
					{
					?>	
                  <tr>
				  <td><?php echo $row['prenom_nom']; ?></td>
              <td><?php echo $row['genre']; ?></td>
							<td><?php echo $row['region']; ?> </td>
							<td><?php echo $row['commune']; ?> </td>
							<td><?php echo $row['village']; ?> </td>
							<td><?php echo $row['numtel']; ?> </td>
							<td><?php echo $row['numcin']; ?> </td>
							<td><?php echo $row['statut_producteur']; ?> </td>
              <td><?php echo $row['organi_base']; ?></td>
							<td><?php echo $row['statut_organi']; ?> </td>
							<td><?php echo $row['annee_implic']; ?> </td>
							<td><?php echo $row['droit_adhesion']; ?> </td>
							<td><?php echo $row['source_financement']; ?> </td>
							<td> 
							<a href='menu_pr.php?page=form_edit_rep&&asx=<?php echo $row['id_repertoire']; ?>'><button class='btn btn-primary btn-xs'><i class='fa fa-address-card'></i></button><a/>
							<a href='menu_pr.php?page=supp&&asx=<?php echo $row['id_repertoire']; ?>'><button class="btn btn-danger btn-xs"><spam class="fa fa-trash " aria-hidden="true"></spam></button></a>
                            </td>
                  </tr>
				  <?php 
						}
						mysqli_free_result($result);
						echo '</tr>';
						?>	
                  </tbody>
                  <tfoot>
                  <tr>
				  <th> Prénoms & Nom</th>
					<th> Genre </th>
					<th> Region </th>
					<th> Commune </th>
					<th> Village </th>
					<th> N°Tél </th>
					<th> N°CIN </th>
					<th> Statut producteur </th>
					<th> Organisation de base </th>
					<th> statut Organisation </th>
					<th> Année implication </th>
					<th> Droit d'adhésion </th>
					<th> Sources de financement </th>
					<th> Actions </th>
                  </tr>
                  </tfoot>
                </table>
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

  <!-- Control Sidebar >
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>


