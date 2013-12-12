<?php
/*
Template Name: Archive (Posts)
*/
?>


<div class="row">

	<div class="col-md-10 col-lg-9">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>

	</div>

</div>