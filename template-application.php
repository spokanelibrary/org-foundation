<?php
/*
Template Name: Payment Info
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<!--
<div class="alert alert-warning">
	<p>
		Your gift is tax-deductible
	</p>
	<p>
		<small>
			The Spokane Public Library Foundation is a <em class="serif">501(c)(3)</em> charitable organization registered with the IRS and Washington State.
		</small>
	</p>

	<p>
		<small>
			All gifts are tax-deductible to the extent allowed by law.
		</small>
	</p>
</div>
-->

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="donate-form">

	<input type="hidden" name="cmd" value="_donations" id="cmd">

	<input type="hidden" name="business" value="foundation@spokanelibrary.org">
	<input type="hidden" name="no_note" value="1">
	
	<input type="hidden" name="return" value="http://www.spokanelibraryfoundation.org/thank-you/">
	<input type="hidden" name="cancel_return" value="http://www.spokanelibraryfoundation.org/">
	
	<input type="hidden" name="item_number" id="donate-number" value="">
	
	
	<input type="hidden" name="a3" value="" id="a3">
	<input type="hidden" name="p3" value="1"> 
	<input type="hidden" name="t3" value="M">
	<input type="hidden" name="src" value="1"> 
	<input type="hidden" name="sra" value="1">
	
	<div class="panel panel-default">
		<!--
		<div class="panel-heading">
			<h4>
				<i class="glyphicon glyphicon-gift"></i>
				Design your gift 
				<small>one-time or recurring, any amount you choose</small>
			</h4>
		</div>
		-->
		<div class="panel-body">

			<div class="row">

				<div class="col-md-4">
					<fieldset>
						<legend class="text-success">
							1. Your Gift
						</legend>
						<span class="help-block">
							Choose an amount that's right for you.
						</span>
					
						<label class="radio-inline">
							<input type="radio" name="amount" value="35">
							$35.00
						</label>
						<br>
						<label class="radio-inline">
							<input type="radio" name="amount" value="50">
							$50.00
						</label>
						<br>
						<label class="radio-inline">
							<input type="radio" name="amount" value="100">
							$100.00
						</label>
						<br>
						<label class="radio-inline">
							<input type="radio" name="amount" value="250">
							$250.00
						</label>
						<br>
						<label class="radio-inline">
							<input type="radio" name="amount" value="500">
							$500.00
						</label>
						<br>
						
						<label class="radio-inline">
							<input type="radio" name="amount" value="" id="donate-amount">
							<small class="glyphicon glyphicon-edit"></small> 
							<strong>Specify an amount&hellip;</strong>
						</label>
						<br>
						<div class="input-group">
						  <span class="input-group-addon">$</span>
						  <input type="text" id="donate-specify" class="form-control" placeholder="" title="USD">
						</div>

						<h5 class="text-success">
							<i class="glyphicon glyphicon-calendar"></i>
							Consider sustaining support:
						</h5>
						<p>
							<label class="checkbox-inline">
								<input type="checkbox" name="" id="donate-sustain" value="">
								I will give this amount monthly
							</label>
						</p>
						<p>
							<span class="help-block">
								<small>
								Make a recurring contribution monthly for as long as you choose. 
								Cancel any time.
								It's easy on you. It's easy on us. It <em>really</em> makes a difference.
								</small>
							</span>
							
							<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#define-sustain"> 
								<small class="glyphicon glyphicon-info-sign"></small>
								Please tell me more about this
							</button>	
						</p>

						<div id="define-sustain" class="panel panel-default collapse">
							<div class="panel-body">
								<p>
									<strong>Sustaining Contributions</strong>
								</p>
								<p>
									You may cancel your monthly gift any time.
								</p>
								<p>
									To make a sustaining monthly contribution you will need to create a PayPal account, if you do not already have one.
								</p>
								<p>
									Detailed instructions are provided on the payment screen in the next step.
								</p>
								<button type="button" class="btn btn-sm btn-default pull-right" data-toggle="collapse" data-target="#define-sustain">
									OK
								</button>
							</div>
						</div><!-- /.collapse -->
						
					</fieldset>
				</div>

				<div class="col-md-4">
					<fieldset>
						<legend class="text-success">
							2. Our Focus
						</legend>
						<span class="help-block">
							Let us know how you would like us to direct your gift.
						</span>
					
						<label class="radio-inline">
							<input type="radio" name="item_name" value="The greatest needs of the library foundation" checked>
							The greatest needs of the library foundation
						</label>
						<br>
						<label class="radio-inline">
							<input type="radio" name="item_name" value="Education and programming">
							Education and programming
						</label>
						<br>
						<label class="radio-inline">
							<input type="radio" name="item_name" value="A gift in memory of...">
							<small class="glyphicon glyphicon-edit"></small>
							<strong>A gift on behalf of&hellip;</strong>
						</label>
						<br>
						<input name="" id="donate-behalf" type="text" value="" class="form-control" title="On behalf of">
						
						<label class="radio-inline">
							<input type="radio" name="item_name" value="A gift in memory of...">
							<small class="glyphicon glyphicon-edit"></small>
							<strong>A gift in memory of&hellip;</strong>
						</label>
						<br>
						<input name="" id="donate-memory" type="text" value="" class="form-control" title="In memory of">
						<!--
						<label class="radio-inline">
							<input type="radio" name="item_name" value="For a specific purpose...">
							<small class="glyphicon glyphicon-edit"></small>
							<strong>For a specific purpose&hellip;</strong>
						</label>
						<br>
						<small class="help-block">
							Please specify in the comments section.
							<br>
							<em>Thank you!</em>
						</small>
						-->
					</fieldset>
				</div>

				<div class="col-md-4">
					<fieldset>
						<legend class="text-success">
							3. Give Now
						</legend>
						<span class="help-block">
							We will email you a tax receipt.
							Thank you so much!
						</span>

						<div class="form-group">
							<label for="custom">Your comments or instructions:</label>
							<textarea class="form-control" rows="4" name="custom"></textarea>
						</div>

						<p>
							<button type="submit" class="btn btn-warning btn-block">
								<small class="glyphicon glyphicon-credit-card"></small> 
								Proceed to payment &rarr;
							</button>
						</p>

						<p>
							<label class="checkbox-inline">
								<input type="checkbox" name="" id="donate-anon" value="">
								I prefer to give anonymously
							</label>
							<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#define-anon">
								<small class="glyphicon glyphicon-info-sign"></small>
								What does this mean?
							</button>
						</p>

						<div id="define-anon" class="panel panel-default collapse">
							<div class="panel-body">
								<p>
									<strong>We respect your privacy.</strong>
								</p>
								<p>
									We will not contact anonymous donors, except to provide a tax receipt and in the event we require clarification regarding your gift.
								</p>
								<p>
									In addition, your name will not be published in any Foundation communications.
								</p>
								<button type="button" class="btn btn-sm btn-default pull-right" data-toggle="collapse" data-target="#define-anon">
									OK
								</button>
							</div>
						</div>

						<span class="help-block">
							<small>
								We use PayPal to securely process your payment.
								<br />
								A PayPal account is not required unless you choose to establish a sustaining monthly gift.
							</small>
						</span>

					<fieldset>
				</div>

			</div>

		</div><!-- /.panel-body -->
	</div><!-- /.panel -->
</form>