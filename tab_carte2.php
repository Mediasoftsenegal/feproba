<?php
require'connexion.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


	
</head>
<body>
<div id="mapid" style="width:1353px; height: 600px;"></div>
<script>
	var mymap = L.map('mapid').setView([12.967176,-14.15], 16);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoiam9lbGJhZGppIiwiYSI6ImNrN2UxNjJlZjBmOHgzbW80dTFqY2xtOGUifQ.aWlFjy5ZopCVVpVkjMSOZg', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
		tileSize: 512,
		zoomOffset: -1
	}).addTo(mymap);

    var  secteur1 =[
	
			<?php
			$res=parcelle_secteur('SECTEUR 1');
			while($row=mysqli_fetch_array($res))
				{	
						$long=$row['longitude'];
						$lat=$row['latitude'];
						$rangee=$row['rang'];
						echo("[$lat,$long],");			
	
				echo 'L.marker(['.$lat.','.$long.']).addTo(mymap).bindPopup("'.$rangee.' '.$lat.' '.$long.'")';	
				}
				
			?>	
		];
		
	var  secteur2 =[
	
			<?php
			$res2=parcelle_secteur('SECTEUR 2');
			while($row2=mysqli_fetch_array($res2))
				{	
						$long2=$row2['longitude'];
						$lat2=$row2['latitude'];
						$rangee2=$row2['rang'];
						echo("[$lat2,$long2],");			
	
				echo 'L.marker(['.$lat2.','.$long2.']).addTo(mymap).bindPopup("'.$rangee2.' '.$lat2.' '.$long2.'")';	
				}
				
			?>	
		];
		
	var  secteur4 =[
	
			<?php
			$res4=parcelle_secteur('SECTEUR 4');
			while($row4=mysqli_fetch_array($res4))
				{	
						$long4=$row4['longitude'];
						$lat4=$row4['latitude'];
						$rangee4=$row4['rang'];
						echo("[$lat4,$long4],");			
	
				echo 'L.marker(['.$lat4.','.$long4.']).addTo(mymap).bindPopup("'.$rangee4.' '.$lat4.' '.$long4.'")';	
				
				}
				
			?>	
		];
		var  secteur5 =[
	
			<?php
			$res5=parcelle_secteur('SECTEUR 5');
			while($row5=mysqli_fetch_array($res5))
				{	
						$long5=$row5['longitude'];
						$lat5=$row5['latitude'];
						$rangee5=$row5['rang'];
						echo("[$lat5,$long5],");			
	
				echo 'L.marker(['.$lat5.','.$long5.']).addTo(mymap).bindPopup("'.$rangee5.' '.$lat5.' '.$long5.'")';	
				}
				
			?>	
		];
		var  secteurG =[
	
			<?php
			$resg=parcelle_secteur('SECTEUR G');
			while($rowg=mysqli_fetch_array($resg))
				{	
						$longg=$rowg['longitude'];
						$latg=$rowg['latitude'];
						$rangeeg=$rowg['rang'];
						echo("[$latg,$longg],");			
	
				echo 'L.marker(['.$latg.','.$longg.']).addTo(mymap).bindPopup("'.$rangeeg.' '.$latg.' '.$longg.'")';	
				}
				
			?>	
		];

	//	var surface=L.polygon(points,{		
	//		color:'green',
	//		weight:1,
	//		opacity:0.7,
	//		dashArray :'20,3',
	//		linejoin :'round'
	//		}
	//var popup = L.popup();
	//function onMapClick(e) {
	//	popup
	//		.setLatLng(e.latlng)
	//		.setContent("You clicked the map at " + e.latlng.toString())
	//		.openOn(mymap);
//	}
//	mymap.on('click', onMapClick);
</script>
</body>
</html>
