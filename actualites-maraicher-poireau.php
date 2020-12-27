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
                    <p class="titreactuscentre"><img src="img-webp/poireau-actualites-full.webp" alt="Poireaux Marché de Vannes"></p>
                    <h5>Semer les poireaux d'hiver</h5>
                    <p class="datearticlesactus">5 novembre 2020</p>
                    <p class="textearticleactus">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                </article>

                <section class="reseauxactusdroit">
                  
                    <?php //Articles récents ?>  
                    <?php
                        include('articles-recents.php');
                    ?>
                  
                </section>

              </div>  
            </div>
        </section>

    </main>


<?php //Pied de page ?>   
<?php
    include('footer.php');
?>