<?php
include("configBD.php");

session_start();


function db_connect(){
    global $user, $password, $db, $host, $port;
    
    return $connection = new mysqli($host, $user, $password, $db, $port);
}

function login($name){
    $_SESSION['name'] = $name;
}

function verifie_Password($name, $mdp){
    $mysqli = db_connect();
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT *  FROM `users` WHERE `name` LIKE '".$name."'";
    
    $result = $mysqli->query($query); 
    if (!$result)
        printf("Error message: %s\n", $mysqli->error);

    $row = $result->fetch_assoc();

    $mysqli -> close();

    return $mdp == $row["password"];
}

function inscrip($name, $mdp){
    $mysqli = db_connect();
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "INSERT INTO `users` (`name`, `password`, `score`, `time`, `classment`) VALUES ('".$name."', '".$mdp."', NULL, NULL, NULL)";
    
    $result = $mysqli->query($query); 
    if (!$result)
        printf("Error message: %s\n", $mysqli->error);

    $mysqli -> close();
    
    return $result;
}

function put_film_in($num, $actor, $id, $title){

    $mysqli = db_connect();
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "INSERT INTO `films` (`num`, `actor`, `id`, `title`) VALUES ('".$num."', '".$actor."', '".$id."', '".$title."')";
    
    $result = $mysqli->query($query); 
    if (!$result)
        printf("Error message: %s\n", $mysqli->error);

    $mysqli -> close();
    
    return;
}

function inscrip_score($name, $score, $time){

    $mysqli = db_connect();
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "UPDATE `users` SET `score` = '".$score."', `time` = '".$time."' WHERE `name`='".$name."'";
    
    $result = $mysqli->query($query); 
    if (!$result)
        printf("Error message: %s\n", $mysqli->error);

    $mysqli -> close();
    
    return $result;
}

function classment(){

    $mysqli = db_connect();
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT * FROM `users` ORDER BY score DESC, time";

    $result = $mysqli->query($query); 
    if (!$result)
        printf("Error message: %s\n", $mysqli->error);

    $mysqli -> close();
    
    return $result;    
}

function getScore($name){

    $mysqli = db_connect();
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $query = "SELECT *  FROM `users` WHERE `name` LIKE '".$name."'";

    $result = $mysqli->query($query); 
    if (!$result)
        printf("Error message: %s\n", $mysqli->error);

    $mysqli -> close();
    
    return $result;    
}




?>





