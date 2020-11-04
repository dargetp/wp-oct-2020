<?php get_header() ?>
<h1>Bonjour !!</h1>
<div class="row">
<?php while( have_posts() ) { ?>
    <?php the_post() ?>
    <div class="col-4">
        <article class="card rounded">
            <?php the_post_thumbnail( "full", [ "class" => "img-fluid" ] ) ?>
            <h2 class="h4"><?php the_title() ?></h2>
            <div>
                <?php the_excerpt( ); ?>
            </div>
            <div>
                <a href="<?php echo get_the_permalink() ?>">Lire la suite</a>
            </div>
        </article>
    </div>
<?php } ?> 
</div>
<?php get_footer() ?>
<!-- require "footer.php" -->