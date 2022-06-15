> Check out <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP"> BLACKLISTED_IP</a>.


[![Build](https://img.shields.io/badge/VERSION-2.0.0-purple.svg?style=flat)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)


## LES NOUVEAUTÉS

- Modification des destination racine.
- Mise à jour du code.
- Ajouts d'un exemple de la page `index.php`.
- Mise à jour du code de la page `plugin.blacklist_ip.php`.
- Mise à jour du code de la page `blacklisted.php`.
- Ajout de la feuille de style pour la page `blacklisted.php`.

## INSTALLATION & UTILISATION
  ### LES PREREQUIS :
  * PHP: >= v7.x
  * WebServer: Apache or Nginx
  * Database: MySQL
  <br>

  > Merci de vérifiez que vous utilisez le protocole `HTTPS` et non le protocole `HTTP`.

## CONFIGURATION

Votre page `index.php` devras inclure le code PHP dans la balise `<?php ?>` : 

  > PAGE : `index.php`

  ```php
  session_start();
  $LANG_SITE = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  $NAME_SITE = '{NOM_DU_SITE}';
  $URL_SITE = '{URL_HTTPS}';
  include_once('inc/plugin/plugin.blacklist_ip.php');
  include_once('inc/data/db_connect.php');
  ```

Ensuite, créer le dossier `inc`, dans ceux dossier créer le dossier `plugins` puis `data`.
Dans le dossier `data`, créer le fichier PHP `db_connect.php` et coller le code ci-dessous :

  > FICHIER : `db_connect.php`

  ```php
    $_DB_SERVER = 'localhost'; // ADRESSE DU SERVEUR MYSQL
    $_DB_NAME = 'data_table'; // NOM DE LA BDD
    $_DB_USERNAME = 'root'; // NOM DE L'UTILISATEUR
    $_DB_PASSWORD = ''; // MOT DE PASSE
    $LOGIN_BDD = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);
  ```
Dans le fichier `plugin.blacklist_ip.php` et coller le code ci-dessous : 

  > FICHIER : `plugin.blacklist_ip.php`

  ```php
    /* /// CONNEXION A MYSQL /// */
    include_once('../data/db_connect.php');
    /* /// RECUPERATION DE L'IP DU VISITEUR /// */
    $_ADDRES_IP_VISITOR = $_SERVER['REMOTE_ADDR'];
    /* /// CONFIGURATION DE L'URL DU SITE /// */
    $_URL_WEBSITE = '{URL_WEBSITE_HTTPS}';
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
  > AVERTISSEMENT ! Veuillez modifiez `{URL_WEBSITE_HTTPS}`, `{NOM_DU_SITE}`, `{URL_HTTPS}` pour que le plugin fonctionne.

## LICENCE

La licence de BLACKLISTED_IP [MIT license](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/blob/main/LICENSE).
