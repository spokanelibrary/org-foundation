<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
      <!--
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    	-->
    </div>
  </div>
</footer>


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
	        Vivamus eget suscipit purus, ut accumsan augue. Maecenas consequat mattis consequat.
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


<?php //include('org/footer.php'); ?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script src="/assets/js/vendor/respond.min.js"></script>
<![endif]-->

<?php wp_footer(); ?>