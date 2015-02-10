<?php
$crass = wp_get_crass_response();
//print_r($crass);
if ( !empty($crass->request) ) {
  include 'field/chof-nominate-response.php';
  } else {
  include 'field/chof-nominate.php';
}
?>

