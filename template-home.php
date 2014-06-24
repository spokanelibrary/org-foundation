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

<?php //get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>


<footer class="content-info container" role="contentinfo">
  <div class="row">

    <div class="col-sm-8">
      <div class="panel panel-success panel-callout">
        <p class="lead text-success">
          About the Foundation
        </p>

        <p class='lead'>
          The Spokane Public Library Foundation exists because of the generosity of many who have committed their time, gifts and financial resources to continue to strive for excellence in our library. 
        </p>
        <p>
          The Foundation supports the strategic direction of the library and helps to build and encourage partnerships that strengthen our community. 
        </p>
        <p>
          As the Foundation grows, it continues to be a resource to innovate and expand library’s services.
        </p>

        <p class="text-right">
          <a class="btn btn-primary" href="/mission-vision">
            <i class="glyphicon glyphicon-book"></i> Learn More &rarr;
          </a>
        </p>
      </div>
      
    </div><!-- /.col -->
    
    <div class="col-sm-4">
      <div class="panel panel-success panel-callout">
        <p class="lead text-success">
          Make a Difference
        </p>

        <p>
          You can make a difference! 
          How?  
          By donating to the Spokane Public Library Foundation.
        </p>
        <p>  
          The Foundation supports the work of the library whose mission is to provide high quality education for all—opportunities to read, to learn and to discover the world. 
        </p>

        <p class="text-right">
          <a class="btn btn-success" href="/donate">
            <i class="glyphicon glyphicon-gift"></i> Donate Now &rarr;
          </a>
        </p>
      </div>
      
    </div><!-- /.col -->

  </div><!-- /.row -->
</footer>
