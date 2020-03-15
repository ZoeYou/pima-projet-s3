<?php
include("vue.php");
include("modele.php");

session_start();

enTete("Your score");
$result = getScore($_SESSION['name']);
$row = $result->fetch_assoc();
vue_score($row["name"], $row["score"], $row["time"]);
//vue_score($_SESSION['name'], $_SESSION['score'], $_SESSION['time']);
pied();


?>