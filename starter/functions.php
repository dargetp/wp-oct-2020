<?php 
// ce fichier est un fichier central lorsque l'on crée des thèmes sur wordpress

// définir des fonctions centrales de notre thème 
// stocker des fonctions qui peuvent être utilisées sur toutes pages php de notre thème 

// fonction qui permet d'activer la zone
// image mise en avant pour les articles et les pages 

function starter_support(){
    add_theme_support( 'post-thumbnails' );
  }
add_action( 'after_setup_theme', 'starter_support' );

// etant donné que dans ce fichier on ne va mettre QUE PHP 
// pas besoin de mettre la balise fermante de php 
