<?php get_header() ?>

<?php while( have_posts() ) { ?>
    <?php the_post() ?>
    <div class="row mt-4">
        <div class="col-4">
            <h1><?php the_title() ?></h1>
            <p>📱 Téléphone : <?php echo get_post_meta( $post->ID , "phone", true ); ?></p>
        </div>
        <div class="col-8">
            <?php the_content() ?>
        </div>
    </div>
<?php } ?>

<?php get_footer() ?>