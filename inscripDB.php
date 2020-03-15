<?php
include("vue.php");
include("modele.php");

session_start();

$name = $_POST['psd']; //pseudo 
$mdp = $_POST['mdp']; //mot de passe

if(inscrip($name, $mdp)){
	login($name);
	header('Location: index.php');
}

enTete('votre pseudo existe déjà');
affiche_erreur('votre pseudo a déjà exist');
affiche_info('Veuillez-essayer de nouveau <a href="inscrip.php">ici</a>.');
pied();
?>