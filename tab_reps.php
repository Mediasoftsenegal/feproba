<?php
require'connexion.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h4><i class="fa fa-angle-right"></i> liste des membres </h4>
			<div class="col-lg-12" align="right">
				<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"> + membre</button>
			</div>
			<h6 class="textdomain"> Nombre d'enregistrements : </h6>
			<div id="records_contant">
				<div class="modal" id="myModal">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
						<!-- Modal Header -->
						  <div class="modal-header">
							<h4 class="modal-title">Formulaire nouveau membre</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						<!-- Modal body AJOUT MODALE -->
						
						<div class="modal-body">
						  <div class="row">
						   <div class="col-sm-6" >
							<div class="form-group">
								<label> Prénom et Nom :</label>
									<input type="text" name="" id="prenom_nom" class="form-control" placeholder="Prénom et nom">
							</div>
							<div class="form-group">
								<label> Date de naissance :</label>
									<input type="date" name="" id="date_naissance" class="form-control" placeholder="Date de naissance">
							</div>
							<div class="form-group">
								<label> Genre:</label>
									<select name="genre"class="form-control" id="genre" placeholder="choisir le genre">
										<option value="Choisir le genre">Choisir le genre</option>
										<option value="Homme">Homme</option>
										<option value="Femme">Femme</option>
									</select>
							</div>
							<div class="form-group">
								<label> Région:</label>
									<select class="form-control" name="" id="region"> 
										<option>Choisir une région</option>
										<?php
										$reso=liste_reg();
										while ($rowg=mysqli_fetch_array($reso))
										{
										?>	
										<option value="<?php echo $rowg['Region']; ?>"><?php echo $rowg['Region']; ?></option>
										<?php 
										}
											mysqli_free_result($reso);
										?>
									</select>	
							</div>
							<div class="form-group">
								<label> Département:</label>
									<select class="form-control" name="" id="departement"> 
										<option>Choisir un département</option>
										<?php
										$resd=liste_dep();
										while ($rowd=mysqli_fetch_array($resd))
										{
										?>	
										<option value="<?php echo $rowd['DEPARTEMENT']; ?>"><?php echo $rowd['DEPARTEMENT']; ?></option>
										<?php 
										}
											mysqli_free_result($resd);
										?>
									</select>	
							</div>
							<div class="form-group">
								<label> Commune:</label>
									<select class="form-control" name="" id="commune"> 
										<option>Choisir une commune</option>
										<?php
										$resc=liste_comm();
										while ($rowc=mysqli_fetch_array($resc))
										{
										?>	
										<option value="<?php echo $rowc['COMMUNE']; ?>"><?php echo $rowc['COMMUNE']; ?></option>
										<?php 
										}
											mysqli_free_result($resc);
										?>
									</select>	
							</div>
							<div class="form-group">
								<label> Village</label>
									<input type="text" name="" id="village" class="form-control" placeholder="village">
							</div>
							<div class="form-group">
								<label> N° Téléphone</label>
									<input type="text" name="" id="numtel" class="form-control" placeholder="N° Tel.">
							</div>
							<div class="form-group">
								<label> N° CIN</label>
									<input type="text" name="" id="numcin" class="form-control" placeholder="N° CIN">
							</div>
							<div class="form-group">
								<label> Statut Producteur:</label>
									<select name=""class="form-control" id="statut_producteur" placeholder="choisir le genre">
										<option value="Choisir le statut">Choisir le statut</option>
										<option value="Leader">Leader</option>
										<option value="Satellite">Satellite</option>
									</select>
							</div>
						</div>
						<div class="col-sm-6" >
						
						<div class="form-group">
								<label> Organisation de Base</label>
									<input type="text" name="" id="organi_base" class="form-control" placeholder="Organisation de Base">
							</div>
						<div class="form-group">
								<label> Statut organique</label>
									<input type="text" name="" id="statut_organi" class="form-control" placeholder=" Statut organique">
							</div>
						<div class="form-group">
							<label> Année implication :</label>
							<input type="text" name="" id="annee_implic" class="form-control" placeholder="Année implication ">
						</div>
						<div class="form-group">
							<label> Droit d'adhésion :</label>
							<input type="text" name="" id="droit_adhesion" class="form-control" placeholder="Droit d'adhésion ">
						</div>
						<div class="form-group">
							<label> Source de financement:</label>
							<input type="text" name="" id="source_financement" class="form-control" placeholder="Source de financement ">
						</div>
						<div class="form-group">
							<div class="checkbox">
							<label>
								<input type="checkbox" id="chef_menage" value="">
								Chef de ménage:
							</label>
							</div>
						</div>	
						<div class="form-group">
							<div class="checkbox">
							<label>
								<input type="checkbox"  id="membre_menage" value="">
								Membre de ménage:
							</label>
							</div>
						</div>	
						<div class="form-group">
							<div class="checkbox">
							<label>
								<input type="checkbox" id="membre_appui"  value="">
								Ménage d'appui:
							</label>
							</div>
						</div>	
						<div class="form-group">
							<label> Animateur:</label>
							<input type="text" name="" id="animateur" class="form-control" placeholder="animateur ">
						</div>	
						<div class="form-group">
							<label> Observations:</label>
							<textarea name="" id="observations"	class="form-control" placeholder="Observations "> </textarea>
						</div>	
						</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal" name="bt_membre" onclick="ajoutrecord()">Enregistrer</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
						</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		
		<!--///////////////////////////MISE A JOUR MODALE-->
		
		<div id="records_contant_up">
				<div class="modal" id="my_up_Modal">
					<div class="modal-dialog modal-xl">
						<div class="modal-content">
						<!-- Modal Header -->
						  <div class="modal-header">
							<h4 class="modal-title">Formulaire de modification membre</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>
						<!-- Modal body -->
						<div class="modal-body">
						  <div class="row">
						   <div class="col-sm-6" >
							<div class="form-group">
								<label> Prénom et Nom :</label>
									<input type="text" name="" id="up_prenom_nom" class="form-control" placeholder="Prénom et nom">
							</div>
							<div class="form-group">
								<label> date de naissance :</label>
									<input type="date" name="" id="up_date_naissance" class="form-control" placeholder="Date de naissance">
							</div>
							<div class="form-group">
								<label> Genre:</label>
									<select name="genre"class="form-control" id="up_genre" placeholder="choisir le genre">
										<option value="Choisir le genre">Choisir le genre</option>
										<option value="Homme">Homme</option>
										<option value="Femme">Femme</option>
									</select>
							</div>
							<div class="form-group">
								<label> Région:</label>
									<select class="form-control" name="" id="up_region"> 
										<option>Choisir une région</option>
										<?php
										$reso=liste_reg();
										while ($rowg=mysqli_fetch_array($reso))
										{
										?>	
										<option value="<?php echo $rowg['Region']; ?>"><?php echo $rowg['Region']; ?></option>
										<?php 
										}
											mysqli_free_result($reso);
										?>
									</select>	
							</div>
							<div class="form-group">
								<label> Département:</label>
									<select class="form-control" name="" id="up_departement"> 
										<option>Choisir un département</option>
										<?php
										$resd=liste_dep();
										while ($rowd=mysqli_fetch_array($resd))
										{
										?>	
										<option value="?php echo $rowd['DEPARTEMENT']; ?>"><?php echo $rowd['DEPARTEMENT']; ?></option>
										<?php 
										}
											mysqli_free_result($resd);
										?>
									</select>	
							</div>
							<div class="form-group">
								<label> Commune:</label>
									<select class="form-control" name="" id="up_commune"> 
										<option>Choisir une commune</option>
										<?php
										$resc=liste_comm();
										while ($rowc=mysqli_fetch_array($resc))
										{
										?>	
										<option value="<?php echo $rowc['COMMUNE']; ?>"><?php echo $rowc['COMMUNE']; ?></option>
										<?php 
										}
											mysqli_free_result($resc);
										?>
									</select>	
							</div>
							<div class="form-group">
								<label> Village</label>
									<input type="text" name="" id="up_village" class="form-control" placeholder="village">
							</div>
							<div class="form-group">
								<label> N° Téléphone</label>
									<input type="text" name="" id="up_numtel" class="form-control" placeholder="N° Tel.">
							</div>
							<div class="form-group">
								<label> N° CIN</label>
									<input type="text" name="" id="up_numcin" class="form-control" placeholder="N° CIN">
							</div>
						</div>
						<div class="col-sm-6" >
						<div class="form-group">
								<label> Statut Producteur:</label>
									<select name=""class="form-control" id="up_statut_producteur" placeholder="choisir le genre">
										<option value="Choisir le statut">Choisir le statut</option>
										<option value="Leader">Leader</option>
										<option value="Satellite">Satellite</option>
									</select>
							</div>
						<div class="form-group">
								<label> Organisation de Base</label>
									<input type="text" name="" id="up_organi_base" class="form-control" placeholder="Organisation de Base">
							</div>
						<div class="form-group">
								<label> Statut organique</label>
									<input type="text" name="" id="up_statut_organi" class="form-control" placeholder=" Statut organique">
							</div>
						<div class="form-group">
							<label> Année implication :</label>
							<input type="text" name="" id="up_annee_implic" class="form-control" placeholder="Année implication ">
						</div>
						<div class="form-group">
							<label> Droit d'adhésion :</label>
							<input type="text" name="" id="up_droit_adhesion" class="form-control" placeholder="Droit d'adhésion ">
						</div>
						<div class="form-group">
							<label> Source de financement:</label>
							<input type="text" name="" id="up_source_financement" class="form-control" placeholder="Source de financement ">
						</div>
						<div class="form-group">
							<div class="checkbox">
							<label>
								<input type="checkbox" id="up_chef_menage" value="">
								Chef de ménage:
							</label>
							</div>
						</div>	
						<div class="form-group">
							<div class="checkbox">
							<label>
								<input type="checkbox"  id="up_membre_menage" value="">
								Membre de ménage:
							</label>
							</div>
						</div>	
						<div class="form-group">
							<div class="checkbox">
							<label>
								<input type="checkbox" id="up_membre_appui"  value="">
								Ménage d'appui:
							</label>
							</div>
						</div>	
						<div class="form-group">
							<label> Animateur:</label>
							<input type="text" name="" id="up_animateur	" class="form-control" placeholder="animateur ">
						</div>	
						<div class="form-group">
							<label> Observations:</label>
							<textarea name="" id="up_observations"	class="form-control" placeholder="Observations "> </textarea>
						</div>	
						</div>
						</div>
						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-success" data-dismiss="modal" name="bt_membreup" onclick="modifrecord()">Mettre à jour</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
							<input type="hidden"  name="" id="hiddenid_repertoire">
						</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){	
		lirerecords();
	});
	
	function lirerecords(){
		var lirerecord = "lirerecord";
		$.ajax({
			url : "insert_feps.php",
			type: "POST",
			data : {lirerecord:lirerecord},
			success: function(data,status){
				$('#records_contant').html(data);
			  }
			});
		}

	function ajoutrecord(){
		
		var prenom_nom = $('#prenom_nom').val();
		var date_naissance = $('#date_naissance').val();
		var genre = $('#genre').val();
		var region = $('#region').val();
		var departement = $('#departement').val();
		var commune = $('#commune').val();
		var village = $('#village').val();
		var numtel = $('#numtel').val();
		var numcin = $('#numcin').val();
		var statut_producteur = $('#statut_producteur').val();
		var organi_base = $('#organi_base').val();
		var statut_organi = $('#statut_organi').val();
		var annee_implic = $('#annee_implic').val();
		var droit_adhesion = $('#droit_adhesion').val();
		var source_financement = $('#source_financement').val();
		var chef_menage = $('#chef_menage').val();
		var membre_menage = $('#membre_menage').val();
		var menage_appui = $('#menage_appui').val();
		var animateur = $('#animateur').val();
		var observations = $('#observations').val();
		
		
		$.ajax({
			url:"insert_feps.php",
			type:'post',
			data :{prenom_nom :prenom_nom,
				date_naissance :date_naissance,
				genre : genre,
				region : region,
				departement : departement,
				commune : commune,
				village : village,
				numtel : numtel,
				numcin :numcin,
				statut_producteur:statut_producteur,
				organi_base :organi_base,
				statut_organi :statut_organi,
				annee_implic : annee_implic,
				droit_adhesion : droit_adhesion,
				source_financement : source_financement,
				chef_menage : chef_menage,
				membre_menage : membre_menage,
				menage_appui :menage_appui,
				animateur : animateur,
				observations : observations	},
				
				success:function(data,status){
				lirerecords();	
				
			}
		})
	}
	function Deleteuser(supprimerid){
		
		var conf= confirm("Voulez-vous réellement supprimer cet enregistrement ?");
		
		if(conf==true){
			
			$.ajax({
				url: "insert_feps.php",
				type : "post",
				data :{supprimerid:supprimerid},
				
				success:function(data,status){
				lirerecords();
				
			}
		})
		
	}
	}
	function GetUserDetails(id){
		
		$('#hiddenid_repertoire').val(id);
		
		$.post("insert_feps.php", {
			id:id
		}, function(data,status){
			
			var membre=JSON.parse(data);
			
			$('#up_prenom_nom').val(membre.prenom_nom);
			$('#up_date_naissance').val(membre.date_naissance);
			$('#up_genre').val(membre.genre);
			$('#up_region').val(membre.region);
			$('#up_departement').val(membre.departement);
			$('#up_commune').val(membre.commune);
			$('#up_village').val(membre.village);
			$('#up_numtel').val(membre.numtel);
			$('#up_numcin').val(membre.numcin);
			$('#up_statut_producteur').val(membre.statut_producteur);
			$('#up_organi_base').val(membre.organi_base);
			$('#up_statut_organi').val(membre.statut_organi);
			$('#up_annee_implic').val(membre.annee_implic );
			$('#up_droit_adhesion').val(membre.droit_adhesion);
			$('#up_source_financement').val(membre.source_financement);
			$('#up_chef_menage').val(membre.chef_menage);
			$('#up_membre_menage').val(membre.membre_menage);
			$('#up_menage_appui').val(membre.menage_appui);
			$('#up_animateur').val(membre.animateur);
			$('#up_observations').val(membre.observations);	
			}			
		);
		$('#my_up_Modal').modal("show");
		
	}
	function modifrecord(id){
		
		var prenom_nom = $('#up_prenom_nom').val();
		var date_naissance = $('#up_date_naissance').val();
		var genre = $('#up_genre').val();
		var region = $('#up_region').val();
		var departement = $('#up_departement').val();
		var commune = $('#up_commune').val();
		var village = $('#up_village').val();
		var numtel = $('#up_numtel').val();
		var numcin = $('#up_numcin').val();
		var statut_producteur = $('#up_statut_producteur').val();
		var organi_base = $('#up_organi_base').val();
		var statut_organi = $('#up_statut_organi').val();
		var annee_implic = $('#up_annee_implic').val();
		var droit_adhesion= $('#up_droit_adhesion').val();
		var source_financement = $('#up_source_financement').val();
		var chef_menage = $('#up_chef_menage').val();
		var membre_menage = $('#up_membre_menage').val();
		var menage_appui = $('#up_membre_appui').val();
		var animateur= $('#up_animateur').val();
		var observations = $('#up_observations').val();
		
		var hiddenid_repertoire=$('#hiddenid_repertoire').val();
		
		$.POST("insert_feps.php",{
			
			hiddenid_repertoire:hiddenid_repertoire,
			prenom_nom:prenom_nom,
			date_naissance:date_naissance,
			genre:genre,
			region:region,
			departement:departement,
			commune:commune,
			village:village,
			numtel:numtel,
			numcin:numcin,
			statut_producteur:statut_producteur,
			organi_base:organi_base,
			statut_organi:statut_organi,
			annee_implic:annee_implic,
			droit_adhesion:droit_adhesion,
			source_financement:source_financement,
			chef_menage:chef_menage,
			membre_menage:membre_menage,
			menage_appui:menage_appui,
			animateur:animateur,
			observations:observations,
			
		},
		function(data,status){
			
			('#my_up_Modal').modal("hide");
			lirerecords();
			}
		
		);
	}
</script>
</body>
</html>
	