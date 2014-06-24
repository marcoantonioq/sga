<head>
	<meta charset="utf-8">
	<title>
		<?php echo $title_for_layout; ?>
	</title>

	<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css(array(
				//Core stylesheets do not remove
				"bootstrap/bootstrap.rtl",
				"bootstrap/bootstrap-responsive.rtl",
				"tema/jquery.ui.supr",
				"icons",
				// Plugins stylesheets
				"/plugins/misc/qtip/jquery.qtip",
				"/plugins/misc/fullcalendar/fullcalendar",
				"/plugins/misc/search/tipuesearch",
				"/plugins/forms/uniform/uniform.default",
				// Main stylesheets
				"main",
				// Custom stylesheets ( Put your own changes here ) 
				"custom",
				//Right to left version
				"rtl",
				
			));
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');

      echo $this->element('meta');
	?>
	
</head>

<body>      
	<div class="container-fluid">
	    
	    <div id="header">
	        <div class="row-fluid">
	            <div class="navbar">
	                <div class="navbar-inner">
	                  <div class="container">
	                        <a class="brand" href="dashboard.html">SGA.<span class="slogan">SISTEMA DE GESTÃO RURAL</span></a>
	                        <?php echo $this->Html->image(
				                '/img/template/vaca.png',
				                array(
				                    'url'=>'/',
				                    'alt'=>'logo',
				                    'width'=>'48px'
				                )
				            ); ?>
	                  </div>
	                </div><!-- /navbar-inner -->
	              </div><!-- /navbar -->
	        </div><!-- End .row-fluid -->
	    </div><!-- End #header -->
		
		<div class="row-fluid">
			<div class="span12">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('Auth'); ?>
			</div>
		</div>
		
	</div><!-- End .container-fluid -->


	<div class="container-fluid">
	    <div class="loginContainer">
            <?php echo $this->fetch('content'); ?>
	    </div>
	</div><!-- End .container-fluid -->

    
    <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <!-- Important Place before main.js  -->    
    <!-- Charts plugins -->
    <!-- Misc plugins -->
    <!-- Search plugin -->
    <!-- Form plugins -->
    <!-- Fix plugins -->
    <!-- Init plugins -->
	<?php 
	    echo $this->Html->script(array(
	    	"jquery.min.js",
	    	"jquery-ui.min.js",
	        "/js/bootstrap/bootstrap.js",
	        "/js/jquery.cookie.js",
	        "/js/jquery.mousewheel.js",
	        "/plugins/charts/knob/jquery.knob.js",
	        "/plugins/charts/flot/jquery.flot.js",
	        "/plugins/charts/flot/jquery.flot.grow.js",
	        "/plugins/charts/flot/jquery.flot.pie.js",
	        "/plugins/charts/flot/jquery.flot.resize.js",
	        "/plugins/charts/flot/jquery.flot.tooltip_0.4.4.js",
	        "/plugins/charts/flot/jquery.flot.orderBars.js",
	        "/plugins/charts/sparkline/jquery.sparkline.min.js",
	        "/plugins/misc/fullcalendar/fullcalendar.min.js",
	        "/plugins/misc/qtip/jquery.qtip.min.js",
	        "/plugins/misc/totop/jquery.ui.totop.min.js",
	        "/plugins/misc/search/tipuesearch_set.js",
	        "/plugins/misc/search/tipuesearch_data.js",
	        "/plugins/misc/search/tipuesearch.js",
	        "/plugins/forms/watermark/jquery.watermark.min.js",
	        "/plugins/forms/uniform/jquery.uniform.min.js",
	        "/plugins/fix/ios-fix/ios-orientationchange-fix.js",
	        "/plugins/fix/touch-punch/jquery.ui.touch-punch.min.js",
	        "/js/main.js",
	        "/js/dashboard.js",
	    )); 

		echo $this->Html->script(array(
	    	"tables.js"
	    )); 
	?>


<?php 
    echo $this->Html->script(array(
    	'/plugins/forms/ibutton/jquery.ibutton.min.js',
		'/plugins/forms/smartWizzard/jquery.smartWizard-2.0.min.js',
		'/plugins/gallery/pretty-photo/jquery.prettyPhoto.js',
		'widgets.js',
    )); 
?>
    </body>
</html>
