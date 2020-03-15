<?php
include("vue.php");
include("modele.php");

session_start();

enTete("Classment");

vue_classment(classment());

pied();


?>