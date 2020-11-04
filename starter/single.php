<?php get_header() ?>

<?php while( have_posts()) { ?>
    <?php  the_post(); ?>
    <div class="row">
        <div class="col-6">
            <h1> <?php the_title() ?> </h1>
            <div> <?php the_content() ?> </div>
        </div>
        <div class="col-6 text-center">
            <?php the_post_thumbnail("medium") ?>
        </div>
    </div>
    
<?php } ?>

<?php get_footer() ?> 