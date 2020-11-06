<?php get_header() ?>

<!-- 
    template dédié aux tableaux de la renaissance
    bon appétit rdv 13h35 pour la suite et fin de la formation 
    rebonjour tout le monde !
    des questions ?? 
    bloqués quelquepart dans le code ?? 

    je veux afficher la liste de tous articles tableaux qui sont associés à la catégorie renaissance
    automatiquement étant donné que l'on a appelé via le permalien la catégorie renaissance
    automatique la boucle loop contient tous les articles = tableaux de la renaissance
    1 tableau mais TOUS les tableaux
-->
<div class="row mt-4">
    <h1 class="col-12"><?php the_category() ?></h1>
    <div class="col-12"><?php the_archive_description() ?></div>
</div>
<div class="row">
<?php while( have_posts()) { ?>
<?php the_post() ; ?>
<article class="col-3">
<h2 class="h4"><?php the_title() ; ?></h2>
<?php the_post_thumbnail("medium" , ["class" => "img-fluid"]) ; ?>
<div><a href="<?php the_permalink() ?>">plus de détails sur le tableau</a></div>
</article>
<?php } ?>
</div>
<?php get_footer() ?>