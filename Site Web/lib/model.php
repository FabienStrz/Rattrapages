<?php

require_once "connexion.php";



function AddClient($name,$firstname,$email)
{
	$req = getBDD()->prepare("INSERT INTO client (name, firstname, email) VALUES (:name,:firstname,:email)");
  $req->execute(array(
		"name" => $name,
		"firstname" => $firstname,
		"email" => $email
		));
	$req->closeCursor();
}

function sanitize($data,$exclude = "")
{
  return htmlspecialchars(strip_tags(trim($data),$exclude) ,ENT_QUOTES,'UTF-8');
}


?>
