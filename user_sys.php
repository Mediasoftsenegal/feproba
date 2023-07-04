<?php
	require 'connexion.php';
	
	function inserer_user($nom,$login,$pwd,$profil)
	{
		$sql="insert into fep_user values('','$nom','$login','$pwd','$profil')";
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	function supprimer_user($id)
	{
		$sql="delete from fep_user where id_user='$id'";
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;
	}
	
	function liste_user()
	{
		$sql="select * from fep_user";
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;		
	}
	
	function obtenir_user($id)
	{
		$sql="select * from fep_user where id_user='$id'";
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;		
	}
	
	function login_password($login,$pwd)
	{
		$sql="select * from fep_user where login='$login' and password='$pwd'";
		
		$conn=fep_connexion();
		$exe=mysqli_query($conn,$sql);
		return $exe;	
	}
	
?>