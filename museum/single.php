<?php get_header() ?>

<?php while (have_posts())  { ?>
    <?php the_post() ?>
    <div class="row mt-4">
        <figure class="col-4">
            <?php the_post_thumbnail("large", ["class" => "img-fluid img-thumbnail bg-secondary"]); ?>
        </figure>
        <div class="col-8">
            <h1><?php the_title() ?></h1>
            <div>
                <?php the_content() ?>
            </div>
            <div class="d-flex justify-content-between">
                <?php previous_post_link('%link', '%title'); ?>
                <?php next_post_link('%link', '%title'); ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php get_footer() ?>

<!-- 404.php -->