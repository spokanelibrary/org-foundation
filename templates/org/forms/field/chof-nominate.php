<p class="lead">
  The Spokane Citizen’s Hall of Fame recognizes individuals in Spokane for their achievement in one of six categories, while providing an opportunity to raise funds for the Spokane Public Library. 
</p>
<p>
  <b>Nominations are now open</b> for the second Annual Citizen Hall of Fame between Monday, January 11 and Tuesday, February 9 at 5:00 p.m. 
  More information about the nomination criteria and selection process <a href="/citizen-hall-of-fame-about/">is available here</a>. 
  Printed forms are also available at each of our <a href="http://www.spokanelibrary.org/branches/">six branches</a> and at the MySpokane counter at the first floor of City Hall. 
</p>
<p>
  <a class="btn btn-primary" href="/citizen-hall-of-fame/">Learn more about the Hall of Fame and the nomination process &rarr;</a>
</p>

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
              Tell us about your nominee:
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
                            value="Science and Medicine"> Science, Health and Medicine
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
                          name="spl-form[epoch]" 
                          value="Deceased"> Deceased
                </label>

              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label text-warning"></label>
              <div class="col-sm-8">
                <span class="help-block">
                  <b>
                    If available, please provide contact information for this nominee or the contact information for the closest living relative or friend, if known.
                  </b>
                </span>
                <div class="row">
                  <div class="col-md-6">
                    <b>Nominee's email address</b>
                    <br>
                    <input type="text" class="form-control" id="spl-form-nominee-email" name="spl-form[nominee-email]" placeholder="">
                  </div>
                  <div class="col-md-6">
                    <b>Nominee's phone number</b>
                    <br>
                    <input type="text" class="form-control" id="spl-form-nominee-phone" name="spl-form[nominee-phone]" placeholder="">
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-essay" class="col-sm-4 control-label">Nominee's Story</label>
              <div class="col-sm-8">
                <span class="help-block">
                  <b>
                  In about 500 words or less, please tell us your nominee's inspiring story by answering one or both of these questions:
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
                <textarea rows="10" class="form-control required" id="spl-form-essay" name="spl-form[essay]"></textarea>
              </div>
            </div>

            <legend class="text-muted">
              <small class="glyphicon glyphicon-user"></small>
              Please let us know how to reach you:
            </legend>

            <div class="form-group">

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
                    <input type="text" class="form-control" id="spl-form-email" name="spl-form[email]" placeholder="">
                  </div>
                  <div class="col-md-6">
                    <b>Your phone number</b>
                    <br>
                    <input type="text" class="form-control" id="spl-form-phone" name="spl-form[phone]" placeholder="">
                  </div>
                </div>
              </div>
            </div>

            <legend class="text-muted">
              <small class="glyphicon glyphicon-check"></small>
              Send in your nomination:
            </legend>

            <div class="col-md-8 col-md-offset-4">
              <p>
                <b>Reminder:</b> Nominations must be received by 5:00 p.m. February 1, 2017.
              </p>
              <p>
              Thank you for your interest in the Spokane Citizen Hall of Fame!
              </p>
            </div>

            

            <?php include 'common/field-submit.php'; ?>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->

  </div><!-- /.col -->

</div><!-- /.row -->


<!--
<div id="form-dl">
  <h3>Download a nomination form:</h3>
  Return the completed form to us following the instructions below.
  <a href="/citizen-hall-of-fame-about/">More information about the nomination criteria and selection process is available here</a>.
</div>
<div class="row">
  <div class="col-md-6">
    <a class="btn btn-block btn-danger" href="/wordpress/wp-content/uploads/SCHoF-Nomination-Form.pdf"><i class="glyphicon glyphicon-download"></i> Download a PDF form</a>
  </div>
  <div class="col-md-6">
  <a class="btn btn-block btn-primary" href="http://www.spokanelibraryfoundation.org/wordpress/wp-content/uploads/SCHoF-Nomination-Form-WORD.docx"><i class="glyphicon glyphicon-download"></i> Download MS Word document</a>
  </div>
</div>

<h3>Three ways to send in your form:</h3>
<ol>
  <li>Email your form to us.</li>
  <li>Mail your form to us:
    <b>Spokane Public Library Foundation</b>
    <b>Attn: Sarah Bain</b>
    <b>906 West Main Avenue</b>
    <b>Spokane, WA 99201-0976</b>
  </li>
  <li>Drop off your form at any one of our six <a href="http://beta.spokanelibrary.org/branches/">Spokane Public Library branches</a>.</li>
</ol>
<p>
Forms <b>must</b> reach us no later than 5:00 p.m. on Monday, February 16, 2015.
</p>
-->
