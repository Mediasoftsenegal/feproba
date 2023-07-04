<?php
require('connexion.php');
 //Union	
// Validation installation culture
	if (isset($_POST['validebae']))
	{
		$resultat=valide_ins($_POST['num_ins']);
		if (resultat)
			{
			header('location:menu_sa.php?page=tab_valide');
			}
	}
// validation entretien culture
	if (isset($_POST['valide_ec']))
	{
		$resultat=valide_ec($_POST['num_ec']);
		if (resultat)
			{
			header('location:menu_sa.php?page=tab_valide');
			}
	}
// validation opérations post récoltes
	if (isset($_POST['validepr']))
	{
		$resultat=valide_pr($_POST['num_pr']);
		if (resultat)
			{
			header('location:menu_sa.php?page=tab_valide');
			}
	}	
// INSERTION
	if (isset($_POST['etat'])){
		switch  ($_POST['etat'])
		{
		Case 'ajout' :
			
			$nom_union=strtoupper($_POST['nom_union']);
			$adresse=strtoupper($_POST['adresseunion']);
			$president=strtoupper($_POST['nompresident']);
			$nom_magasin=strtoupper($_POST['namemagasin']);
			$resultat=insert_union($nom_union,$adresse,$president,$nom_magasin);
			if(resultat)
			{
			header('location:menu_pr.php?page=table_union');
			}	
			break;
// UPDATE
		Case 'modification' :			
			
			$id=$_POST['modif'];	
			$nom_union=strtoupper($_POST['nom_union']);
			$adresse=strtoupper($_POST['adresseunion']);
			$president=strtoupper($_POST['nompresident']);
			$nom_magasin=strtoupper($_POST['namemagasin']);
			$resultat=update_union($id,$nom_union,$adresse,$president,$nom_magasin);
			if (resultat)
			{
			header('location:menu_pr.php?page=table_union');
			}
			break;
			
	
	// Entrée en stock	
		Case 'entreeajout'	:
	
			$ann=strtoupper($_POST['annee_entree']);
			$union=strtoupper($_POST['nom_union']);
			$variete=strtoupper($_POST['nom_varietes']);
			$specul=strtoupper($_POST['nom_speculation']);
			$tonnage=$_POST['qte_entree'];
			$resultat=insert_entree($ann,$union,$variete,$specul,$tonnage);
			if($resultat)
			{
			header('location:menu_ve.php?page=table_entree');
			}
			break;
	// VENTE
		case 'venteajout' :
		
			$date_vente=$_POST['date_vente'];
			$variete=$_POST['nom_varietes'];
			$nom_specul=$_POST['nom_speculation'];
			$prix_vente=$_POST['prix_vente'];
			$qte_vente=$_POST['qte_vente'];
			$nom_union=$_POST['nom_union'];
			
			$rsultats=insert_vente($date_vente,$variete,$nom_specul,$prix_vente,$qte_vente,$nom_union);
		if($rsultats)
			{
			header('location:menu_ve.php?page=tab_vente');
			}
		break;
	
	// Suivi agronomique 
		
		case 'ajoutagro' :
				
				$campagne=$_POST['CAMPAGNE'];
				$saison= $_POST['SAISON'];
				$prenom= $_POST['PRENOM'];
				$region= $_POST['REGION'];
				$departement=$_POST['DEPARTEMENT'];
				$commune=$_POST['COMMUNE'];
				$village=$_POST['VILLAGE'];
				$statutproducteur=$_POST['STATUT_PRODUCTEUR'];
				//$villagelocalisation=$_POST	['VILLAGE_LOCALISATION'];
				$codeparcelle=$_POST['CODE_PARCELLE'];
				$parcellessenence=$_POST['PARCELLES_SEMENCE'];
				$superficiedecalee=$_POST['SUPERFICIE_DECLAREE'];
				$superficiemesuree=$_POST['SUPERFICIE_MESUREE'];
				$coordonnex=$_POST['COORDONNEESY'];
				$coordonney=$_POST['COORDONNEESX'];
				$toposequence=$_POST['TOPOSEQUENCE'];
				$travailsol=$_POST['TRAVAILSOL'];
				$pratiquecf=$_POST['PRATIQUECF'];
				$userripper=$_POST['USER_RIPER'];
				$datepremplis=$_POST['DATEPREMPLIS'];
				$modesemis=$_POST['MODE_SEMIS'];
				$datemiseplace=$_POST['DATE_MISE_PLACE_PEPINIERE'];
				$date_semisrepiq=$_POST['DATE_SEMISREPIQ'];
				$qte_semence_utilisee=$_POST['QANTITES_SEMENCEUTILISEE'];
				$variete_riz=$_POST['VARIETES_RIZCULTURE'];
				$niveau_semence=$_POST['NIVEAU_SEMENCEUTILISEE'];
				$utilisat_semcertame=$_POST['UTILISATEUR_SEMCERTAME'];
				$Utilisation_semoirariz=$_POST['UTILISATION_SEMOIRARIZ'];
				$date_premsarcdesh=$_POST['DATE_PREMSARCDESH'];
				$qtenpkappl=$_POST['QUANTITENPKAPPL'];
				$date_applcnpk=$_POST['DATE_APPLICNPK'];
				$utilisation_fumure_org=$_POST['UTILISATION_FUMURE_ORGANIQ'];
				$date_deux_sarcl=$_POST['DATE_DEUXIEME_SARCLAGE'];
				$date_mariage=$_POST['DATE_DE_MARIAGE'];
				$quantiteur_appl=$_POST['QUANTITEUR_APPLIQUEE'];
				$date_application_uree=$_POST['DATE_APPLICATIONURE'];
				$date_trois_sacdesh=$_POST['DATE_TROISIEME_SACDESH'];
				$quantiteuree2appli=$_POST['QUANTITEUREE2APPLI'];
				$date_applic_uree2=$_POST['DATE_APPLICATIONUREE2'];
				$type_attaque=$_POST['TYPE_ATTAQUE'];
				$indice_climatique=$_POST['INDICECLIMATIQUE'];
				$nbr_lignemoy=$_POST['NBR_LIGNEMOY'];
				$nbr_piedmoy=$_POST['NBR_PIEDMOY'];
				$nbr_paniculesmoy=$_POST['NBR_PANICULESMOY'];
				$poids_moy_panicule=$_POST['POIDS_MOY_PANICULE'];
				$densite_moy=$_POST['DENSITE_MOY'];
				$rendement_estimee=$_POST['RENDEMENT_ESTIME'];
				$product_estimee=$_POST['PRODUCTION_ESTIMEE'];
				$parcelle_recoltee=$_POST['PARCELLE_RECOLTEE'];
				$date_recolte=$_POST['DATE_RECOLTE'];
				$production_obtenue=$_POST['PRODUCTION_OBTENUE'];
				$rendementHA=$_POST['RENDEMENTTHA'];
				$qte_remboursee=$_POST['QTE_REMBOURSEE'];
				$qte_commercialisee=$_POST['QTE_COMMERCIALEE'];
				$qte_auto_cons=$_POST['QTE_AUTOCONSOMMEE'];
				$observations=$_POST['OBSERVATION'];
				$nom_reseau=$_POST['NOM_RESEAU'];
			
				
				$resultat=insere_suiviagro($campagne,$saison,$prenom,$region,$departement,$commune,$village,$statutproducteur,$codeparcelle,$parcellessenence,$superficiedecalee,$superficiemesuree,$coordonnex,$coordonney,$toposequence,$travailsol,$pratiquecf,$userripper,$datepremplis,$modesemis,$datemiseplace,$date_semisrepiq,$qte_semence_utilisee,$variete_riz,$niveau_semence,$utilisat_semcertame,$Utilisation_semoirariz,$date_premsarcdesh,$qtenpkappl,$date_applcnpk,$utilisation_fumure_org,$date_deux_sarcl,$date_mariage,$quantiteur_appl,$date_application_uree,$date_trois_sacdesh,$quantiteuree2appli,$date_applic_uree2,$type_attaque,$indice_climatique,$nbr_lignemoy,$nbr_piedmoy,$nbr_paniculesmoy,$poids_moy_panicule,$densite_moy,$rendement_estimee,$product_estimee,$parcelle_recoltee,$date_recolte,$production_obtenue,$rendementHA,$qte_remboursee,$qte_commercialisee,$qte_auto_cons,$observations,$nom_reseau);
				
				if($resultat)
				{
					header('location:menu_sa.php?page=table_suiviagronom');
				}
				break;
		}
	}
		// CAMPAGNE
		if (isset($_GET['bt_campagne'])) 
		{
			extract($_GET);
			$resultat=insert_campagne($campagne);
			if($resultat)
			{
				header('location:menu_pr.php?page=tab_campagne');
			}
		}
		// PARCELLES 
		if (isset($_GET['bt_parcelle'])) 
		{
			extract($_GET);
			$resultat=insert_parcelles($nomsecteur,$nombloc,$nomct,$numparcelle,$natureparcelle,$xlongitude,$xLatitude,$id_repertoire,$date_attribution);
			if($resultat)
			{
				header('location:menu_pr.php?page=tab_parcelles');
			}
		}

		 if (isset($_POST['pid_parcelles']))
			{
				$resultat=update_parcelle($_POST['pid_parcelles'],$_POST['pnomsecteur'],$_POST['pnombloc'],$_POST['pnomct'],$_POST['pnumparcelle'],
				$_POST['pnatureparcelle'],$_POST['pxlongitude'],$_POST['pxlatitude'],$_POST['pid_repertoire'],$_POST['pdate_attribution']);
				
				if($resultat)
				{
					header('location:menu_pr.php?page=tab_parcelles');
				}
			}
		// NATURE PARCELLE	
		if (isset($_GET['bt_nature'])) 
		{
			extract($_GET);
			$nom_variete=strtoupper($nom_variete);
			$resultat=insert_variete($nom_variete);
			if (resultat)
			{
			header('location:menu_pr.php?page=table_variete');
			}
		}
		
		// TYPE DE VARIETE	
		if (isset($_GET['bt_variete'])) 
		{
			
			extract($_GET); 
			
			$nature=strtoupper($inature);
			$type_variete=strtoupper($nom_type_varietes);
			$resultat=insert_specul($type_variete,$nature);
			if (resultat)
			{
			header('location:menu_pr.php?page=table_specul');
			}
		}	
		// INSTALLATION
		if (isset($_GET['bt_installation'])) 
		{
			extract($_GET);
			$numeroparcelle=idparcelle($nomsecteur,$nombloc,$numparcelle,$ct);
			$tert=mysqli_fetch_array($numeroparcelle);
			
			$resultat=insert_installation($id_campagne,$id_saison,$nomsecteur,$nombloc,$tert['id_parcelles'],$numparcelle,$parcelle_prod,$mode_semis,$superficiedeclaree,$superficiemesuree,$toposequence,$travailsol,$pratiquescf,$srp,$utilisationripper,$date_saisie);
			
			if($resultat)
			{
				header('location:menu_sa.php?page=tab_ins_cul');
			}
		}
		if (isset($_POST['bt_modif_installation'])){
			
			$resultat=update_installation($_POST['id_campagne'],$_POST['id_saison'],$_POST['nomsecteur'],$_POST['nombloc'],$_POST['numparcelle'],$_POST['parcelle_prod'],$_POST['mode_semis'],$_POST['superficiedeclaree'],$_POST['superficiemesuree'],$_POST['toposequence'],$_POST['travailsol'],$_POST['pratiquescf'],$_POST['srp'],$_POST['utilisationripper'],$_POST['date_saisie'],$_POST['id_ins']);
			
			if($resultat)
			{
				header('location:menu_sa.php?page=tab_ins_cul');
			}
		}
		// ENTRETIEN
		if (isset($_GET['bt_entretien'])) 
		{
			extract($_GET);
			$ter=idparcelle($nomsecteur,$nombloc,$numparcelle,$ct);
			$row=(mysqli_fetch_array($ter));
			$resultat=insert_entretien($id_campagne,$id_saison,$nomsecteur,$nombloc,$row['id_parcelles'],$numparcelle,$datepepiniere,$rendement_est,$production_est,$date_semisrepiq,$quantite_sem,$variete_riz,$niveau_sem,$utilisateur_sem,$ustilisation_sem,$date_sarclage,$quantitenpk,$date_applNPK,$utilisation_fumure,$date_saisie2);
			if($resultat)
			{
				header('location:menu_sa.php?page=tab_ent_cul');
			}
		}
		if (isset($_POST['bt_modif_installation'])){
			
			$resultat=update_entretien($_POST['id_campagne'],$_POST['id_saison'],$_POST['nomsecteur'],$_POST['nombloc'],$_POST['numparcelle'],$_POST['parcelle_prod'],$_POST['mode_semis'],$_POST['superficiedeclaree'],$_POST['superficiemesuree'],$_POST['toposequence'],$_POST['travailsol'],$_POST['pratiquescf'],$_POST['srp'],$_POST['utilisationripper'],$_POST['date_saisie'],$_POST['id_ins']);
			
			if($resultat)
			{
				header('location:menu_sa.php?page=tab_ent_cul');
			}
		}
		// OPERATIONS POST RECOLTES
		if (isset($_GET['bt_post_recolt']))
		{
			extract($_GET);
			$ter=idparcelle($nomsecteur,$nombloc,$numparcelle,$ct);
			$row=(mysqli_fetch_array($ter));
			$resultat=insert_op_post($id_campagne,$id_saison,$numparcelle,$row['id_parcelles'],$INDICE_CLIMATIQUE,$POIDS_CARRE_RENDEMENT,$RENDEMENT_MOY_EST,$PRODUCTION_EST,$DATE_RECOLTE,$RECOLTE_MOYENNE,$PRODUCTION_REELLE,$TAUX_HUMIDITE);
			
			if($resultat)
			{
				header('location:menu_sa.php?page=tab_op_recol');
			}
			
		}
		// MEMBRES 
		if (isset($_POST['bt_membreup']))
			{
				if (isset( $_POST['chef_menage'])){	$chef_menage=$_POST['chef_menage'];}
					else{$chef_menage='0';}
					
				if (isset( $_POST['membre_menage'])){$membre_menage=$_POST['membre_menage'];}
					else{$membre_menage='0';}
					
				if (isset( $_POST['menage_appui'])){$menage_appui=$_POST['menage_appui'];}
					else{$menage_appui='0';}	
							
				// UPDATE
				$resultat=update_membre($_POST['sid_repertoire'],$_POST['up_prenom_nom'],$_POST['up_date_naissance'],$_POST['up_genre'],$_POST['up_region'],$_POST['up_departement'],$_POST['up_commune'],$_POST['up_village'],$_POST['up_numtel'],$_POST['up_numcin'],$_POST['up_statut_producteur'],$_POST['up_organi_base'],$_POST['up_statut_organi'],$_POST['up_annee_implic'],$_POST['up_droit_adhesion'],$_POST['up_source_financement'],$chef_menage,$membre_menage,$menage_appui,$_POST['up_animateur'],$_POST['up_observations']);
				
				if($resultat)
				{
				header('location:menu_pr.php?page=table_rep');
				}
			}
		if (isset($_GET['bt_membre']))
			{
				// INSERT
				extract($_GET);
				$resultat=insert_membre($prenom_nom,$date_naissance,$genre,$region,$departement,$commune,$village,$numtel,$numcin,$statut_producteur,$organi_base,$statut_organi,$annee_implic,$droit_adhesion,$source_financement,$chef_menage,$membre_menage,$menage_appui,$animateur,$observations);
			
			if($resultat)
				{
				header('location:menu_pr.php?page=table_rep');
				}
			}
		// DISPONIBILTE
		if (isset($_GET['btn_dispo']))
		{
			// INSERT
			extract($_GET);
			$result= insert_dispo($id_union,$nom_magasin,$date_depot,$type_op,$nom_type_varietes,$nature,$quantite);
			
			if($result)
			{
				header('location:menu_ve.php?page=table_dispo');
			}
		}
		if (isset($_POST['btn_up_dispo']))
			{
			$resu=update_dispo($_POST['id_dispo'],$_POST['id_union'],$_POST['nom_magasin'],$_POST['date_depot'],$_POST['type_op'],$_POST['variete'],$_POST['nature'],$_POST['quantite']);
			}
		// BENEFICIAIRE 
		if (isset($_GET['bt_benef'])) 
		{
			extract($_GET);
			$resultat=insert_benef($region,$departement,$commune,$village,$prenom_nom,$genre,$numcin,$qte_semence_recue,$qte_semence_remb,$speculation,$variete,$superficie,$op_individuel,$annee);
			if($resultat)
			{
				header('location:menu_so.php?page=tab_identi_bene');
			}
		}

?>			