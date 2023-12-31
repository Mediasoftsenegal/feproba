<?php
if (!isset($_SESSION)) {
 session_start();
 $page=$_GET['page'];
if (isset($_GET['sec'])){
$sec=$_GET['sec'];
}}
?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="keyword" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">	
  <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/css/OverlayScrollbars.min.css">
  <!-- Theme style --> 
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-warning navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="menu_pr.php?page=table_union"><button type="button" class="btn btn-success"><i class="fa fa-desktop"></i> Unions</button></a>
        <a href="menu_pr.php?page=table_rep"><button type="button" class="btn btn-secondary"><i class="fa fa-female"></i> Exploitants</button></a>
        <a href="menu_pr.php?page=tab_parcelles"><button type="button" class="btn btn-primary"><i class="fa fa-book"></i> Parcelles</button></a>
        <a href="menu_pr.php?page=table_variete"><button type="button" class="btn btn-info"><i class="fa fa-tasks"></i> Nature parcelle</button></a>
        <a href="menu_pr.php?page=table_specul"><button type="button" class="btn btn-default"><i class="fa fa-bar-chart"></i> Type de variété</button></a>
        <a href="menu_pr.php?page=tab_saison"><button type="button" class="btn btn-outline-secondary"><i class="fa fa-tint"></i> Saisons</button></a>
        <a href="menu_pr.php?page=tab_campagne"><button type="button" class="btn btn-outline-primary"><i class="fa fa-thermometer-empty"></i> Campagne</button></a>
        <a href="menu_pr.php?page=table_user"><button type="button" class="btn btn-outline-info"><i class="fa fa-user"></i> Utilisateurs</button></a>
        <a href="../tabbord/tabbord.php"><button type="button" class="btn btn-danger"><i class="fa fa-university"></i> Tableau de bord</button></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> <?php Echo "Utilisateur :".$_SESSION['nom'];?> 
    </ul>
	<div class="top-menu">
   <a class="logout" href="../login.php"><button type="button" class="btn btn-block btn-default">Déconnexion</button></a>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../img/logo.jpg" alt="#" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">FEPROBA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex"> 
           
        <div class="info">
          <a href="#" class="d-block"> <i class="nav-icon fas fa-tachometer-alt"></i> Paramètres </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item">
            <a href="menu_pr.php?page=table_union" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p >Unions </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=table_rep" class="nav-link">
              <i class="nav-icon fas fa-tasks"></i>
              <p >Exploitants</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=tab_parcelles" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p >Parcelles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=table_variete" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p >Nature parcelle</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=table_specul" class="nav-link">
              <i class="nav-icon fas fa-adjust"></i>
              <p >Type de variété</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=tab_saison" class="nav-link">
              <i class="nav-icon fas fa-adjust"></i>
              <p >Saison</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=tab_campagne" class="nav-link">
              <i class="nav-icon fas fa-adjust"></i>
              <p >Campagne</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="menu_pr.php?page=table_user" class="nav-link">
              <i class="nav-icon fas fa-adjust"></i>
              <p >Utilisateurs</p>
            </a>
          </li>        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php include ("$page.php"); ?>

  <!-- /.content-wrapper -->
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="#">Médiasoft</a>.</strong>
 
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0.
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>


<!-- PAGE PLUGINS -->

<!-- jQuery -->
<script src="../assets/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/js/dataTables.responsive.min.js"></script>
<script src="../assets/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/dataTables.buttons.min.js"></script>
<script src="../assets/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/js/jszip.min.js"></script>
<script src="../assets/js/pdfmake/pdfmake.min.js"></script>
<script src="../assets/js/vfs_fonts.js"></script>
<script src="../assets/js/buttons.html5.min.js"></script>
<script src="../assets/js/buttons.print.min.js"></script>
<script src="../assets/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
    })
  });
</script>
<!-- PAGE SCRIPTS -->
<script src="../assets/js/dashboard2.js"></script>
</body>
</html>
