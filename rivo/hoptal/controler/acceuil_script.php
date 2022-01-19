<?php
session_start();
$param = $_POST["param"];
if($param == "deconnection"){
    $_SESSION["nom"] = "deconecter";
}