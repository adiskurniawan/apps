<!DOCTYPE html>
<html lang="en">
<head>
	
<base href="<?php echo base_url(); ?>"/>
<meta charset="utf-8">
<title>DEMO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Demo">
<meta name="author" content="Adi Kurniawan">

<base href="<?php echo base_url(); ?>"/>

<!-- <link rel="shortcut icon" href="assets/charisma/img/favicon.ico"> -->
<link href="<?php echo base_url(); ?>assets/charisma/img/home.png" rel="shortcut icon" type="image/x-icon"/>

<!-- The styles -->
<link href="<?php echo base_url(); ?>assets/charisma/css/bootstrap-cerulean.css" rel="stylesheet" id="bs-css"/>

<style type="text/css">
  body {
	padding-bottom: 40px;
  }
  .sidebar-nav {
	padding: 9px 0;
  }
</style>

<link href="<?php echo base_url(); ?>assets/charisma/css/bootstrap-responsive.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/charisma/css/app.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/charisma/css/jquery-ui-1.8.21.custom.css" rel="stylesheet"/>

<link href='<?php echo base_url(); ?>assets/charisma/css/fullcalendar.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/fullcalendar.print.css' rel='stylesheet' media='print'>
<link href='<?php echo base_url(); ?>assets/charisma/css/chosen.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/uniform.default.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/colorbox.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/jquery.cleditor.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/jquery.noty.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/noty_theme_default.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/elfinder.min.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/elfinder.theme.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/jquery.iphone.toggle.css' rel='stylesheet'>
<link href='<?php echo base_url(); ?>assets/charisma/css/uploadify.css' rel='stylesheet'>
<link href="<?php echo base_url(); ?>assets/charisma/css/jquery.validationEngine.css" rel="stylesheet">

</head>

<body>

<?php $this->load->view("layout/top_bar"); ?>
<div style="height:20px"></div>	

<div class="container-fluid">
	<div class="row-fluid">
			
		<!-- left menu starts -->
		<div class="span2 main-menu-span">
			<div class="well nav-collapse sidebar-nav">
				<ul class="nav nav-tabs nav-stacked main-menu">
					<li class="nav-header hidden-tablet">Demo</li>
					<li><a class="ajax-link" href="<?php echo base_url(); ?>demo_charisma/dashboard"><i class="icon-home"></i><span class="hidden-tablet"> <?php echo lang('dashboard'); ?></span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url(); ?>demo_charisma/ui"><i class="icon-eye-open"></i><span class="hidden-tablet"> <?php echo lang('ui_features'); ?></span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url(); ?>demo_charisma/form"><i class="icon-edit"></i><span class="hidden-tablet"> <?php echo lang('forms'); ?></span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url(); ?>demo_charisma/chart"><i class="icon-list-alt"></i><span class="hidden-tablet"> <?php echo lang('charts'); ?></span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url(); ?>demo_charisma/table"><i class="icon-align-justify"></i><span class="hidden-tablet"> <?php echo lang('tables'); ?></span></a></li>
					<li><a class="ajax-link" href="<?php echo base_url(); ?>demo_charisma/calendar"><i class="icon-calendar"></i><span class="hidden-tablet"> <?php echo lang('calendar'); ?></span></a></li>
				</ul>
				<label id="for-is-ajax" style="display:none;" class="hidden-tablet" for="is-ajax"><input id="is-ajax" value="1" type="checkbox"> Ajax on menu</label>
			</div>
		</div>
		<!-- left menu ends -->
		
		<noscript>
			<div class="alert alert-block span10">
				<h4 class="alert-heading">Warning!</h4>
				<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
			</div>
		</noscript>
		
		<div id="content" class="span10">
		<!-- content starts -->
				<?php
				echo $main_content;
				?>

		</div><!--/#content.span10-->
	</div><!--/fluid-row-->
			
	<!-- <hr> -->

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

</div><!--/.fluid-container-->

<!-- external javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

	
<script src="<?php echo base_url(); ?>assets/charisma/js/modernizr-2.0.6.min.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery-1.7.2.min.js"></script>
<!-- jQuery UI -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript">
	$(function() {
		$( "#main_accordion" ).accordion({
    		autoHeight: false,
    		navigation: true 
		});
	});
</script>
<!-- transition / effect library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-transition.js"></script>
<!-- alert enhancer library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-alert.js"></script>
<!-- modal / dialog library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-modal.js"></script>
<!-- custom dropdown library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-dropdown.js"></script>
<!-- scrolspy library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-scrollspy.js"></script>
<!-- library for creating tabs -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-tab.js"></script>
<!-- library for advanced tooltip -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-tooltip.js"></script>
<!-- popover effect library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-popover.js"></script>
<!-- button enhancer library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-button.js"></script>
<!-- accordion library (optional, not used in demo) -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-collapse.js"></script>
<!-- carousel slideshow library (optional, not used in demo) -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-carousel.js"></script>
<!-- autocomplete library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-typeahead.js"></script>
<!-- tour library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/bootstrap-tour.js"></script>
<!-- library for cookie management -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.cookie.js"></script>
<!-- calander plugin -->
<script src='<?php echo base_url(); ?>assets/charisma/js/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url(); ?>assets/charisma/js/jquery.dataTables.min.js'></script>

<!-- chart libraries start -->
<script src="<?php echo base_url(); ?>assets/charisma/js/excanvas.js"></script>
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.flot.stack.js"></script>
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.flot.resize.min.js"></script>
<!-- chart libraries end -->

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.chosen.min.js"></script>
<!-- checkbox, radio, and file input styler -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.uniform.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.colorbox.min.js"></script>
<!-- rich text editor library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.cleditor.min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.noty.js"></script>
<!-- file manager library -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.elfinder.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url(); ?>assets/charisma/js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url(); ?>assets/charisma/js/charisma.js"></script>

</body>
</html>