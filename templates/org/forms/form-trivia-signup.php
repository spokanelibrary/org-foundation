<?php
$crass = wp_get_crass_response();
if ( !empty($crass->request) ) {
  include 'field/triva-signup-response.php';
  } else {
  include 'field/trivia-signup.php';
}
?>

