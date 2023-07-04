                <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
								  <th>N°</th>
                                  <th><i class="fa fa-bullhorn"></i> Secteur</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Bloc </th>
                                  <th><i class="fa fa-bookmark"></i>CT</th>
                                  <th><i class=" fa fa-edit"></i> N°Parcelle</th>
								  <th><i class=" fa fa-edit"></i> Nature de la parcelle</th>
								  <th><i class=" fa fa-edit"></i> Longitude</th>
								  <th><i class=" fa fa-edit"></i> Latitude</th>
								  <th><i class=" fa fa-edit"></i> Attributaire</th>
								  <th><i class=" fa fa-edit"></i> Date attribution</th>
								  <th><i class=" fa fa-edit"></i> Durée attribution</th>
								  <th align="center"> Situation</th>
								  <th align="center"></th>
								  <th align="center"></th> 	
                              </tr>
                              </thead>
                              <tbody>
							  <?php
							  if (isset($_POST['nomsecteur'])){
								$result=list_parcelles($_POST['nomsecteur'],$_POST['xlongitude']);
							  }
							  else
							  {
								$result=list_parcelles($nomsecteur,$longitude);
							  }								  
								 while ($row=mysqli_fetch_array($result))
									{
										$cpt++;
										$id=$row['id_parcelles'];
								?>							
                              <tr>
							  
								  <td style="display:none"><?php echo $id; ?></td>
								  <td align="center"><?php echo $cpt; ?></td>
                                  <td align="center"><?php echo $row['nomsecteur']; ?></td>
                                  <td align="center"><?php echo $row['nombloc']; ?></td>
                                  <td align="center"><?php echo $row['ct']; ?> </td>
                                  <td align="center"><?php echo $row['numparcelle']; ?></span></td>
								   <td align="center"><?php echo $row['nature_parcelle']; ?></span></td>
								  <td align="center"><?php echo $row['longitude']; ?></span></td>
								  <td align="center"><?php echo $row['latitude']; ?></span></td>
								  <?php
									$date=$row['date_attribution'];
									if ($row['attributaire']<>0){
										$rest=identification($row['attributaire']);
										$rows=mysqli_fetch_array($rest);
										$prenom=$rows['prenom_nom'];
									}else
									{
										$prenom="";
									}
								  ?>
								  <td align="right"><?php  echo $prenom; ?></span></td>
								  <td align="center"><?php echo $row['date_attribution']; ?></span></td>
								  <?php $datejour=date('yy-m-d');
								  $diff = date_diff(date_create($row['date_attribution']), date_create($datejour)); 
								  $ann=$diff->format('%y');
								  if ($row['date_attribution']=='0000-00-00'){ 
										$etat='Non défini';
										 $an='';
										 $mois='';
										 $jour='';
										
										}
								  
								  if (($ann>=2) && ($row['date_attribution']<>'0000-00-00')){
										$etat='Dépassement';
										$an=$diff->format('%y').' ans-';
										$mois=$diff->format('%m').' mois-';
										$jour=$diff->format('%d').' Jours ';
									
									}		
									if (($ann<2) && ($row['date_attribution']<>'0000-00-00')){
										$etat='Valide';
										$an=$diff->format('%y').' ans-';
										$mois=$diff->format('%m').' mois-';
										$jour=$diff->format('%d').' Jours ';
									
										
										}
									?>
								  <td><?php echo ($an.' '.$mois.' '.$jour); ?></td>
								  <td align="center"><?php echo $etat; ?></td>
								  <td>
								  <a href="menu_pr.php?page=form_edit_parcelle&&id=<?php echo $row['id_parcelles']; ?>"><input type="button" name="edit"  value="Edit" id="" class="btn btn-primary btn-sm" /></a></td>
                                      <td><a href="#"><button class="btn btn-danger btn-sm"><spam class="glyphicon glyphicon-trash" aria-hidden="true"></spam></button></a>
                              </tr>
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	
								
                              </tbody>
                          </table>
