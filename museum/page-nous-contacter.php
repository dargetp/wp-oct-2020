<!-- 
ici pour la page contact =>
avons utilisé le système de slug => partie du permalien 
short_code
possibilité de créer dans le fichier functions.php fonction dont le rôle va être de générer une partie de l'affichage visuel 
=> le support de cours => dans le chapitre n°7 Hook > section 6 Short Code
=> 1 allons dans fichier functions.php => créer la fonction short_code
=> 2 dans le fichier page-nous-contacter.php => utiliser le short_code
=> pause café rdv dans 15 min => 15h47 !! 
re !!
--> 
<?php get_header() ?>
<?php while( have_posts()) { ?>
    <?php the_post() ?>
    <div class="row mt-4">
        <div class="col-3"> 
            <h1 class="h3"><?php the_title() ?></h1>
            <p>Tel : <?php echo get_post_meta( 20 , "phone", true) ?></p>
            <?php echo get_post_meta( 6 , "map", true) ?>
        </div>
        <div class="col-9">
            <?php the_content(); ?>
        </div>
    </div>
<?php } ?>
<?php get_footer () ?>
<!--
    catégories et les articles 
    page d'accueil et la page collection => menu déroulant
    page de résultat de recherche  
    js et effet => disporama dans la page d'accueil !!!
    
    -------------------
    
    => présente l'extension Formidable 
    => créer un formulaire => newsletter => 
    ajouter dans le pied de page !! 

    => plugin = extension 
    => formidable => plugin puissance mais il y a des fonctionnalités payantes => Freemium 
    => free et premium (plus de service)

-->