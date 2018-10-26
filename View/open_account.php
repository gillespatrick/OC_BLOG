<?php
session_start();
if ( isset( $_SESSION['id'] ) ) {
  header( 'Location: compte.php' );
}
?>



<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>OPEN ACCOUNT</title>
     <!-- Bootstrap core CSS -->
     <link href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
<link href="http://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet"> 
<link href="http://getbootstrap.com/docs/4.1/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body>
  
  <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="../index.php">Gilles Patrick</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="signin.php">Have you account?</a>
          </div>
        </div>
      </header> <br/><br/><br/>
  
  <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal"> Enrollement</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus><br/>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPasswordConf" class="sr-only">confirmation Password</label>
      <input type="password" id="inputPasswordconf" class="form-control" placeholder="Confirmation Password" required>
     
      <div class="checkbox mb-3">
        
      </div>
      <button class="btn btn-lg btn-primary btn-success" type="submit">Enroll</button>
      <p class="mt-5 mb-3 text-muted">&copy; Gilles Patrick 2018</p>
    </form>

    
        </div>
      </div>
    </div>
    
  </body>
</html>
