<?php 
require 'connexion.php';
session_start();
$val=nbre_unite('fep_repertoire');

$dateNaissance = "2018-02-25";
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  echo 'année '.$diff->format('%y');
  echo '<br />';
  echo 'Mois est '.$diff->format('%m');
  echo '<br />';
  echo 'Jour est '.$diff->format('%d');
if (isset( $_POST['envoie'])) {

    if (isset( $_POST['chef_menage']))
	{
		echo $_POST['value_1'].'<br />';
	}
	else{
		echo '0'.'<br />';
	}
	
	
    if (isset( $_POST['membre_menage'])) echo $_POST['membre_menage'].'<br />';
    if (isset( $_POST['menage_appui'])) echo $_POST['menage_appui'].'<br />';

    // Contenu de la global P_POST
    print_r($_POST);
     }

	 
?>

    <form action="" method="post">
    <input type="checkbox" name="chef_menage" value="1" <?php if ( isset( $_POST[
'chef_menage'])) echo  'checked="checked"'; ?>>Chef de ménage<br />
    <input type="checkbox" name="membre_menage" value="1" <?php if ( isset( $_POST[
'value_2'])) echo  'checked="checked"'; ?>>Membre ménage<br />
    <input type="checkbox" name="menage_appui" value="1" <?php if ( isset( $_POST[
'value_3'])) echo  'checked="checked"'; ?>>Ménage d'appui<br />
    <input type="submit" name="envoie" value="Envoyer">
    </form>




