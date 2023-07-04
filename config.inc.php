<code><?php
$servername = '67.215.3.242';
	$username = 'remacons_fep';
	$password = '#h=_6[7-bWcG';
	$db='remacons_co';
try {
        $conn = new PDO("mysql:host=$servername;db=$db", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        die("OOPs la Connexion est perdue!");
    }
?></code>