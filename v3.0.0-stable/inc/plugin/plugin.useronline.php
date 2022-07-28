<?php
$IPINFO_TOKEN = "00000000000000"; // Token du script => Obtenir sur http://ipinfo.io/
$TIME_SESSION = 60; // Temps de la session = 60 Seconde(s)
$USER_AGENT = $_SERVER['HTTP_USER_AGENT']; // Agent utilisateur
$CURRENT_TIME = date('U'); // Temps actuel 
// LOCALISATION
$IP_VISITOR_WEB = $_SERVER['REMOTE_ADDR'];
$_SCRIPT_JSON = json_decode(file_get_contents('http://ipinfo.io/'.$IP_VISITOR_WEB.'/json?token='.$IPINFO_TOKEN)); 
$_LOC_VISITOR = $_SCRIPT_JSON->country;

$USER_HOST_NETWORK = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$USER_IP = $_SERVER['REMOTE_ADDR']; // Ip utilisateur 
$REQ_IP_EXIST = $bdd->prepare('SELECT * FROM online WHERE user_ip = ?');
$REQ_IP_EXIST->execute(array($USER_IP));
$IP_EXISTE = $REQ_IP_EXIST->rowCount();
if($IP_EXISTE == 0)
{
   $add_01 = $bdd->prepare('INSERT INTO online(user_ip,user_host,user_c,time,user_agent) VALUES(?,?,?,?,?)');
   $add_01->execute(array($USER_IP,$USER_HOST_NETWORK,$_LOC_VISITOR,$CURRENT_TIME,$USER_AGENT));
   $add_02 = $bdd->prepare('INSERT INTO history(user_ip,user_host,user_c,time,user_agent) VALUES(?,?,?,?,?)');
   $add_02->execute(array($USER_IP,$USER_HOST_NETWORK,$_LOC_VISITOR,$CURRENT_TIME,$USER_AGENT));
}
else 
{
   $update_01 = $bdd->prepare('UPDATE online SET time = ? WHERE user_ip = ?');
   $update_01->execute(array($CURRENT_TIME,$USER_IP));
   $update_02 = $bdd->prepare('UPDATE history SET time = ? WHERE user_ip = ?');
   $update_02->execute(array($CURRENT_TIME,$USER_IP));
}
$session_delete_time = $CURRENT_TIME - $TIME_SESSION;
$del_ip = $bdd->prepare('DELETE FROM online WHERE time < ?');
$del_ip->execute(array($session_delete_time));
$show_user_nbr = $bdd->query('SELECT * FROM online');
$user_nbr = $show_user_nbr->rowCount();
?>