<?php
/*
Template Name: Archive (Posts)
*/
?>


<div class="row">

	<div class="col-md-10 col-lg-9">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

		<ul class="nav nav-pills nav-stacked">
			<?php wp_get_archives(array('type'=>'postbypost','before'=>'<h3>','after'=>'</h3>')); ?>
		</ul>

	</div>

</div>