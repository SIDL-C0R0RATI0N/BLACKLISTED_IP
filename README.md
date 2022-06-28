> Check out <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/releases"> Releases</a>.


[![Build](https://img.shields.io/badge/VERSION-2.1.0beta-purple.svg?style=flat)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)


## LES NOUVEAUTÉS

- .

## INSTALLATION & UTILISATION
  ### LES PREREQUIS :
  * PHP: >= v7.x
  * WebServer: Apache or Nginx
  * Database: MySQL
  <br>

  > Merci de vérifiez que vous utilisez le protocole `HTTPS` et non le protocole `HTTP`.

## CONFIGURATION

Configurez les fichiers suivant avant toutes utilisations sur votre site.

  > Chemin du fichier : `server/config.server.php` : 

  ```php
    $LANG_SITE = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $NAME_SITE = '{NOM_DU_SITE}'; // Indiquez le nom du site.
    $URL_SITE = '{URL_HTTPS}'; // Indiquez l'URL du site.
    $TEL_SUPPORT = '{TEL_SUPPORT}'; // Indiquez le numéro de téléphone.
    $IP_VISITOR = $_SERVER['REMOTE_ADDR'];
  ```

  > Chemin du fichier : `inc/data/db_connect.php` : 

  ```php
    $_DB_SERVER = 'localhost'; // ADRESSE DU SERVEUR MYSQL
    $_DB_NAME = 'data_table'; // NOM DE LA BDD
    $_DB_USERNAME = 'root'; // NOM DE L'UTILISATEUR
    $_DB_PASSWORD = ''; // MOT DE PASSE
    $LOGIN_BDD = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);
  ```

  > La page `index.php` & `blacklisted.php`n'à plus besoins de configuration manuel.

Dans le fichier `plugin.blacklist_ip.php` et coller le code ci-dessous : 

  > Chemin du fichier : `inc/plugin/plugin.blacklist_ip.php`

  ```php
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
  ```
  > AVERTISSEMENT ! Dans le fichier `server/config.server.php`, Veuillez modifiez `{URL_WEBSITE_HTTPS}`, `{NOM_DU_SITE}`, `{URL_HTTPS}` pour que le plugin fonctionne.

## LICENCE

La licence de BLACKLISTED_IP [MIT license](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/blob/main/LICENSE).
