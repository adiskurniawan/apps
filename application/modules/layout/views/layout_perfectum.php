<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>DEMO</title>
	<meta name="description" content="Perfectum Dashboard.">
	<meta name="author" content="Łukasz Holeczek">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<base href="<?php echo base_url(); ?>"/>
	
	<link href="<?php echo base_url(); ?>assets/ace/img/home.png" rel="shortcut icon" type="image/x-icon"/>
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url(); ?>assets/perfectum/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/perfectum/css/bootstrap-responsive.css" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url(); ?>assets/perfectum/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url(); ?>assets/perfectum/css/style-responsive.css" rel="stylesheet">
	


	<style type="text/css">
		a:visited, a:focus, a:active, a:hover{
		outline:0 none !important;
		}
		.btn:visited, .btn:focus, .btn:active, .btn:hover{
		outline:0 none !important;
		}
	</style>

	<!--[if lt IE 7 ]>
	<link id="ie-style" href="<?php // echo base_url(); ?>assets/perfectum/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="<?php // echo base_url(); ?>assets/perfectum/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/perfectum/img/favicon.ico">
	<!-- end: Favicon -->
	
</head>

<body>
	
	
	<div id="overlay">
		<ul>
		  <li class="li1"></li>
		  <li class="li2"></li>
		  <li class="li3"></li>
		  <li class="li4"></li>
		  <li class="li5"></li>
		  <li class="li6"></li>
		</ul>
	</div>


	<?php $this->load->view("layout/top_bar"); ?>
	
	<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div class="span2 main-menu-span">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo base_url(); ?>demo_perfectum/dashboard"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                        <li><a href="<?php echo base_url(); ?>demo_perfectum/ui"><i class="icon-eye-open icon-white"></i><span class="hidden-tablet"> UI Features</span></a></li>
                        <li><a href="<?php echo base_url(); ?>demo_perfectum/form"><i class="icon-edit icon-white"></i><span class="hidden-tablet"> Forms</span></a></li>
						<li><a href="<?php echo base_url(); ?>demo_perfectum/chart"><i class="icon-list-alt icon-white"></i><span class="hidden-tablet"> Charts</span></a></li>
                        <li><a href="<?php echo base_url(); ?>demo_perfectum/typography"><i class="icon-font icon-white"></i><span class="hidden-tablet"> Typography</span></a></li>
						<li><a href="<?php echo base_url(); ?>demo_perfectum/table"><i class="icon-align-justify icon-white"></i><span class="hidden-tablet"> Tables</span></a></li>
						<li><a href="<?php echo base_url(); ?>demo_perfectum/calendar"><i class="icon-calendar icon-white"></i><span class="hidden-tablet"> Calendar</span></a></li>
                        <li><a href="<?php echo base_url(); ?>demo_perfectum/icon"><i class="icon-star icon-white"></i><span class="hidden-tablet"> Icons</span></a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- start: Content -->
			<?php
				echo $main_content;
			?>
			<!-- end: Content -->
			</div><!--/#content.span10-->
		</div><!--/fluid-row-->
				
		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		
		<!--
		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; <a href="" target="_blank">creativeLabs</a> 2012</span>
				<span style="text-align:right;float:right">Powered by: <a href="#">Perfectum Dashboard</a></span>
			</p>
			<div class="clearfix"></div>
		</footer>
		-->
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->

	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery-ui-1.8.21.custom.min.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/perfectum/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.cookie.js"></script>
	<script src='<?php echo base_url(); ?>assets/perfectum/js/fullcalendar.min.js'></script>
	<script src='<?php echo base_url(); ?>assets/perfectum/js/jquery.dataTables.min.js'></script>

	<script src="<?php echo base_url(); ?>assets/perfectum/js/excanvas.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.flot.resize.min.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.chosen.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.uniform.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.cleditor.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.noty.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.elfinder.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.raty.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.iphone.toggle.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.uploadify-3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.gritter.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.imagesloaded.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.masonry.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.knob.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/perfectum/js/custom.js"></script>
	
	<!--
	<script type="text/javascript">
	
	function message_welcome1(){
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Welcome on Perfectum Dashboard',
			// (string | mandatory) the text inside the notification
			text: 'I hope you like this template',
			// (string | optional) the image to display on the left
			image: '<?php echo base_url(); ?>assets/perfectum/img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
	}
	
	function message_welcome2(){
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Perfectum is Amazing Theme',
			// (string | mandatory) the text inside the notification
			text: 'Perfectum works on all devices, computers, tablets and smartphones. Perfectum has lots of great features. Try It!',
			// (string | optional) the image to display on the left
			image: '<?php echo base_url(); ?>assets/perfectum/img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
	}
	
	function message_welcome3(){
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Buy Perfectum!',
			// (string | mandatory) the text inside the notification
			text: 'This great template can be yours today.',
			// (string | optional) the image to display on the left
			image: '<?php echo base_url(); ?>assets/perfectum/img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'gritter-light'
		});
	}
	
	$(document).ready(function(){	
        setTimeout("message_welcome1()",5000);
        setTimeout("message_welcome2()",10000);
        setTimeout("message_welcome3()",15000);
    });			
	
	</script>
	-->

	
</body>
</html>
