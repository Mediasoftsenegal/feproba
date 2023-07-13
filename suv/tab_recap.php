<?php
require'../connexion.php';
?>
<?php
echo "Traitement en cours ...";
session_start();
$resultes=recap_entree($_POST['anne_rec']);
$resan=sel_annuel();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <h2>Suivi agronomique >> <i class="nav-icon fas fa-adjust"></i>  Récapitulatif des entrées année : <?php echo $_POST['anne_rec'];?></h2>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active">Récapitulatif des entrées </li>
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
                <h3 class="card-title">Récapitulatif des entrées </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
	                 
	                  	  	  
							  <div class="col-sm-10">
							  <p>Choisir une année:</p>
									<form action="../suv/menu_sa.php?page=tab_recap" method="POST">
									  <input type = "text" list = "annee" name="anne_rec"> 
									  <datalist id = "annee">
										<?php
										while ($rowa=mysqli_fetch_array($resan))
										{
										?>	
											<option><?php echo $rowa['annee']; ?></option>
										<?php 
										}
										mysqli_free_result($resan);
										?>
									  </datalist>
									  <input type = "submit" value = "Visualiser">
									</form>
                   </div>
                      <thead>
                        <tr>
                            <th>Année </th>
                            <th>Nom union  </th>
                            <th>Variété</th>
                            <th>Spéculation </th>
                            <th>Quantité (en T)</th>
								            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                      <?php
                      while ($row=mysqli_fetch_array($resultes))
                        {
                      ?>							
                      <tr>
                        <td><?php echo $row['annee']; ?></td>
                        <td class="hidden-phone"><?php echo $row['nom_union']; ?></td>
                        <td class="hidden-phone"><?php echo $row['nom_variete']; ?></td>
                        <td><?php echo $row['nom_specul']; ?> </td>
                        <td align="left"><?php echo $row['tonnage']; ?> </td>
                        <td></td>
                      </tr>
							  <?php 
								}
									mysqli_free_result($resultes);
									echo '</tr>';
								?>	
                  </tbody>
                  </tfoot>
                  <tr>
                    <th>Année </th>
                    <th>Nom union  </th>
                    <th>Variété</th>
                    <th>Spéculation </th>
                    <th>Quantité (en T)</th>
								    <th></th>
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