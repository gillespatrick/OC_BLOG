<?php
session_start();
if ( isset( $_SESSION['id'] ) ) {
  header( 'Location: account_user.php' );
}

if ( !empty( $_POST ) ) {
  extract( $_POST );

  require_once 'Controllers/functions.php';

  $membre = account_exists();

  if ( $membre ) {
    $_SESSION['id'] = $membre['id'];

    header( 'Location: compte.php' );
  }
  else {
    $error = 'Identifiants erronés';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>SIGN IN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="Views/css/style.css">
  </head>
  <body>
    <?php include 'Views/inc/header.php' ?>
    <div class="container">
      <h1 class="text-xs-center">SIGN IN</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <?php if ( isset( $error ) ) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
          <?php endif; ?>
          <form action="signin.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Email address" value="<?php if ( isset( $email ) ) echo $email ?>">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <input type="submit" class="btn btn-success m-b-1" value="Sign in">
            <a href="forgot.php" class="text-success">Forgot password?</a>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>