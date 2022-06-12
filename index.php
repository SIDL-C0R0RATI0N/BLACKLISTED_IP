<?php
/* 
    // PLUGINS NAME : BLACKLISTED IP VISITOR
    // VERSION : 1.0
    // DEVELOP BY SIDL CORPORATION
*/
// CONNEXION SQL :
$_DB_SERVER = 'localhost'; // Adresse du serveur MySQL
$_DB_NAME = 'data_table'; // Nom de la base de données
$_DB_USERNAME = 'root'; // Nom de l'utilisateur
$_DB_PASSWORD = ''; // Mot de passe de l'utilisateur
$_BDD_LOGIN = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);
// IP VISITEUR :
$_VISITOR_IP = $_SERVER['REMOTE_ADDR'];
// URL + PAGE DE REDIRECTION :
$_URL_REDIR = 'https://www.monsite.fr/';
$_PAGE_REDIR = 'blacklisted?ip-address=';
$_WEBSITE_URL_REDIR = $_URL_REDIR.''.$_PAGE_REDIR;
// BLOCKAGE IP :
foreach($_BDD_LOGIN->query('SELECT * from ban WHERE ban_ip = "'.$_VISITOR_IP.'"') as $_RESULTS_BLOCKED) 
{
	if(!empty($_RESULTS_BLOCKED)) 
	{ 
		header('Location: '.$_WEBSITE_URL_REDIR.''.$_VISITOR_IP); // Redirection
		exit();
	}
}
?>
