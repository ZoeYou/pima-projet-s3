<?php
include("modele.php");

session_start();

if(empty($_SESSION) || !isset($_SESSION['name']) || $_SESSION['name'] == ""){
	header('Location: login.php');
}
else{
	inscrip_score($_SESSION['name'], $_SESSION['score'], $_SESSION['time']);
	header('Location: afficherScore.php');
}

/*echo "a";
echo $score;
echo "b";
echo $time;
echo "c";*/

?>