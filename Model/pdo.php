<?php
try {
  $bdd = new PDO( 'mysql:host=localhost;dbname=blog', 'gilles', 'gillespatr9ck' );
}
catch ( PDOException $e ) {
  die( 'Erreur : ' . $e->getMessage() );
}
