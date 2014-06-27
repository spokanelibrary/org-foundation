<div class="row">

  <div class="col-md-12">
    
    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-trivia-signup" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="trivia-signup" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-question-pencil"></small>
              Register your team &ndash; $750
            </legend>
            
            <?php include 'common/field-contact.php'; ?>

            <div class="form-group">

              <label class="col-sm-4 control-label">Team Members <span class="normal">(Optional)</span></label>
              <div class="col-sm-8">
                <!-- <label for="spl-form-team-a" class="control-label normal"></label>-->
                <input type="text" class="form-control" id="spl-form-team-a" name="spl-form[team][a]" placeholder="">
                <!-- <label for="spl-form-team-b" class="control-label normal"></label>-->
                <input type="text" class="form-control" id="spl-form-team-b" name="spl-form[team][b]" placeholder="">
                <!-- <label for="spl-form-team-c" class="control-label normal"></label>-->
                <input type="text" class="form-control" id="spl-form-team-c" name="spl-form[team][c]" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">Comments or questions</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-question" name="spl-form[question]"></textarea>
              </div>
            </div>

            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->
