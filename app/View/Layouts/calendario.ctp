	<head>
		<meta charset="utf-8">
		<title>
			<?php echo $title_for_layout; ?>
		</title>

		<?php
				echo $this->Html->meta('icon');

				echo $this->Html->css(array(
					"fullcalendar/fullcalendar.css",
					"fullcalendar/fullcalendar.print.css",
					"bootstrap/bootstrap.rtl",
					"bootstrap/bootstrap-responsive.rtl",
					"icons",
					"main",
					"rtl",				
				));

				echo $this->Html->script(array(
					"jquery.min.js",
					"fullcalendar/jquery-ui.custom.min.js",
					"fullcalendar/fullcalendar.min.js",
			    ));

				echo $this->fetch('meta');
				echo $this->fetch('css');
				echo $this->fetch('script');

	      echo $this->element('meta');
		?>
			
	</head>

	
	<body>      
	
		<div id="wrapper">
	        <?php echo $this->element('nav/sidebar'); ?>
	        <div id="content-one" class="clearfix">
	            <div class="contentwrapper">				
	                <div class="heading"><!--heading -->
					    <?php echo $this->element('breadcrumb') ?>
					</div> <!--and heading -->			

					<?php echo $this->Session->flash(); ?>
					<?php echo $this->Session->flash('Auth'); ?>
	                <?php echo $this->fetch('content'); ?>

	                <div class="row-fluid">                	
	    				<?php echo $this->element('sql_dump'); ?>
	                </div>
	            </div>
	        </div>
	    
	    </div><!-- End #wrapper -->
   		<?php 

   			echo $this->Html->script(array(
   					"jquery-ui.min.js",
					'jqueryui/jquery-ui.min.js',
					// 'organograma.js',
					"/js/bootstrap/bootstrap.js",
					"/js/jquery.cookie.js",
					"/js/jquery.mousewheel.js",
					"/js/main.js",
					"/js/forms.js",
					"/js/dashboard.js",
					// 'jquery/jquery.min.js',
				)); 

   		 ?>
    </body>
</html>