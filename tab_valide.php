<?php
require'connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="Feproba" content="Producteur de riz, Horticulture, Anambé, Bassin, Agriculture, Riz, Union, Fédération des Producteurs du Bassin de l'Anambé, FEPROBA">

    <title>FEPROBA - Fédération des Producteurs du Bassin de l'Anambé</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- ***************************************************************************************************************************************************
      MAIN CONTENT
      *****************************************************************************************************************************************************-->
<?php 
		$result0=inval_inscult();
		$nbr=mysqli_num_rows($result0);
		$result=prenomnom();
	
		echo"<section id='main-content'>
         <section class='wrapper'>
      		<div class='showback'>
      			<h4><i class='fa fa-angle-right'></i> Données non validées  : Installations cultures</h4>
				<span class='badge'>".$nbr."</span>
				<span class='badge bg-inverse'> Enregistrement(s) </span>
      		</div><!-- /showback -->
			<section>La validation se fait sur clic dans la colonne etat ensuite sur le bouton 	'Valider' 
                <table class='table table-bordered table-striped table-condensed'>
                <thead>
                <tr>
                <th>Campagne</th>
				<th>Saison</th>
                <th>Secteur</th>
                <th>Nom bloc</th>
                <th>N°Pcelle</th>
				<th>Attrib.</th>
				<th>Parcelle production</th>
				<th>Mode sémis</th>
				<th>Superficie déclarée</th>
				<th>Superficie mesurée</th>
				<th>Topo séquence</th>
				<th>Travail sol</th>
				<th>Pratiques CF</th>
				<th>SRP</th>
				<th>User ripper</th>
				<th>Date collecte</th>
				<th>Etat</th>
				<th>Action</th>
				</thead>
                    <tbody>";
					 while ($row=mysqli_fetch_array($result0))
						{
						$cpt++;
						// identification parcelle
						$ter=identite_parcelle($row['id_parcelle']);
						$rew=mysqli_fetch_array($ter);		
						// Identité attributaire
						 $ret= identification($rew['attributaire']);
						 $rang=mysqli_fetch_array($ret);
						echo "<tr>
                            <td>".$row['CAMPAGNE']."</td>
							<td>".$row['Saison']."</td>
                            <td>".$row['nomsecteur']."</td>
                            <td>".$row['nombloc']."</td>
                            <td>".$row['numparcelle']."</td>
							<td>".$rang['attributaire']."</td>
							<td>".$row['PARCELLE_PRODUCTION']."</td>
							<td>".$row['MODE_SEMIS']."</td>
							<td>".$row['SUPERFICIE_DECLAREE']."</td>
							<td>".$row['SUPERFICIE_MESUREE']."</td>
							<td>".$row['TOPOSEQUENCE']."</td>
							<td>".$row['TRAVAILSOL']."</td>
							<td>".$row['PRATIQUECF']."</td>
							<td>".$row['SRP']."</td>
							<td>".$row['USER_RIPER']."</td>
							<td>".$row['DATE_COLLECTE']."</td>";
						Switch ($row['etat'])
						{
						case 0:
						echo "<td align='center'><input type='checkbox'/></td>;
							<td align='center'>
								<form method='POST' action='insert_fep.php' class='form-signin' >
									<input  name='validebae' type='hidden' value='validebae' />
									<input  name='num_ins' type='hidden' value='".$row['id_ins_cult']."'>
									<button class='btn btn-danger btn-sm' type='submit' >Valider</button>
								</form>
							</td>
						</tr>";
						break;
						}
						}
					 echo "</tbody>";
	echo "</table>";
				 ?>
			 </section>
		</section>
	</section><!-- /MAIN CONTENT -->	
      <!--main content end-->
</section>
 <section id="container" >
      <!-- ***************************************************************************************************************************************************
      MAIN CONTENT
      *****************************************************************************************************************************************************-->
<?php 
		$result1=inval_entret();
		$nbr=mysqli_num_rows($result1);
		$result=prenomnom();
	
		echo"<section id='main-content'>
         <section class='wrapper'>
      		<div class='showback'>
      			<h4><i class='fa fa-angle-right'></i> Données non validées  : Entretien des cultures</h4>
				<span class='badge'>".$nbr."</span>
				<span class='badge bg-inverse'> Enregistrement(s) </span>
      		</div><!-- /showback -->
			<section>La validation se fait sur clic dans la colonne etat ensuite sur le bouton 	'Valider' 
                <table class='table table-bordered table-striped table-condensed'>
                <thead>
                <tr>
                <th align='center'> Campagne</th>
                <th align='center'> Saison </th>
				<th align='center'> Secteur </th>
				<th align='center'> Nom bloc </th>
                <th align='center'> N°Parcelle</th>
				<th align='center'> Attributaire</th>
                <th align='center'> Date de mise en place pépinière</th>
				<th align='center'> Rendement estimé</th>
				<th align='center'> Production estimée</th>
				<th align='center'> Date de semis ou Repiquage</th>
				<th align='center'> Quantité semences utilisée (Kg)</th>
				<th align='center'> Variété de riz cultivée... )</th>
				<th align='center'> Niveau de semences utilisées...</th>
				<th align='center'> Utilisation de semences certifiées ou améliorées</th>
				<th align='center'> Utilisation semoir ...</th>
				<th align='center'> Date de sarclage</th>
				<th align='center'> Quantité NPK appliquée (Kg)</th>
				<th align='center'> Date d'application NPK </th>
				<th align='center'> Utilisation fumure organique</th>
				<th align='center'> Date de saisie entretien</th>
				<th>Etat</th>
				<th>Action</th>
				</thead>
                    <tbody>";
					 while ($row=mysqli_fetch_array($result1))
						{
						$cpt++;
						// identification parcelle
						$ter=identite_parcelle($row['id_parcelle']);
						$rew=mysqli_fetch_array($ter);		
						// Identité attributaire
						 $ret= identification($rew['attributaire']);
						 $rang=mysqli_fetch_array($ret);
						 $pare=explode('-',$row['DATE_MISE_PLACE_PEPINIERE']);
						 $par1=explode('-',$row['DATE_SEMISREPIQ']);
						 $par2=explode('-',$row['DATE_PREMSARCDESH']);
						 $par3=explode('-',$row['DATE_APPLICNPK']);
						 $par=explode('-',$row['DATE_COLLECTE2']);
						echo "<tr>
                            <td>".$row['CAMPAGNE']."</td>
							<td>".$row['Saison']."</td>
                            <td>".$row['nomsecteur']."</td>
                            <td>".$row['nombloc']."</td>
                            <td>".$row['numparcelle']."</td>
							<td>".$rang['prenom_nom']."</td>
							<td>".$pare[2].'-'.$pare[1].'-'.$pare[0]."</td>
							<td>".$row['RENDEMENT_ESTIME']."</td>
							<td>".$row['PRODUCTION_ESTIMEE']."</td>
							<td>".$par1[2].'-'.$par1[1].'-'.$par1[0]."</td>
							<td>".$row['QUANTITES_SEMENCEUTILISEE']."</td>
							<td>".$row['VARIETES_RIZCULTURE']."</td>
							<td>".$row['NIVEAU_SEMENCEUTILISEE']."</td>
							<td>".$row['UTILISATEUR_SEMCERTAME']."</td>
							<td>".$row['UTILISATION_SEMOIRARIZ']."</td>
							<td>".$par2[2].'-'.$par2[1].'-'.$par2[0]."</td>
							<td>".$row['QUANTITENPKAPPL']."</td>
							<td>".$par3[2].'-'.$par3[1].'-'.$par3[0]."</td> 
							<td>".$row['UTILISATION_FUMURE_ORGANIQ']."</td>
							<td>".$par[2].'-'.$par[1].'-'.$par[0]."</td>";
						Switch ($row['etat'])
						{
						case 0:
						echo "<td align='center'><input type='checkbox'/></td>;
							<td align='center'>
								<form method='POST' action='insert_fep.php' class='form-signin' >
									<input  name='valide_ec' type='hidden' value='valide_ec' />
									<input  name='num_ec' type='hidden' value='".$row['id_entr_cult']."'>
									<button class='btn btn-danger btn-sm' type='submit' >Valider</button>
								</form>
							</td>
						</tr>";
						break;
						}
						}
					 echo "</tbody>";
	echo "</table>";
				 ?>
			 </section>
		</section>
	</section><!-- /MAIN CONTENT -->	
      <!--main content end-->
</section>
 <section id="container" >
      <!-- ***************************************************************************************************************************************************
      MAIN CONTENT
      *****************************************************************************************************************************************************-->
<?php 
		$result2=inval_post_r();
		$nbr=mysqli_num_rows($result2);
		$result=prenomnom();
	
		echo"<section id='main-content'>
         <section class='wrapper'>
      		<div class='showback'>
      			<h4><i class='fa fa-angle-right'></i> Données non validées  : Opérations post récoltes</h4>
				<span class='badge'>".$nbr."</span>
				<span class='badge bg-inverse'> Enregistrement(s) </span>
      		</div><!-- /showback -->
			<section>La validation se fait sur clic dans la colonne etat ensuite sur le bouton 	'Valider' 
                <table class='table table-bordered table-striped table-condensed'>
                <thead>
                <tr>
                <th align='center'> Campagne</th>
                <th align='center'> Saison </th>
				<th align='center'> Secteur </th>
				<th align='center'> Nom bloc </th>
                <th align='center'> N°Parcelle</th>
                <th align='center'> Attributaire</th>
				<th align='center'> Indice climatique</th>
				<th align='center'> Poids carré rendement</th>
				<th align='center'> Rendement moyenne estimé</th>
				<th align='center'> Production estimée</th>
				<th align='center'> Date de récolte</th>
				<th align='center'> Récolte moyenne</th>
				<th align='center'> Production réelle</th>
				<th align='center'> Taux d'humité</th>
				<th>Etat</th>
				<th>Action</th>
				</thead>
                    <tbody>";
					 while ($row=mysqli_fetch_array($result2))
						{
						$cpt++;
						// identification parcelle
						$ter=identite_parcelle($row['id_parcelle']);
						$rew=mysqli_fetch_array($ter);		
						// Identité attributaire
						 $ret= identification($rew['attributaire']);
						 $rang=mysqli_fetch_array($ret);
						echo "<tr>
                            <td>".$row['CAMPAGNE']."</td>
							<td>".$row['Saison']."</td>
                            <td>".$row['nomsecteur']."</td>
                            <td>".$row['nombloc']."</td>
                            <td>".$row['numparcelle']."</td>
							<td>".$rang['prenom_nom']."</td>
							<td>".$row['INDICE_CLIMATIQUE']."</td>
							<td>".$row['POIDS_CARRE_RENDEMENT']."</td>
							<td>".$row['RENDEMENT_MOY_EST']."</td>
							<td>".$row['PRODUCTION_EST']."</td>";
						 $par=explode('-',$row['DATE_RECOLTE']); 
						echo"<td>".$par[2]."-".$par[1]."-".$par[0]."</td>
							<td>".$row['RECOLTE_MOYENNE']."</td>
							<td>".$row['PRODUCTION_REELLE']."</td>
							<td>".$row['TAUX_HUMIDITE']."</td>";
						Switch ($row['etat'])
						{
						case 0:
						echo "<td align='center'><input type='checkbox'/></td>;
							<td align='center'>
								<form method='POST' action='insert_fep.php' class='form-signin' >
									<input  name='validepr' type='hidden' value='validepr' />
									<input  name='num_pr' type='hidden' value='".$row['id_post_recol']."'>
									<button class='btn btn-danger btn-sm' type='submit' >Valider</button>
								</form>
							</td>
						</tr>";
						break;
						}
						}
					 echo "</tbody>";
	echo "</table>";
				 ?>
			 </section>
		</section>
	</section><!-- /MAIN CONTENT -->	
      <!--main content end-->
</section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
	<script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>  
  <script>
      //custom select box

      $(function(){
          $("select.styled").customSelect();
      });
  </script>
  </body>
</html>