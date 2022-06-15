<?php
/* 
    // PLUGINS NAME : BLACKLISTED IP VISITOR
    // VERSION : 1.0
    // DEVELOP BY SIDL CORPORATION
*/
// INCLUDES : 
include_once('../data/db_connect.php');
// IP VISITEUR :
$_VISITOR_IP = $_SERVER['REMOTE_ADDR'];
// URL + PAGE DE REDIRECTION :
$_URL_REDIR = 'https://www.monsite.fr/'; // Changer l'URL
$_PAGE_REDIR = 'blacklisted?ip-address='; // Créer une page dédier au Blacklist
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