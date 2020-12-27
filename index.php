<?php //Meta-Style ?>
<?php
    include('meta-style-bandeauvert.php');
?>


<?php //Bandeau vert ?>
<?php
    include('bandeauvert.php');
?>


<?php //Bannière image ?>   
<?php
    include('banniere-image.php');
?>


<?php //Menu du haut ?>  
<?php
    include('menu-haut.php');
?>
        
        
    <?php //Contenu général ?>  
    <main>

        <?php //Contenu 1 - Texte d'accueil ?>  
        <section id="contenu1accueil">
            <div class="pagewidth">
                <div class="designcontenu1accueil">
                    <img src="img-webp/exploitation-maraichere-vannes-morbihan.webp" alt="Exploitation maraichère">
                    <div>
                    <h1>Exploitation maraîchère depuis 1980</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. 
                    Risus commodo viverra maecenas accumsan lacus vel facilisis. </p><br>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo 
                    viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
        </section>

        <?php //Contenu 2 - Les paniers ?>  
        <section id="contenu2paniers">
            <div class="pagewidth">
                <div class="titrecontenu2paniers">
                    <h2>Réservez votre panier</h2>
                </div>
                <div class="pagewidthboard1">
                <article class="board1">
                    <h3>Panier de<br>légumes</h3>
                    <p class="designprice">10€</p>
                    <img src="img-webp/panier-legume-maraicher-vannes-56.webp" alt="Panier de légumes">
                    <p>
                        <ul>
                            <li>500g de carottes</li>
                            <li>500g de pommes de terre</li>
                            <li>3 poireaux</li>
                            <li>1 salade</li>
                            <li>&nbsp;</li>
                        </ul>
                    </p>
                    <p class="reservez"><a href="nos-paniers-legumes-fruits.php#contenupaniersformulaire">Réservez</a></p>
                </article>

                <article class="board1">
                    <h3>Panier de<br>fruits & légumes</h3>
                    <p class="designprice">10€</p>
                    <img src="img-webp/panier-2-legume-fruit-maraicher-vannes-morbihan.webp" alt="Panier de fruits et légumes">
                    <p>
                        <ul>
                            <li>500g de carottes</li>
                            <li>500g de pommes de terre</li>
                            <li>3 poireaux</li>
                            <li>1kg de pommes</li>
                            <li>400g de raisin</li>
                        </ul>
                    </p>
                    <p class="reservez"><a href="nos-paniers-legumes-fruits.php#contenupaniersformulaire">Réservez</a></p>
                </article>

                <article class="board1">
                    <h3>Panier de<br>fruits</h3>
                    <p class="designprice">10€</p>
                    <img src="img-webp/panier-3-fruit-maraicher-vannes-bretagne.webp" alt="Panier de fruit">
                    <p>
                        <ul>
                            <li>1kg de pommes</li>
                            <li>400g de raisin</li>
                            <li>400g de pruneaux</li>
                            <li>400g de kiwi</li>
                            <li>&nbsp;</li>
                        </ul>
                    </p>
                    <p class="reservez"><a href="nos-paniers-legumes-fruits.php#contenupaniersformulaire">Réservez</a></p>
                </article>
            </div>
            </div>
        </section>

        <?php //Contenu 3 - Coordonnées ?>  
        <section id="contenu3coordonnees">
            <div class="pagewidth">
                <address class="designcontenu3coordonnees">
                    <div class="textecontenu3coordonnees">
                        <h2>Le P'tit Maraîcher</h2>
                        <p class="textecontenu3coordonnees"><span>Retrouvez-nous sur les marchés :</span><br>
                        Lundi matin à Auray<br>
                        Samedi matin à Vannes<br>
                        Dimanche matin à Carnac
                        </p>
                        <p><br></p>
                        <p class="textecontenu3coordonnees"><span> Retrouvez-nous dans nos locaux :</span><br>
                            Mardi de 17h à 19h<br>
                            Mercredi de 17h à 19h
                        </p>
                        <h2>19 rue du Potager 56000 VANNES</h2>
                        <h4><a href="tel:+33297979797">02.97.97.97.97</a></h4>
                    </div>
                </address>
                
                <?php //Contenu 3 - Slider ?>  

        <div class="slidegen">
            <div id="slider">
                <input type="radio" id="show_slide1" name="slider_commands">
                <input type="radio" id="show_slide2" name="slider_commands">
                <input type="radio" id="show_slide3" name="slider_commands">
                <input type="radio" id="play_slider" name="slider_commands">

                <div id="slides">
                    <figure id="slide1">
                        <img src="img-webp/slide-fruit-legume-maraicher-56.webp" alt="Village au bord d'un lac">
                        <figcaption>Vente de fruits & légumes</figcaption>
                    </figure>
                    <figure id="slide2">
                        <img src="img-webp/slide-maraicher-pousse-vannes-morbihan-56.webp" alt="Paysage de montagne">
                        <figcaption>Prochainement...</figcaption>
                    </figure>
                    <figure id="slide3">
                        <img src="img-webp/slide-ail-rose-jardin-56.webp" alt="Forêt en automne">
                        <figcaption>L'ail, c'est bon pour la santé !</figcaption>
                    </figure>
                </div>

                <nav>
                <ul class="dots_commands">
                    <li><label for="show_slide1">Fruit et légume - S1</label></li>
                    <li><label for="show_slide2">Maraichage Morbihan - S2</label></li>
                    <li><label for="show_slide3">Vente de paniers fruits et légumes - S3</label></li>
                </ul>
                <label for="play_slider" aria-label="Play" id="play" title="Play">Play</label>
                 </nav>
            </div>
        </div>
    
            </div>
        </section>

        <?php //Contenu 4 - Newsletter ?>  
        <section id="contenu4newsletter">
            <div class="pagewidth">
                <div class="designcontenu4newsletter">
                    <h4>recevez nos actualités</h4>
                    <form action="enregistremail.php" method="POST">
                        <input type="email" name="email" id="mailnewsletter" placeholder="Votre Email">
                        <input type="submit" value="ENVOYER">
                    </form>
                </div>
            </div>
        </section>

        <?php //Contenu 5 - Team ?>  
        <section id="contenu5team">
            <div class="pagewidth">
                <div class="designcontenu5team">
                    <div class="membresteam">
                        <img src="img-webp/santa-chef-exploitation-maraichage.webp" alt="Santa - Chef d'exploitation">
                        <h2>Santa C.</h2><figure>Chef d'exploitation</figure>
                    </div>
                     
                </div>

                <div class="designcontenu5team">
                    <div class="membresteam">
                        <img src="img-webp/luke-salarier-maraicher.webp" alt="Luke - Salarier">
                        <h2>Luke S.</h2><figure>Salarié</figure>
                    </div>    
                </div>

                <div class="designcontenu5team">
                    <div class="membresteam">
                        <img src="img-webp/bobby-gardien-le-petit-maraicher.webp" alt="Bobby - Gardien">
                        <h2>Bobby</h2><figure>Gardien</figure>
                    </div>
               </div>
            </div>
        </section>

        <?php //BT retour haut de page ?>  
        <div class="retourhautdepage"><a href="#"><i class="fas fa-chevron-up fa-2x"></i></a></div>



    </main>



<?php //Pied de page ?>   
<?php
    include('footer.php');
?>