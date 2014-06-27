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
        <?php //get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>

      <!-- </div> -->
      
    </div><!-- /.col -->
    
    <div class="col-sm-4">
      <!-- <div class="panel panel-success panel-callout"> -->
        
        <a href="/trivia-championship"><img src="/assets/img/png/SpokaneTrivia.png"></a>

        <p class="lead help-block">
          You can make a difference!
        </p>

        <p class="text-success">
          <b>
          How?  
          By donating to the Spokane Public Library Foundation.
          </b>
        </p>
        
        <p class="text-right">
          <a class="btn btn-block btn-success" href="/donate">
            <i class="glyphicon glyphicon-gift"></i> Please donate today &rarr;
          </a>
        </p>

        <div class="panel panel-default">
        <div class="panel-body">
        <p class="help-block">  
          The Foundation supports the work of the library, whose mission is to provide high quality education for all &ndash; opportunities to read, to learn and to discover the world. 
        </p>
          </div>
        </div>
      <!-- </div> -->
      
    </div><!-- /.col -->

  </div><!-- /.row -->

