<?php
require'../connexion.php';
session_start();
$result=list_camp();
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> <i class="nav-icon fas fa-anchor"></i> Campagnes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
              <li class="breadcrumb-item active">Paramètres </li>
              <li class="breadcrumb-item active">Campagne </li>
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
                <h3 class="card-title">Liste des campagnes</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
						 + Nouvelle Campagne
						</button>
  
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Campagne</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
								 while ($row=mysqli_fetch_array($result))
									{
								?>		
                  <tr>
								  <td><?php echo $row['campagne']; ?></td>
                    <td> <?php echo "<a href='param.php?page=form_edit_campagne&&id=$row[ID_CAMPAGNE]'><button class='btn btn-primary btn-xs'><i class='fa fa-address-card'></i></button><a/>
                    <button class='btn btn-danger btn-xs'><i class='fa fa-trash'></i></button>" ?> 
                  </td>   
							  <?php 
								}
									mysqli_free_result($result);
									echo '</tr>';
								?>	
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Campagne</th>
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
<!-- Button trigger modal -->		
	<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						  <h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle campagne</h4>
						</div>

					<div class="modal-body">
				    <div class="col-sm-5">
					    <div class="form-group">
						    <label class="" >Campagne</label>
							  <input type="text" name="campagne" id="fname" class="form-control" placeholder="Campagne">
					    </div>
				    </div>
          </div> 
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						<button type="submit" class="btn btn-primary" name="bt_campagne" >Enregistrer</button>
					</div>
				</div>
			</div>      				
    </div>
	</div> 
</form>
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
    