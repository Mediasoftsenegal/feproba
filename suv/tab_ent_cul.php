<?php
require'../connexion.php';
session_start();
?>
<?php

	$result0=list_entretien();	

	$result=prenomnom();
	$result2=listevariete();
	$result3=listespeculs();
	$result4=list_camp();
	$out=list_camp(); 
	$res=liste_saison();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Suivi agronomique >> <i class="nav-icon fas fa-th"></i> Entretien des cultures</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active">Entretien des cultures</li>
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
                <h3 class="card-title">Entretien des cultures </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <button class="btn btn-success btn" data-toggle="modal" data-target="#myModal">
						 +  Entretien
						</button>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th> Campagne</th>
                        <th> Saison </th>
						<th> Secteur </th>
						<th> Nom bloc </th>
                        <th> N°Parcelle</th>
						<th> Attributaire</th>
                        <th> Date de mise en place pépinière</th>
						<th> Rendement estimé</th>
						<th> Production estimée</th>
						<th> Date de semis ou Repiquage</th>
						<th> Quantité semences utilisée (Kg)</th>
						<th> Variété de riz cultivée... )</th>
						<th> Utilisation semoir ...</th>
						<th> Date de sarclage</th>
						<th> Quantité NPK appliquée (Kg)</th>
						<th> Action</th>
                    </tr>
                </thead>
                <tbody>
				<?php 
															  
				 while ($row=mysqli_fetch_array($result0))
					{	
															
					// identification parcelle
					$ter=identite_parcelle($row['id_parcelle']);
					$rew=mysqli_fetch_array($ter);
											
					// Identité attributaire
					$ret= identification($rew['attributaire']);
					$rang=mysqli_fetch_array($ret);
										 
					$pare=explode('-',$row['DATE_MISE_PLACE_PEPINIERE']);
					$par1=explode('-',$row['DATE_SEMISREPIQ']);
					$par2=explode('-',$row['DATE_PREMSARCDESH']);
					$par3=explode('-',$row['DATE_APPLICNPK']);
										
					?>								
                    <tr>
                    <td><?php echo $row['CAMPAGNE']; ?></td>
                    <td><?php echo $row['Saison']; ?></td>
					<td><?php echo $row['nomsecteur']; ?></td>
					<td><?php echo $row['nombloc']; ?></td>
                    <td><?php echo $row['numparcelle']; ?> </td>
					<td><?php echo $rang['prenom_nom']; ?> </td>
					<td><?php echo $pare[2].'-'.$pare[1].'-'.$pare[0]; ?> </td>
					<td><?php echo $row['RENDEMENT_ESTIME']; ?> </td>
					<td><?php echo $row['PRODUCTION_ESTIMEE']; ?> </td>
					<td><?php echo $par1[2].'-'.$par1[1].'-'.$par1[0]; ?> </td>
                    <td><?php echo $row['QUANTITES_SEMENCEUTILISEE']; ?></span></td>
					<td><?php echo $row['VARIETES_RIZCULTURE']; ?></span></td>
					<td><?php echo $row['UTILISATION_SEMOIRARIZ']; ?></span></td>
					<td><?php echo $par2[2].'-'.$par2[1].'-'.$par2[0];  ?></span></td>
					<td><?php echo $row['QUANTITENPKAPPL']; ?></span></td>
				<?php $par=explode('-',$row['DATE_COLLECTE2']); ?>
					<td><?php echo"<a href='menu_sa.php?page=form_edit_entcul&&id=$row[id_entr_cult]'><button class='btn btn-primary btn-xs'>
					<i class='fa fa-pen'></i></button></a><button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>
                    </td>" ?></td>
								 
								  
                </tr>
			<?php 
			}
			$nbr=mysqli_num_rows($result); 
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
        <th> Date de mise en place pépinière</th>
		<th> Rendement estimé</th>
		<th> Production estimée</th>
		<th> Date de semis ou Repiquage</th>
		<th> Quantité semences utilisée (Kg)</th>
		<th> Variété de riz cultivée... )</th>
		<th> Utilisation semoir ...</th>
		<th> Date de sarclage</th>
		<th> Quantité NPK appliquée (Kg)</th>
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