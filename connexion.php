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
		//UNION 		
		
			function insert_union($nom_union,$adresse,$president,$nom_magasin)
			{
				$sql = sprintf("INSERT INTO `fep_union` (`nom_union`, `adresse`, `President`, `Magasin`) VALUES (%s, %s, %s, %s)",
				GetSQLValueString($nom_union,"text"),
				GetSQLValueString($adresse,"text"),
				GetSQLValueString($president, "text"),
				GetSQLValueString($nom_magasin,"text"));
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
				
			}	
	
		function listeunion()
			{
			$sql="SELECT * FROM `fep_union`";
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			}
		
		function editunion($idunion)
			{
			$sql="SELECT * FROM `fep_union`  WHERE ID_UNION =".$idunion;
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			}	
		
		function update_union($îd,$nomunion,$adress,$presi,$magasin)
		{
			$sql = "UPDATE `fep_union` SET `nom_union`= '".$nomunion."',`adresse`='".$adress."',`President`='".$presi."',`Magasin` ='".$magasin."' WHERE `fep_union`.`ID_UNION` =".$îd;
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
		}	
		// PRODUCTION
		function elite($variete,$annee)
		{
			$sql="SELECT `tonnage`,`nom_variete`,`nom_union` FROM `fep_entree` WHERE `nom_variete`='".$variete."'
			AND `annee`= '".$annee."' ORDER by `tonnage` DESC LIMIT 1";
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			
		}	
		function an_production()
		{
			 $sql="SELECT DISTINCT `fep_entree`.annee FROM `fep_entree`";
			
			 $conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
		}	
	
		// DECOMPTE ET CALCUL
		function nbre_unite($nom_table)
		{
			$sql="SELECT COUNT(*) as total FROM `".$nom_table."`";
	
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
		}	
		function tonnage($annee)
			{
				$sql = "SELECT SUM(`tonnage`) as QTE_TOTALE FROM `fep_entree` WHERE `annee`= '".$annee."'";
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
		function tonnage_spec($annee,$nom_var,$nom_spec)
			{
				$sql="SELECT SUM(tonnage) as Tonne, annee,nom_variete,nom_specul FROM `fep_entree` 
				WHERE annee='".$annee."' 
				AND nom_variete='".$nom_var."' AND nom_specul='".$nom_spec."'";
		
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				
			}
		function prod_variete_union($annee,$nom_var,$nom_spec,$union)
			{
				$sql="SELECT SUM(tonnage) as Tonne, `annee`,`nom_variete`,`nom_specul`,`nom_union` 
				FROM `fep_entree` 
				WHERE annee='".$annee."' 
				AND `nom_variete`='".$nom_var."' 
				AND `nom_specul`='".$nom_spec."' 
				AND `nom_union`='".$union."'";
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
		function cacul_pourcentage($nombre,$total,$pourcentage)
			{ 
			$resultat = ($nombre/$total) * $pourcentage;
				return round($resultat); // Arrondi la valeur
			} 
		function  calcul_genre($ntot)
			{
				$sql = "SELECT `genre`,COUNT(`id_repertoire`) AS nbre FROM `fep_repertoire` group by `genre`";
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}	
		function calc_specul($annee)
			{
				$sql="SELECT `nom_specul`,`annee`,SUM(`tonnage`) as Total FROM `fep_entree` WHERE `annee`='".$annee."'  GROUP BY `nom_specul`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}	
			
		function calcul_vente($annee)
			{
				$sql="SELECT `fep_entree`.annee AS an,`fep_entree`.nom_union,`fep_entree`.nom_variete,`fep_entree`.nom_specul,`fep_entree`.tonnage 
				FROM `fep_entree`				
				WHERE an=".$annee;
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
		// NATURE PARCELLES
		function listevariete()
			{
			$sql="SELECT * FROM `fep_natures`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
		function insert_variete($nomvariete)
			{
				$sql = sprintf("INSERT INTO `fep_natures` (`nature`) VALUES (%s)",
					GetSQLValueString($nomvariete,"text"));
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
					
			}	
		
		// CAMPAGNE
		 Function list_camp()
			 {
				 $sql="SELECT DISTINCT `fep_campagne`.`ID_CAMPAGNE`,`fep_campagne`.`campagne` from `fep_campagne` ORDER BY `ID_CAMPAGNE`DESC"  ;
				
				 $conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			 }
		 
		 Function insert_campagne($campagne)
			 {
				 $sql = sprintf("INSERT INTO `fep_campagne` (`campagne`) VALUES (%s)",
					GetSQLValueString($campagne,"text"));
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			 }
		 
		// SUVI AGRONOMIQUE
		
		Function listesuivi($camp)
		 {
			$sql="SELECT `fep_campagne`.CAMPAGNE AS CAMPAGNE,`fep_saison`.Saison AS SAISON,`fep_repertoire`.prenom_nom AS PRENOM,`fep_suiviagronomie`.REGION,`fep_suiviagronomie`.DEPARTEMENT,`fep_suiviagronomie`.COMMUNE,`fep_suiviagronomie`.VILLAGE,`fep_suiviagronomie`.STATUT_PRODUCTEUR,`fep_suiviagronomie`.VILLAGE_LOCALISATION,`fep_suiviagronomie`.CODE_PARCELLE,`fep_suiviagronomie`.PARCELLES_SEMENCE,`fep_suiviagronomie`.SUPERFICIE_DECALEE,`fep_suiviagronomie`.SUPERFICIE_MESUREE,`fep_suiviagronomie`.COORDONNEESY,`fep_suiviagronomie`.COORDONNEESX,`fep_suiviagronomie`.TOPOSEQUENCE,`fep_suiviagronomie`.TRAVAILSOL,`fep_suiviagronomie`.PRATIQUECF,`fep_suiviagronomie`.USER_RIPER,`fep_suiviagronomie`.DATEPREMPLIS,`fep_suiviagronomie`.MODE_SEMIS,`fep_suiviagronomie`.`DATE_MISE_PLACE_PEPINIERE`,`fep_suiviagronomie`.`DATE_SEMISREPIQ`,`fep_suiviagronomie`.`QANTITES_SEMENCEUTILISEE`,`fep_suiviagronomie`.`VARIETES_RIZCULTURE`,`fep_suiviagronomie`.`NIVEAU_SEMENCEUTILISEE`,`fep_suiviagronomie`.`UTILISATION_SEMOIRARIZ`,`fep_suiviagronomie`.`DATE_PREMSARCDESH`,`fep_suiviagronomie`.QUANTITENPKAPPL,`fep_suiviagronomie`.`DATE_APPLICNPK`,`fep_suiviagronomie`.`UTILISATION_FUMURE_ORGANIQ`,`fep_suiviagronomie`.`DATE_DEUXIEME_SARCLAGE`,`fep_suiviagronomie`.`DATE_DE_MARIAGE`,`fep_suiviagronomie`.`QUANTITEUR_APPLIQUEE`,`fep_suiviagronomie`.`DATE_APPLICATIONURE`,`fep_suiviagronomie`.`DATE_TROISIEME_SACDESH`,`fep_suiviagronomie`.QUANTITEUREE2APPLI,`fep_suiviagronomie`.`DATE_APPLICATIONUREE2`,`fep_suiviagronomie`.`TYPE_ATTAQUE`,`fep_suiviagronomie`.INDICECLIMATIQUE,`fep_suiviagronomie`.`NBR_LIGNEMOY`,`fep_suiviagronomie`.`NBR_PIEDMOY`,`fep_suiviagronomie`.`NBR_PANICULESMOY`,`fep_suiviagronomie`.`POIDS_MOY_PANICULE`,`fep_suiviagronomie`.`DENSITE_MOY`,`fep_suiviagronomie`.`RENDEMENT_ESTIME`,`fep_suiviagronomie`.`PRODUCTION_ESTIMEE`,`fep_suiviagronomie`.`PARCELLE_RECOLTEE`,`fep_suiviagronomie`.`DATE_RECOLTE`,`fep_suiviagronomie`.`PRODUCTION_ESTIMEE`,`fep_suiviagronomie`.`RENDEMENTTHA`,`fep_suiviagronomie`.`QTE_REMBOURSEE`,`fep_suiviagronomie`.`QTE_COMMERCIALEE`,`fep_suiviagronomie`.`QTE_AUTOCONSOMMEE`,`fep_suiviagronomie`.`OBSERVATION`,`fep_suiviagronomie`.`NOM_RESEAU`,`fep_suiviagronomie`.PRENOMNOM 
			FROM `fep_suiviagronomie`,`fep_campagne`,`fep_saison`,`fep_repertoire` 
			WHERE
			`fep_campagne`.CAMPAGNE='".$camp."' AND
			`fep_campagne`.ID_CAMPAGNE=`fep_suiviagronomie`.ID_CAMPAGNE AND 
			`fep_saison`.ID_SAISON=`fep_suiviagronomie`.ID_SAISON AND 
			`fep_repertoire`.ID_REPERTOIRE = `fep_suiviagronomie`.ID_REPERTOIRE limit 1,50";
		

			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;	 
		 }	 	
		
		Function insere_suiviagro()
		 {
			 $sql="INSERT INTO `fep_suiviagronomie` (`ID_CAMPAGNE`, `ID_SAISON`, `ID_REPERTOIRE`, `REGION`, `DEPARTEMENT`, `COMMUNE`, `VILLAGE`, `STATUT_PRODUCTEUR`, `VILLAGE_LOCALISATION`, `CODE_PARCELLE`, `PARCELLES_SEMENCE`, `SUPERFICIE_DECALEE`, `SUPERFICIE_MESUREE`, `COORDONNEESY`, `COORDONNEESX`, `TOPOSEQUENCE`, `TRAVAILSOL`, `PRATIQUECF`, `USER_RIPER`, `DATEPREMPLIS`, `MODE_SEMIS`, `DATE_MISE_PLACE_PEPINIERE`, `DATE_SEMISREPIQ`, `QANTITES_SEMENCEUTILISEE`, `VARIETES_RIZCULTURE`, `NIVEAU_SEMENCEUTILISEE`, `UTILISATEUR_SEMCERTAME`, `UTILISATION_SEMOIRARIZ`, `DATE_PREMSARCDESH`, `QUANTITENPKAPPL`, `DATE_APPLICNPK`, `UTILISATION_FUMURE_ORGANIQ`, `DATE_DEUXIEME_SARCLAGE`, `DATE_DE_MARIAGE`, `QUANTITEUR_APPLIQUEE`, `DATE_APPLICATIONURE`, `DATE_TROISIEME_SACDESH`, `QUANTITEUREE2APPLI`, `DATE_APPLICATIONUREE2`, `TYPE_ATTAQUE`, `INDICECLIMATIQUE`, `NBR_LIGNEMOY`, `NBR_PIEDMOY`, `NBR_PANICULESMOY`, `POIDS_MOY_PANICULE`, `DENSITE_MOY`, `RENDEMENT_ESTIME`, `PRODUCTION_ESTIMEE`, `PARCELLE_RECOLTEE`, `DATE_RECOLTE`, `PRODUCTION_OBTENUE`, `RENDEMENTTHA`, `QTE_REMBOURSEE`, `QTE_COMMERCIALEE`, `QTE_AUTOCONSOMMEE`, `OBSERVATION`, `NOM_RESEAU`, `PRENOMNOM`) VALUES ('', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''); ";
		 } 
		 // SAISON
		 Function liste_saison()
			 {
			$sql = "SELECT * FROM `fep_saison`";

				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			 }
		// TYPE DE VARIETE
		Function listespecul()
			{
			$sql="SELECT DISTINCT `nom_type_varietes` FROM `fep_type_variete`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
			
		Function listespeculs()
			{
			$sql="SELECT DISTINCT * FROM `fep_type_variete`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
			
		Function insert_specul($type_variete,$nature)
			{
				$sql = sprintf("INSERT INTO `fep_type_variete` (`nom_type_varietes`,`nature`) VALUES (%s,%s)",
			
					GetSQLValueString($type_variete,"text"),
					GetSQLValueString($nature,"text"));
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
					
			}	
		Function editspecul($id_specul)
			{
			$sql="SELECT * FROM `fep_type_variete`  WHERE id_type_variete =".$id_specul;
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}	
		// ENTREES	
		Function insert_entree($annee,$union,$nomvariete,$nomspecul,$tonnage)
			{
				$sql = sprintf("INSERT INTO `fep_entree` (`annee`,`nom_union`,`nom_variete`,`nom_specul`,`tonnage`) VALUES (%s,%s,%s,%s,%s)",
			
					GetSQLValueString($annee,"int"),
					GetSQLValueString($union,"text"),
					GetSQLValueString($nomvariete,"text"),
					GetSQLValueString($nomspecul,"text"),
					GetSQLValueString($tonnage,"int"));
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
		
		Function listeEntree($annee)
			{
				$sql="SELECT * FROM `fep_entree` WHERE `annee`= ".$annee;
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
		// EDITION	
		Function editEntree($id_entree)
			{
				$sql="SELECT * FROM `fep_entree`  WHERE id_entree=".$id_entree;
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
		Function recap_entree($annee)
			{
				$sql="SELECT * FROM `fep_entree`  WHERE `fep_entree`.annee='".$annee."' ORDER BY id_entree, nom_union ";
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
		Function sel_annuel()
			{
				$sql='SELECT DISTINCT annee from `fep_entree`';
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
		
		// VENTES
		Function liste_vente($annee)
			{
				$sql="SELECT * FROM `fep_vente` WHERE YEAR( `fep_vente`.`date_vente` )='".$annee."'";
			
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
			
		Function insert_vente($date_vente,$variete,$nom_specul,$prix_vente,$qte_vente,$nom_union)
			{
				$sql = "INSERT INTO `fep_vente` (`date_vente`, `variete`, `nom_speculation`, `prix_vente`, `quantite_vendu`, `nom_union`) VALUES ('".$date_vente."', '".$variete."', '".$nom_specul."','".$prix_vente."','".$qte_vente."','".$nom_union."')";

					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;

			}	
		
		Function totale_vente($annee)
			{	
				$sql="SELECT SUM(`prix_vente`*(`quantite_vendu`*1000))  as som FROM `fep_vente` WHERE YEAR( `fep_vente`.`date_vente` )='".$annee."'";
			 
					 $conn=fep_connexion();
					 $exe=mysqli_query($conn,$sql);
					 return $exe;
			}
		
		Function union_production($annee)
			{
				$sql="SELECT`nom_union` ,SUM(`prix_vente`*(`quantite_vendu`*1000)) as som FROM `fep_vente` WHERE YEAR( `fep_vente`.`date_vente` )='".$annee."' group by `nom_union` order by som";
			
					 $conn=fep_connexion();
					 $exe=mysqli_query($conn,$sql);
					 return $exe;
			}
		
		Function union_qtevendue($annee)
			{
				$sql="SELECT`nom_union` ,SUM((`quantite_vendu`*1000)) as qtetotale FROM `fep_vente` WHERE YEAR( `fep_vente`.`date_vente` )='".$annee."' group by `nom_union` order by qtetotale";
		
					 $conn=fep_connexion();
					 $exe=mysqli_query($conn,$sql);
					 return $exe;
				
			}	
		function vente_variete($annee)
			{
				$sql="SELECT `variete`,(`prix_vente`*`quantite_vendu`*1000) as montant, YEAR( `fep_vente`.`date_vente` ) AS AN 
				FROM `fep_vente` WHERE YEAR( `fep_vente`.`date_vente` ) >= '".($annee-2)."' AND YEAR( `fep_vente`.`date_vente` ) <= '".$annee."' 
				GROUP BY AN,variete ORDER BY AN DESC"; 
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				
			}
		function max_vente($annee)
			{
				$sql="SELECT `variete`,(`prix_vente`*`quantite_vendu`*1000) as montant, YEAR( `fep_vente`.`date_vente` ) AS AN 
				FROM `fep_vente` 
				WHERE YEAR( `fep_vente`.`date_vente` ) >= '".($annee-2)."' 
				AND YEAR( `fep_vente`.`date_vente` ) <= '".$annee."'  
				GROUP BY AN,variete ORDER BY montant DESC";
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				
			}
		// MEMBRES
		
		Function listerep()
			{
				$sql="SELECT * FROM `fep_repertoire` ORDER BY `prenom_nom` ASC";

					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
					
			}	
		
		Function listerep2($un,$deux)
			{
				$sql="SELECT * FROM `fep_repertoire`  LIMIT '".$un."','".$deux."'";
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
		
		Function compteur()
			{
			$sql='SELECT count(*) as TOTAL  FROM `fep_repertoire`';

			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql) or die(mysqli_error($conn,$sql));
			return $exe;
			}
			
		Function calcul_age($daten)
			{
				
			if ($daten<>'0000-00-00')
				{
					
				$aujourdhui = date("Y-m-d");
				$diff = date_diff(date_create($daten), date_create($aujourdhui));
				return $diff->format('%y');
				}
			}
		
		Function listereps()
			{
				$sql="SELECT * FROM `fep_repertoire`";
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
		Function editreps($id_repertoire)
			{
				$sql="SELECT * FROM `fep_repertoire` WHERE `fep_repertoire`.`ID_REPERTOIRE`='".$id_repertoire."'";
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}		
		
		Function prenomnom()
			{
				$sql="select id_repertoire,prenom_nom FROM `fep_repertoire`";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
		
		Function identification($id_repertoire)
			{
				$sql="SELECT `prenom_nom`,`genre`,`statut_producteur`,`village` FROM `fep_repertoire` WHERE `fep_repertoire`.`ID_REPERTOIRE`='".$id_repertoire."'";
			
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
		
		function insert_membre($prenom_nom,$date_naissance,$genre,$region,$departement,$commune,$village,$numtel,$numcin,$statut_producteur,	$organi_base,$statut_organi,$annee_implic,$droit_adhesion,$source_financement,$chef_menage,$membre_menage,$menage_appui,$animateur,$observations)
			{
				$sql="INSERT INTO `fep_repertoire` (`prenom_nom`, `date_naissance`, `genre`, `region`,`departement`, `commune`, `village`, `numtel`,`numcin`, `statut_producteur`, `organi_base`, `statut_organi`,`annee_implic`, `droit_adhesion`, `source_financement`,`chef_menage`, `membre_menage`, `menage_appui`, `animateur`, `observations`) VALUES ('".$prenom_nom."', '".$date_naissance."', '".$genre."','".$region."','".$departement."','".$commune."','".$village."','".$numtel."','".$numcin."','".$statut_producteur."','".$organi_base."','".$statut_organi."','".$annee_implic."','".$droit_adhesion."','".$source_financement."','".$chef_menage."','".$membre_menage."','".$menage_appui."','".$animateur."','".$observations."')";
	
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			
			}
		
		function update_membre($id,$prenom_nom,$date_naissance,$genre,$region,$departement,$commune,$village,$numtel,$numcin,$statut_producteur,	$organi_base,$statut_organi,$annee_implic,$droit_adhesion,$source_financement,$chef_menage,$membre_menage,$menage_appui,$animateur,$observations)
			{
				$sql = "UPDATE `fep_repertoire` SET `prenom_nom`= '".$prenom_nom."',`date_naissance`='".$date_naissance."',`genre`='".$genre."',`region` ='".$region."',`departement` ='".$departement."',`commune` ='".$commune."',`village` ='".$village."',`numtel` ='".$numtel."',`numcin` ='".$numcin."',`statut_producteur` ='".$statut_producteur."',`organi_base` ='".$organi_base."',`statut_organi` ='".$statut_organi."',`annee_implic` ='".$annee_implic."',`droit_adhesion` ='".$droit_adhesion."',`source_financement` ='".$source_financement."',`chef_menage` ='".$chef_menage."',`membre_menage` ='".$membre_menage."',`menage_appui` ='".$menage_appui."',`animateur` ='".$animateur."',`observations` ='".$observations."' WHERE `ID_REPERTOIRE`='".$id."'";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				
			}
		
		function suppr_membre($id_repertoire)	
			{
			
				$sql="DELETE  FROM `fep_repertoire` WHERE `fep_repertoire`.`ID_REPERTOIRE`".$id_repertoire."'";;
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				
			}
		// 	PARCELLES
		function liste_secteur()
			{
				$sql="SELECT DISTINCT nomsecteur FROM `fep_parcelles` order by nomsecteur ";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
		
		function parcel($secteur)
		{
			$sql="SELECT * FROM `fep_parcelles` WHERE `nomsecteur`='".$secteur."'   AND `rang`>0 ORDER BY `rang` asc limit 0,81";
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			
		}
		
		
		function parcelle_secteur($secteur)
			{
				$sql="SELECT * FROM `fep_parcelles` WHERE `nomsecteur`='".$secteur."'";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}	
		function parcelle_nombre($secteur)
			{
				$sql="SELECT `nomsecteur`, COUNT(`nomsecteur`) NBRE FROM `fep_parcelles` WHERE `nomsecteur` ='".$secteur."'";
		
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
		
		function liste_bloc()
			{
				$sql="SELECT DISTINCT nombloc FROM `fep_parcelles`";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
		function liste_ct()
			{
				$sql="SELECT DISTINCT CT FROM `fep_parcelles`";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
		function graph_parcelle($secteur)
			{
			$sql="SELECT * FROM `fep_parcelles`WHERE `fep_parcelles`.`nomsecteur`='".$secteur."'
			Order by `longitude` and `latitude`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			
			
			}
		function liste_parcelles($nomsecteur,$bloc)
			{
				$sql="SELECT DISTINCT * FROM `fep_parcelles` WHERE `fep_parcelles`.nomsecteur='".$nomsecteur."' AND`fep_parcelles`.nombloc='".$bloc."'";
			
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			
			}	
		function liste_parcelles2()
			{
				$sql="SELECT DISTINCT numparcelle FROM `fep_parcelles` ORDER BY numparcelle";
						
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			
			}	
		function identite_parcelle($idparcell)
			{
				$sql="SELECT * FROM `fep_parcelles` WHERE `fep_parcelles`.`id_parcelles`='".$idparcell."'" ;
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}			
		function idparcelle($nomsecteur,$nombloc,$numparcelle,$ct)
			{
				$sql="SELECT `fep_parcelles`.`numparcelle`,`fep_parcelles`.`id_parcelles` FROM `fep_parcelles` 
				
				WHERE  
				`fep_parcelles`.`nomsecteur`='".$nomsecteur."'
				AND `fep_parcelles`.`nombloc`='".$nombloc."'
				AND `fep_parcelles`.`numparcelle`='".$numparcelle."'
				AND `fep_parcelles`.`CT`='".$ct."'";
				
				//echo $sql;
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
				
			}
			
		function insert_parcelle($nomsecteur,$nombloc,$nomct,$numparcelle,$natureparcelle,$xlongitude,$xLatitude,$id_repertoire,$date_attribution)
			{
				$sql="INSERT INTO `fep_parcelles`(`nomsecteur`,`nombloc`,`ct`,`numparcelle`,`nature_parcelle`,`longitude`,`latitude`,
				`attributaire`,`date_attribution`,)VALUES ( '".$nomsecteur."','".$nombloc."','".$nomct."','".$numparcelle."','".$natureparcelle."','".$xlongitude."','".$xLatitude."','".$id_repertoire."','".$date_attribution."')";	
		
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			
			}
		
		function update_parcelle($id_parcelles,$nomsecteur,$nombloc,$nomct,$numparcelle,$natureparcelle,$xlongitude,$xLatitude,$id_repertoire,	$date_attribution)
			{
				
				$sql="UPDATE `fep_parcelles` SET `nomsecteur` = '".$nomsecteur."',`nombloc` = '".$nombloc."',`ct` = '".$nomct."',`numparcelle` = '".$numparcelle."',`nature_parcelle` = '".$natureparcelle."',`longitude` = '".$xlongitude."',`latitude` = '".$xLatitude."',`attributaire` = '".$id_repertoire."', `date_attribution` = '".$date_attribution."' WHERE `fep_parcelles`.`id_parcelles` = '".$id_parcelles."'";
				
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				
			}
			
		// INSTALLATION CULTURES
		
		function list_installe($saison,$campagne)
			{
				if($saison<>'Choisir une saison' && $campagne<>'Choisir une campagne')
				{
				
					$sql="SELECT DISTINCT `fep_ins_cult`.`id_ins_cult`,`fep_ins_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`, `fep_parcelles`.`attributaire`,`fep_ins_cult`.`id_parcelle`,`fep_ins_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_ins_cult`.`nomsecteur`,`fep_ins_cult`.`nombloc`,`fep_ins_cult`.`numparcelle`, `fep_ins_cult`.`PARCELLE_PRODUCTION`, `fep_ins_cult`.`MODE_SEMIS`,`fep_ins_cult`. `SUPERFICIE_DECLAREE`, `fep_ins_cult`.`SUPERFICIE_MESUREE`, `fep_ins_cult`.`TOPOSEQUENCE`, `fep_ins_cult`.`TRAVAILSOL`, `fep_ins_cult`.`PRATIQUECF`, `fep_ins_cult`.`SRP`, `fep_ins_cult`.`USER_RIPER`, `fep_ins_cult`.`DATE_COLLECTE` 
					FROM `fep_ins_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
					WHERE `fep_ins_cult`.`ID_SAISON`='".$saison."' AND `fep_ins_cult`.`ID_CAMPAGNE`='".$campagne."' 
					AND `fep_ins_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison` 
					AND `fep_ins_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
					AND `fep_parcelles`.`id_parcelles`=`fep_ins_cult`.`id_parcelle`";
					
					
				}
				if($saison<>'Choisir une saison'&&$campagne=='Choisir une campagne')
				{
									
					$sql="SELECT DISTINCT `fep_ins_cult`.`id_ins_cult`,`fep_ins_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`, `fep_parcelles`.`id_parcelles`,`fep_parcelles`.`attributaire`,`fep_parcelles`.`attributaire`,`fep_ins_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_ins_cult`.`nomsecteur`,`fep_ins_cult`.`nombloc`,`fep_ins_cult`.`numparcelle`,`fep_ins_cult`.`PARCELLE_PRODUCTION`, `fep_ins_cult`.`MODE_SEMIS`,`fep_ins_cult`. `SUPERFICIE_DECLAREE`, `fep_ins_cult`.`SUPERFICIE_MESUREE`, `fep_ins_cult`.`TOPOSEQUENCE`, `fep_ins_cult`.`TRAVAILSOL`, `fep_ins_cult`.`PRATIQUECF`, `fep_ins_cult`.`SRP`, `fep_ins_cult`.`USER_RIPER`, `fep_ins_cult`.`DATE_COLLECTE` 
					FROM `fep_ins_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
					WHERE `fep_ins_cult`.`ID_SAISON`='".$saison."' 
					AND `fep_ins_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE`
					AND `fep_ins_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison`
					AND `fep_parcelles`.`id_parcelles`=`fep_ins_cult`.`id_parcelle`";

				}
				if($saison=='Choisir une saison'&&$campagne<>'Choisir une campagne')
					{
					$sql="SELECT DISTINCT `fep_ins_cult`.`id_ins_cult`,`fep_ins_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`, `fep_parcelles`.`id_parcelles`,`fep_parcelles`.`attributaire`,`fep_parcelles`.`attributaire`,`fep_ins_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_ins_cult`.`nomsecteur`,`fep_ins_cult`.`nombloc`,`fep_ins_cult`.`numparcelle`,`fep_ins_cult`.`PARCELLE_PRODUCTION`, `fep_ins_cult`.`MODE_SEMIS`,`fep_ins_cult`. `SUPERFICIE_DECLAREE`, `fep_ins_cult`.`SUPERFICIE_MESUREE`, `fep_ins_cult`.`TOPOSEQUENCE`, `fep_ins_cult`.`TRAVAILSOL`, `fep_ins_cult`.`PRATIQUECF`, `fep_ins_cult`.`SRP`, `fep_ins_cult`.`USER_RIPER`, `fep_ins_cult`.`DATE_COLLECTE` 
					FROM `fep_ins_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
					WHERE `fep_ins_cult`.ID_CAMPAGNE='".$campagne."' 
					AND `fep_ins_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE`
					AND `fep_ins_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison`
					AND `fep_parcelles`.`id_parcelles`=`fep_ins_cult`.`id_parcelle`";
					
					}
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
			
		function insert_installation($id_campagne,$id_saison,$nomsecteur,$nombloc,$id_parcelle,$numparcelle,$parcelle_prod,$mode_semis,$superficiedeclaree,$superficiemesuree,$toposequence,$travailsol,$pratiquescf,$srp,$utilisationripper,$date_saisie)
			{
		
			$sql = sprintf("INSERT INTO`fep_ins_cult`(`ID_CAMPAGNE`,`ID_SAISON`,`nomsecteur`,`nombloc`,`id_parcelle`,`numparcelle`,`PARCELLE_PRODUCTION`,`MODE_SEMIS`,
				`SUPERFICIE_DECLAREE`,`SUPERFICIE_MESUREE`,`TOPOSEQUENCE`,`TRAVAILSOL`,`PRATIQUECF`,`SRP`,`USER_RIPER`,`DATE_COLLECTE`) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
		
				GetSQLValueString($id_campagne,"text"),
				GetSQLValueString($id_saison,"text"),
				GetSQLValueString($nomsecteur,"text"),
				GetSQLValueString($nombloc,"text"),
				GetSQLValueString($id_parcelle,"text"),
				GetSQLValueString($numparcelle,"text"),
				GetSQLValueString($parcelle_prod,"text"),
				GetSQLValueString($mode_semis,"text"),
				GetSQLValueString($superficiedeclaree,"text"),
				GetSQLValueString($superficiemesuree,"text"),
				GetSQLValueString($toposequence,"text"),
				GetSQLValueString($travailsol,"text"),
				GetSQLValueString($pratiquescf,"text"),
				GetSQLValueString($srp,"text"),
				GetSQLValueString($utilisationripper,"text"),
				GetSQLValueString($date_saisie,"text"));
			
		
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
			function select_installe($id_install)
			{
				$sql="SELECT DISTINCT `fep_ins_cult`.`id_ins_cult`,`fep_ins_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE` as camp, `fep_ins_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_ins_cult`.`nomsecteur`,`fep_ins_cult`.`nombloc`,`fep_ins_cult`.`numparcelle`, `fep_ins_cult`.`PARCELLE_PRODUCTION`, `fep_ins_cult`.`MODE_SEMIS`,`fep_ins_cult`. `SUPERFICIE_DECLAREE`, `SUPERFICIE_MESUREE`, `TOPOSEQUENCE`, `TRAVAILSOL`, `PRATIQUECF`, `SRP`, `USER_RIPER`, `DATE_COLLECTE` 
				FROM `fep_ins_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
				WHERE `fep_ins_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
				AND `fep_ins_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison` 
				AND `fep_ins_cult`.`id_ins_cult`='".$id_install."'";
				
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}	
			
			function update_installation($id_campagne,$id_saison,$nomsecteur,$nombloc,$numparcelle,$parcelle_prod,$mode_semis,$superficiedeclaree,$superficiemesuree,$toposequence,$travailsol,$pratiquescf,$srp,$utilisationripper,$date_saisie,$id)
				{
					$sql = "UPDATE `fep_ins_cult` SET `ID_CAMPAGNE`= '".$id_campagne."',`ID_SAISON`='".$id_saison."',`nomsecteur`='".$nomsecteur."',`nombloc` ='".$nombloc."',`numparcelle`= '".$numparcelle."',`PARCELLE_PRODUCTION`='".$parcelle_prod."',`MODE_SEMIS`='".$mode_semis."',`SUPERFICIE_DECLAREE`='".$superficiedeclaree."',`SUPERFICIE_MESUREE`='".$superficiemesuree."',`TOPOSEQUENCE`='".$toposequence."',`TRAVAILSOL`='".$travailsol."',`PRATIQUECF`='".$pratiquescf."',`SRP`='".$srp."',`USER_RIPER`='".$utilisationripper."',`DATE_COLLECTE`='".$date_saisie.
					"' WHERE `fep_ins_cult`.`id_ins_cult` =".$id;
				
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
				
				}
		// ENTRETIEN CULTURES
		function list_entretien($numparcelle,$campagne)
			{
				if($numparcelle<>'' && $campagne<>'Choisir une campagne')
				{
					$sql="SELECT DISTINCT `fep_entr_cult`.`id_entr_cult`, `fep_entr_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`,  `fep_entr_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_entr_cult`.`nomsecteur`,`fep_entr_cult`.`nombloc`,`fep_entr_cult`.`id_parcelle`,`fep_entr_cult`.`numparcelle`,  `fep_entr_cult`.`DATE_MISE_PLACE_PEPINIERE`,`fep_entr_cult`.`RENDEMENT_ESTIME`,`fep_entr_cult`. `PRODUCTION_ESTIMEE`,  `fep_entr_cult`.`DATE_SEMISREPIQ`,`fep_entr_cult`.`QUANTITES_SEMENCEUTILISEE`,`fep_entr_cult`.`VARIETES_RIZCULTURE`,`fep_entr_cult`.`NIVEAU_SEMENCEUTILISEE`, `fep_entr_cult`.`UTILISATEUR_SEMCERTAME`, `fep_entr_cult`.`UTILISATION_SEMOIRARIZ`,`fep_entr_cult`.`DATE_PREMSARCDESH` 
			        ,`fep_entr_cult`.`QUANTITENPKAPPL`,`fep_entr_cult`.`DATE_APPLICNPK`,`fep_entr_cult`.`UTILISATION_FUMURE_ORGANIQ`,
				    `fep_entr_cult`.`DATE_COLLECTE2`   
					FROM `fep_entr_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
					WHERE `fep_entr_cult`.`numparcelle`='".$numparcelle."' AND `fep_entr_cult`.ID_CAMPAGNE='".$campagne."'
					AND `fep_entr_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
					AND `fep_entr_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison`";
				}
				
				if($numparcelle<>''&&$campagne=='Choisir une campagne')
				{
					$sql="SELECT DISTINCT `fep_entr_cult`.`id_entr_cult`, `fep_entr_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`,  `fep_entr_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_entr_cult`.`nomsecteur`,`fep_entr_cult`.`nombloc`,`fep_entr_cult`.`id_parcelle`,`fep_entr_cult`.`numparcelle`,  `fep_entr_cult`.`DATE_MISE_PLACE_PEPINIERE`,`fep_entr_cult`.`RENDEMENT_ESTIME`,`fep_entr_cult`. `PRODUCTION_ESTIMEE`,  `fep_entr_cult`.`DATE_SEMISREPIQ`,`fep_entr_cult`.`QUANTITES_SEMENCEUTILISEE`,`fep_entr_cult`.`VARIETES_RIZCULTURE`,`fep_entr_cult`.`NIVEAU_SEMENCEUTILISEE`, `fep_entr_cult`.`UTILISATEUR_SEMCERTAME`, `fep_entr_cult`.`UTILISATION_SEMOIRARIZ`,`fep_entr_cult`.`DATE_PREMSARCDESH` 
			        ,`fep_entr_cult`.`QUANTITENPKAPPL`,`fep_entr_cult`.`DATE_APPLICNPK`,`fep_entr_cult`.`UTILISATION_FUMURE_ORGANIQ`,
				    `fep_entr_cult`.`DATE_COLLECTE2`   
					FROM `fep_entr_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
					WHERE `fep_entr_cult`.`numparcelle`='".$numparcelle."'
					AND `fep_entr_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
					AND `fep_entr_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison`";
				}
				
				if($numparcelle==''&&$campagne<>'Choisir une campagne')
					{
					$sql="SELECT DISTINCT `fep_entr_cult`.`id_entr_cult`, `fep_entr_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`,  `fep_entr_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_entr_cult`.`nomsecteur`,`fep_entr_cult`.`nombloc`,`fep_entr_cult`.`id_parcelle`,`fep_entr_cult`.`numparcelle`,  `fep_entr_cult`.`DATE_MISE_PLACE_PEPINIERE`,`fep_entr_cult`.`RENDEMENT_ESTIME`,`fep_entr_cult`. `PRODUCTION_ESTIMEE`,  `fep_entr_cult`.`DATE_SEMISREPIQ`,`fep_entr_cult`.`QUANTITES_SEMENCEUTILISEE`,`fep_entr_cult`.`VARIETES_RIZCULTURE`,`fep_entr_cult`.`NIVEAU_SEMENCEUTILISEE`, `fep_entr_cult`.`UTILISATEUR_SEMCERTAME`, `fep_entr_cult`.`UTILISATION_SEMOIRARIZ`,`fep_entr_cult`.`DATE_PREMSARCDESH` 
			        ,`fep_entr_cult`.`QUANTITENPKAPPL`,`fep_entr_cult`.`DATE_APPLICNPK`,`fep_entr_cult`.`UTILISATION_FUMURE_ORGANIQ`,
				    `fep_entr_cult`.`DATE_COLLECTE2`   
					FROM `fep_entr_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
					WHERE `fep_entr_cult`.ID_CAMPAGNE='".$campagne."'
					AND `fep_entr_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
					AND `fep_entr_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison`";
					}		
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
			}
			
		function insert_entretien($id_campagne,$id_saison,$nomsecteur,$nombloc,$id_parcelle,$numparcelle,$datepepiniere,$rendement_est,$production_est,$date_semisrepiq,$quantite_sem,$variete_riz,$niveau_sem,$utilisateur_sem,$ustilisation_sem,$date_sarclage,$quantitenpk,$date_applNPK,
		$utilisation_fumure,$date_saisie2)
			{
		
			$sql = sprintf("INSERT INTO `fep_entr_cult` (`ID_CAMPAGNE`,`ID_SAISON`,`nomsecteur`,`nombloc`,`id_parcelle`,`numparcelle`,`DATE_MISE_PLACE_PEPINIERE`,		`RENDEMENT_ESTIME`,`PRODUCTION_ESTIMEE`,`DATE_SEMISREPIQ`,`QUANTITES_SEMENCEUTILISEE`,`VARIETES_RIZCULTURE`,`NIVEAU_SEMENCEUTILISEE`,	`UTILISATEUR_SEMCERTAME`,`UTILISATION_SEMOIRARIZ`,`DATE_PREMSARCDESH`,`QUANTITENPKAPPL`,`DATE_APPLICNPK`,`UTILISATION_FUMURE_ORGANIQ`,	`DATE_COLLECTE2`) VALUES  (%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)",
		
				GetSQLValueString($id_campagne,"text"),
				GetSQLValueString($id_saison,"text"),
				GetSQLValueString($nomsecteur,"text"),
				GetSQLValueString($nombloc,"text"),
				GetSQLValueString($id_parcelle,"int"),
				GetSQLValueString($numparcelle,"text"),
				GetSQLValueString($datepepiniere,"text"),
				GetSQLValueString($rendement_est,"text"),
				GetSQLValueString($production_est,"text"),				
				GetSQLValueString($date_semisrepiq,"text"),
				GetSQLValueString($quantite_sem,"text"),
				GetSQLValueString($variete_riz,"text"),
				GetSQLValueString($niveau_sem,"text"),
				GetSQLValueString($utilisateur_sem,"text"),
				GetSQLValueString($ustilisation_sem,"text"),
				GetSQLValueString($date_sarclage,"text"),
				GetSQLValueString($quantitenpk,"text"),
				GetSQLValueString($date_applNPK,"text"),
				GetSQLValueString($utilisation_fumure,"text"),
				GetSQLValueString($date_saisie2,"text"));
			
			//echo $sql;
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}
			
			function select_entretien($id_install)
			{
				$sql="SELECT DISTINCT `fep_entr_cult`.`id_entr_cult`,`fep_entr_cult`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE` as camp, `fep_entr_cult`.`ID_SAISON`,`fep_saison`.`Saison`,`fep_entr_cult`.`nomsecteur`,`fep_entr_cult`.`nombloc`,`fep_entr_cult`.`id_parcelle`,`fep_entr_cult`.`numparcelle`, `fep_entr_cult`.`DATE_MISE_PLACE_PEPINIERE`, `fep_entr_cult`.`RENDEMENT_ESTIME`,`fep_entr_cult`. `PRODUCTION_ESTIMEE`,`fep_entr_cult`.`DATE_SEMISREPIQ`, `fep_entr_cult`.`QUANTITES_SEMENCEUTILISEE`,`fep_entr_cult`.`VARIETES_RIZCULTURE`,`fep_entr_cult`.`NIVEAU_SEMENCEUTILISEE`,`fep_entr_cult`.`UTILISATEUR_SEMCERTAME`,`fep_entr_cult`.`UTILISATION_SEMOIRARIZ`, `fep_entr_cult`.`DATE_PREMSARCDESH`, `fep_entr_cult`.`QUANTITENPKAPPL`, `fep_entr_cult`.`DATE_APPLICNPK`, `fep_entr_cult`.`UTILISATION_FUMURE_ORGANIQ`, `fep_entr_cult`.`DATE_COLLECTE2`
				FROM `fep_entr_cult`,`fep_campagne`,`fep_saison`,`fep_parcelles` 
				WHERE `fep_entr_cult`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
				AND `fep_entr_cult`.`ID_SAISON`=`fep_saison`.`Id_Saison` 
				AND `fep_entr_cult`.`id_entr_cult`='".$id_install."'";
				
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			}	
			
			function update_entretien($id_campagne,$id_saison,$nomsecteur,$nombloc,$id_parcelle,$numparcelle,$datepepiniere,$rendement_est,$production_est,$date_semisrepiq,$niveau_sem,$ustilisation_sem,$date_sarclage,$quantitenpk,$date_applNPK,$utilisation_fumure,$date_saisie2,$id)
				{
					$sql = "UPDATE `fep_ins_cult` SET `ID_CAMPAGNE`= '".$id_campagne."',`ID_SAISON`='".$id_saison."',`nomsecteur`='".$nomsecteur."',`nombloc` ='".$nombloc."',`id_parcelle`= '".$id_parcelle."',`numparcelle`= '".$numparcelle."',`DATE_MISE_PLACE_PEPINIERE`='".$datepepiniere."',`RENDEMENT_ESTIME`='".$rendement_est."',`PRODUCTION_ESTIMEE`='".$production_est."',`DATE_SEMISREPIQ`='".$date_semisrepiq."',`UTILISATEUR_SEMCERTAME`='".$niveau_sem."',`UTILISATION_SEMOIRARIZ`='".$ustilisation_sem."',`DATE_PREMSARCDESH`='".$date_sarclage."',`QUANTITENPKAPPL`='".$quantitenpk."',`DATE_APPLICNPK`='".$date_applNPK."',`UTILISATION_FUMURE_ORGANIQ`='".$utilisation_fumure."',`DATE_COLLECTE2`='".$date_saisie2.
					"' WHERE `fep_ins_cult`.`id_ins_cult` =".$id;
				
					
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
				
				}
		// OPERATIONS POST RECOLTES
			function insert_op_post($id_campagne,$id_saison,$numparcelle,$id_parcelle,$indice_cliamatique,$poids_carre,$rende_est,$production_est,
			$date_recolte,$recolte_moy,$production_reel,$taux_hum)
				{
				$sql="INSERT INTO `fep_post_recolt` ( `ID_CAMPAGNE`, `ID_SAISON`, `numparcelle`, `id_parcelle`, `INDICE_CLIMATIQUE`, `POIDS_CARRE_RENDEMENT`, `RENDEMENT_MOY_EST`, `PRODUCTION_EST`, `DATE_RECOLTE`, `RECOLTE_MOYENNE`, `PRODUCTION_REELLE`, `TAUX_HUMIDITE`) VALUES ( '".$id_campagne."', '".$id_saison."', '".$numparcelle."', '".$id_parcelle."', '".$indice_cliamatique."', '".$poids_carre."', '".$rende_est."', '".$production_est."', '".$date_recolte."', '".$recolte_moy."', '".$production_reel."', '".$taux_hum."')";	
			
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				}
		
			function list_op_recolte($saison,$campagne)
				{
				
				if($saison<>'Choisir une saison' && $campagne<>'Choisir une campagne')
				{	
				$sql="SELECT `fep_post_recolt`.`ID_CAMPAGNE`,`fep_post_recolt`.`ID_SAISON`,`fep_post_recolt`.`numparcelle`,
				`fep_post_recolt`.`id_parcelle`,`fep_post_recolt`.`INDICE_CLIMATIQUE`,
				`fep_post_recolt`.`POIDS_CARRE_RENDEMENT`,`fep_post_recolt`.`RENDEMENT_MOY_EST`,`fep_post_recolt`.`PRODUCTION_EST`,
				`fep_post_recolt`.`DATE_RECOLTE`,`fep_post_recolt`.`RECOLTE_MOYENNE`,
				`fep_post_recolt`.`PRODUCTION_REELLE`,`fep_post_recolt`.`TAUX_HUMIDITE`,`fep_campagne`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`,
				`fep_saison`.`Saison`,`fep_saison`.`Id_Saison`
				 FROM `fep_post_recolt`,`fep_campagne`,`fep_saison`
				 WHERE `fep_campagne`.`ID_CAMPAGNE` = '".$campagne."'
				 AND `fep_saison`.`ID_SAISON`='".$saison."'
				 AND `fep_post_recolt`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
				 AND `fep_post_recolt`.`ID_SAISON`=`fep_saison`.`Id_Saison`";
				}
				if($saison=='Choisir une saison' && $campagne<>'Choisir une campagne')
				{
				$sql="SELECT `fep_post_recolt`.`ID_CAMPAGNE`,`fep_post_recolt`.`ID_SAISON`,`fep_post_recolt`.`numparcelle`,
				`fep_post_recolt`.`id_parcelle`,`fep_post_recolt`.`INDICE_CLIMATIQUE`,
				`fep_post_recolt`.`POIDS_CARRE_RENDEMENT`,`fep_post_recolt`.`RENDEMENT_MOY_EST`,`fep_post_recolt`.`PRODUCTION_EST`,
				`fep_post_recolt`.`DATE_RECOLTE`,`fep_post_recolt`.`RECOLTE_MOYENNE`,
				`fep_post_recolt`.`PRODUCTION_REELLE`,`fep_post_recolt`.`TAUX_HUMIDITE`,`fep_campagne`.`ID_CAMPAGNE`,
				`fep_campagne`.`CAMPAGNE`,`fep_saison`.`Saison`,`fep_saison`.`Id_Saison`					
				 FROM `fep_post_recolt`,`fep_campagne`,`fep_saison`
				 WHERE `fep_campagne`.`ID_CAMPAGNE` = '".$campagne."'
				 AND `fep_post_recolt`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
				 AND `fep_post_recolt`.`ID_SAISON`=`fep_saison`.`Id_Saison`";
				}
				if($saison<>'Choisir une saison' && $campagne=='Choisir une campagne')
				{
				$sql="SELECT `fep_post_recolt`.`ID_CAMPAGNE`,`fep_post_recolt`.`ID_SAISON`,`fep_post_recolt`.`numparcelle`,
				`fep_post_recolt`.`id_parcelle`,`fep_post_recolt`.`INDICE_CLIMATIQUE`,				`fep_post_recolt`.`POIDS_CARRE_RENDEMENT`,`fep_post_recolt`.`RENDEMENT_MOY_EST`,`fep_post_recolt`.`PRODUCTION_EST`,
				`fep_post_recolt`.`DATE_RECOLTE`,`fep_post_recolt`.`RECOLTE_MOYENNE`,				`fep_post_recolt`.`PRODUCTION_REELLE`,`fep_post_recolt`.`TAUX_HUMIDITE`,`fep_campagne`.`ID_CAMPAGNE`,`fep_campagne`.`CAMPAGNE`,
				`fep_saison`.`Saison`,`fep_saison`.`Id_Saison`					
				 FROM `fep_post_recolt`,`fep_campagne`,`fep_saison`
				 WHERE `fep_saison`.`Saison`='".$saison."'
				 AND `fep_post_recolt`.`ID_CAMPAGNE`=`fep_campagne`.`ID_CAMPAGNE` 
				 AND `fep_post_recolt`.`ID_SAISON`=`fep_saison`.`Id_Saison`";
				}
				
				
				
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
				}
		
		// REGION
			function liste_reg()
			{
			$sql="SELECT * FROM `fep_region`";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			
			}	
		// DEPARTEMENT
			function liste_dep()
			{
				$sql="SELECT * FROM `fep_departement`";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
				
			}	
		// COMMUNE
		function liste_comm()
			{
				$sql="SELECT `ID_COMMUNE`,`COMMUNE`, `fep_departement`.`DEPARTEMENT` AS `DEPART` FROM `fep_commune`,`fep_departement` WHERE `fep_commune`.`ID_DEPARTEMENT`=`fep_departement`. `ID_DEPARTEMENT` ORDER BY `DEPARTEMENT` DESC";
				
					$conn=fep_connexion();
					$exe=mysqli_query($conn,$sql);
					return $exe;
				
			}
		// USERS
		Function liste_users()
		{
			$sql="SELECT * FROM `fep_user` ";
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			
		}
		// PARCELLES		
		function list_parcelles()
			{
					$sql="SELECT `id_parcelles`,`nomsecteur`,`nombloc`,`ct`,`numparcelle`,`nature_parcelle`,`longitude`,`latitude`,`attributaire`,`date_attribution` FROM `fep_parcelles` ORDER BY `nomsecteur` ASC";
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;
			
			}
			
		function insert_parcelles($nomsecteur,$nombloc,$nomct,$numparcelle,$natureparcelle,$xlongitude,$xLatitude,$id_repertoire,$date_attribution)
			{
				$sql=sprintf("INSERT INTO `fep_parcelles` (`nomsecteur`,`nombloc`,`ct`,`numparcelle`,`nature_parcelle`,`longitude`,`latitude`,`attributaire`,`date_attribution`) VALUES (%s,%s,%s,%s,%s,%s,%s,%s,%s)",
		
				GetSQLValueString($nomsecteur,"text"),
				GetSQLValueString($nombloc,"text"),
				GetSQLValueString($nomct,"text"),
				GetSQLValueString($numparcelle,"text"),
				GetSQLValueString($natureparcelle,"text"),
				GetSQLValueString($xlongitude,"text"),
				GetSQLValueString($xLatitude,"text"),
				GetSQLValueString($id_repertoire,"int"),
				GetSQLValueString($date_attribution,"date"));
			
				$conn=fep_connexion();
				$exe=mysqli_query($conn,$sql);
				return $exe;

			}
	function dateDiff($date1, $date2){
			$diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
			$retour = array();
		 
			$tmp = $diff;
			$retour['second'] = $tmp % 60;
		
			$tmp = floor( ($tmp - $retour['second']) /60 );
			$retour['minute'] = $tmp % 60;
		 
			$tmp = floor( ($tmp - $retour['minute'])/60 );
			$retour['hour'] = $tmp % 24;
		 
			$tmp = floor( ($tmp - $retour['hour'])  /24 );
			$retour['day'] = $tmp ;
			
		 
			return $retour;
}
		// DISPONIBILTE
	Function insert_dispo($id_union,$nom_magasin,$date_depot,$type_op,$nom_type_varietes,$nature,$quantite)
		{
			$sql="INSERT INTO `fep_dispo`(`ID_UNION`, `nom_magasin`, `date_depot`, `type_op`,`variete`,`nature`, `quantite`) VALUES ('".$id_union."','".$nom_magasin."','".$date_depot."','".$type_op."','".$nom_type_varietes."','".$nature."','".$quantite."')";
			
			
			$conn=fep_connexion();
			$exe=mysqli_query($conn,$sql);
			return $exe;
			
		}
	Function listedispo()
		{
		$sql="SELECT `fep_dispo`.`id_dispo`,`fep_dispo`.`ID_UNION`,`fep_union`.`nom_union`,`fep_dispo`.`nom_magasin`, `fep_dispo`.`date_depot`, `fep_dispo`.`type_op`,`fep_dispo`.`nature`, `fep_dispo`.`variete`,`fep_dispo`.`quantite`
		FROM `fep_dispo`,`fep_union` 
		WHERE `fep_union`.`ID_UNION`=`fep_dispo`.`ID_UNION` 
		ORDER BY `variete`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
		}
	Function select_dispo($id)
	{
		$sql="SELECT `fep_dispo`.`id_dispo`,`fep_dispo`.`ID_UNION`,`fep_union`.`nom_union`,`fep_dispo`.`nom_magasin`, `fep_dispo`.`date_depot`, `fep_dispo`.`type_op`,`fep_dispo`.`nature`, `fep_dispo`.`variete`,`fep_dispo`.`quantite`
		FROM `fep_dispo`,`fep_union` 
		WHERE `fep_dispo`.`id_dispo`='".$id."'
		AND `fep_union`.`ID_UNION`=`fep_dispo`.`ID_UNION` 
		ORDER BY `variete`";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	Function update_dispo($id_dispo,$id_union,$nom_magasin,$date_depot,$type_op,$variete,$nature,$quantite)
	{
		$sql="UPDATE `fep_dispo` SET =`ID_UNION`='".$id_union."',`nom_magasin`='".$nom_magasin."',`date_depot`='".$date_depot."',`type_op`='".$type_op."',`variete`='".$variete."',`nature`='".$nature."',`quantite`='".$quantite."'
		WHERE  id_dispo='".$id_dispo."'";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}	
	
	Function Calcul_type($nature,$variete,$type)
	{
		$sql="SELECT  `nature`,`variete`,`type_op`,SUM(`quantite`) As Total_depot 
		FROM `fep_dispo` 
		WHERE `nature`='".$nature."'
		AND `variete`='".$variete."'
		AND `type_op`='".$type."'";
	
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
?>	