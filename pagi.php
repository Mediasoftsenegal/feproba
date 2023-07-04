<?php
	require_once('connexion.php');
	
	if (isset($_GET['table_rep&&']) && !empty($_GET['table_rep&&']) && ctype_digit($_GET['table_rep&&']==1)){
	
		$parpage=$_GET['table_rep&&'];
	}
	else
	{
		$parpage= 200;
	}
	// total enregistrements
	$res=compteur();
	$row=mysqli_fetch_array($res);
	$nbr=$row['TOTAL'];
	
	$nbpage=ceil($nbr/$parpage);
	if(isset($_GET['table_rep']) && !empty($_GET['table_rep']) && ctype_digit($_GET['table_rep'])==1)
	{
		if($_GET['table_rep']>$nbpage)
		{
			$current=$nbpage;
		}
		else
		{
			$current=$_GET['table_rep'];
		}
	}
	else
	{
		$current=1;
	}
	$premier=($current-1)*$parpage;
	$resultat=listerep2($premier,$parpage);

	
?>