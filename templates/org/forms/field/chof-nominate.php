<div class="row">

  <div class="col-md-12">
    
    <?php //echo do_shortcode('[spl_widget login-form label]'); ?>
    
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-trivia-signup" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="chof-nominate" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-pencil"></small>
              Tell us about your nominee
            </legend>
            
            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">Nominee Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-name" name="spl-form[name]" placeholder="">
              </div>
            </div>

            <div class="form-group">

              <label class="col-sm-4 control-label">Category</span></label>
              <div class="col-sm-8">
                <p>
                  Which categories best fit the candidate you are nominating (select all that apply):
                </p>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" 
                          id="spl-form-category-a" 
                          name="spl-form[category][a]"> Arts &amp; Letters
                  </label>
                  <label>
                    <input type="checkbox" 
                          id="spl-form-category-b" 
                          name="spl-form[category][b]"> Economic Development and Business
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">Comments or Questions</label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control" id="spl-form-question" name="spl-form[question]"></textarea>
              </div>
            </div>

            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->
