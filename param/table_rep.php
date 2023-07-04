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
            <h1>Paramètres >> Exploitants</h1>
          </div>
		  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Paramètres</li>
              <li class="breadcrumb-item active">Exploitants</li>
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
							<a href="#"><button class="btn btn-danger btn-xs"><spam class="fa fa-trash " aria-hidden="true"></spam></button></a>
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


