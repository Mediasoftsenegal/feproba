<?php 
	require'../connexion.php';
	$result=editunion($_GET['id']);
	$row=mysqli_fetch_array($result);
?>
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paramètres >> Liste des unions</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Paramètres</li>
              <li class="breadcrumb-item active">Union</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section id="container" >  
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
      <section id="main-content">
          <section class="wrapper">          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt"><div class="col-lg-1"></div>
          		<div class="col-lg-9">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>  Formulaire Union</h4>
                      <form class="form-horizontal style-form" action="insert_fep.php" method="POST" >
                          <div class="form-group"> 
                              <label class="col-sm-2 col-sm-2 control-label" >Nom Union</label>
                              <div class="col-sm-10">
								   <input type="hidden" name="etat" value="modification";>
								   <input type="hidden" name="modif" value="<?php echo $row["ID_UNION"];?>";>
                                  <input type="text" name="nom_union" class="form-control" value="<?php echo $row["nom_union"];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Adresse </label>
                              <div class="col-sm-10">
                                  <input type="text" name="adresseunion" class="form-control" value="<?php echo $row["adresse"];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" " >Nom du Président</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nompresident" class="form-control" value="<?php echo $row["President"];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" >Magasin</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="namemagasin" class="form-control" value="<?php echo $row["Magasin"];?>">
                              </div>
							 
                          </div>
						
                          <button type="submit" class="btn btn-success">Valider</button>
                      </form>
                  </div>
                  </div><!-- /row -->          
                  </div>
          		</div><div class="row mt"><div class="col-lg-1"></div>    	
          	</div><!-- /row -->   
          	
          	
</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->    
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
</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
</div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
