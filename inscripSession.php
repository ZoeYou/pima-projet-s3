<?php
session_start();

$score = $_POST['score'];
$time = $_POST['time'];
$_SESSION['score'] = (string)$score;
$_SESSION['time'] = (string)$time;

?>