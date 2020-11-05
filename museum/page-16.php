<!-- ici c'est la page spéciale pour la page mention légale 
template hierarchie => en fonction du nom de la page php => wordpress
va choisir une page php à utiliser ou une autre  -->

<!-- contact
utiliser le slug => mais le slug ne va pas apparaitre 
mode de base pour les permaliens
Réglage > permalien > Titre de la publication > valide
-->

<?php get_header()?>
<?php while( have_posts()) { ?>
    <?php the_post(); ?>
    <div class="row mt-4">
        <div class="col-3">
            <h1><?php the_title() ?></h1>
        </div>
        <div class="col-9">
            <?php the_content() ?>
        </div>
    </div>
<?php } ?>
<?php get_footer() ?>

<!--
    créer une nouvelle page Conditions générale de Vente 

    1 Créer cette page le back office 
    titre Conditions générale de Vente 
    contenu h2 condition 1
            p lorem ipsum
            h2 condition 2
            p lorem ipsum
    champ personnalisé => phone => 010110010101

    id = 20
    slug = conditions-generale-de-vente

    2 ajouter ce lien dans le menu de pied de page 

    3 créer une fichier php qui sera dédié à l'affichage de cette page 

    4 l'aspect de la page sera le suivant :

    colonne 4 de largeur
        titre de la page => correction à 15h15 !
        téléphone
    colonne 8 de largeur
        le contenu de la page

-->