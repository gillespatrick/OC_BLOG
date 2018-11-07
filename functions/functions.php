<?php
function account_exists() : array {
  $membre = bdd_select( 'SELECT id, password FROM membre WHERE mail = ?', [$_POST['email']] );

  if ( !empty( $membre ) && password_verify( $_POST['password'], $membre[0]['password'] ) ) {
    return $membre[0];
  }
  else {
    return [];
  }
}

function account_informations() : array {
  $membre = bdd_select( 'SELECT * FROM membre WHERE id = ?', [$_SESSION['id']] );

  return $membre[0];
}

function bdd_delete( string $query, array $params = [] ) : int {
  require 'pdo.php';

  if ( $params ) {
    $req = $bdd->prepare( $query );
    $req->execute( $params );
  }
  else {
    $req = $bdd->query( $query );
  }

  $deleted = $req->rowCount();

  return $deleted;
}

function bdd_insert( string $query, array $params = [] ) : int {
  require 'pdo.php';

  if ( $params ) {
    $req = $bdd->prepare( $query );
    $req->execute( $params );
  }
  else {
    $req = $bdd->query( $query );
  }

  $inserted = $req->rowCount();

  return $inserted;
}

function bdd_select( string $query, array $params = [] ) {
  require 'pdo.php';

  if ( $params ) {
    $req = $bdd->prepare( $query );
    $req->execute( $params );
  }
  else {
    $req = $bdd->query( $query );
  }

  $data = $req->fetchAll();

  return $data;
}

function bdd_update( string $query, array $params = [] ) : int {
  require 'pdo.php';

  if ( $params ) {
    $req = $bdd->prepare( $query );
    $req->execute( $params );
  }
  else {
    $req = $bdd->query( $query );
  }

  $updated = $req->rowCount();

  return $updated;
}

function mail_free() : bool {
  $membre = bdd_select( 'SELECT id FROM membre WHERE mail = ?', [$_POST['email']] );

  if ( $membre ) {
    return false;
  }
  else {
    return true;
  }
}

function mail_html( string $subject, string $message ) {
  $headers = 'From: Steven <steven@espacemembre.dev>' . "\r\n";
  $headers .= 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8';

  mail( $_POST['email'], $subject, $message, $headers );
}

function password_ok() : bool {
  $membre = bdd_select( 'SELECT password FROM membre WHERE id = ?', [$_SESSION['id']] );

  if ( password_verify( $_POST['oldpassword'], $membre[0]['password'] ) ) {
    return true;
  }
  else {
    return false;
  }
}

function password_save( string $password = '' ) {
  $newpassword = $_POST['newpassword'] ?? $password;

  if ( isset( $_POST['email'] ) ) {
    bdd_update( 'UPDATE membre SET password = :password WHERE mail = :email', [
      'password' => password_hash( $newpassword, PASSWORD_DEFAULT ),
      'email' => $_POST['email']
    ] );
  }
  else {
    bdd_update( 'UPDATE membre SET password = :password WHERE id = :id', [
      'password' => password_hash( $newpassword, PASSWORD_DEFAULT ),
      'id' => $_SESSION['id']
    ] );
  }
}
