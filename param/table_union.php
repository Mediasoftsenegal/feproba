<?php
require'../connexion.php';
session_start();
$result=listeunion();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> <i class="nav-icon fas fa-book"></i> Unions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Paramètres</li>
              <li class="breadcrumb-item active"> Union</li>
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
                <h3 class="card-title">Liste des unions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Nom union</th>
                    <th>Adresse</th>
                    <th>Président(s)</th>
                    <th> Emplacement Magasin</th>
                    <th><?php echo "
                      <a href='menugen.php?page=form_union'><button class='btn btn-success btn-xs'> + Nouvelle Union</i></button><a/>" ?> 
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      while ($row=mysqli_fetch_array($result))
                        {
                      ?>	
                  <tr>                  
                      <td><?php echo $row['nom_union']; ?></td>
                      <td class="hidden-phone"><?php echo $row['adresse']; ?></td>
                      <td><?php echo $row['President']; ?> </td>
                      <td><span class="label label-info label-mini"><?php echo $row['Magasin']; ?></span></td>
                      <td> <?php echo "
                            <a href='menu_pr.php?page=form_union'><button class='btn btn-success btn-xs'><i class='fa fa-check'></i></button><a/>
                            <a href='menu_pr.php?page=form_edit_union&&id=$row[ID_UNION]'><button class='btn btn-primary btn-xs'><i class='fa fa-address-card'></i></button><a/>
                            <button class='btn btn-danger btn-xs'><i class='fa fa-trash '></i></button>" ?> 
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
                  <th>Nom union</th>
                    <th>Adresse</th>
                    <th>Président(s)</th>
                    <th>Emplacement Magasin</th>
                    <th>
                    </th>
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

