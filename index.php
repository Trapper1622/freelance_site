<?php ob_start(); ?>


<div class="page-height">

      <div class="homepage-9-container">

        <div class="homepage-9-slider">
          <div id="boxgallery" class="boxgallery" data-effect="effect-1">
            <div class="panel">
              <img src="img/background-103.jpg" alt="" />
            </div>
            <div class="panel">
              <img src="img/background-110.jpg" alt="" />
            </div>
            <div class="panel">
              <img src="img/background-101.jpg" alt="" />
            </div>

            <div class="boxgallery-text">
              <div class="boxgallery-text-panel">
                <div class="text">
                  <!-- <div class="text-animation">
                    <div class="project-logo"><img src="img/project-logo1.png" alt=""></div>
                  </div> -->
                  <div class="empty-space col-xs-b35"></div>
                  <div class="text-animation delay-1">
                    <div class="slide-title h2 small light">Développeur web indépendant</div>
                  </div>
                  <div class="empty-space col-xs-b15"></div>
                  <!-- <div class="text-animation delay-2">
                    <div class="slide-description simple-article large light transparent">Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                  </div> -->
                  <div class="empty-space col-xs-b35"></div>
                  <div class="text-animation delay-3">
                    <a href="service.php" class="button type-3 light">Voir plus</a>
                  </div>
                </div>
              </div>
              <div class="boxgallery-text-panel">
                <div class="text">
                  <!-- <div class="text-animation">
                    <div class="project-logo"><img src="img/project-logo1.png" alt=""></div>
                  </div> -->
                  <div class="empty-space col-xs-b35"></div>
                  <div class="text-animation delay-1">
                    <div class="slide-title h2 small light">Création de site web</div>
                  </div>
                  <div class="empty-space col-xs-b15"></div>
                  <div class="text-animation delay-2">
                    <div class="slide-description simple-article large light transparent">Site vitre, corporate, évènementiel, e-commerce</div>
                  </div>
                  <div class="empty-space col-xs-b35"></div>
                  <div class="text-animation delay-3">
                    <a href="service.php" class="button type-3 light">voir plus</a>
                  </div>
                </div>
              </div>
              <div class="boxgallery-text-panel">
                <div class="text">
                  <!-- <div class="text-animation">
                    <div class="project-logo"><img src="img/project-logo1.png" alt=""></div>
                  </div> -->
                  <div class="empty-space col-xs-b35"></div>
                  <div class="text-animation delay-1">
                    <div class="slide-title h2 small light">Web design, conception graphique</div>
                  </div>
                  <div class="empty-space col-xs-b15"></div>
                  <div class="text-animation delay-2">
                    <div class="slide-description simple-article large light transparent">Logos, plaquettes publicitaires, cartes de visites, newsletters</div>
                  </div>
                  <div class="empty-space col-xs-b35"></div>
                  <div class="text-animation delay-3">
                    <a href="service.php" class="button type-3 light">voir plus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>


<?php $contents = ob_get_clean(); ?>
<?php require('template.php'); ?>