<?php
require'../connexion.php';
?>
<?php

	$result0=list_installe();
	
	$result=prenomnom();
	$result2=listevariete();
	$result3=listespeculs();
	$result4=list_camp();
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
            <h1>Suivi agronomique >> <i class="nav-icon fas fa-tasks"></i> Installation des cultures</h1>
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
            <!-- /.card >
            <div class="card"-->
              <div class="card-header">
                <h3 class="card-title">Installations des cultures </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <a href="menu_sa.php?page=form_ins_cul"><button class="btn btn-success btn" >
						 + Nouvelle installation
						</button></a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th> Campagne</th>
                    <th> Saison </th>
					<th> Secteur </th>
					<th> Nom bloc </th>
                    <th> N°Parcelle</th>
                    <th> Attributaire</th>
					<th> Statut producteur</th>
					<th> Village</th>
					<th> Parcelle de production</th>
					<th> Mode semis</th>
					<th> Superfice déclarée</th>
					<th> Superficie mesurée</th>
					<th> Topo séquence</th>
					<th> Travail sol</th>
					<th> Pratiques Paysannes</th>
					<th> SRP</th>
					<th> date de saisie</th>
					<th> Action</th>
                    <th>
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
							 								  
								 while ($row=mysqli_fetch_array($result0))
									{
										$cpt++;
										// identification parcelle
										$ter=identite_parcelle($row['id_parcelles']);
										$rew=mysqli_fetch_array($ter);
										
										// Identité attributaire
										 $ret= identification($rew['attributaire']);
										 $rang=mysqli_fetch_array($ret);
										 
								?>							
                              <tr>
								  <td style="display:none"><?php echo $row['id_ins_cult']; ?></td>
                                  <td><?php echo $row['CAMPAGNE']; ?></td>
                                  <td><?php echo $row['Saison']; ?></td>
								  <td><?php echo $row['nomsecteur']; ?></td>
								  <td><?php echo $row['nombloc']; ?></td>
                                  <td><?php echo $row['numparcelle']; ?> </td>
								  <td><?php echo $rang['prenom_nom']; ?> </td>
								  <td><?php echo $rang['statut_producteur']; ?> </td>
								  <td><?php echo $rang['village']; ?> </td>
                                  <td><?php echo $row['PARCELLE_PRODUCTION']; ?></span></td>
								  <td><?php echo $row['MODE_SEMIS']; ?></span></td>
								  <td><?php echo $row['SUPERFICIE_DECLAREE']; ?></span></td>
								  <td><?php echo $row['SUPERFICIE_MESUREE']; ?></span></td>
								  <td><?php echo $row['TOPOSEQUENCE']; ?></span></td>
								  <td><?php echo $row['TRAVAILSOL']; ?></span></td>
								  <td><?php echo $row['PRATIQUECF']; ?></span></td>
								  <td><?php echo $row['SRP']; ?></span></td>
								  <?php $par=explode('-',$row['DATE_COLLECTE']); ?>
								  <td><?php echo $par[2].'-'.$par[1].'-'.$par[0];?></span></td>
								  <td><?php echo"<a href='menu_sa.php?page=form_edit_install&&id=$row[id_ins_cult]'><button class='btn btn-primary btn-xs'><i class='fa fa-pen'></i></button></a>
								  <button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>
                                  </td>" ?></td>
								 
								  
                              </tr>
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> Campagne</th>
                    <th> Saison </th>
					<th> Secteur </th>
					<th> Nom bloc </th>
                    <th> N°Parcelle</th>
                    <th> Attributaire</th>
					<th> Statut producteur</th>
					<th> Village</th>
					<th> Parcelle de production</th>
					<th> Mode semis</th>
					<th> Superfice déclarée</th>
					<th> Superficie mesurée</th>
					<th> Topo séquence</th>
					<th> Travail sol</th>
					<th> Pratiques Paysannes</th>
					<th> SRP</th>
					<th> date de saisie</th>
					<th> Action</th>
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


<!-- Button trigger modal -->
<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle installation de culture</h4>
					</div>
					<div class="modal-body">
						<div class="col-sm-5">
							<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label" >Campagne</label>
							<select class="form-control" name="id_campagne"> 
								<option>Choisir une campagne</option>
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
					<div class="col-sm-1"></div>
						<div class="col-sm-5">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label" >Saison </label>
									<select class="form-control" name="id_saison"> 
										<option>Choisir une saison</option>
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
						<div class="col-sm-5">
							<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label"  >Secteur </label>
								<select id="mySelect" class="form-control" name="nomsecteur" > 
								<option>Choisir un secteur</option>
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
						<div class="col-sm-5">
							<div class="form-group">
							<label class="col-sm-2 col-sm-2 control-label" >Bloc </label>
								<select class="form-control" name="nombloc"> 
									<option>Choisir un bloc</option>
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
					<div class="col-sm-1"></div>
						<div class="col-sm-5">
							<div class="form-group">
								<label class="" >N° Parcelle </label>
									<select class="form-control" name="numparcelle"> 	
										<option>Choisir une parcelle</option>
											<?php
											echo 'secteur='.$dsecteur;
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
								<div class="col-sm-5">
									<div class="form-group">
									<label class="" >CT </label>
										<select class="form-control" name="ct"> 	
											<option>Choisir un CT</option>
											<?php
											
											$resct=liste_ct();
											while ($rowct=mysqli_fetch_array($resct))
											{
											?>	
											<option value="<?php echo $rowct['CT']; ?>" ><?php echo $rowct['CT']; ?></option>
											<?php 
											}
											mysqli_free_result($resCT);
											?>
										</select>
									</div>
								</div>
							<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<label class="" >Parcelle de production </label>
											<input type="text" name="parcelle_prod" id="fname" class="form-control" placeholder="Parcelle de production">
									</div>
								</div>
							<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<label class="" >Mode de sémis</label>
											<input type="text" name="mode_semis" id="fname" class="form-control" placeholder="Mode de sémis">
									</div>
								</div>	
							<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<label class="" >Superficie déclarée </label>
											<input type="text" name="superficiedeclaree" id="fname" class="form-control" placeholder="Superficie déclarée">
									</div>
								</div>	
							<div class="col-sm-1"></div>
								<div class="col-sm-5">
									<div class="form-group">
										<label class="" >Supérficie mesurée </label>
										<input type="text" name="superficiemesuree" id="fname" class="form-control" placeholder="Supericie mesurée">
									</div>
								</div>	
								<div class="col-sm-1"></div>
									
								<div class="col-sm-5">
									<div class="form-group">
									<label class="">Topo séquence</label>
										<select class="form-control" name="toposequence" placeholder="Topo Séquence">
										<option>choisir une topo séquence</option>
										<option value="BAS FOND">BAS FOND</option>
										<option value="PLATEAU">PLATEAU</option>
										</select>
									</div>
								</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
									  <div class="form-group">
										<label class="">Travail sol</label>
											<input class="form-control"  type="text" id="fname" name="travailsol" placeholder="Travail au sol"/>
										</div>
									</div>
									<div class="col-sm-1"></div>	
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">Pratiques payannes</label>
												<input class="form-control"  type="text" id="fname" name="pratiquescf" placeholder="Pratiques paysannes"/>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">SRP</label>
												<select class="form-control" name="srp" placeholder="parcelle srp (oui/non)">
												  <option>Parcelle SRP ?</option>
												  <option value="NON">OUI</option>
												  <option value="NON">NON</option>
												</select>
										</div>
									</div>
									
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Utilisation ripper</label>
												<input class="form-control"  type="text" id="fname" name="utilisationripper" placeholder="Utilisation Ripper" />
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
										  <label class="" >Date saisie</label>								
												<input class="form-control"  type="date" name="date_saisie" placeholder="Date de saisie" />
										</div>
									</div>	
								<div class="col-sm-1"></div>	
								<div class="col-sm-5">	
									<div class="form-group"></div>								
								</div>
								<div class="col-sm-1"></div>
								<div class="col-sm-5">		
									<div class="form-group"></div>	
								</div>
								 </div>
						      ²<div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        <button type="submit" class="btn btn-primary" name="bt_installation" >Enregistrer</button>
						      </div>
						  
							</div>
						  </div>
						</div>      				
      				</div>
					</form>