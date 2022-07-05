<?php
include_once('server/config.server.php');
session_destroy();
?>
<!DOCTYPE html>
<html lang="<?= $LANG_SITE;?>">
    <head>
        <meta charset="UTF-8">
        <title>BLACKLISTED IP <?= $IP_VISITOR; ?></title>
        <meta name="generator" content="SIDL CORPORATION">
        <meta name="author" content="SIDL CORPORATION">
        <meta name="copyright" content="SIDL CORPORATION"/>
        <meta name="Publisher" content="SIDL CORPORATION"/>
        <meta name="Identifier-Url" content="<?= $URL_SITE;?>">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=10" />
        <meta name="Content-Language" content="<?= $LANG_SITE;?>">
        <meta name="Distribution" content="global">
        <meta itemprop="name" content="BLACKLISTED IP <?= $IP_VISITOR; ?>">
        <!--=== END - META ===-->
        <!--=== LINK ===-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/blacklisted.css">
        <link rel="canonical" href="<?= $URL_SITE;?>"/>
        <!--=== END - LINK ===-->
    </head>
    <body>
        <?php 
            if((substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)) == "fr")
            {
                echo 
                '
                <div class="container">
                    <div class="box">
                        <h1><b>IP EN LISTE NOIR</b></h1>
                        <h2>Votre adresse IP : '.$IP_VISITOR.'</h2>
                        <hr/>
                        <p>
                            Suite à une configuration du "<b>&nbsp;'.$NAME_SITE.'</b> " dont le lien (&nbsp;<i><a href="'.$URL_SITE.'" target="_parent">'.$URL_SITE.'</a></i>&nbsp;)&nbsp; site, vous avez essayé d\'accéder à un site non autorisé dans votre pays, ville ou région. Ceux site et uniquement disponible en France et d\'autres pays non mise en liste noire.<br/><br/>
                            Si vous êtes en France, vous êtes probablement sur la liste noire des adresses IP vulnérables pour lesquelles un administrateur a détecté plusieurs connexions à notre site.
                            <br/><br/>Vous pouvez signaler l\'erreur par téléphone au <a href="tel:'.$TEL_SUPPORT.'" target="_blank">'.$TEL_SUPPORT.'</a>.
                        </p>
                    </div>
                </div>
                <div class="copyright">
                    &COPY; <script>document.write(new Date().getFullYear())</script> '.$NAME_SITE.' | TOUS LES DROITS SONT RÉSERVÉS.
                </div>
                ';
            } 
            elseif((substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)) == "en")
            {
                echo 
                '
                <div class="container">
                    <div class="box">
                        <h1><b>BLACKLISTED IP</b></h1>
                        <h2>Your ip address : '.$IP_VISITOR.'</h2>
                        <hr/>
                        <p>
                            Following a configuration of the "<b>&nbsp;'.$NAME_SITE.'</b> " whose link (&nbsp;<i><a href="'.$URL_SITE.'" target="_parent">'.$URL_SITE.'</a></i>&nbsp;)&nbsp; site, you have tried to access an unauthorized site in your country, city or region. Those site and only available in France and other countries not blacklisted.<br/><br/>
                            If you are in France, you are probably on the blacklist of vulnerable IP addresses for which an administrator has detected several connections to our site.
                            <br/><br/>You can report the error by phone at <a href="tel:'.$TEL_SUPPORT.'" target="_blank">'.$TEL_SUPPORT.'</a>.
                        </p>
                    </div>
                </div>
                <div class="copyright">
                    &COPY; <script>document.write(new Date().getFullYear())</script> '.$NAME_SITE.' | ALL RIGHTS RESERVED.
                </div>
                ';
            }
        ?>
    </body>
</html>