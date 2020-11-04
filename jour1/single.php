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
        <h1>Page d'Article</h1>
        <?php while ( have_posts() ) {
            the_post();
            echo "<h2>" . get_the_title() . "</h2>";
            echo "<div>" . get_the_content() . "</div>";
        } ?>
        <!--  back office => article => afficher un article
            single.php
            si vous n'avez pas d'article dans le back office => il faut en créé un 
            
         -->
    </div>
    <?php wp_footer() ?>
</body>
</html>