<?php get_header() ?>

<!-- pour bien distinguer les pages des articles 
je vais modifier l'aspect de ma boucle -->

<?php while( have_posts()) { ?>
    <?php the_post(); ?>
    <div class="row">
        <div  class="col-3">
            <h1><?php the_title() ?></h1>
            <!-- ajouter une image dessous du titre 
                1 activer la possibilité de mettre des images à la une
                => functions.php 
                2 aller dans notre page => ajouter une image à la une
                3 utiliser une fonction afficher l'image dans notre page de thème 
            -->
            <?php the_post_thumbnail('thumbnail'); ?>
        </div>
        <div class="col-9">
            <?php the_content() ?>
        </div>
    </div>
<?php  } ?>

<?php get_footer() ?>