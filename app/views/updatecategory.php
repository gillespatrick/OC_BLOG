
<?php include 'app/views/inc/header.php';?>;








<!-- Contact Section -->
<section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">updates categories</h2>
        <hr class="star-dark mb-5">
        
        
        
        
        
        
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form  action="http://localhost/OC_BLOG/index.php?url=Category/updateCat" method="post">
              
                <center>
                    <?php 
                        if(isset($msg)){
                        echo "<span style = 'color:green; font-weight:bold'>".$msg."</span>";
                        }
            
                    ?>
                </center>

              <div class="control-group">
              <?php                
                    foreach ($catbyid as $value) {
                ?>

<input class="form-control" name="id" type="hidden" placeholder="Name" required="1"  value="<?php echo $value['id']?>">

                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" name="name" type="text" placeholder="Name" required="1"  value="<?php echo $value['name']?>" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>  

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Title</label>
                  <input class="form-control " name="title" id="title" type="text" required="1" placeholder="Title" value="<?php echo $value['title']?>" data-validation-required-message="Please enter the title." >
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              

              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="AddCategoryButton">Update</button>
                <?php }  ?>
              </div>

                    
            </form>
          </div>
        </div>
      </div>
    </section>






<?php include 'app/views/inc/footer.php';?>