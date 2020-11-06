<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--  wp_title() met le nom de la page sur laquelle nous sommes , de manière dynamique sauf pour la d'accueil -->
    <title><?php wp_title() ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- 
        en + de bootstrap 
        utiliser le fichier style.css => ajouter quelques règles en + à nous 
        http://localhost/jour2/wp-content/themes/museum == get_template_directory_uri
    -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?version=1.2">
    <!-- il est mieux de mettre la balise wp_head à côté de la balise fermante de </head> -->
    <?php wp_head() ?>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <a href="<?php echo get_option("home") ?>" class="navbar-brand">
                <?php echo get_option("blogname") ?>
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo get_option("home") ?>" class="nav-link">
                        Accueil
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo get_page_link(6) ?>" class="nav-link">
                        Présentation
                    </a>
                </li>
                <!-- utiliser bootstrap => partie js -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Collections
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a href="<?php echo get_category_link(3) ?>" class="dropdown-item">Art moderne</a>
                        <a href="<?php echo get_category_link(2) ?>" class="dropdown-item">Renaissance</a>
                        <!-- 
                            template hierarchie 
                         -->
                    </div>
                </li>
            </ul>
            <form class="form-inline ml-2" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
                <input type="text" 
                       class="form-control btn-search" 
                       placeholder="rechercher"
                       value="<?php echo get_search_query() ?>" name="s">
                <input type="submit" class="btn btn-outline-dark ml-2 btn-sm">
            </form>
        </nav>