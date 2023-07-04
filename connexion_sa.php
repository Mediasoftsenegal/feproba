<?php
	// CONNEXION
	function fep_connexion ()
 	{
	$servername = '67.215.3.242';
	$username = 'remacons_fep';
	$password = '#h=_6[7-bWcG';
	$db='remacons_co';
	
	// Create connection
	
		$conn = mysqli_connect($servername,$username,$password,$db);
	// Check connection
		if (!$conn) 
		{
		die("Echec de Connexion: " . mysqli_connect_error());
		} 	 
		else 
		{
		//echo 'Connexion reussie à la Base de donnéees des OP'.'<br>';
		}
		mysqli_select_db($conn,$db);
		return $conn;
		}
		
		function fep_fermerconnexion($conn)
		{
			mysqli_close($conn);
		}	
		function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
			{
				$theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

					switch ($theType) 
						{
						case "text":
							$theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
							break;    
						case "long":
						case "int":
						  $theValue = ($theValue != "") ? intval($theValue) : "NULL";
						  break;
						case "double":
						  $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
						  break;
						case "date":
						  $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
						  break;
						case "defined":
						  $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
						  break;
						}
					return $theValue;
			}
//SUIVI AGRONOMIQUE
	Function insert_ag($id_parcelles,$prenom_nom,$village,$type_travail_sol,$qte_semence,$variete_riz,$date_semi_repiq,$qte_npk_appli,$date_appli_npk,$qte_uree_appli,$date_appli_uree_1,
	$date_appli_uree_2,$date_sarclage_1,$date_sarclage_2,$type_attaque,$stade_tallage_d,
	$stade_tallage_f,$init_panicul,$date_epia_florai,$date_mature,$nbre_main_oeuvre_hors_fam){

		$sql="INSERT INTO `so_suivi_agro`(`id_parcelles`, `prenom_nom`, `village`, `type_travail_sol`, `qte_semence`, `variete_riz`, `date_semi/repiq`, `qte_npk_appli`, `date_appli_npk`,
		 `qte_uree_appli`, `date_appli_uree_1`, `date_appli_uree_2`, `date_sarclage_1`, `date_sarclage_2`, `type_attaque`, `stade_tallage_d`,
		  `stade_tallage_f`, `init_panicul`, `date_epia_florai`, `date_mature`, `nbre_main_oeuvre_hors_fam`) 
		  VALUES ('".$id_parcelles."','".$prenom_nom."','".$village."','".$type_travail_sol."','".$qte_semence."','".$variete_riz."','".$date_semi_repiq."','".$qte_npk_appli."','".$date_appli_npk."',
		  '".$qte_uree_appli."','".$date_appli_uree_1."','".$date_appli_uree_2."','".$date_sarclage_1."','".$date_sarclage_2."','".$type_attaque."','".$stade_tallage_d."',
		  '".$stade_tallage_f."','".$init_panicul."','".$date_epia_florai."','".$date_mature."','".$nbre_main_oeuvre_hors_fam."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
//INDICATEUR

	Function insert_indi($indicateur,$objectif,$realisation,$performence,$commentaire){
		$sql="INSERT INTO `so_suivi_indicateur`(`indicateur`, `objectif`, `realisation`, `performence`, `commentaire`) VALUES ('".$indicateur."','".$objectif."','".$realisation."','".$performence."','".$commentaire."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
//BENEFICIAIRE

	Function insert_benef($id_region,$id_departement,$id_commune,$nom_village,$prenom_nom,$genre,$cin,$qte_semence_recue,$qte_semence_remb,$speculation,$variete,$superficie,$op_individuel,$annee){
		$sql="INSERT INTO `so_benef`(`id_region`, `id_departement`, `id_commune`, `nom_village`, `prenom_nom`, `genre`, `cin`, `qte_semence_recue`, `qte_semence_remb`, `speculation`, `variete`, 
		`superficie`, `op_individuel`, `annee`) VALUES ('".$id_region."','".$id_departement."','".$id_commune."','".$nom_village."','".$prenom_nom."','".$genre."','".$cin."','".$qte_semence_recue."',
		'".$qte_semence_remb."','".$speculation."','".$variete."','".$superficie."','".$op_individuel."','".$annee."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
//MISE EN SEMENCE

	Function insert_mise($annee_mise,$id_departement,$objectif_mise,$qte_reelle_recue,$taux_mise){
		$sql="INSERT INTO `so_mise_semence`(`annee_mise`, `id_departement`, `objectif_mise`, `qte_reelle_recue`, `taux_mise`) VALUES ('".$annee_mise."','".$id_departement."','".$objectif_mise."','".$qte_reelle_recue."','".$taux_mise."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
//PREVISION EMBLAVURE

	Function insert_prev($annee_prev,$id_departement,$objectif_emblavure,$qte_mettre_en_place,$qte_recue_embl,$superficie_emblavee,$taux_realisation){
		$sql="INSERT INTO `so_prev_emblavure`(`annee_prev`, `id_departement`, `objectif_emblavure`, `qte_mettre_en_place`, `qte_recue_embl`, `superficie_emblavee`, `taux_realisation`) VALUES ('".$annee_prev."','".$id_departement."','".$objectif_emblavure."','".$qte_mettre_en_place."','".$qte_recue_embl."','".$superficie_emblavee."','".$taux_realisation."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
?>