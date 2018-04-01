<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>toolbox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<form method="POST">
		<div class="form">
			<div class="name">
				<label for="login">Nom d'utilisateur</label>
				<input type="text" id="login" placeholder="Votre nom d'utilisateur"><br>
				<label for="name">Nom </label>
				<input type="text" id="name" placeholder="Votre nom"><br>
				<label for="email">Adresse mail</label>
				<input type="text" id="email" placeholder="Votre mail"><br>
				<label for="pass">Mot de passe</label>
				<input type="text" id="pass" placeholder="Votre mot de passe">
			</div>
			<button type="submit" value="send">Envoyer</button>
		</div>
	</form>	
	<?php
		$login = "";//nom d'utilisateur
		$name = ""; //nom
		$pass = "";//mot de passe
		$mail = "";//mail
		$json = json_decode(file_get_contents("json/tools.json"),true);
		$jsonLen = count($json);
		echo 'La longueur du tableau est '.$jsonLen;
		echo '<pre>'.print_r($json,true).'</pre>';

		for($i = 0; $i<=$jsonLen;$i++){
			if (($json[$i]["authorization"]) == false) { 
			echo '<br>title : '. $json[$i]["title"];
			echo '<br>authorization : ';
			}	
		}

		function connect(){
			global $login, $name, $pass, $mail;
		}

//https://openclassrooms.com/forum/sujet/comparer-une-variable-avec-une-base-de-donnees-72895
	?>
</body>
</html>

