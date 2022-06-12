> Check out <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP"> BLACKLISTED_IP</a>.


[![Build](https://img.shields.io/badge/VERSION-1.0.0-purple.svg?style=flat)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)


## LES NOUVEAUTÉS

Aucune nouveautés pour le moments...

## INSTALLATION & UTILISATION

### Requirements
  * PHP: >= v7.x
  * WebServer: Apache or Nginx
  * Database: MySQL
<br>

Vérifiez que votre site internet utilise le protocole `https://`.

CONFIGURATION
-------------

Votre page `index.php` et composer comme ci-dessous : 

index.php
```php
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TITRE DU SITE</title>
  </head>
  <body>

  </body>
</html>
```

Ensuite, créer un dossier `inc/plugins` puis créer le fichier PHP `plugin.blacklist_ip.php` dans le dossier `inc/plugins/` de votre code source.
Dans le dossier `inc`, créer le dossier `data` puis le fichier `db_connect.php` dont vous allez écrire le code ci-dessous : 

```php
<?php
// CONNEXION SQL :
$_DB_SERVER = 'localhost'; // Adresse du serveur MySQL
$_DB_NAME = 'data_table'; // Nom de la base de données
$_DB_USERNAME = 'root'; // Nom de l'utilisateur
$_DB_PASSWORD = ''; // Mot de passe de l'utilisateur
$_BDD_LOGIN = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);
?>
```
Dans le fichier `plugin.blacklist_ip.php`, écrivez ou copier/coller le code ci-dessous : 
```php
<?php
include_once('../data/db_connect.php');
// IP DU VISITEUR : 
$_VISITOR_IP = $_SERVER['REMOTE_ADDR'];
// CODE POUR LE BANNISSEMENT + REDIRECTION :
$_URL_REDIR = 'https://www.monsite.fr/';
$_PAGE_REDIR = 'blacklisted?ip-address=';
$_WEBSITE_URL_REDIR = $_URL_REDIR.''.$_PAGE_REDIR;
foreach($_BDD_LOGIN->query('SELECT * from ban WHERE ban_ip = "'.$_VISITOR_IP.'"') as $_RESULTS_BLOCKED) 
{
	if(!empty($_RESULTS_BLOCKED)) 
	{ 
		header('Location: '.$_WEBSITE_URL_REDIR.''.$_VISITOR_IP); // Redirection
		exit();
	}
}
?>
```
Sur la page `index.php`, ajouter la ligne suivante : 
```php
<?php
include_once('inc/plugins/plugin.blacklist_ip.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TITRE DU SITE</title>
  </head>
  <body>

  </body>
</html>

```
## LICENCE

La licence de BLACKLISTED_IP [MIT license](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/blob/main/LICENSE).
