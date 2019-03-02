<?php ob_start(); ?>


<div class="fixed-background" style="background-image: url(img/background-contact.jpg);">
  <div class="contacts-wrapper-2">
    <div class="cell-view page-height">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="contacts-wrapper-2-content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3 text-center">
                    <div class="empty-space col-xs-b55 col-sm-b110"></div>

                    <div class="h4"><b>CONTACTEZ MOI</b></div>

                    <div class="empty-space col-xs-b15"></div>

                    <div class="simple-article grey">
                      Une idée ? un projet ? n'hésitez pas à demander un devis (gratuit) !
                    </div>

                    <div class="empty-space col-xs-b15 col-sm-b30"></div>

                    <div class="simple-article grey">
                      Montpellier
                    </div>

                    <!-- <div class="empty-space col-xs-b15 col-sm-b30"></div>

                    <div class="simple-article grey">
                      <a href="tel:+3783034788">+(33) 7 83 03 47 88</a>
                    </div> -->

                    <div class="empty-space col-xs-b15 col-sm-b30"></div>

                    <div class="simple-article grey">
                      <a href="mailto:contact@tristanb.fr">contact@tristanb.fr</a>
                    </div>

                    <div class="empty-space col-xs-b15 col-sm-b30"></div>

                    <!-- <div class="simple-article grey">
                      siren : 
                    </div> -->

                    <div class="empty-space col-xs-b55 col-sm-b110"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="scroll-button style-3 light hidden-xs"></div>
  </div>
</div>

<div class="map-wrapper">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11589.49146847291!2d3.7447271697753903!3d43.431928000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1538668175911"></iframe>
</div>

<!-- <div class="empty-space col-xs-b55 col-sm-b110"></div> -->

<div class="container">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
      <div class="empty-space col-xs-b55 col-sm-b110"></div>

      <div class="h4 text-center"><b>Vous avez une question ?</b></div>

        <div class="empty-space col-xs-b30 col-sm-b60"></div>

      <!-- <form class="contact-form" id="contact-form" method="post" action="" role="form">
        <div class="row col-xs-b30">
          <div class="col-sm-6 col-xs-b30 col-sm-b0">
            <div class="input-wrapper">
              <p class="comments"></p>
              <input name="name" id="name" class="input" type="text">
              <label>Nom</label>
              <span></span>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="input-wrapper">
              <p class="comments"></p>
              <input name="email" id="email" class="input" type="text">
              <label>Email</label>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row col-xs-b30">
          <div class="col-sm-12">
            <div class="input-wrapper">
              <input name="subject" id="subject" class="input" type="text">
              <label>Sujet</label>
              <span></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="input-wrapper">
              <p class="comments"></p>
              <textarea name="message" id="message" class="input"></textarea>
              <label>Message</label>
              <span></span>
            </div>
          </div>
        </div>

        <div class="empty-space col-xs-b40"></div>

        <div class="text-center">
          <div class="button type-3">Envoyer message<input type="submit" /></div>
        </div>
      </form> -->

      <form id="contact-form" class="contact-form" method="post" action="" role="form">
        <div class="row col-xs-b30">
          <div class="col-sm-6 col-xs-b30 col-sm-b0"> 
            <div class="input-wrapper">
              <input type="text" id="name" name="name" class="input" value="" required/>  
              <label>Nom *</label> 
              <span></span>
            </div>
          </div>
          <div class="col-sm-6"> 
            <div class="input-wrapper">
              <input type="email" id="email" name="email" class="input"value="" required/>
              <label>Email *</label>
              <span></span>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="input-wrapper">
                  <textarea id="message" name="message" class="input" required></textarea>
                  <label>Message *</label>
                  <span></span>
                </div>
            </div>
          </div>
          <div class="empty-space col-xs-b40"></div>
            <p><strong>* Ces informations sont requises</strong></p>
            <p class="comments"></p>
          <div class="empty-space col-xs-b40"></div>
            <div class="text-center">
              <div class="button type-3">Envoyer message<input type="submit" /></div>
            </div>
        
      </form>




      <div class="empty-space col-xs-b55 col-sm-b110"></div> -->
    </div>
  </div>
</div>



<?php $contents = ob_get_clean(); ?>
<?php require('template.php'); ?>