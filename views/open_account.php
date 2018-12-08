<?php
    include 'header.php';
    
?>


 <!-- Open Account Section -->
 <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Open your account</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate" action="FunctionUser.php" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="first_name" type="text" placeholder="First Name" required="required" data-validation-required-message="Please enter your first name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="last_name" type="text" placeholder="Last Name" required="required" data-validation-required-message="Please enter your last name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Password</label>
                  <input class="form-control" id="password" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Confirm Password</label>
                  <input class="form-control" id="confirm_password" type="password" placeholder="Confirm Password" required="required" data-validation-required-message="Please enter your password.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              </div>
              
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      
    </section>



    <?php

include 'footer.php';

?>