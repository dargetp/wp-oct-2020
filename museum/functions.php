<?php 

// vu que ce fichier ne va contenir que du PHP
// pas besoin mettre la balise fermante  de PHP 

// premier short code 
// fonction php classique
function titre () {
    return "<h2>je suis un titre généré via un shortcode</h2>";
}
// hook de wordpress 
// transformer notre fonction en un shordcode
add_shortcode( "titre_code", "titre" );

// utiliser directement dans le back office !
// ajouter une nouvelle zone 
// code court
// [titre_code] 

// deuxième shortcode dans lequel on peut mettre 1 paramètre 

function information( $attr , $contenu ){
    return "<h2>" . $contenu . "</h2>";
}
add_shortcode( "info", "information" );

// [info]le texte que l'on veut[/info]
// => c'est que vous êtes en train d'utiliser un short code 

// installer un plugin => formidable 
// permet de créer facilement des formulaires
// donne des short codes !!! 
// => back office / Extensions / extensions installées (plugin)
// ajouter > chercher Formidable


// dans la page nous contacter réaliser la mis en place suivante :
// colonne de largeur 3 
    // titre le page
    // téléphone 
    // google map 

// colonne de largeur 9 
//    contenu 
//        lorem ipsum de 10 mot 
//        formulaire => via le shortcode de Formidable 
//        

function starter_support(){
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'starter_support' ); 
  
add_filter( 'wp_title', 'wpdocs_hack_wp_title_for_home' );

/**
 * Customize the title for the home page, if one is not set.
 *
 * @param string $title The original title.
 * @return string The title to use.
 */
function wpdocs_hack_wp_title_for_home( $title )
{
  if(is_home() || is_front_page()){
   if ( empty( $title ) ) {
      $title = __( 'Home', 'textdomain' ) . ' | ' . get_bloginfo( 'blogname' );
    }
   return $title;
  }else{
    return $title . ' | ' . get_bloginfo( 'blogname' );
  }

}

function add_js(){
  ?>
      <script>
        console.log("je suis du js ajouté via un hook");
      </script>
  <?php
}

add_action("wp_footer", "add_js");
// dans le support de cours => liste de tous les hooks disponibles dans les fonctions natives de wordpress 
// demande de l'expérience et d'aller regarder comment c'est fait dans le code source de wordpress 
// io => input output 
// .io
// rdv 10h45 bon café !
// re hello hello !!! 
// est ce que vous avez des questions sur ce que l'on vient de voir ?? 


// ajouter une balise script dans le code de la fonction wp_footer
// sans avoir modifier la fonction  wp_footer qui est stockée dans le dossier 
// wp-includes 

// la balise script est visible à deux endroits 
// dans la console + dans le code source de la page 

// ici on va ajouter les scripts pour faire fonctionner bootstrap 
// js 
// => utiliser deux composants internes Boostrap 
// menu déroulant
// page d'accueil un diaporama  

// aller sur le site officiel de Bootstrap
// récupérer les liens vers les CDN des js de bootstrap 

/*

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

*/

function add_scripts_bootstrap(){
  // enregistre le script dans la liste des scripts disponibles dans wp
  wp_register_script( 
      "popper" , 
      "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ,
      array("jquery"),
      "1.16.1",
      true // ajoute le script dans le pied de page dans wp_footer()
  );
  // ajouter 
  wp_enqueue_script("popper");

  wp_register_script(
    "bootstrap", 
    "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js",
    array("jquery" , "popper") ,
    "4.5.3",
    true
  );
  wp_enqueue_script("bootstrap");

  wp_register_script(
    "jquery",
    "https://code.jquery.com/jquery-3.5.1.slim.min.js",
    null,
    "3.5.1",
    true
  );
  wp_enqueue_script("jquery");

}
// utilise lorsque l'on veut ajouter des fichiers .js et aussi des fichiers .css
add_action("wp_enqueue_scripts" , "add_scripts_bootstrap");

// activer les image_vedette pour les articles et les pages
function activer_image_vedette(){
  add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "activer_image_vedette");

// cas pratique créer 3 tableaux = 3 articles 
// titre tableau 1 , 2 et 3
// h2 présentation du tableau 
// p avec du lorem ipsum 
// ajouter une image à la une de votre choix

// associé à la catégorie renaissance

// cas pratique créer 3 autres tableaux = 3 autres articles 
// titre tableau 4 , 5 et 6
// h2 présentation du tableau 
// p avec du lorem ipsum 
// ajouter une image à la une de votre choix

// art moderne 

// get_post_link() => récupérer le permalien vers la page concernée 
// attention on ne veut pas afficher une page MAIS une catégorie 
// tous les articles (tableaux) qui sont associés à la catégorie renaissance
// get_categorie_link()
// renaissance 2 
// art moderne 3 

// fonction personnalisée 
function getLastCollection($id_collection){
  $args = array(
      'cat' => $id_collection,
  );
  $my_query = new WP_Query($args);
  wp_reset_query();  
  return $my_query->posts ;
}