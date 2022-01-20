<?php
session_start();
$param = $_POST["param"];

switch ($param) {
    case 'deconnection':
        $_SESSION["nom"] = "deconecter";
        break;

    case 'save_user':
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $login = $_POST["login"];
        $password = $_POST["password"];
        insert_table("hp","utilisateur",['nom' =>$nom,'prenom'=>$prenom,'login'=>$login,'password'=>$password]);
        break;    

    case 'save_patient':
        $nom_patient = $_POST["nom_patient"];
        $nom_indice = $_POST["nom_indice"];
        echo insert_table("hp","patient",['nom' =>$nom_patient,'indice'=>$nom_indice]);
        break; 


    case 'select_nom_patient':
        $reponse = select_table("hp","patient","","");
        echo json_encode($reponse);
        break;   

    case 'update_patient':
        $indice_indice = $_POST["indice_nom"];
        $id_patient = $_POST["id_patient"];
        update_table("hp","patient",['indice' =>$indice_indice],"id",$id_patient);
        break;  

    case 'update_nom':
        $nom_nom = $_POST["nom_nom"];
        $id_patient = $_POST["id_patient"];
        update_table("hp","patient",['nom' =>$nom_nom],"id",$id_patient);
        break;          
        

        
}


function insert_table($nom_bdd, $nom_table,$array_nom_colone = ["['nom_colone' => valeur_a_inser_dans_le_colonne]"])
{
    include("connect.php");
    $_valeur_a_inserter = "";
    $_colone_valeur = "";
    foreach ($array_nom_colone as $key => $value) {
        $_valeur_a_inserter .= ":" .$key .",";
        $_colone_valeur .=  $key .",";
    }

    $myrequete = "INSERT INTO $nom_bdd". "." . $nom_table. "(". substr($_colone_valeur,0, (strlen($_colone_valeur) -1)) .") VALUES (:". substr($_valeur_a_inserter,1, (strlen($_valeur_a_inserter) -2)) .")";
    $res = $con->prepare($myrequete);
    $res->execute($array_nom_colone);
    return $myrequete;
}


function select_table($nom_bdd, $nom_table,$colone_chercher = "colone where recherche exemple id",$valeur_chercher = "vide ou valeur  ---[vide afficher tous]---, "){
    include("connect.php");
    if($valeur_chercher != "" ){
        $sql = "SELECT * FROM $nom_bdd". "." . $nom_table ." WHERE $colone_chercher =:valeur_chercher ";
        $rs = $con->prepare($sql);
        $rs->execute([
            'valeur_chercher' => $valeur_chercher,
        ]);
    }else{
        $sql = "SELECT * FROM $nom_bdd". "." . $nom_table;
        $rs = $con->prepare($sql);
        $rs->execute();            
    }
    return $rs->fetchAll();
}


function update_table($nom_bdd, $nom_table,$array_nom_colone = ["exemple ['nom_colone' => valeur_a_inser_dans_le_colonne]"],$colone_chercher = "colone where recherche exemple id....",$valeur_chercher)
{
    include("connect.php");
    $_valeur_update = "";
    $_colone_valeur = "";
    foreach ($array_nom_colone as $key => $value) {
        $_valeur_update .= $key ."=:" .$key .",";
        $_colone_valeur .=  $key .",";
    }
    $myrequete = "UPDATE  $nom_bdd". "." . $nom_table. " SET ". substr($_valeur_update,0,(strlen($_valeur_update) -1)) ." WHERE ". $colone_chercher ."= ". $valeur_chercher;
    $res = $con->prepare($myrequete);
    $res->execute($array_nom_colone);
    return  $myrequete;
}