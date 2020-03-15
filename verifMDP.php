<?php
include("vue.php");
include("modele.php");
session_start();

$name = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe

if(verifie_Password($name, $mdp)){
	login($name);

	if(!isset($_SESSION['time'])){
		header('Location: index.php');
	}

	else
	{
		inscrip_score($_SESSION['name'], $_SESSION['score'], $_SESSION['time']);
		header('Location: afficherScore.php');
	}

}

enTete('Vérification du mot de passe');
affiche_erreur("Le mot de passe entré est eronné.");
affiche_info('Veuillez-essayer de nouveau <a href="login.php">ici</a>.');
pied();
	//echo "1";
	//echo $_SESSION['score'];
	//echo $_SESSION['time'];
?>
