        <footer class="text-center my-4 row">
            <div class="col-6">
                <?php echo do_shortcode("[formidable id=2]");  ?>
            </div>
            <!-- 
                créer 2 pages => Mentions légales
                                    lorem ipsum 1 paragraphe
                                16
                                Contact 
                                    lorem ipsum 1 paragraphe
                                18
                bien noté leur id 
                je veux pour la page mention légale 
                au lieu d'avoir la même présentation que la page Présentation

                je veux titre à gauche et le texte à droite 

                custom page =>  template hiérarchie 
                lorsque vous créer des fichiers php dans le dossier de thème 
                vous devez respecter les règles de nommage des fichiers
                en + de bien respecter les règles de nommage 
                wordpress permet donner des noms spécifiques pour s'appliquer spécifiquement à cette page 
                => dans le support de cours / chapitre 3 template hiérarchie
                => schéma la hiérarchie 
                => en fonction du nom du fichier php que vous allez choisir 
                => règle de priorité 

            -->
            <div class="col-6">
                <a href="<?php echo get_page_link(16) ?>">Mentions légales</a>
                - 
                <a href="<?php echo get_page_link(18) ?>">Nous Contacter</a>
                -
                &copy; Malik <?php echo date("Y") ?>
                - 
                <a href="<?php echo get_page_link(20) ?>">CGV</a>
            </div>
        </footer>
        
    </div>

<?php wp_footer() ?>
</body>
</html>