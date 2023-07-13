<?php
require 'user_sys.php';

if (isset($_POST['btconnexion']))
	{	
		$login=$_POST['login'];
		$pwd=$_POST['pwd']; 
		
    	$resultat=mysqli_num_rows(login_password($login,$pwd));
		if($resultat!=0)
			{
			
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
						
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tabbord.php">';
					//	header ("Refresh:1;url=tabbord.php");
					//	echo 'Connexion en cours ....';	
						break;
						
					Case "Relais" :

						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=menu_mob.php">';
						// header ("Refresh:1;url=menu_mob.php");	
						// echo 'Connexion en cours ....';
						break;
				
					Case "Partenaire" :
						
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=sodagri/menu_so.php?page=soda">';
						// header ("Refresh:1;url=sodagri/menu_so.php?page=soda");
						// echo 'Connexion en cours ....'; 
						break;
					
					Case "Animateur" :
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=menu_mob.php">';
						// header ("Refresh:1;url=menu_mob.php");
						// echo 'Connexion en cours ....'; 
						break;
				
					default: 
						
						echo "<h1>Votre login ou mot de passe n'est pas valide !</h1>"; 
						echo 'redirection 4'; 
						// header ("Refresh: 3;url=login.php");
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
					
					}
				}
				else
				{

				echo "Utilisateur non défini sur la plateforme !"; 
				// header ("Refresh: 1;url=login.php");
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
				}
	}

?>