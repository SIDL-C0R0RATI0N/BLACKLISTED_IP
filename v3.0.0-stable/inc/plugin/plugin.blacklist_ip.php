<?php
/* ////////////////////////////////////////
///		SCRIPT PHP IP BLACKLISTED		///
///		BUILD V.3.0.0        		///	
///		DEVELOP BY SIDL CORPORATION		///
//////////////////////////////////////// */

/* /// CONNEXION A MYSQL /// */
include_once('../data/db_connect.php');
include_once('../../server/config.server.php');
/* /// SCRIPT DE VERIFICATION /// */
foreach($LOGIN_BDD->query('SELECT * from ban WHERE ban_ip = "'.$_ADDRES_IP_VISITOR.'"') as $_RESULTS_BLOCKED) 
{
	if(!empty($_RESULTS_BLOCKED)) 
	{ 
		header('Location: '.$_URL_WEBSITE.'/blacklisted?ip-address='.$_ADDRES_IP_VISITOR);
		exit();
	}
	else
	{
		header('Location: '.$_URL_WEBSITE);
		exit();
	}
}
?>