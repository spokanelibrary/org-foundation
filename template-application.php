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
	<input type="hidden" name="cmd" value="_donations">
	<input type="hidden" name="business" value="sbain@spokanelibrary.org">
	<input type="hidden" name="item_name" vale="Donation"> 

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
					
					<p>
						<label class="radio-inline">
						<input type="radio" name="amount" value="10.00">
						$10.00
						</label>
						<br>
						<label class="radio-inline">
						<input type="radio" name="amount" value="25.00">
						$25.00
						</label>
						<br>
						<label class="radio-inline">
						<input type="radio" name="amount" value="50.00">
						$50.00
						</label>
						<br>
						<label class="radio-inline">
						<input type="radio" name="amount" value="50.00">
						$100.00
						</label>
					</p>
					<p>
					<label>
					Other amount:
					<br>
					<strong>$</strong><input size="15" name="amount" id="amount" type="text" value="" class="" title="USD">
					</label>
					</p>
				</div>

				<div class="col-md-4">
					asdf
				</div>

				<div class="col-md-4">
					<button type="submit" class="btn btn-warning">
						<i class="glyphicon glyphicon-credit-card"></i> 
						Proceed to payment &rarr;
					</button>
				</div>

			</div>

		</div><!-- /.panel-body -->
	</div><!-- /.panel -->
</form>