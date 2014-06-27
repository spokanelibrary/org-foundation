<div class="panel panel-success">
  <div class="panel-heading">
    <h3>Thank You!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <h4>We received your registration and will contact you shortly.</h4>
    <dl class="dl-horizontal">

      <dt>Business Name</dt>
      <dd>
        <p>
          <?php echo $crass->request['business']; ?>
        </p>
      </dd>

      <dt>Contact Person</dt>
      <dd>
        <p>
          <?php echo $crass->request['name']; ?>
        </p>
      </dd>
      
      <dt>Email Address</dt>
      <dd>
        <p>
          <?php echo $crass->request['email']; ?>
        </p>
      </dd>

      <dt>Phone Number</dt>
      <dd>
        <p>
          <?php echo $crass->request['phone']; ?>
        </p>
      </dd>

      <dt>Mailing Address</dt>
      <dd>
        <p>
          <?php echo nl2br($crass->request['street']); ?>
          <br>
          <?php echo $crass->request['city']; ?>, 
          <?php echo $crass->request['st']; ?>
          <?php echo $crass->request['zip']; ?>
        </p>
      </dd>

      <?php if( !empty($crass->request['team']) ) : ?>
      <dt>Team Members</dt>
      <dd>
        <p>
          <?php echo $crass->request['team']['a']; ?>
          <br>
          <?php echo $crass->request['team']['b']; ?>
          <br>
          <?php echo $crass->request['team']['c']; ?>
        </p>
      </dd>
      <?php endif; ?>

      <?php if( !empty($crass->request['question']) ) : ?>
      <dt>Comments or Questions</dt>
      <dd>
        <p>
          <?php echo nl2br($crass->request['question']); ?>
        </p>
      </dd>
      <?php endif; ?>

    </dl>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php
/*
echo '<pre>';
//print_r($crass);
//print_r($crass->result);
print_r($crass->request); 
echo '</pre>';
*/
?>