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
        <section id="contenusitemap">
            <div class="pagewidth">
                <div class="contenusitemapmargeresponsive">
                <ul>
                    <li><a href="index.php"><i class="fas fa-chevron-circle-right"></i> Accueil</a></li>
                    <li><a href="nos-paniers-legumes-fruits.php"><i class="fas fa-chevron-circle-right"></i> Nos paniers</a></li>
                    <li><a href="actualites-maraicher-bio.php"><i class="fas fa-chevron-circle-right"></i></i> Actualités</a></li>
                        <ul class="sitemapulchild">
                            <li><a href="actualites-maraicher-carotte.php"><i class="fas fa-chevron-right"></i> Tout savoir sur la carotte</a></li>
                            <li><a href="actualites-maraicher-pomme-de-terre-bretonne.php"><i class="fas fa-chevron-right"></i> Quelle pomme de terre pour les frites, la purée... ?</a></li>
                            <li><a href="actualites-maraicher-salade.php"><i class="fas fa-chevron-right"></i> Silence ça pousse !</a></li>
                            <li><a href="actualites-maraicher-courgette-recette-56.php"><i class="fas fa-chevron-right"></i> Recette du velouté de courgettes</a></li>
                            <li><a href="actualites-maraicher-poireau.php"><i class="fas fa-chevron-right"></i> Semer les poireaux d'hiver</a></li>
                            <li><a href="actualites-maraicher-potiron.php"><i class="fas fa-chevron-right"></i> Il y en aura pour tout le monde</a></li>
                        </ul>
                    <li><a href="contact-le-ptit-maraicher.php"><i class="fas fa-chevron-circle-right"></i> Contact</a></li>
                    <li><a href="desinscription-newsletter.php"><i class="fas fa-chevron-circle-right"></i> Se désabonner</a></li>
                    <li><a href="sitemap-le-ptit-maraicher.php"><i class="fas fa-chevron-circle-right"></i> Plan du site</a></li>
                    <li><a href="mentions-legales.php"><i class="fas fa-chevron-circle-right"></i> Mentions Légales</a></li>
                </ul>

                <div class="boutonsitemapxml">
                    <a href="sitemap.xml" target="_blank">Sitemap.xml</a>
                </div>
                </div>
            </div>
    </main>



<?php //Pied de page ?>   
<?php
    include('footer.php');
?>