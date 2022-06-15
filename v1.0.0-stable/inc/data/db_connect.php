<?php
/* 
    // PLUGINS NAME : DB CONNECT MYSQL
    // VERSION : 1.0
    // DEVELOP BY SIDL CORPORATION
*/
// CONNEXION SQL :
$_DB_SERVER = 'localhost'; // Adresse du serveur MySQL
$_DB_NAME = 'data_table'; // Nom de la base de données
$_DB_USERNAME = 'root'; // Nom de l'utilisateur
$_DB_PASSWORD = ''; // Mot de passe de l'utilisateur
$_BDD_LOGIN = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);
?>