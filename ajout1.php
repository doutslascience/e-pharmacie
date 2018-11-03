<?php
session_start();
include_once("connection.php");

if ( isset($_REQUEST['nom']) && isset($_REQUEST['choix']) && $_REQUEST['nom'] != ''  && $_REQUEST['choix'] != '' ) 
	 { 
    
    $nom = ($_REQUEST['nom']);
	$choix = ($_REQUEST['choix']);


        $sql = $connect->prepare('INSERT INTO vote(nom,choix) VALUES(?,?)');
        $sql->execute(array($nom, $choix));
		
	     header('location:index.php');
	 }
else { 
header ('location: index.php');
exit;
}
	?>	 
