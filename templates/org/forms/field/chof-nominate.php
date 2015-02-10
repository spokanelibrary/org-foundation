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
              Nomination form
            </legend>
            
            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">Nominee Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-nominee" name="spl-form[nominee]" placeholder="">
              </div>
            </div>

            <div class="form-group">

              <label class="col-sm-4 control-label">For Achievements In</label>
              <div class="col-sm-8">
                <span class="help-block">
                  <b>
                    Which categories best fit the candidate you are nominating?
                  </b>
                  <br> 
                  (select all that apply)
                </span>
                <div class="well well-sm">
                  &nbsp;
                  <label class="checkbox-inline">
                    <input type="checkbox" 
                            id="spl-form-category-a" 
                            name="spl-form[category][a]"
                            value="Arts and Letters"> Arts &amp; Letters
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" 
                            id="spl-form-category-b" 
                            name="spl-form[category][b]"
                            value="Economic Development and Business"> Economic Development &amp; Business
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" 
                            id="spl-form-category-c" 
                            name="spl-form[category][c]"
                            value="Education"> Education
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" 
                            id="spl-form-category-d" 
                            name="spl-form[category][d]"
                            value="Innovation and Leadership"> Innovation &amp; Leadership
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" 
                            id="spl-form-category-e" 
                            name="spl-form[category][e]"
                            value="Public Service and Philanthropy"> Public Service &amp; Philanthropy
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" 
                            id="spl-form-category-f" 
                            name="spl-form[category][f]"
                            value="Science and Medicine"> Science and Medicine
                  </label>
                </div>
                
              </div>
            </div>

            <div class="form-group">

              <label class="col-sm-4 control-label">Nominee Is</label>
              <div class="col-sm-8">

                <label class="radio-inline">
                  <input type="radio" 
                          id="spl-form-epoch-living" 
                          name="spl-form[epoch]" 
                          value="Living"> Living
                </label>

                <label class="radio-inline">
                  <input type="radio" 
                          id="spl-form-epoch-deceased" 
                          name="spl-form[deceased]" 
                          value="Deceased"> Deceased
                </label>

              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label text-warning">Optional</label>
              <div class="col-sm-8">
                <span class="help-block">
                  <b>
                    If available, please provide contact information for this nominee.
                  </b>
                </span>
                <div class="row">
                  <div class="col-md-6">
                    Nominee's email address:
                    <br>
                    <input type="text" class="form-control required" id="spl-form-nominee-email" name="spl-form[nominee-email]" placeholder="">
                  </div>
                  <div class="col-md-6">
                    Nominee's phone number:
                    <br>
                    <input type="text" class="form-control required" id="spl-form-nominee-phone" name="spl-form[nominee-phone]" placeholder="">
                  </div>
                </div>
              </div>
            </div>

            <hr>

            <div class="form-group">
              <label for="spl-form-question" class="col-sm-4 control-label">Nominee's Story</label>
              <div class="col-sm-8">
                <span class="help-block">
                  <b>
                  In about 500 words, please tell us your nominee's inspiring story by answering one or both of these questions:
                  </b>
                </span>
                <ul>
                  <li>
                    Why does this individual deserve recognition?
                  </li>
                  <li>
                    How has this individual's achievements brought recognition to Spokane and/or contributed to Spokane's development and quality of life?
                  </li>
                </ul>
                <textarea rows="10" class="form-control" id="spl-form-story" name="spl-form[story]"></textarea>
              </div>
            </div>

            <hr>

            <div class="form-group">
              <div class="col-md-12">
                <h4>
                  Please let us know how to reach you:
                </h4>
              </div>                

              <label for="spl-form-name" class="col-sm-4 control-label">Your Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control required" id="spl-form-name" name="spl-form[name]" placeholder="">
              </div>

              <label for="spl-form-name" class="col-sm-4 control-label">&nbsp;</label>
              <div class="col-sm-8">
    
                <div class="row">
                  <div class="col-md-6">
                    <b>Your email address</b>
                    <br>
                    <input type="text" class="form-control required" id="spl-form-email" name="spl-form[email]" placeholder="">
                  </div>
                  <div class="col-md-6">
                    <b>Your phone number</b>
                    <br>
                    <input type="text" class="form-control required" id="spl-form-phone" name="spl-form[phone]" placeholder="">
                  </div>
                </div>
              </div>
            </div>

            <hr>

            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->
