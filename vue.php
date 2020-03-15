<?php  
/*function test(){
	echo $_SESSION['name'];
	if(empty($_SESSION))
		echo "1";
	echo "2";
}*/
session_start();
function enTete($titre)
{

	echo '<!DOCTYPE html>
	<html lang="en">
	<title>'.$titre.'</title>
	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <style>
	        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
	        .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
	        .fa-anchor,.fa-coffee {font-size:200px}
	        li{list-style: none;}
	        .w3-bar .active{color:#000;background-color:#fff;}
	        header{background-image:url(\'image/head.jpeg\');background-repeat: no-repeat;background-size: 100% 100%;}
	        .ms {font-style: bold;color: white;}
	    </style>
	   
    </head>
	
	
	<body>

	<!-- Navbar -->
	<div class="w3-top">
	<ul class="w3-bar w3-black w3-card w3-left-align w3-large">
	    <li><a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a></li>
	    <li><a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a></li>
	    <li><a href="classment.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Classment</a></li>';
	if(empty($_SESSION) && !isset($_SESSION['name']) || $_SESSION['name'] == "")
		echo'
	    <li><a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a></li>
	    <li><a href="inscrip.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Inscription</a></li> ';
	else
		echo' 
	    <li><a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a></li>
	    <li><a href="afficherScore.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">My score</a></li>
	    <li class="w3-bar-item  w3-hide-small w3-padding-large" style="margin-left: 43rem;font-family: Georgia;font-size: 19px;">Welcome dear '.$_SESSION['name'].' : )</li>';
	echo'
	</ul> 
	</div>
	
	<script type="text/javascript" src="./js/jquery.min.js" ></script>
	<script type="text/javascript">
	    
	    function navHighlight(elem, home, active) {
            var url = location.href.split(\'/\'), loc = url[url.length -1], link = document.querySelectorAll(elem);
            for (var i = 0; i < link.length; i++) {
                var path = link[i].href.split(\'/\'), page = path[path.length -1];
                if (page === loc || page === home && loc === \'\') {
                    link[i].parentNode.className += \' \' + active;
                    document.body.className += \' \' + page.substr(0, page.lastIndexOf(\'.\'));
                }
            }
        }   
    navHighlight(\'.w3-bar a\', \'index.php\', \'active\'); /* menu link selector, home page, highlight class */
    </script>
	
	<!-- Header -->
	<header class="w3-container w3-center" style="padding:128px 16px">
	<h1 class="w3-margin w3-jumbo ms">MOVIE STAR</h1>
	<p class="w3-xlarge" style="color: white;">Bon courage</p>
	<button class="w3-button w3-black w3-padding-large w3-large w3-margin-top" onclick="window.location.href = \'quizz.html\'">Get Started</button>
	</header>
	<div style="height: 1rem; margin-top: 30px;">   </div>
	';
}


function pied() {
	echo '
	<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
	<h1 class="w3-margin w3-xlarge" style="font-family: cursive;"><i>"Les gens s\'interessent à l\'art parce que c\'est la seule trace de notre passage sur terre."</i> --- «Intouchable»</h1>
	</div>
	<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
	<div class="w3-xlarge w3-padding-32">
	<i class="fa fa-facebook-official w3-hover-opacity"></i>
	<i class="fa fa-instagram w3-hover-opacity"></i>
	<i class="fa fa-snapchat w3-hover-opacity"></i>
	<i class="fa fa-pinterest-p w3-hover-opacity"></i>
	<i class="fa fa-twitter w3-hover-opacity"></i>
	<i class="fa fa-linkedin w3-hover-opacity"></i>
	</div>
	<p> <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">CONTACT US</a></p>
	</footer>

	<script>
	function myFunction() {
		var x = document.getElementById("navDemo");
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
			} else { 
				x.className = x.className.replace(" w3-show", "");
			}
		}
		</script>

		</body>
		</html>
		';
	}

	function vue_connexion(){
		echo '

		<form style="margin:auto;width:60%" action="verifMDP.php" method="post">
    		
    		<label><b>Entrez votre pseudo :</b></label>
			<input type="text" placeholder="Enter Pseudo" name="psd" size="8"/>

			<label><b>Entrez votre mot de passe :</b></label>
			<input type="password" placeholder="Enter Password" name="mdp" size="8"/>
    		<br><br>
    		<button type="submit" class="w3-button w3-block w3-dark-grey">Valider</button>
    
			</form>
			<br><br><br>
			<style type="text/css">
				.signin {background-color: #f1f1f1;text-align: center;}
				form a {color: dodgerblue;}
				hr {border: 1px solid #f1f1f1;margin-bottom: 25px;}
				.container {padding: 13px;background-color: #f1f1f1;}
				input[type=text], input[type=password] {width: 100%;padding: 12px;margin: 5px 0 7px 0;display: inline-block;border: none;background: #f1f1f1;}
				input[type=text]:focus, input[type=password]:focus {background-color: #ddd;outline: none;}
			</style>
		';
	}

	function vue_inscription(){
		echo '

		<form style="margin:auto;width:60%" action="verifMDP.php" method="post">
		
		    <p>Veuillez remplir ce formulaire pour créer un compte.</p>
    		<hr>

			<label><b>Entrez votre pseudo :</b></label>
			<input type="text" placeholder="Enter Pseudo" name="psd" size="8" required>

			<label><b>Entrez votre mot de passe :</b></label>
			<input type="password" placeholder="Enter Password" name="mdp" size="8" required>

			<label for="psw-repeat"><b>Répétez votre mot de passe :</b></label>
			<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

			<hr>
			<p>En créant un compte, vous acceptez nos conditions de <a href="#">Terms & Privacy</a>.</p>
    		<button type="submit" class="w3-button w3-block w3-dark-grey">Valider</button><br>
    
			<div class="container signin">
			<p>Vous avez déjà un compte?  <a href="login.php">Se connecter</a>.</p>
			</div>
			
			</form>
			<br><br><br><br>
			
			<style type="text/css">
				.signin {background-color: #f1f1f1;text-align: center;}
				form a {color: dodgerblue;}
				hr {border: 1px solid #f1f1f1;margin-bottom: 25px;}
				.container {padding: 13px;background-color: #f1f1f1;}
				input[type=text], input[type=password] {width: 100%;padding: 12px;margin: 5px 0 7px 0;display: inline-block;border: none;background: #f1f1f1;}
				input[type=text]:focus, input[type=password]:focus {background-color: #ddd;outline: none;}
			</style>
		';
	}

	function affiche_info($str) {
		echo '<p>'.$str.'</p>';
	}

	function affiche_erreur($str) {
		echo '<p class="erreur">'.$str.'</p>';
	}

	function vue_result($score, $classement){
		echo '
		<p id = "result_score">Votre score est : '.$score.' </p></br>
		<p id = "result_classement">Votre classement est : '.$classement.'</p>'.PHP_EOL;

	}

/*
 * $question_array doit être un tableau associatif (key/value) avec:
 *  - key = question
 *  - value = réponse correcte
 */
function vue_recapitulatif($question_array)
{
	echo '<table id="recapitulatif">
	<caption> Récapitulatif des réponses </caption>
	<tr>
	<th>Question</th>
	<th>Réponse correcte</th>
	</tr>';
	foreach($question_array as $question => $reponse)
	{
		echo '<tr>
		<td>'.$question.'</td>
		<td>'.$reponse.'</td>
		</tr>';
	}
	echo '</table>';
}

function vue_erro(){
	echo '<p id = "result_error">Erreur dans la page, merci de bien vouloir contacter un administrateur pour reporter le problème.</p>'.PHP_EOL;
}

function vue_score($name, $score, $time){
	echo '
	<style type="text/css">
		body {text-align: center;} 
		table {margin: auto;}
		table.hovertable {
			width:100%;
			font-family: verdana,arial,sans-serif;
			font-size:15px;
			color:#333333;
			border-width: 1px;
			border-color: #999999;
			border-collapse: collapse;
			margin-bottom: 1rem;
		}
		table.hovertable th {
			background-color:#e9eef1;
			border-width: 1px;
			padding: 8px;
			border-style: solid;
			border-color: #d4dde3;
		}
		table.hovertable tr {
			background-color:#f5f6f8;
		}
		table.hovertable td {
			border-width: 1px;
			padding: 8px;
			border-style: solid;
			border-color: #a9c6c9;
		}
		.myButton {
			box-shadow:inset 0px 1px 0px 0px #ffffff;
			background-color:#ededed;
			border-radius:6px;
			border:1px solid #dcdcdc;
			display:inline-block;
			cursor:pointer;
			color:#595659;
			font-family:Courier New;
			font-size:17px;
			font-weight:bold;
			padding:6px 48px;
			text-decoration:none;
			text-shadow:0px 1px 0px #ffffff;
		}
		.myButton:hover {
			background-color:#dfdfdf;
		}
		.myButton:active {	
			position:relative;
			top:1px;
		}
	</style>
	<table class="hovertable">
	<tr>
	<th>name</th><th>score</th><th>time</th>
	</tr>
	
	<tr onmouseover="this.style.backgroundColor=\'#d4e3e5\';" onmouseout="this.style.backgroundColor=\'#f5f6f8\';">
	<td>'.$name.'</td><td>'.$score.'</td><td>'.$time.'</td>
	</tr>
	</table>
	<button class="myButton" style="margin-bottom: 1.2rem;" onclick="window.location.href = \'index.php\'">Return</button>';

}

function vue_classment($result){
	echo '
	<style type="text/css">
		body {text-align: center;} 
		table {margin: auto;}
		table.hovertable {
			width:100%;
			font-family: verdana,arial,sans-serif;
			font-size:15px;
			color:#333333;
			border-width: 1px;
			border-color: #999999;
			border-collapse: collapse;
			margin-bottom: 1rem;
		}
		table.hovertable th {
			background-color:#e9eef1;
			border-width: 1px;
			padding: 8px;
			border-style: solid;
			border-color: #d4dde3;
		}
		table.hovertable tr {
			background-color:#f5f6f8;
		}
		table.hovertable td {
			border-width: 1px;
			padding: 8px;
			border-style: solid;
			border-color: #a9c6c9;
		}
		.myButton {
			box-shadow:inset 0px 1px 0px 0px #ffffff;
			background-color:#ededed;
			border-radius:6px;
			border:1px solid #dcdcdc;
			display:inline-block;
			cursor:pointer;
			color:#595659;
			font-family:Courier New;
			font-size:17px;
			font-weight:bold;
			padding:6px 48px;
			text-decoration:none;
			text-shadow:0px 1px 0px #ffffff;
		}
		.myButton:hover {
			background-color:#dfdfdf;
		}
		.myButton:active {	
			position:relative;
			top:1px;
		}
	</style>
	
	<table class="hovertable">
	<tr>
	<th>name</th><th>score</th><th>time</th>
	</tr>
	';

	while ($row = $result->fetch_assoc()){
		vue_classment_line($row["name"], $row["score"], $row["time"]);
	}

	echo'
	</table>
	<button class="myButton" style="margin-bottom: 1.4rem;" onclick="window.location.href = \'index.php\'">Return</button>';
}


function vue_classment_line($name, $score, $time){
	echo '
	<tr onmouseover="this.style.backgroundColor=\'#d4e3e5\';" onmouseout="this.style.backgroundColor=\'#f5f6f8\';">
	<td>'.$name.'</td><td>'.$score.'</td><td>'.$time.'</td>
	</tr>';
}




?>
