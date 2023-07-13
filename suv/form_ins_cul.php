<?php 
require '../connexion.php';
session_start();
$result=listerep();
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
<!-- Button trigger modal -->
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
        <div class="col-sm-12">
            <!-- /.card -->
    	    <div class="card">
				<p> &nbsp; &nbsp;Etape 1 : 33% Complëte</code></p>
					<div class="progress progress-sm active">
                  		<div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                    		<span class="sr-only">34% Complete</span>
                  		</div>
                	</div>
              		<div class="card-header">
                		<h3> Mise à jour Installation des cultures</h3>
    				</div>
              		<!-- /.card-header -->
              		<div class="card-body">
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
                								<h3 class="card-title">Sélectionner un exploitant :</h3> <b>  Rechercher le dans la zone de recherche et cliquer sur l'icône en bleu pour le selectionner </b>
											</div>
									<div class="row">
										<div class="col-sm-10"></div>
											
										</div>
			  
              							<!-- /.card-header -->
              								<div class="card-body">
                								<table id="example1" class="table table-bordered table-striped">
                  									<thead>
														<tr>
														<th>Prénoms & Nom</th>
															<th>Genre</th>
															<th>Region</th>
															<th>Commune</th>
															<th>Village</th>
															<th>N°Tél</th>
															<th>N°CIN</th>
															<th>Statut producteur</th>
															<th>Choisir </th>                  
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
														<td><?php echo $row['region']; ?></td>
														<td><?php echo $row['commune']; ?></td>
														<td><?php echo $row['village']; ?></td>
														<td><?php echo $row['numtel']; ?></td>
														<td><?php echo $row['numcin']; ?></td>
														<td><?php echo $row['statut_producteur']; ?></td>
														<td>
															<form  action="menu_sa.php?page=form_ins_cul02&&asx=<?php echo $row['id_repertoire']; ?>" method="POST" >
																<button type="imput" class='btn btn-primary btn-xs'><i class='fa fa-money-bill'></i></button>
															</form> 	
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
														<th> </th>
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