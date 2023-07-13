<?php
require'../connexion.php';
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Suivi agronomique >> <i class="nav-icon fas fa-book"></i> Cartographie des parcelles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="Tabbord/tabbord.php">Tableau de bord</a></li>
              <li class="breadcrumb-item ">Suivi agronomique</li>
              <li class="breadcrumb-item active"> Cartographie des parcelles</li>
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
                <h3 class="card-title">Cartographie des parcelles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <section class="wrapper">
				<div class="col-lg-12">
                    <div class="content-panel">
						<div class="row mt">
							<div id="mapid" align="center" style="width: 1600px; height: 700px;"></div>
						</div>	
					</div>
				</div>			
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

<section id="container">      
<!--main content start-->

	<script>
		var mymap = L.map('mapid',{zoomControl: false}).setView([12.989,-14.0878], 12);
						
		L.control.zoom({position:'bottomleft'}).addTo(mymap);
		L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoiam9lbGJhZGppIiwiYSI6ImNrN2UxNjJlZjBmOHgzbW80dTFqY2xtOGUifQ.aWlFjy5ZopCVVpVkjMSOZg', {
		maxZoom: 30,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
					'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
					'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
					id: 'mapbox/streets-v11',
					tileSize: 512,
					zoomOffset: -1

					}).addTo(mymap);

					var  points =[
						<?php
							$res=parcel('SECTEUR 1');
								while($row=mysqli_fetch_array($res))
									{	
										$long=$row['longitude'];
										$lat=$row['latitude'];
										echo("[$lat,$long],");		
										
									}			
									?>	
								];
							var surface=L.polygon(points,{		
									color:'green',
									weight:1,
									opacity:0.7,
									dashArray :'20,3',
									linejoin :'round'
									}).addTo(mymap).bindPopup("SECTEUR 1");
									
							 var  sect4 =[
									<?php
									$res4=parcel('SECTEUR 4');
									while($row4=mysqli_fetch_array($res4))
										{	
										$long=$row4['longitude'];
										$lat=$row4['latitude'];
										echo("[$lat,$long],");				
										}
										
									?>	
								];
							var surface=L.polygon(sect4,{		
									color:'red',
									weight:1,
									opacity:0.7,
									dashArray :'20,3',
									linejoin :'round'
									}).addTo(mymap).bindPopup("SECTEUR 4");		
									
							var  sect2 =[
									<?php
									$res2=parcel('SECTEUR 2');
									while($row2=mysqli_fetch_array($res2))
										{	
												$long=$row2['longitude'];
												$lat=$row2['latitude'];
												echo("[$lat,$long],");		
											
										}
										
									?>	
								];
							var surface=L.polygon(sect2,{		
									color:'grey',
									weight:1,
									opacity:0.7,
									dashArray :'20,3',
									linejoin :'round'
									}).addTo(mymap).bindPopup("SECTEUR 2");		

							var  sect5 =[
									<?php
									$res5=parcel('SECTEUR 5');
									while($row5=mysqli_fetch_array($res5))
										{	
												$long5=$row5['longitude'];
												$lat5=$row5['latitude'];
												echo("[$lat5,$long5],");		
											
										}
										
									?>	
								];
							var surface=L.polygon(sect5,{		
									color:'blue',
									weight:1,
									opacity:0.7,
									dashArray :'20,3',
									linejoin :'round'
									}).addTo(mymap).bindPopup("SECTEUR 5");	
							
							var  sectg =[
									<?php
									$resg=parcel('SECTEUR G');
									while($rowg=mysqli_fetch_array($resg))
										{	
												$longg=$rowg['longitude'];
												$latg=$rowg['latitude'];
												echo("[$latg,$longg],");		
											
										}
										
									?>	
								];
							
							var surface=L.polygon(sectg,{		
									color:'#FF8C00',
									weight:1,
									opacity:0.7,
									dashArray :'20,3',
									linejoin :'round'
									}).addTo(mymap).bindPopup("SECTEUR G");			
									
							var popup = L.popup();

							function onMapClick(e) {
								popup
									.setLatLng(e.latlng)
									.setContent("You clicked the map at " + e.latlng.toString())
									.openOn(mymap);
							}

							mymap.on('click', onMapClick);		
		</script>
	</section>
</section>		
</body>		
</html>
