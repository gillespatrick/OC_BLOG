<?php
session_start();
if ( isset( $_SESSION['id'] ) ) {
  header( 'Location: account_user.php' );
}

if ( !empty( $_POST ) ) {
  extract( $_POST );
  $error = [];

  require_once 'inc/functions.php';

  if ( empty( $email ) ) {
    $error['email'] = 'Email address missing';
  }
  elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
    $error['email'] = 'Invalid email address';
  }
  elseif ( !mail_free() ) {
    $error['email'] = 'email address already taken';
  }

  if ( empty( $password ) ) {
    $erreur['password'] = 'Missing password';
  }
  elseif ( strlen( $password ) < 8 ) {
    $error['password'] = 'Password must be at least 8 characters';
  }

  if ( empty( $passwordconf ) ) {
    $error['passwordconf'] = 'Password confirmation missing';
  }
  elseif ( $passwordconf != $password ) {
    $error['passwordconf'] = 'Password confirmation';
  }

  if ( !$erreur ) {
    bdd_insert( 'INSERT INTO membre (mail, password) VALUES (:mail, :password)', [
      'mail' => $email,
      'password' => password_hash( $password, PASSWORD_DEFAULT )
    ] );

    unset( $email );

    $validation = 'Inscription réussie !';
  }
}
?>g
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php include 'inc/header.php' ?>
    <div class="container">
      <h1 class="text-xs-center">SIGN UP</h1>
      <div class="row">
        <div class="col-xl-4 col-xl-offset-4 col-md-6 col-md-offset-3">
          <?php if ( isset( $error['email'] ) ) : ?>
            <div class="alert alert-danger"><?= $erreur['email'] ?></div>
          <?php endif; ?>
          <?php if ( isset( $error['password'] ) ) : ?>
            <div class="alert alert-danger"><?= $error['password'] ?></div>
          <?php endif; ?>
          <?php if ( isset( $error['passwordconf'] ) ) : ?>
            <div class="alert alert-danger"><?= $error['passwordconf'] ?></div>
          <?php endif; ?>
          <?php if ( isset( $validation ) ) : ?>
            <div class="alert alert-success"><?= $validation ?></div>
          <?php endif; ?>
          <form action="inscription.php" method="post" class="p-y-3 p-x-2" novalidate>
            <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="<?php if ( isset( $email ) ) echo $email ?>">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe">
            <input type="password" name="passwordconf" class="form-control" placeholder="Confirmez le mot de passe">
            <input type="submit" class="btn btn-success" value="Sign up">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>c