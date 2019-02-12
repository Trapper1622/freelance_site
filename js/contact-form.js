$(document).ready(function() {

  $('#contact-form').submit(function(e) {

    e.preventDefault();
    $('.comments').empty();
    var postdata = $('#contact-form').serialize();

    $.ajax({

      type: 'POST',
      url: 'form-contact.php',
      data: postdata,
      dataType: 'json',
      success: function(result) {

        if (result.isSuccess) {
          $("#contact-form").append("<p style='margin-top: 20px; text-align: center; color: #32CD32; font-size: 25px;'>Votre message a bien été envoyé. Merci de m'avoir contacté </p>");
          $("#contact-form")[0].reset();
        } else {
          $("#name + .comments").html(result.nameError);
          $("#email + .comments").html(result.emailError);
          $("#message + .comments").html(result.messageError);
        }

      }

    });

  });

});
