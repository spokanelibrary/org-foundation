<?php
/*
Template Name: - Home Page
*/
?>

<?php //get_template_part('templates/page', 'header'); ?>

<p>
  <img class="img-responsive img-rounded" src="/assets/img/jpg/promo-foundation.jpg" >
<!--<img class="img-responsive" src="http://lorempixel.com/1200/300/people" > -->
</p>


  <div class="row">

    <div class="col-sm-8">
      <!-- <div class="panel panel-success panel-callout"> -->
        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>
        

        <p class="text-right">
          <a class="btn btn-primary" href="/mission-vision">
            <i class="glyphicon glyphicon-book"></i> Learn More &rarr;
          </a>
        </p>
      <!-- </div> -->
      
    </div><!-- /.col -->
    
    <div class="col-sm-4">
      <div class="panel panel-success panel-callout">
        <p class="lead text-primary">
          You can make a difference!
        </p>

        <p>
          <b>
          How?  
          By donating to the Spokane Public Library Foundation.
          </b>
        </p>
        <p>  
          The Foundation supports the work of the library whose mission is to provide high quality education for all &ndash; opportunities to read, to learn and to discover the world. 
        </p>

        <p class="text-right">
          <a class="btn btn-success" href="/donate">
            <i class="glyphicon glyphicon-gift"></i> Donate Now &rarr;
          </a>
        </p>
      </div>
      
    </div><!-- /.col -->

  </div><!-- /.row -->

