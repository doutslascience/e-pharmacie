<?php
session_start();
?>
<html>
<?php 
if (isset($_POST['type-compte'])) {
	  $form_action=$_POST['type-compte'];
}
 ?>
<head>
<title>Liens</title>
<meta charset="utf-8">
</head>
<body>
<?php
$BD= new PDO("mysql:host=localhost;dbname=mtadb",'root','');
if(isset($_POST['ok']))
{
	if(validation($_POST['nom']) && validation($_POST['prenom']) && validation($_POST['ddn']) && validation($_POST['sexe']) &&validation($_POST['numtel']) &&validation($_POST['login']) && validation($_POST['mdp']) && validation($_POST['confirmer']))
		;
	{
		if($_POST['mdp']===$_POST['confirmer'])
		{		


			if(!is_inmy_db($BD,$_POST['login']) )
			{
						$req='INSERT INTO '$form_action'(nom,prenom,sexe,ddn,numtel,login,mdp) VALUES(?,?,?,?,?,?,?)';
						$requete=$BD->prepare($req);
						$requete->execute(array($_POST['login'],$_POST['nom'],$_POST['prenom'],$_POST['ddn'],$_POST['sexe'],$_POST['numtel'],($_POST['mdp'])));
						if($requete){
						?>
						<script>
							alert('Inscription réussie');
						</script>
						<?php
	   			 		echo '<meta http-equiv="refresh" content="0; url=connecter.php">';
						exit ();
        							}
        		
					
			}


		else{
		?>
		<script>alert('Les mots de passe entrés sont différents');</script>
		<?php
	echo '<meta http-equiv="refresh" content="0; url=inscription.php">';
	exit ();
			}
	
		}
	}
}


function is_inmy_db(PDO $base,$mail)
{
      
      $requet='SELECT idadmin FROM admin where pseudo=?';
      $r = $base->prepare($requet);
      $r->execute(array($login));
      $resultat=$r-> rowCount();
   
      if($resultat!=0)





      {
            return true;
      }
      return false;

}
 
 function validation($val)
{
	if(isset($val)&& !empty($val))
	{
		return true;

	}
	return false;
 
}
?>
</tr>
</table>
</body>
</html>
