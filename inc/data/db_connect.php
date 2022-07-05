<?php
$_DB_SERVER = 'localhost'; // ADRESSE DU SERVEUR MYSQL
$_DB_NAME = 'data_table'; // NOM DE LA BDD
$_DB_USERNAME = 'root'; // NOM DE L'UTILISATEUR
$_DB_PASSWORD = ''; // MOT DE PASSE
$LOGIN_BDD = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);
?>