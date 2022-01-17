<?php
session_start();
include("connect.php");
$param = $_POST['paramettre'];

if($param == "acces_login_agent"){
  $log = $_POST['login'];
  $pass = $_POST['password'];

  $sql = "SELECT  * FROM  hp.utilisateur WHERE login=:log and password=:pwd";
	$res = $con->prepare($sql);

  $res->execute(
    array(
      'log' => $log,
      'pwd' => $pass
      )
  );

  $resultat = $res->fetchAll();
  echo count($resultat);

  if(count($resultat) > 0){
    $_SESSION["nom"] = $resultat[0]["nom"];
  }

}

