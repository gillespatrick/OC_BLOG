<?php
session_start();
if ( isset( $_SESSION['id'] ) ) {
  header( 'Location: account_user.php' );
}

if ( !empty( $_POST ) ) {
  extract( $_POST );

  require_once 'inc/functions.php';

  if ( empty( $email ) ) {
    $erreur = 'Email address missing';
  }
  elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    $erreur = 'Invalid email address';
  }
  elseif ( mail_free( $email ) ) {
    $erreur = 'Unknow email address';
  }

  if ( !isset( $error ) ) {
    $password = bin2hex( random_bytes( 8 ) );

    password_save( $password );

    $message = '
    <h1>Here is your password :</h1>
    <p>
      Password : <b>' . $password . '</b><br>
      Remember to change it on your next visit !
    </p>
    ';

    mail_html( 'New password', $message );

    unset( $email );

    $validation = 'New password sent!';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Mot de passe oublié</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'inc/header.php' ?>
    <div class="container">
      <h1 class="text-xs-center">Forgot password</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <?php if ( isset( $error ) ) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
          <?php endif; ?>
          <?php if ( isset( $validation ) ) : ?>
            <div class="alert alert-success"><?= $validation ?></div>
          <?php endif; ?>
          <form action="forgot.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Account email address" value="<?php if ( isset( $email ) ) echo $email ?>">
            <input type="submit" class="btn btn-success" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>