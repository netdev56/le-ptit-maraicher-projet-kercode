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

    <?php //Contenu - Adresse ?>
    <section id="contenuadresse">
        <div class="pagewidth">

            <address class="designcontenuadresse">
                <div class="textecontenuadresse">
                    <h1>Le P'tit Maraîcher</h1>
                    <p class="textecontenuadresse"><span>Retrouvez-nous sur les marchés :</span><br>
                        Lundi matin à Auray<br>
                        Samedi matin à Vannes<br>
                        Dimanche matin à Carnac
                    </p>
                    <p><br></p>
                    <p class="textecontenuadresse"><span> Retrouvez-nous dans nos locaux :</span><br>
                        Mardi de 17h à 19h<br>
                        Mercredi de 17h à 19h
                    </p>
                    <p><br></p>
                    <h2>19 rue du Potager 56000 VANNES</h2>
                    <h3><a href="tel:+33297979797">02.97.97.97.97</a></h3>
                </div>
            </address>

            <?php //Contact - Formulaire ?>
            <section class="designformcontact">
                <form action="envoimail.php" method="POST">
                    <div class="designcontactform">
                        <fieldset>
                            <div class="formcontact">
                                <p><input type="text" name="nom" placeholder="Nom"></p>
                                <p><input type="text" name="prenom" placeholder="Prénom"></p>
                                <p><input type="tel" name="tel" placeholder="Téléphone"></p>
                                <p><input type="email" name="email" placeholder="Email"></p>
                                <p><textarea name="message" placeholder="Message"></textarea></p>
                            </div>
                        </fieldset>
                        <p class="boutonformcontact"><input type="submit" value="ENVOYER"></p>
                    </div>
                </form>
            </section>
        </div>
    </section>
    <section>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.878446194983!2d-2.777220584178064!3d47.647928893114965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1ee660f85f%3A0x37b8927e9d6ad86b!2sGRETA%20de%20Bretagne%20Sud%20-%20Agence%20de%20Vannes!5e0!3m2!1sfr!2sfr!4v1605645669529!5m2!1sfr!2sfr"
            width="100%" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </section>
</main>


<?php //Pied de page ?>
<?php
    include('footer.php');
?>