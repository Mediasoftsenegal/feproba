<?php
require'../connexion.php';
session_start();
$res=liste_parcelles2();

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> <i class='fa fa-th'></i> Parcelles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
              <li class="breadcrumb-item active">Parcelles</li>
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
                <h3 class="card-title">Liste des Parcelles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
				+ Nouvelle Parcelle
				</button>
				<!-- Button trigger modal -->
				<form class="form-horizontal style-form" action="insert_fep.php" method="GET" >
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header"><h4 class="modal-title" id="myModalLabel">Formulaire d'une nouvelle parcelle</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Secteur</label>
										<select class="form-control" name="nomsecteur" required="required">
										<option value="">Choisir un secteur</option>
										<option value="SECTEUR 1">SECTEUR 1</option>
										<option value="SECTEUR 2">SECTEUR 2</option>
										<option value="SECTEUR 3&4">SECTEUR 3&4</option>
										<option value="SECTEUR 5">SECTEUR 5</option>
										<option value="SECTEUR G">SECTEUR G</option>
										</select>
								</div>
							</div>
							<div class="col-sm-4">	
									<div class="form-group">
										<label class="col-sm-12 col-sm-2 control-label" >Bloc </label>
										<input type="text" name="nombloc" class="form-control">
								</div>
							</div>
						</div>	
						<div class="row">	
							<div class="col-sm-4">	
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >CT </label>
										<input type="text" name="nomct" class="form-control">
								</div>
							</div>	
							<div class="col-sm-4">	
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >N° Parcelle </label>
										<input type="text" name="numparcelle" class="form-control">
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-6">		
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Nature parcelle </label>
										<select class="form-control" name="natureparcelle" required="required">
										<option value="">Choisir un secteur</option>
										<option value="PRODUCTION SEMENCE">PRODUCTION SEMENCE</option>
										<option value="PRODUCTION RIZ MARCHAND">PADDY</option>
										</select>
								</div>
							</div>
						</div>	
						<div class="row">	
							<div class="col-sm-4">	
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Longitude </label>
										<input type="text" name="xlongitude" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">		
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Latitude </label>
										<input type="text" name="xLatitude" class="form-control">
								</div>
							</div>
						</div>	
						<div class="row">
							<div class="col-sm-4">		
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Bénéficiaire </label>
											<select class="form-control" name="id_repertoire"> 
											<option>Choisir un Bénéficiaire</option>
											<?php
											$res=listereps();
											while ($row=mysqli_fetch_array($res))
											{
											?>	
											<option value="<?php echo $row['id_repertoire']; ?>" ><?php echo $row['prenom_nom'].'/'.$row['village']; ?></option>
											<?php 
											}
											mysqli_free_result($res);
											?>
											</select>
								</div>
							</div>
							<div class="col-sm-4">		
								<div class="form-group">
									<label class="col-sm-12 col-sm-2 control-label" >Date attribution </label>
										<input class="form-control"  type="date" name="date_attribution"/>
								</div>
							</div>
						</div>	
											
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
									<button type="submit" class="btn btn-primary" name="bt_parcelle" >Enregistrer</button>
								</div>
							</div>
					</div>
				</div>
				</div>
			</div>      				
	</form>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>N°</th>
							<th>Secteur</th>
							<th>  Bloc </th>
							<th> CT</th>
							<th> N °Parcelle</th>
							<th> Nature de la parcelle</th>
							<th> Longitude</th>
							<th> Latitude</th>
							<th> Attributaire</th>
							<th> Date attribution</th>
							<th> Durée attribution</th>
							<th> Situation</th>
							<th> Action</th>
						</tr>
					</thead>
					<tbody>
					<?php  
						$result=affiche_parcelles();
																	
						while ($row=mysqli_fetch_array($result))
							{
								$cpt++;
								$id=$row['id_parcelles'];
					?>	
					<tr>
						<td><?php echo $cpt; ?></td>
						<td><?php echo $row['nomsecteur']; ?></td>
						<td><?php echo $row['nombloc']; ?></td>
						<td><?php echo $row['ct']; ?> </td>
						<td><?php echo $row['numparcelle']; ?></span></td>
						<td><?php echo $row['nature_parcelle']; ?></span></td>
						<td><?php echo $row['longitude']; ?></span></td>
						<td><?php echo $row['latitude']; ?></span></td>
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
						<?php $datejour=date('y-m-d');
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
						<td><a href="menu_pr.php?page=form_edit_parcelle&&id=<?php echo $row['id_parcelles']; ?>"><button class="btn btn-info btn-sm"><spam class="fa fa-address-card" aria-hidden="true"></spam></button></a></a>
						<a href="supp.php"><button class="btn btn-danger btn-sm" name='del_par'><spam class="fa fa-trash" aria-hidden="true"></spam></button></a></td> 
						<?php 
						}
						mysqli_free_result($result);
						echo '</tr>';
						?>	 
						</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>N°</th>
								<th>Secteur</th>
								<th>  Bloc </th>
								<th> CT</th>
								<th> N °Parcelle</th>
								<th> Nature de la parcelle</th>
								<th> Longitude</th>
								<th> Latitude</th>
								<th> Attributaire</th>
								<th> Date attribution</th>
								<th> Durée attribution</th>
								<th> Situation</th>
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
<!-- /.content-wrapper -->

<!-- Control Sidebar >
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
</div> 	
</div>

