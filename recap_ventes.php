<?php
require'connexion.php';
?>
<?php if (isset($_POST['search_camp']))
{
	$an=explode('/',$_POST['search_camp']);
	$annee=$an[0];
}?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="FEPROBA" content="Dashboard">
     <meta name="Feproba" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <h3> Etat des ventes <i class="fa fa-angle-right"></i> Evolution des ventes <?php echo $annee;?></h3>
		   <form action="menu_ve.php?page=recap_ventes" method="POST">
				  <div class="row">
				  <div class="col-lg-4"></div>
					<div class="col-lg-4"><div class="form-group">		
						<select class="form-control" name="search_camp"> 
							<option>Choisir une Campagne</option>
								<?php
									$out=list_camp(); 
										while ($row=mysqli_fetch_array($out))
										{
								?>	
								<option value="<?php echo $row['campagne']; ?>"><?php echo $row['campagne']; ?></option>
								<?php 
									}
									mysqli_free_result($out);
									?>
								?>
						</select>	
					</div></div>	
					<div class="col-lg-4"><button type="submit" class="btn btn-primary" name="bt_recherhce" >Rechercher</button></div>	
				  </div>
				  </form>
              <!-- page start-->
              <div class="tab-pane" id="chartjs">
				 
                  <div class="row mt">
                      <div class="col-lg-6">
                          <div class="content-panel">
							  <h4><i class="fa fa-angle-right"></i> Chiffres d'affaires en secteur </h4>
                              <div class="panel-body text-center">
                                  <canvas id="doughnut" height="300" width="400"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="content-panel">
							  <h4><i class="fa fa-angle-right"></i> Chiffres d'affaires en Histogramme</h4>
                              <div class="panel-body text-center">
                                  <canvas id="bar" height="300" width="400"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- page end-->
          </section>          
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <!--script src="assets/js/chart-master/Chart.js"></script>
    <!--script src="assets/js/chartjs-conf.js"></script-->
    
	<script>
	<?php
	$result=union_production($annee);
	while($rows=mysqli_fetch_array($result))
	{
		$nom_union=$rows['nom_union'];
		switch ($nom_union)
		{
		  case 'UNION I ET II':
			$val1=$rows['som'];
			break;
		 case 'UNION III ET IV' :
			$val2=$rows['som'];
			break;
		 case 'UNION V' :
			$val3=$rows['som'];
			break;
		case 'UNION DES GIES SECTEUR G' :
			$val4=$rows['som'];
			break;	
		}
	}
		?>
	new Chart(document.getElementById("doughnut"), {
    type: 'doughnut',
    data: {
      labels: ["UNION I ET II", "UNION III ET IV", "UNION V", "UNION DES GIES SECTEUR G"],
      datasets: [
        {
          label: "Chiffres d'affaires des unions <?php echo $annee;?>",
          backgroundColor: ["#B1E312", "#F1C40F","#E74C3C","#2E86C1"],
          data: [<?php echo $val1;?>,<?php echo $val2;?>,<?php echo $val3;?>,<?php echo $val4;?>]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Chiffres d\'affaires des unions en <?php echo $annee;?>'
      }
    }
});

	  new Chart(document.getElementById("bar"), {
    type: 'horizontalBar',
    data: {
      labels: ["UNION I ET II", "UNION III ET IV", "UNION V", "UNION DES GIES SECTEUR G"],
      datasets: [
        {
          label: "Chiffres d'affaires des unions <?php echo $annee;?>",
          backgroundColor: ["#B1E312", "#F1C40F","#E74C3C","#2E86C1"],
          data: [<?php echo $val1;?>,<?php echo $val2;?>,<?php echo $val3;?>,<?php echo $val4;?>]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Chiffres d\'affaires des unions en <?php echo $annee;?>'
      }
    }
});
</script>
  </body>
</html>
