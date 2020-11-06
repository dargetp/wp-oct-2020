<?php get_header(); ?>

<!-- 
    zone 1
    titre du site
    allez directement dans les médias > télécharger une image 
    comme pour les catégories comme pour les pages et les articles
    les images téléchargés => id => 51 
    grande image 
-->
<div class="row">
    <div class="col-12 text-center">
        <h1>
            <?php echo get_option("blogname") ?>
        </h1>
        <figure>
            <img src="<?php echo wp_get_attachment_url(51) ; ?>" alt="">
        </figure>
    </div>
</div>
<hr>
<!-- 
    zone 2
    3 tableaux de la collection renaissance 
-->
<div class="row">
    <div class="col-12">
        <h2>Collection Renaissance</h2>
    </div>
    <!-- nous allons réaliser une boucle personnalisée -->
    <?php $my_query = getLastCollection(3) ?>
    <?php foreach($my_query as $tableau ){ ?>
        <div class="col-4 text-center">
            <h2><?php echo $tableau->post_title ?></h2>
            <?php echo get_the_post_thumbnail($tableau->ID , "medium", ["class" => "img-fluid"]) ?>
        </div>
    <?php } ?>
</div>
<hr>

<!-- 
    zone 3 => get_page()
    titre
    paragraphe
-->
<?php $page = get_page(52) ; 
?>
<div class="row">
        <div class="col-12 text-center">
            <h2><?php echo $page->post_title ; ?></h2>
            <div>
                <?php echo $page->post_content ; ?> 
            </div>
        </div>
</div>
<!-- 
https://docs.google.com/forms/d/e/1FAIpQLSf6mo8ub_JSrI_AX9amegDHZnQomNgfg6L7kEM-YB7h9tb87A/viewform

-->
<hr>

<!-- 
    zone 4
    3 tableaux de la collection art moderne
-->
<div class="row">
    <div class="col-12">
        <h2>Collection Art Moderne</h2>
    </div>
    <!-- nous allons réaliser une boucle personnalisée -->
    <?php $my_query = getLastCollection(2) ?>
    <?php foreach($my_query as $tableau ){ ?>
        <div class="col-4 text-center">
            <h2><?php echo $tableau->post_title ?></h2>
            <?php echo get_the_post_thumbnail($tableau->ID , "medium", ["class" => "img-fluid"]) ?>
        </div>
    <?php } ?>
</div>



<?php get_footer(); ?>