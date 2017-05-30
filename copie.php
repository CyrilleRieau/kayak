    <?php
    include('head.php');
    include('header.php');
    include('researchbar.php');
    ?>
        <main class="bottom">
            <section class="block_bottom1">
                <section class="bloc_description">
                    <h4 class="description">Nous recherchons l’hôtel parfait pour vous sur ces sites et plusieurs autres</h4>
                    <nav class="sponsor_pics">
                        <img class="logos" src="images/logo_booking.png" alt="">
                        <img class="logos" id="expedia" src="images/logo_expedia.png" alt="">
                        <img class="logos" src="images/logo_tripadvisor.png" alt="">
                        <img class="logos" src="images/logo_hotels.png" alt="">
                    </nav>
                </section>
                <nav class="explore">
                    <a href=""><img src="images/explore.png" alt=""></a>
                </nav>
            </section>
            <section class="block_bottom2">
                <h2 class="block2_title">L'organisation de votre voyage commence ici</h2>
                <p class="block2_title">Découvrez nos destinations les plus populaires</p>
                <nav class="menu2">

                    <ul>
                        <li class="list2"><a href="">Monde entier</a></li>
                        <li><a href="" class="list25">Populaire</a></li>
                        <li class="list2"><a href="">France</a></li>
                    </ul>
                </nav>

                <!-- IMAGE MOSAIC -->

                <section id="paris">
                    <a href=""><img class="fade" id="img1" src="images/paris.jpg" alt=""></a>
                </section>
                <section class="images">
                    <section class="block_img1">
                        <section class="block_img11">
                            <a href=""><img class="fade" id="bk" src="images/bangkok.jpg" alt=""></a>
                            <section class="block_img111">
                                <a href=""><img class="fade" src="images/alger.jpg" alt=""></a>
                                <a href=""><img class="fade" src="images/barcelone.jpg" alt=""></a>
                            </section>
                        </section>
                        <section class="block_img12">
                            <a href=""><img class="fade" src="images/newyork.jpg" alt=""></a>
                        </section>
                    </section>
                    <section class="block_img2">
                        <section class="block_img21">
                            <a href=""><img class="fade" id="mar" src="images/marseille.jpg" alt=""></a>
                            <a href=""><img class="fade" id="lon" src="images/londres.jpg" alt=""></a>
                        </section>
                        <section class="block_img22">
                            <a href=""><img class="fade" src="images/casablanca.jpg" alt=""></a>
                            <a href=""><img class="fade" src="images/tunis.jpg" alt=""></a>
                            <a href=""><img class="fade" src="images/montreal.jpg" alt=""></a>
                        </section>
                    </section>
                    <section class="block_img3">
                        <section class="block_img31">
                            <a href=""><img class="fade" id="nice" src="images/nice.jpg" alt=""></a>
                            <a href=""><img class="fade" id="la" src="images/losangeles.jpg" alt=""></a>
                        </section>
                        <section class="block_img32">
                            <a href=""><img class="fade" src="images/miami.jpg" alt=""></a>
                            <a href=""><img class="fade" src="images/porto.jpg" alt=""></a>
                            <a href=""><img class="fade" src="images/rome.jpg" alt=""></a>
                        </section>
                    </section>
                </section>

                <!-- END MOSAIC OF IMAGES -->
                <?php
include('tools.php');
?>
        </main>
        <?php
include('footer.php');
?>
</body>

</html>