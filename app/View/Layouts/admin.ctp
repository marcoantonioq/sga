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

    <?php echo $this->element('layout/linkref'); ?>

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