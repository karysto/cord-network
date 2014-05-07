<?php
/**
 * Template Name: Homepage Template
 *
 * @author Bowe Frankema <bowe@presscrew.com>
 * @link http://shop.presscrew.com/
 * @copyright Copyright (C) 2010-2011 Bowe Frankema
 * @license http://www.gnu.org/licenses/gpl.html GPLv2 or later
 * @since 1.0
 */
    infinity_get_header();
?>
<script type="text/javascript">
  var uvOptions = {};
  (function() {
    var uv = document.createElement('script'); uv.type = 'text/javascript'; uv.async = true;
    uv.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'widget.uservoice.com/PqeUIaF0M9uV0ye3mLFxQ.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(uv, s);
  })();
</script>

<div id="content" role="main" class="column sixteen">
	<div id="top-homepage" class="row">
		<div id="flex-slider-wrap-full" class="column ten">
			<!-- load template for the slider-->
			<?php
				infinity_load_template( 'engine/includes/feature-slider/template.php' );
			?>
			<!-- end -->
		</div>	
		<div id="homepage-sidebar-right" class="column six">
			<div id="homepage-sidebar">
		        <?php
		            dynamic_sidebar( 'Homepage Top Right' );
		        ?>
			</div>
		</div>
	</div>
    <?php
        do_action( 'open_content' );
        do_action( 'open_home' );
    ?>   
 
 	<div id="center-homepage" class="homepage-widgets row">
	    <div id="homepage-widget-left" class="column five homepage-widget">         
	            <?php
	                dynamic_sidebar( 'Homepage Center Left' );
	            ?>
	    </div>
	             
	    <div id="homepage-widget-middle" class="column five homepage-widget">  
	            <?php
	                dynamic_sidebar( 'Homepage Center Middle' );
	            ?>
	    </div>
	     
	    <div id="homepage-widget-right" class="column six homepage-widget">   
	            <?php
	            	dynamic_sidebar( 'Homepage Center Right' );
	            ?>
	    </div>  
	</div>      

 
     
	<div class="homepage-widgets row">
	    <div id="homepage-widget-left" class="column five homepage-widget">         
	            <?php
	                dynamic_sidebar( 'Homepage Left' );
	            ?>
	    </div>
	             
	    <div id="homepage-widget-middle" class="column five homepage-widget">  
	            <?php
	                dynamic_sidebar( 'Homepage Middle' );
	            ?>
	    </div>
	     
	    <div id="homepage-widget-right" class="column six homepage-widget">   
	            <?php
	            	dynamic_sidebar( 'Homepage Right' );
	            ?>
	    </div>  
	</div>      
    <?php
        do_action( 'close_home' );
        do_action( 'close_content' );
    ?>
</div>
<?php
    infinity_get_footer();
?>
