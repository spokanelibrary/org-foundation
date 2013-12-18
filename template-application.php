<?php
/*
Template Name: Payment Info
*/
?>

<?php get_template_part('templates/page', 'header'); ?>
<div class="row">

	<div class="col-md-8">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>

	<div class="col-md-4">
		<div class="alert alert-warning">
			<p>
			<small class="glyphicon glyphicon-info-sign"></small>
			Your gift is tax-deductible
			</p>
			<p>
				<small>
					The Spokane Public Library Foundation is a <em class="serif">501(c)(3)</em> charitable organization registered with the IRS and Washington State.
					<a href="/financial-info">Learn more &rarr;</a>
				</small>
			</p>

			<p>
				<small>
					All gifts are tax-deductible to the extent allowed by law.
				</small>
			</p>
		</div>
	</div>

</div>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_xclick-subscriptions">
	<input type="hidden" name="business" value="sbain@spokanelibrary.org">
	
	<input type="hidden" name="item_name" value="Example Donation"> 
	<input type="hidden" name="item_number" value="2008">
	<!--
	<input type="hidden" name="amount" value="50">
	<input type="hidden" name="no_note" value="0">
	-->
	
	<input type="hidden" name="a3" value="20.00">
	<input type="hidden" name="p3" value="1"> 
	<input type="hidden" name="t3" value="M">
	<input type="hidden" name="src" value="1"> 
	<input type="hidden" name="sra" value="1">
	
	<!--
	<input type="hidden" name="item_name_1" vale="Donation"> 
	<input type="hidden" name="on0_1" vale="MY Donation"> 
	<input type="hidden" name="os0_1" vale="MY Value"> 
	-->

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
						<legend>Your Gift</legend>
						<span class="help-block">
							You can lorem ipsum.
						</span>
						<!--
						<p>
							<label class="radio-inline">
							<input type="radio" name="amount" value="10">
							$10.00
							</label>
							<br>
							<label class="radio-inline">
							<input type="radio" name="amount" value="25">
							$25.00
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
							<input type="radio" name="amount" value="500">
							$500.00
							</label>
						</p>
						-->
						<!--
						<p>
							<label>
							Other amount
							<br>
							<strong>$</strong> <input size="10" name="amount" id="amount" type="text" value="42" class="" title="USD">
							</label>
						</p>
						-->
					</fieldset>
				</div>

				<div class="col-md-4">
					<fieldset>
						<legend>Our Resources</legend>
						<span class="help-block">
							Please lorem ipsum.
						</span>
						<!--
						<p>
							<label class="radio-inline">
							<input type="radio" name="item_name" value="one">
							Where it's most needed
							</label>
							<br>
							<label class="radio-inline">
							<input type="radio" name="item_name" value="two">
							Books and Library resources
							</label>
							<br>
							<label class="radio-inline">
							<input type="radio" name="item_name" value="three">
							Programs for children and teens
							</label>
							<br>
							<label class="radio-inline">
							<input type="radio" name="item_name" value="three">
							Programs for all Library users
							</label>
							<br>
							<label class="radio-inline">
							<input type="radio" name="item_name" value="three">
							A gift in memory of&hellip;
							</label>
							<br>
							<label class="radio-inline">
							<input type="radio" name="item_name" value="three">
							A gift in honor of&hellip;
							</label>
						</p>
						-->
						<!--
						<p>
						<label>
						Other <small>(please specify)</small>
						<br>
						<input size="20" name="item_name" id="" type="text" value="My reason" class="" title="USD">
						</label>
						</p>
						-->
					</fieldset>
				</div>

				<div class="col-md-4">
					<legend>Donate Now</legend>
						<span class="help-block">
							We will lorem ipsum.
						</span>
						<button type="submit" class="btn btn-warning">
							<i class="glyphicon glyphicon-credit-card"></i> 
							Proceed to payment &rarr;
						</button>
				</div>

			</div>

		</div><!-- /.panel-body -->
	</div><!-- /.panel -->
</form>