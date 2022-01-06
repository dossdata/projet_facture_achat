<?php
try {
    $server = "localhost";
    $base = "facture";
    $password = "Lougaroup1root4321";
    $root = "root";
    $port = 3306;

    $con = new PDO('mysql:host='.$server.';port='.$port.';charset=utf8;dbname='.$base.'', $root, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(exception $e) {
    die('Erreur '.$e->getmessage());
}
?>
