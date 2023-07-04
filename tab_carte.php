<?php
require'connexion.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
</head>
<body>
<section id="container" >
	<section id="main-content">
			<div id="mapid" align="center" style="width: 1600px; height: 700px;"></div>
  </section> 	
<script>
<?php $long='-14.0878'; $lat='12.989';?>
	var mymap = L.map('mapid').setView([12.989, -14.086], 12);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoiam9lbGJhZGppIiwiYSI6ImNrN2UxNjJlZjBmOHgzbW80dTFqY2xtOGUifQ.aWlFjy5ZopCVVpVkjMSOZg', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);
	
	

		
	var polygon = L.polygon([
	<?php 
		$resultat=parcelle_secteur();
		$nbr=mysqli_num_rows($resultat);
		$cpt=0;
		while($row=mysqli_fetch_array($resultat))
		{	
		switch ($row['nomsecteur']){
			case 'SECTEUR 1':	
			$cpt++;
				if($cpt<=$nbr){
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("[$lat,$long],");
				}
				else {
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("$lat,$long");
					}
		break;
			case 'SECTEUR 2':	
			$cpt++;
				if($cpt<=$nbr){
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("[$lat,$long],");
				}
				else {
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("$lat,$long");
					}
		break;
		case 'SECTEUR 4':	
			$cpt++;
				if($cpt<=$nbr){
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("[$lat,$long],");
				}
				else {
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("$lat,$long");
					}
		break;
		case 'SECTEUR 5':	
			$cpt++;
				if($cpt<=$nbr){
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("[$lat,$long],");
				}
				else {
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("$lat,$long");
					}
		break;
		case 'SECTEUR G':	
			$cpt++;
				if($cpt<=$nbr){
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("[$lat,$long],");
				}
				else {
					$long=$row['longitude'];
					$lat=$row['latitude'];
					echo("$lat,$long");
					}
		break;
		}
		}
	?>	
	]).addTo(mymap).bindPopup("SECTEUR G.");
	
 	
	var popup = L.popup();
	function onMapClick(e) {
		popup
			.setLatLng(e.latlng)
			.setContent("Coordonées géographiques : " + e.latlng.toString())
			.openOn(mymap);
	}
	mymap.on('click', onMapClick);
</script>
</body>
</html>
