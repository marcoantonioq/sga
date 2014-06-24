	<head>
		<meta charset="utf-8">
		<title>
			<?php echo __($title_for_layout); ?>
		</title>

		<?php
				echo $this->Html->meta('icon');
				echo $this->Html->css(array(
					"bootstrap/bootstrap.rtl",
					"bootstrap/bootstrap-responsive.rtl",
					"tema/jquery.ui.supr",
					"icons",
					"/plugins/forms/uniform/uniform.default",
					"main",
					"custom",
					"rtl",				
				));
				echo $this->fetch('meta');
				echo $this->fetch('css');
				echo $this->fetch('script');

	      echo $this->element('meta');
		?>
			
	    <?php //echo $this->element('layout/linkref'); ?>

	</head>

	<body>      
		<?php //echo $this->element('/layout/loading'); ?>    
	    <?php //echo $this->element('/layout/header'); ?>
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
	    
	    <!-- Le javascript
	    ================================================== -->
		<?php 
		    echo $this->Html->script(array(
		    	"jquery.min.js",
		    	"jquery-ui.min.js",
		        "/js/bootstrap/bootstrap.js",
		        "/js/jquery.cookie.js",
		        "/js/jquery.mousewheel.js",
		        "/js/main.js",
		        "/js/forms.js",
		        "/js/dashboard.js",
		    	'organograma.js',
				'jqueryui/jquery-ui.min.js',
				/*'jquery/jquery.min.js',*/
			)); 
	    echo $this->Html->css(array(
			'organograma.css',
	    )); 
		?>


		<?php 
		    echo $this->Html->script(array(
				'canvasjs.min.js'
		    )); 
		?>
    </body>
</html>

<script>
/*
	var asciiF2		= 113;
	var asciiF3		= 114;
	var asciiF4		= 115;
	var asciiF5		= 116;
	var asciiF6		= 117;
	var asciiF11		= 122;
	var asciiF12		= 123;
	var asciiF1		= 112;

*/
	window.onkeydown = function (e) {

		// Desativar tecla F5
		/*
		if (e.keyCode === 116) 
		{
		  e.keyCode = 0;

		  e.returnValue = false;
		    return false;
		}
		*/
		if (e.keyCode === 112)
		{
			alert("Fico feliz em ajudar!!!\n\nMas não implementei ainda a função ajudar. :(");
			/*
			window.onload=function(){
				window.location="http://www.google.com.br";
		}
		*/
		}

		if (e.keyCode === 113)
		{
			alert("Menu F2");
			window.onload=function()
			{
				window.location="http://localhost/sga/pessoas";
		}
		}

		if (e.keyCode === 114)
		{
			alert("Menu F3");
			window.onload=function()
			{
				window.location="http://localhost/sga/bovinos";
		}
		}	  

		if (e.keyCode === 115)
		{
			alert("Menu F4");
			window.onload=function()
			{
				window.location="http://localhost/sga/bovinos";
		}
		}	 

	}
</script>