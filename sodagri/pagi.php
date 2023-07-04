<?php
	//require'connexion_sa.php';
	
	if (isset($_GET['num']) && !empty($_GET['num']) && ctype_digit($_GET['num']==1)){
	
		$parpage=$_GET['num'];
	}
	else
	{
		$parpage= 50;
	}
	// total enregistrements
	$res=compteur($_SESSION['table']);
	$row=mysqli_fetch_array($res);
	$nbr=$row['TOTAL'];
	
	$nbpage=ceil($nbr/$parpage);
	if(isset($_GET['num']) && !empty($_GET['num']) && ctype_digit($_GET['num'])==1)
	{
		if($_GET['num']>$nbpage)
		{
			$current=$nbpage;
		}
		else
		{
			$current=$_GET['num'];
		}
	}
	else
	{
		$current=1;
	}
	$premier=($current-1)*$parpage;
	$resultat=liste_benef($premier,$parpage);
	
?>