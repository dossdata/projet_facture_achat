<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=suivi_factu', 'root', 'root');
}
catch(exception $e) {
    die('Erreur '.$e->getmessage());
}
?>            