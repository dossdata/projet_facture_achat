<?php
try {
    $server = "localhost";
    $base = "facture";
    $password = "Lougaroup1root4321";
    $root = "root";
    $port = 3306;

    $dsn = "mysql:host=". $server .";dbname=". $base.";charset=utf8";
    $con = new PDO($dsn, $root, $password);
    $con->setAttribute(PDO::ATTR_PERSISTENT, PDO::ERRMODE_EXCEPTION);
}
catch(exception $e) {
    die('Erreur '.$e->getmessage());
}
?>
