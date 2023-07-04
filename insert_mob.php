<?php
require('connexion.php');

// INSTALLATION
		if (isset($_POST['bt_install_mob'])) 
		{
			$nomsecteur=$_POST['nomsecteur'];
			$nombloc=$_POST['nombloc'];
			$numparcelle=$_POST['numparcelle'];
			$ct=$_POST['ct'];
			$parcelle_prod=$_POST['parcelle_prod'];
			$mode_semis=$_POST['mode_semis'];
			$superficiedeclaree=$_POST['superficiedeclaree'];
			$superficiemesuree=$_POST['superficiemesuree'];
			$toposequence=$_POST['toposequence'];
			$travailsol=$_POST['travailsol'];
			$pratiquescf=$_POST['pratiquescf'];
			$srp=$_POST['srp'];
			$utilisationripper=$_POST['utilisationripper'];
			$date_saisie=$_POST['date_saisie'];
			$id_campagne=$_POST['id_campagne'];
			$id_saison=$_POST['id_saison'];
			$numeroparcelle=idparcelle($_POST['nomsecteur'],$_POST['nombloc'],$_POST['numparcelle'],$_POST['ct']);
			$nom_exploitant_ins=$_POST['nom_exploitant_ins'];
			$tert=mysqli_fetch_array($numeroparcelle);
		
			$resultat=insert_installation($id_campagne,$id_saison,$nomsecteur,$nombloc,$tert['id_parcelles'],$numparcelle,$parcelle_prod,$mode_semis,$superficiedeclaree,$superficiemesuree,$toposequence,$travailsol,$pratiquescf,$srp,$utilisationripper,$nom_exploitant_ins,$date_saisie);
			
			if($resultat)
			{
				header('location:form_mob_ic.php');
			}
		}
		if (isset($_POST['bt_modif_install_mob'])){
			
			$resultat=update_installation($_POST['id_campagne'],$_POST['id_saison'],$_POST['nomsecteur'],$_POST['nombloc'],$_POST['numparcelle'],$_POST['parcelle_prod'],$_POST['mode_semis'],$_POST['superficiedeclaree'],$_POST['superficiemesuree'],$_POST['toposequence'],$_POST['travailsol'],$_POST['pratiquescf'],$_POST['srp'],$_POST['utilisationripper'],$_POST['nom_exploitant_ins'],$_POST['date_saisie'],$_POST['id_ins']);
			
			if($resultat)
			{
				header('location:form_mob_ic.php');
			}
		}
		// ENTRETIEN
		if (isset($_POST['bt_entret_mob'])) 
		{
			$nomsecteur=$_POST['nomsecteur'];
			$nombloc=$_POST['nombloc'];
			$numparcelle=$_POST['numparcelle'];
			$ct=$_POST['ct'];
			$id_campagne=$_POST['id_campagne'];
			$id_saison=$_POST['id_saison'];
			$datepepiniere=$_POST['datepepiniere'];
			$rendement_est=$_POST['rendement_est'];
			$production_est=$_POST['production_est'];
			$date_semisrepiq=$_POST['date_semisrepiq'];
			$quantite_sem=$_POST['quantite_sem'];
			$variete_riz=$_POST['variete_riz'];
			$niveau_sem=$_POST['niveau_sem'];
			$utilisateur_sem=$_POST['utilisateur_sem'];
			$ustilisation_sem=$_POST['ustilisation_sem'];
			$date_sarclage=$_POST['date_sarclage'];
			$quantitenpk=$_POST['quantitenpk'];
			$date_applNPK=$_POST['date_applNPK'];
			$utilisation_fumure=$_POST['utilisation_fumure'];
			$date_saisie2=$_POST['date_saisie2'];
			$nom_exploitant_ent=$_POST['nom_exploitant_ent'];
			$ter=idparcelle($nomsecteur,$nombloc,$numparcelle,$ct);
			$row=(mysqli_fetch_array($ter));
			$resultat=insert_entretien($id_campagne,$id_saison,$nomsecteur,$nombloc,$row['id_parcelles'],$numparcelle,$datepepiniere,$rendement_est,$production_est,$date_semisrepiq,$quantite_sem,$variete_riz,$niveau_sem,$utilisateur_sem,$ustilisation_sem,$date_sarclage,$quantitenpk,$date_applNPK,$utilisation_fumure,$nom_exploitant_ent,$date_saisie2);
			if($resultat)
			{
				header('location:form_mob_ec.php');
			}
		}
		if (isset($_POST['bt_modif_installation'])){
			
			$resultat=update_entretien($_POST['id_campagne'],$_POST['id_saison'],$_POST['nomsecteur'],$_POST['nombloc'],$_POST['numparcelle'],$_POST['parcelle_prod'],$_POST['mode_semis'],$_POST['superficiedeclaree'],$_POST['superficiemesuree'],$_POST['toposequence'],$_POST['travailsol'],$_POST['pratiquescf'],$_POST['srp'],$_POST['utilisationripper'],$_POST['nom_exploitant_ent'],$_POST['date_saisie'],$_POST['id_ins']);
			
			if($resultat)
			{
				header('location:form_mob_ec');
			}
		}
		// OPERATIONS POST RECOLTES
		if (isset($_POST['bt_post_recolt']))
		{
			$id_campagne=$_POST['id_campagne'];
			$id_saison=$_POST['id_saison'];
			$nomsecteur=$_POST['nomsecteur'];
			$nombloc=$_POST['nombloc'];
			$numparcelle=$_POST['numparcelle'];
			$ct=$_POST['ct'];
			$INDICE_CLIMATIQUE=$_POST['INDICE_CLIMATIQUE'];
			$POIDS_CARRE_RENDEMENT=$_POST['POIDS_CARRE_RENDEMENT'];
			$RENDEMENT_MOY_EST=$_POST['RENDEMENT_MOY_EST'];
			$PRODUCTION_EST=$_POST['PRODUCTION_EST'];
			$DATE_RECOLTE=$_POST['DATE_RECOLTE'];
			$RECOLTE_MOYENNE=$_POST['RECOLTE_MOYENNE'];
			$PRODUCTION_REELLE=$_POST['PRODUCTION_REELLE'];
			$TAUX_HUMIDITE=$_POST['TAUX_HUMIDITE'];
			$ter=idparcelle($nomsecteur,$nombloc,$numparcelle,$ct);
			$row=(mysqli_fetch_array($ter));
			$resultat=insert_op_post($id_campagne,$id_saison,$numparcelle,$row['id_parcelles'],
			$INDICE_CLIMATIQUE,$POIDS_CARRE_RENDEMENT,$RENDEMENT_MOY_EST,$PRODUCTION_EST,$DATE_RECOLTE,
			$RECOLTE_MOYENNE,$PRODUCTION_REELLE,$TAUX_HUMIDITE);
			
			if($resultat)
			{
				header('location:form_mob_ic.php');
			}
			
		}
?>		