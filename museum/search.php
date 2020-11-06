<?php get_header() ?>
<div class="row mt-4">
    <div class="col-12">
    <h1>Page de résultat de la recherche pour le mot clé <?php echo get_search_query() ?></h1>
    <h2><?php echo $wp_query->found_posts; ?> résultat(s)</h2>
    <p>Veuillez trouver ci dessous la liste des pages / articles qui contiennent le mot clé recherché </p>
        <ul>
        <?php while( have_posts()) { ?>
            <?php the_post() ?>
                <li> 
                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
                </li>
        <?php } ?>
        </ul>
    </div>
</div>
<?php get_footer() ?>