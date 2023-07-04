<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Fédération des Producteurs du Bassin de l'Anambé">
    <meta name="Feproba" content="tableau de bord">
    <meta name="keyword" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  </head>

  <body>
		<div class="row mt">
			<div class="col-lg-6">
               <div class="content-panel">
					<h4><i class="fa fa-angle-center"></i> Chiffres d'affaires sur 3 dernières annnées  </h4>
                        <div class="panel-body text-center">
                            <canvas id="barchart" height="250" width="400"></canvas>
                        </div>
                </div>
             </div>
		</div>
    
	<script>
		new Chart(document.getElementById("barchart"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [
        {
          label: "Africa",
          backgroundColor: "#3e95cd",
          data: [133,221,783,2478]
        }, {
          label: "Europe",
          backgroundColor: "#8e5ea2",
          data: [408,547,675,734]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions)'
      }
    }
});
	</script>
</body>

	