<?php ob_start(); ?>

<div class="page-height">

            <div class="homepage-14-container">

                <div class="homepage-14-slider style-1">
                    

                    <div class="swiper-container" data-speed="1000">
                        <div class="swiper-button-prev swiper-button hidden style-3"></div>
                        <div class="swiper-button-next swiper-button hidden style-3"></div>

                        <div class="swiper-wrapper">

                            <div class="swiper-slide" style="background-image: url(img/bg_about_us.jpg);">
                                <div class="full-size valign-middle">
                                    <div class="valign-text-wrapper text-center">
                                        <div class="slide-title h2"><b>A propos</b></div>
                                        <div class="empty-space col-xs-b15"></div>
                                        <div class="banner-max-width">
                                            <div class="slide-description simple-article large grey">Je suis développeur web freelance et j'aime ça !</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        <div class="swiper-pagination visible-xs"></div>
                    </div>

                    <div class="scroll-button style-3 hidden-xs"></div>


                </div>

            </div>
        </div>

        <div class="empty-space col-xs-b15 col-sm-b110"></div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="h4"><b>Je me présente en quelques lignes !</b></div>
                    <div class="col-xs-b15"></div>
                    <div class="simple-article grey large">
                        <p>Développeur front-end Freelance sur Montpellier, je suis passionné par les nouvelles technologies et encore plus par la conception web. 

                        Je suis en perpétuel apprentissage afin d’améliorer au mieux mes compétences. Je suis spécialisé dans l’intégration et le développement Front-end mais aussi dans le développement de site wordpress. 

                        Je travaille de façon structurée pour que mon code ou les projets puissent être compris et réutilisés.
                        J’accorde une grande importance au besoin et à la satisfaction du client. 

                        J’ai commencé en autodidacte pour ensuite faire une formation de développeur web afin de solidifier mes compétences dans le développement front-end et back-end.

                        Je vous invite à découvrir mes différentes réalisations. ( mon portfolio : tristanb.fr )

                        Je suis Motivé par le besoin de faire toujours mieux et appuyé par de solides bases acquises lors de mon parcours ( Javascript, php, html, CSS, Wordpress ), je prends plaisir à relever de nouveaux challenges.

                        <p><center>Voici mes domaines de compétences :</center></p>
                        </p>
                    </div>
                    <div class="empty-space col-xs-b35"></div>
                    <div class="row">
                        <div class="col-sm-3 text-left">
                            <div class="simple-article grey">
                                <p><span>Design :</span>
                                    <br>
                                - Adobe Photoshop
                                <br>
                                - Adobe XD
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-left">
                            <div class="simple-article grey">
                                <p><span>Développement web :</span>
                                    <br>
                                - Intégration HTML5 / CSS3 ( responsive )<br>
                                - Javascript<br>
                                - PHP<br>
                                - MySQL
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-left">
                            <div class="simple-article grey">
                                <p><span>CMS :</span>
                                    <br>
                                - Wordpress <!--( Création de site web, Installation et Configuration de thème, Création de thème, Installation et Configuration de plugins, création de plugin etc )--><br>
                                - Prestashop<br>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-3 text-left">
                            <div class="simple-article grey">
                                <p><span>frameworks / autres</span>
                                    <br>
                                <br>
                                - Reactjs<br>
                                - Bootstrap 4<br>
                                - Git<br>
                                - SASS<br>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="empty-space col-xs-b35"></div>
                    <a href="contact.php" class="button type-3">CONTactez moi</a>
                </div>
            </div>
        </div>
            <div class="empty-space col-xs-b55 col-sm-b110"></div>

        <div class="row nopadding">
            <div class="col-xs-6 col-sm-3 nopadding"><img class="image-wide-thumbnail" src="img/thumbnail-81.jpg" alt="" /></div>
            <div class="col-xs-6 col-sm-3 nopadding"><img class="image-wide-thumbnail" src="img/thumbnail-82.jpg" alt="" /></div>
            <div class="col-xs-6 col-sm-3 nopadding"><img class="image-wide-thumbnail" src="img/thumbnail-83.jpg" alt="" /></div>
            <div class="col-xs-6 col-sm-3 nopadding"><img class="image-wide-thumbnail" src="img/thumbnail-84.jpg" alt="" /></div>
        </div>

        <div class="empty-space col-xs-b55 col-sm-b110"></div>


<?php $contents = ob_get_clean(); ?>
<?php require('templateNoLight.php'); ?>