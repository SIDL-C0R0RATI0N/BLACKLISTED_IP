> Check out <a href="https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP"> BLACKLISTED_IP</a>.


[![Build](https://img.shields.io/badge/VERSION-1.0.0-purple.svg?style=flat)](https://github.com/SIDL-C0R0RATI0N/BLACKLISTED_IP)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)


## What is it

localGoogoo is a minimal search engine that saves you the stress of manually going through your offline websites looking for information.

With localGoogoo you just crawl/index these offline websites and just with a single search query you get the information you need.

## Installation

### Requirements
  * PHP: >= v7.x
  * WebServer: Apache or Nginx
  * Database: MySQL
<br>

Make sure the `localgoogoo` folder is placed somewhere under your local web document root. Your offline websites should also be under local web directory, localGoogoo wont be able to crawl them if they're not accessible via the `http://` protocol.

Configuration
-------------

Vous devez renommer `index.php` en `plugin.blacklist_ip.php` dans le dossier `plugins` de votre code source.

index.php

```php
// CONNEXION SQL :
$_DB_SERVER = 'localhost'; // Adresse du serveur MySQL
$_DB_NAME = 'data_table'; // Nom de la base de données
$_DB_USERNAME = 'root'; // Nom de l'utilisateur
$_DB_PASSWORD = ''; // Mot de passe de l'utilisateur
$_BDD_LOGIN = new PDO('mysql:host='.$_DB_SERVER.';dbname='.$_DB_NAME, $_DB_USERNAME, $_DB_PASSWORD);

```

Note: You can also setup your database information by running `./bin/localgoogoo config`

_You don't have to manually create the database, localGoogoo automatically does that._

After setup, visit (http://localhost/path/to/localgoogoo) you should see something like this:

![Index Page](./screenshots/index_page.png)

And that's it, you can go to the crawled websites page to crawl/index websites, make your life easier.

**If you're new to the Offline-websites thing, then you should check out [HTTrack](https://www.httrack.com/), a software that allows you to download a World Wide Web site from the Internet to a local directory, building recursively all directories, getting HTML, images, and other files from the server to your computer.**

## License

localGoogoo is licensed under the [MIT license](https://opensource.org/licenses/MIT).
