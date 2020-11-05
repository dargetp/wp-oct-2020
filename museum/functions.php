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


