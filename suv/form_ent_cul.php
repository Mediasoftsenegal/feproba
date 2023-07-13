
<!-- Button trigger modal -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
						 + Entretien
						</button>
						


                    <form action="menu_sa.php?page=tab_ent_cul" class="form-signin" method="POST"> 			
							<div class="col-lg-5"> 	
								<div class="form-group">
									<label class="col-sm-2 col-sm-2 control-label">Numéro Parcelle</label>								
										 <div class="col-sm-6">
												<input type="text" id="fcasse" name="numpacello" class="form-control col-lg-6" />
										 </div>
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
								</select>	
								</div>
							</div>								
							<div class="col-lg-3"> 
								<button class="btn text-muted text-center btn-danger" name ="recher"  value ="recher" type="submit">Rechercher</button>
							</div> 
						</form> </div> 