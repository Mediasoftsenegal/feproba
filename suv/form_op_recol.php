<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle opération post récoltes</h4>
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
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >N° Parcelle </label>
												<select class="form-control" name="numparcelle"> 	
													<option>Choisir une parcelle</option>
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
													mysqli_free_result($resct);
													?>
													</select>
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Indice climatique</label>
												<input type="text" name="INDICE_CLIMATIQUE" id="fname" class="form-control" placeholder="Indice climatique">
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Poids carré rendement</label>
												<input type="text" name="POIDS_CARRE_RENDEMENT" id="fname" class="form-control" placeholder="Poids carré rendement">
										</div>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Rendement moyenne estimé</label>
													<input type="text" name="RENDEMENT_MOY_EST" id="fname" class="form-control" placeholder="Rendement moyenne estimé">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Production estimée </label>
												<input type="text" name="PRODUCTION_EST" id="fname" class="form-control" placeholder="Production estimée">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="" >Date de récolte </label>
												<input type="date" name="DATE_RECOLTE" id="fname" class="form-control" placeholder="Date récolte">
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">
										<div class="form-group">
											<label class="">Récolte moyenne</label>
												<input class="form-control"  type="text" id="fname" name="RECOLTE_MOYENNE" placeholder="Récolte moyenne"/>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5">	
									  <div class="form-group">
										<label class="">Production réelle</label>
											<input class="form-control"  type="text" id="fname" name="PRODUCTION_REELLE" placeholder="Production réelle"/>
										</div>
									</div>
									<div class="col-sm-1"></div>	
									<div class="col-sm-5">	
										<div class="form-group">
											<label class="">Taux d'humité au moment des récoltes </label>
												<input class="form-control"  type="text" id="fname" name="TAUX_HUMIDITE" placeholder="Taux d'humité"/>
										</div>
									</div>	
									<div class="col-sm-1"></div>
									<div class="col-sm-5"></div>	 
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

                    /////////////////////////////

                    <form action="menu_sa.php?page=tab_op_recol" class="form-signin" method="POST"> 			
							<div class="col-lg-5"> 	
								<div class="form-group">						
										
										 <select class="form-control" name="search_saison"> 
											<option>Choisir une saison</option>
												<?php
												$out=liste_saison(); 
											 while ($row=mysqli_fetch_array($out))
												{
												?>	
												<option value="<?php echo $row['Id_Saison']; ?>"><?php echo $row['Saison']; ?></option>
												<?php 
												}
												mysqli_free_result($out);
											?>
											?>
								</select>	
								</div>
							</div>	
							<div class="col-lg-4"> 	
								<div class="form-group">
									<select class="form-control" name="searchCAMPAGNE"> 
											<option>Choisir une campagne</option>
												<?php
												$out=list_camp(); 
											 while ($row=mysqli_fetch_array($out))
												{
												?>	
												<option value="<?php echo $row['ID_CAMPAGNE']; ?>"><?php echo $row['campagne']; ?></option>
												<?php 
												}
												mysqli_free_result($out);
											?>
											?>
								</select>	
								</div>
							</div>								
							<div class="col-lg-3"> 
								<button class="btn text-muted text-center btn-danger" name ="recherop" type="submit">Rechercher</button>
							</div> 
						</form> </div> 