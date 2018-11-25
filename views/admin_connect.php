<?php
//session_start();

$title = "SIGN IN";

//require('../controller/controller.php');
include 'header.php';



//if (!empty($_SESSION['username'])) {
  //  echo "</br></br></br></br></br></br>Vous êtes déjà connecté</br> <a href=\"adminPanel.php\">Retourner à l'administration</a>";
   // return;
//}
//$_SESSION['blueIce'] = bin2hex(random_bytes(32));
?>






<!-- Sign in Section -->
<section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Administrator Section</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Login</label>
                  <input class="form-control" id="login" type="login" placeholder="Login" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Password</label>
                  <input class="form-control" id="password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              
              
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Sign in</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>












<?php

include 'footer.php';

?>