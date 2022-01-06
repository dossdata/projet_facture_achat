<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=facture', 'root', 'root');
}
catch(exception $e) {
    die('Erreur '.$e->getmessage());
}
?>