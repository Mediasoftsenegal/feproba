<?php
require'../connexion.php';
session_start();
$result=listevariete();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> Type de variété</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
              <li class="breadcrumb-item active">Type de variété</li>
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
                <h3 class="card-title">Liste des Types de variété</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nature de parcelle</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>  <?php
								 while ($row=mysqli_fetch_array($result))
									{
								?>				
                  <tr>
                    <td><?php echo $row['nature']; ?></td>
                    <td> <?php echo "
                     <a href='param.php?page=form_edit_variete&&id=$row[id_nature]'><button class='btn btn-primary btn-xs'><i class='fa fa-address-card'></i></button><a/>
                      <button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>" ?> 
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
                  <th>Nature de parcelle</th>
                    <th>Action</th>
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

