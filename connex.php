<?php
session_start();
?>
<html><head></head><meta charset="utf-8">
<?php
if(isset ($_POST['ok']))
{
	if(valide($_POST['login'])&& valide($_POST['mdp']) )  {
	
		
		
		$BD=new PDO('mysql:host=localhost;dbname=mtadb','root','');
		$req="SELECT * from admin where login=?";
		$operation=$BD->prepare($req);
		$operation->execute(array($_POST['login']));
		$donnee=$operation->fetch();

		
		if ($donnee['mdp'] ==(($_POST['mdp'])))
		{

			$_SESSION['nom']=$donnee['nom'];
			$_SESSION['idadmin']=$donnee['idadmin'];
			$_SESSION['login']=$donnee['login'];
			$_SESSION['prenom']=$donnee['prenom'];
			if (isset($_SESSION['requested_page']) && $_SESSION['requested_page'] != null) {
				$page = $_SESSION['requested_page'];
				$_SESSION['requested_page'] = null;
			  	header('Location: '.$page);
			  
			} else header('Location: index.html');
		}
		

			
		else
		{
			$_SESSION['error']=1;
			header('Location: connecter.php');
			}
		}
		else {
			$_SESSION['error']=2;
			header('Location: connecter.php');	
		}
	}
	
else
header('Location: connecter.php');

	
function valide($val)
{
	return (isset($val) && !empty($val));
}
	
?>
</html>
