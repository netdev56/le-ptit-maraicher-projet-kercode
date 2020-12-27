<?php //Meta-Style ?>
<?php
    include('meta-style-bandeauvert-nofollow.php');
?>


<?php //Bandeau vert ?>
<?php
    include('bandeauvert.php');
?>


<?php //Bannière image paniers ?>   
<?php
    include('banniere-image-paniers.php');
?>


<?php //Menu du haut ?>  
<?php
    include('menu-haut.php');
?>
        

    <?php //Contenu général ?>  
    <main>

        <?php //Contenu - Paniers ?>  
        <section id="contenupaniers">
            <div class="pagewidth">
                <div class="titrecontenu2paniers">
                    <h1>Réservez votre panier</h1>
                </div>
                <div class="pagewidthboard1">
                <article class="board1">
                    <h2>Panier de<br>légumes</h2>
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
                    <p class="reservez"><a href="#contenupaniersformulaire">Réservez</a></p>
                </article>

                <article class="board1">
                    <h2>Panier de<br>fruits & légumes</h2>
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
                    <p class="reservez"><a href="#contenupaniersformulaire">Réservez</a></p>
                </article>

                <article class="board1">
                    <h2>Panier de<br>fruits</h2>
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
                    <p class="reservez"><a href="#contenupaniersformulaire">Réservez</a></p>
                </article>
            </div>
            </div>
        </section>



        <?php //Contenu - Formulaire de réservation ?>  
        <section id="contenupaniersformulaire">
            <div class="pagewidth">
                <div class="titrepaniersformulaire">
                    <h3>Complétez le formulaire pour réserver votre panier</h3>
                </div>
                <div class="designformulaire">
                    <form action="envoimail.php" method="POST">
                        <div class="designpaniersform">
                            <fieldset>
                                <div class="formreservation">
                                    <p><input type="text" name="nom" placeholder="Nom"></p>
                                    <p><input type="text" name="prenom" placeholder="Prénom"></p>
                                    <p><input type="tel" name="tel" placeholder="Téléphone"></p>
                                    <p><input type="email" name="email" placeholder="Email"></p>
                                    <p><select name="paniers" class="testing">
                                        <option value="panier">Selectionnez votre panier</option>
                                        <option value="legumes">Panier de légumes</option>
                                        <option value="fruitslegumes">Panier de fruits & légumes</option>
                                        <option value="fruits">Panier de fruits</option>
                                    </select></p>
                                </div>
                                <div class="formreservation">
                                    <p><input type="date" name="bday"></p>
                                    <p><textarea name="message" placeholder="Message"></textarea></p>
                                </div>
                            </fieldset>
                    
                        </div>
                        <p class="boutonform"><input type="submit" value="ENVOYER"></p>
                    </form>
                </div>
           
            </div>
        </section>


        


    </main>



<?php //Pied de page ?>   
<?php
    include('footer.php');
?>