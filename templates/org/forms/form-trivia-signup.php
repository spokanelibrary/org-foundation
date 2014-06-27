<?php
$crass = wp_get_crass_response();
//print_r($crass);
if ( !empty($crass->request) ) {
  include 'field/trivia-signup-response.php';
  } else {
  include 'field/trivia-signup.php';
}
?>

