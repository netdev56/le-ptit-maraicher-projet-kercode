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
    include('banniere-image-contact.php');
?>


<?php //Menu du haut ?>
<?php
    include('menu-haut.php');
?>



<?php //Contenu général ?>
<main>

    <?php //Contenu - texte ?>
    <section id="contenunewsletter">
        <div class="pagewidth">

            <address class="designcontenunewsletter">
                <div>
                    <h1>Nous sommes désolés de vous voir partir</h1>
                    <p class="">Participez à l'amélioration de notre communication en nous donnant les raisons de votre départ
                    </p>
                    
                </div>
            </address>

            <?php //Désinscription ?>
            <section class="designformdesinscrip">
                <form action="envoimail.php" method="POST">
                    <div class="designdesinscripform">
                        <fieldset>
                            <div class="formdesinscrip">

                                <p><input type="radio" id="trop-email" name="desinscription" value="trop-email" checked><label for="trop-email"> Trop d'e-mail</label></p>

                                <p><input type="radio" id="contenu-non-pertinent" name="desinscription" value="contenu-non-pertinent"><label for="contenu-non-pertinent"> Contenu non pertinent</label></p>

                                <p><input type="radio" id="pas-interesse" name="desinscription" value="pas-interesse"><label for="pas-interesse"> Pas intéressé</label></p>

                                <p><input type="radio" id="pas-d'infos" name="desinscription" value="pas-d'infos"><label for="pas-d'infos"> Je ne veux pas recevoir d'informations par e-mail</label></p>

                                <p><input type="radio" id="autres-desinscription" name="desinscription" value="autres-desinscription"><label for="autres-desinscription"> Autres</label></p>
                                <p><input type="text" name="valide-autres" placeholder="Pourquoi vous désinscrire ?"></p>

                                <p class="emaildesinscrire"><input type="email" name="email" placeholder="Email"></p>
                            </div>
                        </fieldset>
                        <p class="boutonformdesinscrip""><input type="submit" value="ENVOYER"></p>
                    </div>
                </form>
            </section>
        </div>
    </section>
</main>


<?php //Pied de page ?>
<?php
    include('footer.php');
?>