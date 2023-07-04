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
		
		Function fep_fermerconnexion($conn)
		{
			mysqli_close($conn);
		}	
		Function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
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
		Function compteur($table)
		{
			$sql='SELECT count(*) as TOTAL  FROM `'.$table.'`';

			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			
		}	
			
		// REGION
			Function liste_reg()
			{
			$sql="SELECT * FROM `fep_region`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			
			}	
		// DEPARTEMENT
	Function liste_dep()
	{
		$sql="SELECT * FROM `fep_departement`";
				
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
				
			}	
		// COMMUNE
	Function liste_comm()
	{
		$sql="SELECT `ID_COMMUNE`,`COMMUNE`, `fep_departement`.`DEPARTEMENT` AS `DEPART` FROM `fep_commune`,`fep_departement` WHERE `fep_commune`.`ID_DEPARTEMENT`=`fep_departement`. `ID_DEPARTEMENT` ORDER BY `DEPARTEMENT` DESC";
				
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			
	}
	// RECHERCHES
	Function search_region($_id_region)
	{
		$sql="SELECT `fep_region`.`Id_Region` FROM `fep_region`  WHERE `fep_region`.`Region`='".$_id_region."'";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function search_departement($_id_departement)
	{
		$sql="SELECT `fep_departement`.`ID_DEPARTEMENT` FROM `fep_departement`  WHERE `fep_departement`.`DEPARTEMENT`='".$_id_departement."'";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function search_commune($_id_commune)
	{
		$sql="SELECT `fep_commune`.`ID_COMMUNE` FROM `fep_commune`  WHERE `fep_commune`.`COMMUNE`='".$_id_commune."'";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}

	//BENEFICIAIRE

	Function insert_benef($id_region,$id_departement,$id_commune,$nom_village,$prenom_nom,$genre,$cin,$qte_semence_recue,$qte_semence_remb,$speculation,$variete,$superficie,$op_individuel,$annee){
		$sql="INSERT INTO `so_benef`(`id_region`, `id_departement`, `id_commune`, `nom_village`, `prenom_nom`, `genre`, `cin`, `qte_semence_recue`, `qte_semence_remb`, `speculation`, `variete`, `superficie`, `op_individuel`, `annee`) VALUES ('".$id_region."','".$id_departement."','".$id_commune."','".$nom_village."','".$prenom_nom."','".$genre."','".$cin."','".$qte_semence_recue."','".$qte_semence_remb."','".$speculation."','".$variete."','".$superficie."','".$op_individuel."','".$annee."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	Function update_benef($id_benef,$id_region,$id_departement,$id_commune,$nom_village,$prenom_nom,$genre,$cin,$qte_semence_recue,$qte_semence_remb,$speculation,$variete,$superficie,$op_individuel,$annee)
	{
		$sql="UPDATE `so_benef` SET 
		`id_region`=".$id_region.",`id_departement`=".$id_departement.",`id_commune`=".$id_commune.",
		`nom_village`='".$nom_village."',`prenom_nom`='".$prenom_nom."',`genre`='".$genre."',
		`cin`='".$cin."',`qte_semence_recue`='".$qte_semence_recue."',
		`qte_semence_remb`='".$qte_semence_remb."',`speculation`='".$speculation."',
		`variete`='".$variete."',`superficie`='".$superficie."',`op_individuel`='".$op_individuel."',
		`annee`='".$annee."'
     	WHERE  `so_benef`.`id_benef` =".$id_benef;
			
			
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function edite_benef($id_benef)
	{
		$sql="SELECT `Region`,`DEPARTEMENT`,`COMMUNE`,`id_benef`,`nom_village`, `prenom_nom`, `genre`, `cin`, `qte_semence_recue`, `qte_semence_remb`, `speculation`, `variete`, `superficie`, `op_individuel`, `annee`
		FROM `so_benef`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_benef`.`id_region`=`fep_region`.`Id_Region`
		AND `so_benef`.`id_departement`=`fep_departement`.`ID_DEPARTEMENT`
		AND `so_benef`.`id_commune`=`fep_commune`.`ID_COMMUNE` 
		AND  `so_benef`.`id_benef` = $id_benef";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function liste_benef()
	{
		$sql="SELECT `Region`,`DEPARTEMENT`,`COMMUNE`,`id_benef`,`nom_village`, `prenom_nom`, `genre`, `cin`, `qte_semence_recue`, `qte_semence_remb`, `speculation`, `variete`, `superficie`, `op_individuel`, `annee`
		FROM `so_benef`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_benef`.`id_region`=`fep_region`.`Id_Region`
		AND `so_benef`.`id_departement`=`fep_departement`.`ID_DEPARTEMENT`
		AND `so_benef`.`id_commune`=`fep_commune`.`ID_COMMUNE`
		ORDER BY `id_benef` DESC"; 
		//LIMIT ".$premier.",".$dernier."";
		
	
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;

	}
	Function select_benef($prenom_nom,$village)
	{
		$sql="SELECT `Region`,`DEPARTEMENT`,`COMMUNE`,`nom_village`, `prenom_nom`, `genre`, `cin`, `qte_semence_recue`, `qte_semence_remb`, `speculation`, `variete`, `superficie`, `op_individuel`, `annee`, `id_benef`
		FROM `so_benef`,`fep_region`,`fep_departement`,`fep_commune` 
		WHERE `so_benef`.`id_region`=`fep_region`.`Id_Region` 
		AND `so_benef`.`id_departement`=`fep_departement`.`ID_DEPARTEMENT`
		AND `so_benef`.`id_commune`=`fep_commune`.`ID_COMMUNE`
		ORDER BY `id_benef` DESC";

		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;

	}
	//IDENTIFICATION OP
 Function insert_op($id_region,$id_departement,$id_commune,$id_village,$statut_op, $annee_crea,$nbre_membre,$nbre_homme,$nbre_femme,$situation_op,$president,$contact)
	{
		$sql="INSERT INTO `so_ident_op`(`id_region`, `id_departement`, `id_commune`, `id_village`, `statut_op`, `annee_crea`, `nbre_membre`, `nbre_homme`, `nbre_femme`, `situation_op`, `president`, `contact`) VALUES ('".$id_region."','".$id_departement."','".$id_commune."','".$id_village."','".$statut_op."', '".$annee_crea."','".$nbre_membre."','".$nbre_homme."','".$nbre_femme."','".$situation_op."','".$president."','".$contact."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
 
 Function liste_op()
	{
		$sql="SELECT `Region`,`departement`,`commune`,`id_village`, `statut_op`, `annee_crea`, `nbre_membre`, `nbre_homme`, `nbre_femme`, `situation_op`, `president`, `contact` 
		FROM `so_ident_op`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_ident_op`.`id_region`=`fep_region`.`id_region`
		AND  `so_ident_op`.`id_departement`=`fep_departement`.`id_departement`
		AND  `so_ident_op`.`id_commune`=`fep_commune`.`id_commune`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function select_op($president,$annee_crea)
	{
		$sql="SELECT `Region`,`departement`,`commune`,`id_village`, `statut_op`, `annee_crea`, `nbre_membre`, `nbre_homme`, `nbre_femme`, `situation_op`, `president`, `contact` 
		FROM `so_ident_op`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_ident_op`.`id_region`=`fep_region`.`id_region`
		AND  `so_ident_op`.`id_departement`=`fep_departement`.`id_departement`
		AND  `so_ident_op`.`id_commune`=`fep_commune`.`id_commune`
		AND `president` LIKE '%".$president."%' OR `annee_crea` like '".$annee_crea."'";
		
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	//IDENTIFICATION CL
	Function insert_cl($id_region,$id_departement,$prenom_nom_pr,$contact,$id_commune,$prenom_nom_mr,$contacte)
	{
		$sql="INSERT INTO `so_identification_cl`(`id_region`, `id_departement`, `prenom_nom_pr`,`contact`,`id_commune`, `prenom_nom_mr`, `contacte`) 
		VALUES ('".$id_region."','".$id_departement."','".$prenom_nom_pr."','".$contact."','".$id_commune."','".$prenom_nom_mr."','".$contacte."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function select_cl($prenom_nom_pr,$prenom_nom_mr)
	{
		$sql="SELECT `Region`,`departement`,`commune`, `prenom_nom_pr`,`contact`,`so_identification_cl`.`id_commune`, `prenom_nom_mr`, `contacte`
		FROM `so_identification_cl`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_identification_cl`.`id_region`=`fep_region`.`id_region`
		AND  `so_identification_cl`.`id_departement`=`fep_departement`.`id_departement`
		AND  `so_identification_cl`.`id_commune`=`fep_commune`.`id_commune`
		`prenom_nom_pr` LIKE '".$prenom_nom_pr."' OR `prenom_nom_mr` LIKE '".$prenom_nom_mr."'";
		
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function liste_cl()
	{
		$sql=" SELECT `Region`,`departement`,`commune`, `prenom_nom_pr`,`contact`,`so_identification_cl`.`id_commune`, `prenom_nom_mr`, `contacte`
		FROM `so_identification_cl`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_identification_cl`.`id_region`=`fep_region`.`id_region`
		AND  `so_identification_cl`.`id_departement`=`fep_departement`.`id_departement`
		AND  `so_identification_cl`.`id_commune`=`fep_commune`.`id_commune`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	// CARTOGRAPHIE DES CARTOGRAPHIE
	Function insert_carto_ca($id_departement,$id_commune,$residence,$prenom_nom,$contact,$zone_couverte)
	{
		$sql="INSERT INTO `so_cartographie_ca`(`id_departement`, `id_commune`, `residence`, `prenom_nom`, `contact`, `zone_couverte`) VALUES ('".$id_departement."','".$id_commune."','".$residence."','".$prenom_nom."','".$contact."','".$zone_couverte."')";
	
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function liste_carto_ca()
	{
		$sql="SELECT `departement`,`commune`,`residence`, `prenom_nom`, `contact`, `zone_couverte`
		FROM `so_cartographie_ca`,`fep_departement`,`fep_commune`
		WHERE `so_cartographie_ca`.`id_departement`=`fep_departement`.`id_departement`
		AND `so_cartographie_ca`.`id_commune`=`fep_commune`.`id_commune`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	Function select_carto_ca($residence,$prenom_nom)
	{
		$sql="SELECT `departement`,`commune`,`residence`, `prenom_nom`, `contact`, `zone_couverte`
		FROM `so_cartographie_ca`,`fep_departement`,`fep_commune`
		WHERE `so_cartographie_ca`.`id_departement`=`fep_departement`.`id_departement`
		AND `so_cartographie_ca`.`id_commune`=`fep_commune`.`id_commune`
		AND `so_cartographie_ca`.`residence` LIKE =$residence 
		AND `so_cartographie_ca`.`prenom_nom` like $prenom_nom";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
/*/SUIVI AGRONOMIQUE
	Function insert_ag($id_parcelles,$prenom_nom,$village,$type_travail_sol,$qte_semence,$variete_riz,$date_semi_repiq,$qte_npk_appli,$date_appli_npk,$qte_uree_appli,$date_appli_uree_1,$date_appli_uree_2,$date_sarclage_1,$date_sarclage_2,$type_attaque,$stade_tallage_d,$stade_tallage_f,$init_panicul,$date_epia_florai,$date_mature,$nbre_main_oeuvre_hors_fam){
		$sql="INSERT INTO `so_suivi_agro`(`id_parcelles`, `prenom_nom`, `village`, `type_travail_sol`, `qte_semence`, `variete_riz`, `date_semi/repiq`, `qte_npk_appli`, `date_appli_npk`, `qte_uree_appli`, `date_appli_uree_1`, `date_appli_uree_2`, `date_sarclage_1`, `date_sarclage_2`, `type_attaque`, `stade_tallage_d`, `stade_tallage_f`, `init_panicul`, `date_epia_florai`, `date_mature`, `nbre_main_oeuvre_hors_fam`) VALUES (".$id_parcelles.",".$prenom_nom.",".$village.",".$type_travail_sol.",".$qte_semence.",".$variete_riz.",".$date_semi_repiq.",".$qte_npk_appli.",".$date_appli_npk.",".$qte_uree_appli.",".$date_appli_uree_1.",".$date_appli_uree_2.",".$date_sarclage_1.",".$date_sarclage_2",".$type_attaque.",".$stade_tallage_d.",".$stade_tallage_f.",".$init_panicul.",".$date_epia_florai.",".$date_mature.",".$nbre_main_oeuvre_hors_fam.")";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
//INDICATEUR*/

	Function insert_indi($indicateur,$objectif,$realisation,$performence,$commentaire){
		$sql="INSERT INTO `so_suivi_indicateur`(`indicateur`, `objectif`, `realisation`, `performence`, `commentaire`) VALUES ('".$indicateur."','".$objectif."','".$realisation."','".$performence."','".$commentaire."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function liste_indi()
	{
		$sql="SELECT `indicateur`, `objectif`, `realisation`, `performence`, `commentaire`
		FROM `so_suivi_indicateur`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	Function select_indi($indicateur,$realisation)
	{
		$sql="SELECT `indicateur`, `objectif`, `realisation`, `performence`, `commentaire`
		FROM `so_suivi_indicateur`
		WHERE `so_suivi_indicateur`.`indicateur`like $indicateur
		OR `so_suivi_indicateur`.`realisation` LIKE =$realisation";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
/*//MISE EN SEMENCE

	Function insert_mise($annee_mise,$id_departement,$objectif_mise,$qte_reelle_recue,$taux_mise){
		$sql="INSERT INTO `so_mise_semence`(`annee_mise`, `id_departement`, `objectif_mise`, `qte_reelle_recue`, `taux_mise`) VALUES ('".$annee_mise."','".$id_departement."','".$objectif_mise."','".$qte_reelle_recue."','".$taux_mise."')";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}*/
	
//PREVISION EMBLAVURE

	Function insert_prev($annee_prev,$id_departement,$objectif_emblavure,$qte_mettre_en_place,$qte_recue_embl,$superficie_emblavee,$taux_realisation){
		$sql="INSERT INTO `so_prev_emblavure`(`annee_prev`, `id_departement`, `objectif_emblavure`, `qte_mettre_en_place`, `qte_recue_embl`, `superficie_emblavee`, `taux_realisation`) VALUES ('".$annee_prev."','".$id_departement."','".$objectif_emblavure."','".$qte_mettre_en_place."','".$qte_recue_embl."','".$superficie_emblavee."','".$taux_realisation."')";
		
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function liste_prev()
	{
		$sql="SELECT `departement`,`annee_prev`, `objectif_emblavure`,`qte_mettre_en_place`, `qte_recue_embl`, `superficie_emblavee`,`taux_realisation`
		FROM `so_prev_emblavure`,`fep_departement`
		WHERE `so_prev_emblavure`.`id_departement`=`fep_departement`.`id_departement`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	Function select_prev($annee_prev,$departement)
	{
		$sql="SELECT `departement`,`annee_prev`, `objectif_emblavure`,`qte_mettre_en_place`, `qte_recue_embl`, `superficie_emblavee`,`taux_realisation`
		FROM `so_prev_emblavure`,`fep_departement`
		WHERE `so_prev_emblavure`.`id_departement`=`fep_departement`.`id_departement`
		AND `so_prev_emblavure`.`annee_prev` LIKE =$annee_prev 
		ABD `fep_departement`.`departement` like $departement";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
//MATERIEL AGRICOL
	Function insert_mat_agri($id_region,$id_departement,$id_commune,$id_village,$op_benef,$type_materiel,$responsable,$contact,$origine_materiel,$annee)
	{
		
	$sql="INSERT INTO `so_materiel_agri`(`id_region`, `id_departement`, `id_commune`, `id_village`, `op_benef`, `type_materiel`, `responsable`, `contact`, `origine_materiel`, `annee`) VALUES ('".$id_region."','".$id_departement."','".$id_commune."','".$id_village."','".$op_benef."','".$type_materiel."','".$responsable."','".$contact."','".$origine_materiel."','".$annee."')";
		
	$conn=fep_connexion();
	$exe=mysqli_query($conn,$sql);
	return $exe;
		
	}
	Function liste_mat_agri()
	{
		$sql="SELECT `Region`,`departement`,`commune`, `id_village`, `op_benef`, `type_materiel`, `responsable`, `contact`, `origine_materiel`, `annee`
		FROM `so_materiel_agri`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_materiel_agri`.`id_region`=`fep_region`.`id_region`
		AND  `so_materiel_agri`.`id_departement`=`fep_departement`.`id_departement`
		AND  `so_materiel_agri`.`id_commune`=`fep_commune`.`id_commune`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	Function select_mat_agri($departement,$annee)
	{
		$sql="SELECT `Region`,`departement`,`commune`, `id_village`, `op_benef`, `type_materiel`, `responsable`, `contact`, `origine_materiel`, `annee`
		FROM `so_materiel_agri`,`fep_region`,`fep_departement`,`fep_commune`
		WHERE `so_materiel_agri`.`id_region`=`fep_region`.`id_region`
		AND  `so_materiel_agri`.`id_departement`=`fep_departement`.`id_departement`
		AND  `so_materiel_agri`.`id_commune`=`fep_commune`.`id_commune`
		AND  `fep_departement`.`departement` LIKE $departement 
		OR  `so_materiel_agri`.`annee` LIKE $annee";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
?>