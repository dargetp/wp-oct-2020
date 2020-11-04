<!-- dans le fichier index.php qui est dans starter -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon nouveau site wordpress</title>
    <!--
        dans la balise head 
        => ajouter un lien vers twitter bootstrap
        => google  bootstrap =>
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>
<body>
    <!--  introduire 2 fonctions importants que l'on va avoir dans toutes les pages => ajouter la barre des raccourcis sur votre thème 
    si vous réactualiser le front office =>  -->
    <?php wp_head() ?>
    <div class="container">
        <!-- créer une barre de menu -->
        <nav class="navbar navbar-expand navbar-light bg-light">
            <a href="" class="navbar-brand"><?php echo get_option('blogname'); ?></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo get_option('home'); ?>" class="nav-link">
                        Accueil
                    </a>
                </li>
                <li class="nav-item"><a href="<?php echo get_page_link(2) ?>" class="nav-link">Présentation</a></li>
                <li class="nav-item"><a href="<?php echo get_page_link(1) ?>" class="nav-link">Article</a></li>
            </ul>
        </nav>
        <!-- 
            mettre en place des liens vers des pages web !!  dans des pages du back office 
            si je veux récupérer le lien de la page d'accueil du site 
            => back office => réglages > général > Adresse web de WordPress 
            l'adresse de la page d'accueil de votre site 
            <?php echo get_option('home'); ?>
            récupérer l'adresse de la page d'accueil du site 
            récupérer le nom du site 
            <?php echo get_option('blogname'); ?>
            lien vers la page présentation
            http://localhost/jour1/wp-admin/post.php?post=2&action=edit
            dès que vous créez une page ou un article dans wordpress
            automatiquement il a un numéro 
            2 
            lien vers cette page 
            <?php echo get_page_link(2) ?>
            permet de récupérer le lien vers la page qui a l'id numéro 2 dans le back office
        --> 