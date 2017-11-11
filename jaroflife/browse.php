<?php

require __DIR__.'/Model/model.php';

$todos = readAllExistingTasks();


session_start ();

if (isset($_SESSION['login'], $_SESSION['pwd'])) {
	echo 'Vous êtes connecté. Votre nom d\'utilisateur est '.$_SESSION['login'].'.';
	echo '<br />';
	echo '<a href="./logout.php">Déconnection de la session</a>';
	echo '<br />';
} 
else {
	echo 'Merci de remplir les champs nom d\'utilisateur et mot de passe.';
}

require __DIR__.'/View/browseview.php';
