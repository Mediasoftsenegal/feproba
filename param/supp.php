<?php
require'../connexion.php';
session_start();
?>                          
<?php
    // EXPLOITANTS
    $id_rep=$_GET['asx'];
    $res=suppr_membre($id_rep);
    if($res)
    {
        header('location:menu_pr.php?page=tab_rep');
     }
 ?>