<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your nomination and will contact you shortly.</h4>
    <dl class="dl-horizontal">

      <dt>Nominee</dt>
      <dd>
        <p>
          <?php echo $crass->request['nominee']; ?>
        </p>
      </dd>

      <dt>Nominee Email</dt>
      <dd>
        <p>
          <?php echo $crass->request['nominee-email']; ?>
        </p>
      </dd>
      
      <dt>Nominee Phone</dt>
      <dd>
        <p>
          <?php echo $crass->request['nominee-phone']; ?>
        </p>
      </dd>

      <dt>Category</dt>
      <dd>
        <?php
        $category = '';
        if ( is_array($crass->request['category']) ) {
          foreach ( $crass->request['category'] as $c => $cat ) {
            $category .= $cat . ', ';
          }
        }
        $category = rtrim(trim($category),',');
        ?>
        <p>
          <?php echo $category; ?>
        </p>
      </dd>

      <dt>Nominee Is</dt>
      <dd>
        <p>
          <?php echo $crass->request['epoch']; ?>
        </p>
      </dd>

      <?php if( !empty($crass->request['essay']) ) : ?>
      <dt>Your Essay</dt>
      <dd>
        <p>
          <?php echo nl2br($crass->request['essay']); ?>
        </p>
      </dd>
      <?php endif; ?>

      <dt>Your Name</dt>
      <dd>
        <p>
          <?php echo $crass->request['name']; ?>
        </p>
      </dd>

      <dt>Your Email Address</dt>
      <dd>
        <p>
          <?php echo $crass->request['email']; ?>
        </p>
      </dd>

      <dt>Your Phone</dt>
      <dd>
        <p>
          <?php echo $crass->request['phone']; ?>
        </p>
      </dd>

    </dl>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php

echo '<pre>';
//print_r($crass);
//print_r($crass->result);
print_r($crass->request); 
echo '</pre>';

?>