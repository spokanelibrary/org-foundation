<?php
/*
Template Name: Archive (Posts)
*/
?>


<div class="row">

	<div class="col-md-10 col-lg-9">
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>

		<?php
			$args = array( 'numberposts' => '1' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
				echo get_the_title();
				echo '<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>';
			}
		?>

		<div class="panel panel-primary">
			<div class="panel-heading">
				News Archive
			</div>
			<div class="panel-body">
				<ul class="nav nav-pills nav-stacked">
					<?php wp_get_archives(array('type'=>'postbypost','before'=>'<h3>','after'=>'</h3>')); ?>
				</ul>
			</div>
		</div>

	</div>

</div>