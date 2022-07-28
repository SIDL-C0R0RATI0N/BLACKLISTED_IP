> Check out <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/releases"> Releases</a>.

***
[![Build](https://img.shields.io/github/package-json/v/SIDL-C0R0RATI0N/BLACKLISTED_IP?style=social)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP)
[![Release](https://img.shields.io/github/v/release/SIDL-C0R0RATI0N/BLACKLISTED_IP?include_prereleases&sort=date&style=social)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/releases)
[![License](https://img.shields.io/github/license/SIDL-C0R0RATI0N/BLACKLISTED_IP?style=social)](LICENSE.md)
[![Stars](https://img.shields.io/github/stars/SIDL-C0R0RATI0N/BLACKLISTED_IP?style=social)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/stargazers)
[![Forks](https://img.shields.io/github/forks/SIDL-C0R0RATI0N/BLACKLISTED_IP?style=social)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/network/members)
<br/>
***
[![Followers](https://img.shields.io/github/followers/SIDL-C0R0RATI0N?style=social)](https://github.com/SIDL-C0R0RATI0N/)
[![Twitter](https://img.shields.io/twitter/follow/SIDLCORPORATION?style=social)](https://www.twitter.com/SIDLCORPORATION)
[![Facebook](https://img.shields.io/twitter/url?label=Follow%20us%20on%20Facebook&logo=facebook&style=social&url=https%3A%2F%2Fwww.facebook.com%2Fsidl.corporation.officiel)](https://www.facebook.com/sidl.corporation.officiel)
[![Snapchat](https://img.shields.io/twitter/url?label=Add%20us%20on%20Snapchat&logo=snapchat&logoColor=yellow&style=social&url=https%3A%2F%2Fwww.snapchat.com%2Fadd%2Fsidlcorp.fr)](https://www.snapchat.com/add/sidlcorp.fr)
[![YouTube](https://img.shields.io/youtube/channel/subscribers/UCRolHgaCdwHj_oaNXUWC-lg?style=social)](https://www.youtube.com/channel/UCRolHgaCdwHj_oaNXUWC-lg)
[![Instagram](https://img.shields.io/twitter/url?label=Add%20us%20on%20Snapchat&logo=instagram&style=social&url=https%3A%2F%2Fwww.instagram.com%2Fsidl_corporation%2F)](https://www.instagram.com/sidl_corporation/)
***



## LES NOUVEAUTÉS

- [ADD] Ajouts d'un système de detection d'utilisateurs.
- [ADD] Ajouts du plugin `plugin.useronline.php`.
- [UPDATE] Page `index`.

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

  <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/v3.0.0-stable/server/config.server.php">Voir le fichier</a>
  
  > Chemin du fichier : `inc/data/db_connect.php` : 

  <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/v3.0.0-stable/inc/data/db_connect.php">Voir le fichier</a>

  > Chemin du fichier : `inc/plugin/plugin.useronline.php` :

  <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/v3.0.0-stable/inc/plugin/plugin.useronline.php">Voir le fichier</a>

  > Chemin du fichier : `inc/plugin/plugin.blacklist_ip.php`

  <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/v3.0.0-stable/inc/plugin/plugin.blacklist_ip.php">Voir le fichier</a>

  > AVERTISSEMENT ! Dans le fichier `server/config.server.php`, Veuillez modifiez `{URL_WEBSITE_HTTPS}`, `{NOM_DU_SITE}`, `{URL_HTTPS}` pour que le plugin fonctionne.

### FICHIER DE CONFIGURATION

  > Chemin du fichier : `server/config.server.php` : 

  ```php
    $LANG_SITE = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $NAME_SITE = '{NOM_DU_SITE}';
    $URL_SITE = $_SERVER['HTTP_HOST'];
    $_URL_WEBSITE = '{URL_WEBSITE_HTTPS}';
    $TEL_SUPPORT = '{TEL_SUPPORT}';
    $IP_VISITOR = $_SERVER['REMOTE_ADDR'];
  ```

## LICENCE

La licence de BLACKLISTED_IP [MIT license](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP/blob/main/LICENSE).
