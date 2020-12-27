<?php //Meta-Style ?>
<?php
    include('meta-style-bandeauvert.php');
?>


<?php //Bandeau vert ?>
<?php
    include('bandeauvert.php');
?>


<?php //Bannière image paniers ?>   
<?php
    include('banniere-image-actualites.php');
?>


<?php //Menu du haut ?>  
<?php
    include('menu-haut.php');
?>
        


    <?php //Contenu général ?>  
    <main>

        <?php //Contenu - actualités full ?>  
        <section id="contenuactus">
            <div class="pagewidth">
              <div class="articlesactusfull">

                <section class="reseauxactusgauche">
                    <a href="#" target="_blank"><i class="fab fa-facebook fa-2x""></i></a>
                    <a href="#" target="_blank"><i class="fab fa-pinterest fa-2x""></i></a>
                </section>

                <article class="reseauxactuscentre">
                    <p class="titreactuscentre"><img src="img-webp/courgette-recette-actualites-full.webp" alt="Courgette du Morbihan"></p>
                    <h5>Recette du velouté de courgettes</h5>
                    <p class="datearticlesactus">6 novembre 2020</p>
                    <p class="textearticleactusveloute">
                        
                        <div class="tempscuissoncourgettesgen">
                            <div class="tempscuissoncourgettes">
                                <p class="timecuissoncourgettes">Temps</p>
                                <p>25 min</p>
                            </div>
                            <div class="tempscuissoncourgettes">
                                <p class="timecuissoncourgettes">Personnes</p>
                                <p>6</p>
                            </div>
                            <div class="tempscuissoncourgettes">
                                <p class="timecuissoncourgettes">Niveau</p>
                                <p>Facile</p>
                            </div>
                        </div>



                        <section class="ingredientscourgettesgen">
                            <div>
                                <div class="ingredientscourgettes">
                                <p><img src="img-webp/icon-recette-veloute-courgette.webp" alt="Courgette"></p>
                                <p class="ingredientscourgettesquantités">1.5 kg de courgette</p>
                                </div>
                                <div class="ingredientscourgettes">
                                <p><img src="img-webp/icon-recette-veloute-beurre.webp" alt="Beurre"></p>
                                <p class="ingredientscourgettesquantités">10 g de beurre</p>
                                </div>
                            </div>
                            <div>
                                <div class="ingredientscourgettes">
                                <p><img src="img-webp/icon-recette-veloute-bouillon.webp" alt="Bouillon de volaille"></p>
                                <p class="ingredientscourgettesquantités">1 tablette de bouillon de volaille</p>
                                </div>
                                <div class="ingredientscourgettes">
                                <p><img src="img-webp/icon-recette-veloute-creme.webp" alt="Crème fraiche"></p>
                                <p class="ingredientscourgettesquantités">3 cuillères à soupe de crème fraîche</p>
                                </div>
                            </div>
                        </section>


                        <section class="recettecourgettesgen">
                            <div>
                                <div class="recettecourgettes">
                                <p><i class="fas fa-dice-one fa-2x"></i></p>
                                <p class="recettecourgettesalign">Epluchez les courgettes, coupez les en morceaux et mettez les avec le beurre ou l'huile d'olive dans une casserole</p>
                                </div>
                                <div class="recettecourgettes">
                                <p><i class="fas fa-dice-two fa-2x"></i></p>
                                <p class="recettecourgettesalign">Rajoutez le cube de bouillon et un verre d'eau. Fermez et laissez cuire 10 mn à partie du sifflement.</p>
                                </div>
                                <div class="recettecourgettes">
                                <p><i class="fas fa-dice-three fa-2x"></i></p>
                                <p class="recettecourgettesalign">Mixer le tout avec les trois cuillères à soupe de crème fraîche. Servir ce velouté bien chaud.</p>
                                </div>
                            </div>
                            
                                
                                
                                
                            
                        </section>
                        






                    </p>
                </article>

                <section class="reseauxactusdroit">
                  
                    <?php //Articles récents ?>  
                    <?php include('articles-recents.php'); ?>
                  
                </section>

              </div>  
            </div>
        </section>

    </main>



<?php //Pied de page ?>   
<?php
    include('footer.php');
?>