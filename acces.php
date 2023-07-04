<?php
require 'user_sys.php';

if (isset($_POST['btconnexion']))
	{	
		$login=$_POST['login'];
		$pwd=$_POST['pwd']; 
		
    	$resultat=mysqli_num_rows(login_password($login,$pwd));
		if($resultat!=0)
			{
			session_start();
			$row=mysqli_fetch_row(login_password($login,$pwd));             
			$_SESSION['login']=$row[2];
			$_SESSION['nom']=$row[1];                         
			$_SESSION['logged']=true;
			$_SESSION['profil']=$row[4];
			$_SESSION['codeuser']=$row[0];
			$profiler=$_SESSION['profil'];
			
				Switch($profiler)
					{
					Case "Administrateur" :
						echo 'Connexion en cours ....';				
						header ("Refresh: 1;URL=tabbord.php");
						break;
						
					Case "Relais" :
						echo 'Connexion en cours ....';
						header ("Refresh: 1;URL=menu_mob.php");	
						break;
				
					Case "Partenaire" :
						echo 'Connexion en cours ....'; 
						header ("Refresh: 1;URL=sodagri/menu_so.php?page=soda");
						break;
					
					Case "Animateur" :
						echo 'Connexion en cours ....'; 
						header ("Refresh: 1;URL=menu_mob.php");
						break;
				
					default: 
						echo 'redirection 4'; 
						echo "<h1>Votre login ou mot de passe n'est pas valide !</h1>"; 
						header ("Refresh: 3;URL=login.php");
					
					}
				}
				else
				{
				echo "Utilisateur non défini dans la plateforme !"; 
				header ("Refresh: 1;URL=login.php");
				}
	}

?>