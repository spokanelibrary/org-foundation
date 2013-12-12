<?php
/*
Template Name: - Home Page
*/
?>

<?php //get_template_part('templates/page', 'header'); ?>

<p>
<img class="img-responsive" src="http://lorempixel.com/1200/300/people" >
</p>

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>

<?php do_shortcode('[recent_posts]'); ?>

<footer class="content-info container" role="contentinfo">
  <div class="row">

    <div class="col-sm-6">
      <div class="panel panel-success panel-callout">
        <p class="lead text-success">
          About the Foundation
        </p>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Cras nec rutrum nisi. 
          Vivamus eget suscipit purus, ut accumsan augue.
        </p>

        <p>
          <button class="btn btn-primary">
            More &rarr;
          </button>
        </p>
      </div>
      
    </div><!-- /.col -->
    
    <div class="col-sm-6">
      <div class="panel panel-success panel-callout">
        <p class="lead text-success">
          Make a difference
        </p>

        <p>
          Nunc eu consectetur odio, sit amet aliquet dolor. 
          Vestibulum dictum eros neque, non posuere lacus iaculis at.
          Etiam fringilla odio nec tempor molestie.
        </p>

        <p>
          <button class="btn btn-primary">
            More &rarr;
          </button>
        </p>
      </div>
      
    </div><!-- /.col -->

  </div><!-- /.row -->
</footer>
