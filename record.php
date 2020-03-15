<?php
include("Vue.php");
include("Module.php");
$questionNumber=$_POST['questionNumber'];
$chosenAnswer=$_POST['Fruit'];
$answerValue=$_POST['questionAnswer'];

record($questionNumber, $chosenAnswer,$answerValue);

//if($questionNumber == 1)
    header('Location: result.php');

?>