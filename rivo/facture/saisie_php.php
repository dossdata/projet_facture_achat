<?php
include("connect.php");
session_start();
$param = $_POST["paramettre"];

if($param == "insertion"){
    $nom = $_POST['lenom'];
    $ttc = $_POST['lettc'];


    $sql = "INSERT INTO ecriture_achat (matricule,nom, ttc) VALUES (:mat,:nom, :ttc)";
    $res = $con->prepare($sql);
    $res->execute(
    array(
    'nom' => $nom,
    'ttc' => $ttc,
    'mat' => $_SESSION["lematricule"],
    )
    );
}
