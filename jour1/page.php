<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - jour 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <?php wp_head() ?>
    <div class="container">
        <!-- ajouter une barre de menu -->
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <a href="" class="navbar-brand">
                <?php echo get_option("blogname") ?>
                <!-- réglage > général --> 
            </a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?php echo get_option("home") ?>" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="<?php echo get_page_link(2) ?>" class="nav-link">Présentation</a></li>
            </ul>
        </nav>
        
        <h1>Page</h1>
        <!-- la liste des fonctions de base qui font fonctionner WP
            thème et thème enfant 
            la liste des fonctions de bases 
            vous saurez intervenir sur les thèmes de wordpress !! 

            pause déjeuner => rdv 13h42 
            rester avec hakim
            rebonjour !!! 
            comment allez vous ??
            est ce que tout le monde est là ??
            avez des questions sur ce que l'on vu ce matin  ?
            => ce matin => importante => le menu 
            => créer un thème vierge (blanc)
            => ajouter quelques fonctions pour gérer la partie haute du site => le menu
            => Maintenant => présenter les fonctions en charge de remplir le contenu des pages ! 
            avez vous fait un peu PHP ?
            projet PHP classique 
            1 base de données + php => PDO 
            2 requête SQL => demande => je veux récupérer toutes les informations liées à l'article n°1
            SELECT * FROM articles where id = 1 
            => tableau array()
            parcourir via une boucle 
            3 / 4 [ 
                "titre" => "article1",
                "contenu" => "un peu de texte",
                "auteur" => "moi",
                "dt_publication" => "2020-11-04"
            ]
            5 utiliser une boucle foreach(){ }
            permettre d'affiche chaque élement du tableau
            dans wordpress => AUTOMATIQUEMENT requête en base de données
            AUTOMATIQUEMENT => récupérer les informations qui sont dans ce tableau 
            dans Wordpress => les 4 premiers points sont faits AUTOMATIQUEMENT
            => juste s'occupe de la dernière etape => 5
         -->
        
        <?php while( have_posts() ) { 
            the_post();
            echo "<h1>" . get_the_title() . "</h1>";
            echo "<div>" . get_the_content() . "</div>";
        } ?>
        
        <!-- 
            have_posts()
            the_post()
            get_the_title()
            get_the_content()
            ce sont 4 fonctions PHP mais qui sont définis dans Wordpress 
            ces 4 fonctions ne fonctionnent que lorsque l'on crée des thèmes wordpress 
            ne pas utiliser ces fonctions 
        -->

    </div>
    <?php wp_footer() ?>
</body>
</html>
