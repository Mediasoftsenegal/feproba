<?php
require('connexion_sa.php');

//SUIVI AGRONOMIQUE
        if (isset($_GET['bt_suivi_ag'])) {
		extract($_GET);
		$resultat=insert_ag($id_parcelles,$prenom_nom,$village,$type_travail_sol,$qte_semence,$variete_riz,$date_semi_repiq,$qte_npk_appli,$date_appli_npk,$qte_uree_appli,$date_appli_uree_1,$date_appli_uree_2,$date_sarclage_1,$date_sarclage_2,$type_attaque,$stade_tallage_d,$stade_tallage_f,$init_panicul,$date_epia_florai,$date_mature,$nbre_main_oeuvre_hors_fam);
		if($resultat){
			header('location:menu_so.php?page=tab_suivi_agronomique');
                }
        }

// INDICATEUR 
	if (isset($_GET['bt_suivi_in'])){
		extract($_GET);
		$resultat=insert_indi($indicateur,$objectif,$realisation,$performence,$commentaire);
		if($resultat){
			header('location:menu_so.php?page=tab_suivi_indicateur');
		}
	}
                
//BENEFICIAIRE
        if (isset($_GET['bt_benef'])){
                extract($_GET);
                $resultat=insert_benef($id_region,$id_departement,$id_commune,$nom_village,$prenom_nom,$genre,$cin,$qte_semence_recue,$qte_semence_remb,$speculation,$variete,$superficie,$op_individuel,$annee);
                if($resultat){
                        header('location:menu_so.php?page=tab_identi_bene');
                }
        }
        if (isset($_POST['bt_edit_benef'])){
		$resr=search_region($_POST['id_region']);
		$rowr=mysqli_fetch_array($resr);
		$resd=search_departement($_POST['id_departement']);
		$rowd=mysqli_fetch_array($resd);
		$resc=search_commune($_POST['id_commune']);
		$rowc=mysqli_fetch_array($resc);
		
		$resultat=update_benef($_POST['id_benef'],$rowr['Id_Region'],$rowd['ID_DEPARTEMENT'],$rowc['ID_COMMUNE'],$_POST['nom_village'],$_POST['prenom_nom'],$_POST['genre'],$_POST['cin'],$_POST['qte_semence_recue'],$_POST['qte_semence_remb'],$_POST['speculation'],$_POST['variete'],$_POST['superficie'],$_POST['op_individuel'],$_POST['annee']);
                if($resultat){
                        header('location:menu_so.php?page=tab_identi_bene');
                }
		}
//MISE EN SEMENCE
        if (isset($_GET['bt_mise'])){
                extract($_GET);
                $resultat=insert_mise($annee_mise,$id_departement,$objectif_mise,$qte_reelle_recue,$taux_mise);
                if($resultat){
                        header('location:menu_so.php?page=tab_mise_semence');
                }
        }
        
//PREVISION EMBLAVURE
 if (isset($_GET['bt_prev'])){
  extract($_GET);
  $resultat=insert_prev($annee_prev,$id_departement,$objectif_emblavure,$qte_mettre_en_place,$qte_recue_embl,$superficie_emblavee,$taux_realisation);
     if($resultat){
       header('location:menu_so.php?page=tab_prev_embavure');
      }
        }
// OP
if(isset($_GET['bt_op'])){
			extract($_GET);
                $resultat=insert_op($id_region,$id_departement,$id_commune,$id_village,$statut_op, $annee_crea,$nbre_membre,$nbre_homme,$nbre_femme,$situation_op,$president,$contact);
                if($resultat){
                        header('location:menu_so.php?page=tab_ident_op');
                }
        }
// CL
IF(isset($_GET['bt_cl'])){
	
	extract($_GET);
		$resultat=insert_cl($id_region,$id_departement,$prenom_nom_pr,$contact,$id_commune,$prenom_nom_mr,$contacte);
		if($resultat){
			header('location:menu_so.php?page=tab_identi_cl');
		}
}
// CARTOGRAPHIE DES CARTOGRAPHIE
IF(isset($_GET['bt_carto'])){
	
	extract($_GET);
		$resultat=insert_carto_ca($id_departement,$id_commune,$residence,$prenom_nom,$contact,$zone_couverte);
		if($resultat){
			header('location:menu_so.php?page=tab_cartographie_ca');
		}
}
// MATERIEL AGRICOL
IF(isset($_GET['bt_materiel'])){
	
	extract($_GET);
		$resultat=insert_mat_agri($id_region,$id_departement,$id_commune,$id_village,$op_benef,$type_materiel,$responsable,$contact,$origine_materiel,$annee);
		if($resultat){
			header('location:menu_so.php?page=tab_materiel_agri');
		}
}

?>