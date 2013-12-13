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

			<p>
				<small>
					The Spokane Public Library Foundation is a 501(c)(3) charitable organization registered with the IRS and Washington State.
				</small>
			</p>

			<p>
				<small>
					All gifts are tax-deductible to the extent allowed by law.
				</small>
			</p>

	</div>

</div>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<div class="panel panel-default">
		<div class="panel-heading">
			Lorem ipsum
		</div>

		<div class="panel-body">

			<div class="row">

				<div class="col-md-4">
					
						<input type="hidden" name="cmd" value="_donations">
						<input type="hidden" name="business" value="sbain@spokanelibrary.org">
						<input type="hidden" name="item_name" vale="Donation"> 
						<input name="amount" id="amount" type="text" value="" class="" title="USD">
					
				</div>

				<div class="col-md-4">
					asdf
				</div>

				<div class="col-md-4">
					<button type="submit" class="btn btn-default">Donate &ararr;</button>
				</div>

			</div>

		</div><!-- /.panel-body -->
	</div><!-- /.panel -->
</form>