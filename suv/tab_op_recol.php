<?php
require'../connexion.php';
session_start();
?>
<?php

		$result0=list_op_recolte();
	
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
            <h1>Suivi agronomique >> <i class="nav-icon fas fa-lemon"></i> Opérations post récoltes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active">Opérations post récoltes</li>
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
                <h3 class="card-title">Opérations post récoltes </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <button class="btn btn-success btn" data-toggle="modal" data-target="#myModal">
						 +  Opérations
						</button>
                <table id="example1" class="table table-bordered table-striped">

                    <thead>
                    	<tr>
							<th>N°</th>
                            <th> Campagne</th>
                            <th> Saison </th>
							<th> Secteur </th>
							<th> Nom bloc </th>
                            <th> N°Parcelle</th>
                            <th> Attributaire</th>
							<th> Indice climatique</th>
							<th> Poids carré rendement</th>
							<th> Rendement moyenne estimé</th>
							<th> Production estimée</th>
							<th> Date de récolte</th>
							<th> Récolte moyenne</th>
							<th> Production réelle</th>
							<th> Taux d'humité</th>
							<th> Action</th>
                        </tr>
                    </thead>
                <tbody>
					<?php							  
						while ($row=mysqli_fetch_array($result0))
							{
							$cpt++;
							// identification parcelle
							$ter=identite_parcelle($row['id_parcelle']);
							$rew=mysqli_fetch_array($ter);
										
							// Identité attributaire
							$ret= identification($rew['attributaire']);
							$rang=mysqli_fetch_array($ret);
										 
						?>							
                        <tr>
								  <td align="center"><?php echo $cpt; ?></td>
                                  <td align="center"><?php echo $row['CAMPAGNE']; ?></td>
                                  <td align="center"><?php echo $row['Saison']; ?></td>
								  <td align="center"><?php echo $rew['nomsecteur']; ?></td>
								  <td align="center"><?php echo $rew['nombloc']; ?></td>
                                  <td align="center"><?php echo $rew['numparcelle']; ?> </td>
								  <td align="center"><?php echo $rang['prenom_nom']; ?> </td>
								  <td align="center"><?php echo $row['INDICE_CLIMATIQUE']; ?> </td>
								  <td align="center"><?php echo $row['POIDS_CARRE_RENDEMENT']; ?> </td>
								  <td align="center"><?php echo $row['RENDEMENT_MOY_EST']; ?> </td>
								  <td align="center"><?php echo $row['PRODUCTION_EST']; ?> </td>
                                  <?php $par=explode('-',$row['DATE_RECOLTE']); ?>
								  <td align="center"><?php echo $par[2].'-'.$par[1].'-'.$par[0];?></span></td>
								  <td align="center"><?php echo $row['RECOLTE_MOYENNE']; ?></span></td>
								  <td align="center"><?php echo $row['PRODUCTION_REELLE']; ?></span></td>
								  <td align="center"><?php echo $row['TAUX_HUMIDITE']; ?></span></td>
								  <td><?php echo"<a href='menu_sa.php?page=form_edit_op_reco&&id=$row[id_post_recol]'><button class='btn btn-primary btn-xs'>
									<i class='fa fa-pen'></i></button></a><button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>
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
								<th>N°</th>
								<th> Campagne</th>
								<th> Saison </th>
								<th> Secteur </th>
								<th> Nom bloc </th>
								<th> N°Parcelle</th>
								<th> Attributaire</th>
								<th> Indice climatique</th>
								<th> Poids carré rendement</th>
								<th> Rendement moyenne estimé</th>
								<th> Production estimée</th>
								<th> Date de récolte</th>
								<th> Récolte moyenne</th>
								<th> Production réelle</th>
								<th> Taux d'humité</th>
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