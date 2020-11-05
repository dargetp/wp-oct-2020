<?php get_header(); ?>

<!-- loop = boucle 
=> support => chapitre 5 loop 
tableau avec l'ensemble des fonctions que l'on peut utiliser dans la loop
très simple de récupérer des champs qui sont remplis le back office

-->
<?php while( have_posts() ) { ?>

    <?php the_post() ?>
    <h1><?php the_title() ?></h1>
    <div><?php the_content() ?></div>
    <div><?php the_author() ?> - <?php the_date("d/m/Y") ?></div>
    <!-- aucun problème pour la mettre en forme => même paramètre que pour les dates en PHP -->
    <hr>
    <!-- dans vos pages et vos articles vous pouvez ajouter des champs personnalisés => custom post meta 
    dans le back office => dans la page entrain d'éditer >
    -->
    <div class="row">
        <div class="col-6">
            <!-- carte -->
            <?php echo get_post_meta( $post->ID , "map" , true ) ?>
            <!-- iframe => déborder de la zone où vous l'insérer
                ajouter une règle dans le fichier style.css => 
                iframe{
                    width: 100% ! important;
                    height: 250px !important;
                }
            -->
        </div>
        <div class="col-6">
            <!-- horaires
                dans la page présentation
               1 ajouter un nouveau custom field 
                horaires 

                valeur 
                <h2>horaires d'ouverture</h2>
                <ul>
                    <li>Lundi : fermé</li>
                    <li>Mardi : 9h00 - 18h00</li>
                    <li>Merdredi : 9h00 - 20h00</li>
                    <li>Jeudi, Vendredi, Samedi : 9h00 - 18h00</li>
                    <li>Dimanche : 9h00 - 21h00</li>
                </ul>
                2 afficher dans la page de présentation !! 
        -->
            <?php echo get_post_meta( $post->ID , "horaires", true ); ?>
        </div>
    </div>
    <!-- hello hello !!!  re -->

<?php } ?>

<?php get_footer() ; ?>