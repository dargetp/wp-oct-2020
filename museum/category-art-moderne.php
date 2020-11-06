<?php get_header() ?>
<!-- template dédié aux tableaux de l'art moderne  -->
<div class="row">
    <h1 class="col-12"><?php the_category() ;?></h1>
    <div class="col-12"><?php the_archive_description() ; ?></div>
</div>
<div class="row">
<?php while(have_posts()) { ?>
    <?php the_post() ?>
    <article class="col-4">
        <?php the_post_thumbnail("large", ["class" => "img-fluid"]) ?>
        <h2 class="text-center">
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </h2>
    </article>
<?php } ?>
</div>
<?php get_footer() ?>

<!-- 
dans le fichier header.php 

get_category_link(id_catégorie)
dans le menu

-->