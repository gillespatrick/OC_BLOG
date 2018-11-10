<?php
session_start();
if ( !isset( $_SESSION['id'] ) ) {
  header( 'Location: signin.php' );
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>MY ACCOUNT USER</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'functions/header.php' ?>
    <div class="container profil">
      <h1>MY ACCOUNT</h1>
      
      <a href="password.php" class="btn btn-success">Change your password</a>
    </div>
  </body>
</html>