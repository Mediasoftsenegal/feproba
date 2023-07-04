<?php
require'connexion.php';
session_start();

extract ($_POST); 
 if (isset($_POST['lirerecord'])){
	 
	 $data = '<table class="table table-striped table-advance table-hover">
		<tr>
			<thead>
                <tr>
					<th><i class="fa fa-bullhorn"></i> Numéro </th>
                    <th><i class="fa fa-bullhorn"></i> Prénoms & Nom</th>
					<th><i class="fa fa-edit"></i> Date de naissance </th>
					<th><i class="fa fa-edit"></i> Age</th>
                    <th><i class="fa fa-edit"></i> Genre </th>
                    <th><i class="fa fa-edit"></i> Region </th>
					<th><i class="fa fa-edit"></i> Commune </th>
					<th><i class="fa fa-edit"></i> Village </th>
					<th><i class="fa fa-edit"></i> N°Tél </th>
					<th><i class="fa fa-edit"></i> N°CIN </th>
					<th><i class="fa fa-edit"></i> Statut producteur </th>
					<th><i class="fa fa-edit"></i> Organisation de base </th>
					<th><i class="fa fa-edit"></i> Statut Organisation </th>
					<th><i class="fa fa-edit"></i> Année implication </th>
					<th><i class="fa fa-edit"></i> Droit d\'adhésion </th>
					<th><i class="fa fa-edit"></i> Sources de financement </th>
					<th><i class="fa fa-edit"></i> Chef de ménage </th>
					<th><i class="fa fa-edit"></i> Membre ménage </th>
					<th><i class="fa fa-edit"></i> Ménage d\'appui </th>
					<th><i class="fa fa-edit"></i> Animateur </th>
					<th><i class="fa fa-edit"></i> Observations </th>
                    <th></th>
					<th></th>
                </tr>
            </thead>
		</tr>';
		
			$result=listereps();
			$number=1;
			while ($row=mysqli_fetch_array($result))
			{
				$age=calcul_age($row['date_naissance']);	
				
				$data.=' 
				   <tr>		  
					  <td>'.$number.'</td>
                      <td>'.$row['prenom_nom'].'</td>
					  <td>'.$row['date_naissance'].'</td>
					  <td>'.$age.' ans</td>
                      <td>'.$row['genre'].'</td>
					  <td>'.$row['region'].'</td>
					  <td>'.$row['commune'].'</td>
					  <td>'.$row['village'].'</td>
					  <td>'.$row['numtel'].'</td>
					  <td>'.$row['numcin'].'</td>
					  <td>'.$row['statut_producteur'].'</td>
                      <td>'.$row['organi_base'].'</td>
					  <td>'.$row['statut_organi'].'</td>
					  <td>'.$row['annee_implic'].'</td>
					  <td>'.$row['droit_adhesion'].' </td>
					  <td>'.$row['source_financement'].'</td>
					  <td>'.$row['chef_menage'].'</td>
					  <td>'.$row['membre_menage'].'</td>
					  <td>'.$row['menage_appui'].'</td>	  
					  <td>'.$row['animateur'].'</td>
					  <td>'.$row['observations'].'</td>
                      <td>
							<button onclick="GetUserDetails('.$row['id_repertoire'].')"class="btn btn-warning">Editer</button>
					  </td>
					  <td>
							<button onclick="Deleteuser('.$row['id_repertoire'].')"class="btn btn-danger">Supprimer</button>
					  </td>
                  </tr>';
				  $number++;
			}
 $data.= '</table>';
 echo $data;
 }
 // Insertion

if (isset($_POST['prenom_nom']) && isset($_POST['date_naissance']) && isset($_POST['genre']) && isset($_POST['region']))
	
	{
		
		$resultat=insert_membre($prenom_nom,$date_naissance,$genre,$region,$departement,$commune,$village,$numtel,$numcin,$statut_producteur,$organi_base,$statut_organi,$annee_implic,$droit_adhesion,$source_financement,$chef_menage,$membre_menage,$menage_appui,$animateur,$observations);
		
		if($resultat)
		{
			header('location:tab_reps.php');
		}
	
	}
// Suppression

 if(isset($_POST['supprimerid'])){
	 
	 $userid=$_POST['supprimerid'];
	 $res=suppr_membre($userid);
	 
 }
 // Affichage Membre 
 if (isset($_POST['id_repertoire']) && isset($_POST['id_repertoire']) !="")
	{
		 $id_membre=$_POST['id_repertoire'];
		 $resr=editreps($id_membre);
		 
		 $reponse=array();
	 
		if (mysqli_num_rows($resr) > 0)
		 {
			while($rowe=mysqli_fetch_assoc($resr)){
			 
			 $reponse= $rowe;
			}
			
		 }
		 else
		 {
			 $reponse['status']=200;
			 $reponse['message']="Données non valides !";
		 }
	 echo json_encode($reponse);
	}
 else
	{
		$reponse['status']=200;
		$reponse['message']=" La requête est invalide !";
		 
	}
	 
 
 // Update
 if(isset($_POST['hiddenid_repertoire'])){
	 
	 $hiddenid_repertoireup=$_POST['hiddenid_repertoire'];
	 $prenom_nomup=$_POST['prenom_nom'];
	 $date_naissanceup=$_POST['date_naissance'];
	 $genreup=$_POST['genre'];
	 $regionup=$_POST['region'];
	 $departementup=$_POST['departement'];
	 $communeup=$_POST['commune'];
	 $villageup=$_POST['village'];
	 $numtelup=$_POST['numtel'];
	 $numcinup=$_POST['numcin'];
	 $statut_producteurup=$_POST['statut_producteur'];
	 $organi_baseup=$_POST['organi_base'];
	 $statut_organiup=$_POST['statut_organi'];
	 $annee_implicup=$_POST['annee_implic'];
	 $droit_adhesionup=$_POST['droit_adhesion'];
	 $chef_menageup=$_POST['chef_menage'];
	 $membre_menageup=$_POST['membre_menage'];
	 $menage_appuiup=$_POST['menage_appui'];
	 $animateurup=$_POST['animateur'];
	 $observationsup=$_POST['observations'];
	 
	 $resr=update_membre($hiddenid_repertoireup,$prenom_nomup,$date_naissanceup,$genreup,$regionup,$departementup,$communeup,$villageup,$numtelup,$numcinup,$statut_producteurup,$organi_baseup,$statut_organiup,$annee_implicup,$droit_adhesionup,$source_financementup,$chef_menageup,$membre_menageup,$menage_appuiup,$animateurup,$observationsup);
	 
	 
	 
 }
 

?>