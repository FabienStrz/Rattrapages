<?php


$host ="localhost"; //hÃ´te, Ã  changer quand vous hÃ©bergerez le site
$dbName ="hoyde"; //Nom de la base de donnÃ©es (moi pour moi c'est pokemon)
$user ="root"; //utilisateur (de base root)
$password ="root";

try {
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
	$bdd = new PDO('mysql:host='.$host.';dbname='.$dbName,$user,$password,$pdo_options);
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}


function getBDD()
{
	global $bdd;
	return $bdd;
}

 ?>
