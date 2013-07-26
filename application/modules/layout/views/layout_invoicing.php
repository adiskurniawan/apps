<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>DEMO</title>

		<!-- <meta name="description" content="overview &amp; stats" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<base href="<?php echo base_url(); ?>"/>
		
		<link href="<?php echo base_url(); ?>assets/ace/img/home.png" rel="shortcut icon" type="image/x-icon"/>
		<!--basic styles-->
		<link href="<?php echo base_url(); ?>assets/ace/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/ace/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/font-awesome.min.css" />

		<!--page specific plugin styles-->
		<!--elements styles-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/jquery.gritter.css" />

		<!--fonts-->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/ace-skins.min.css" />

		<style type="text/css">
			a:visited, a:focus, a:active, a:hover{
			outline:0 none !important;
			}
			.btn:visited, .btn:focus, .btn:active, .btn:hover{
			outline:0 none !important;
			}
		</style>

		<!--inline styles if any-->
	</head>

	<body>

		<?php $this->load->view("layout/top_bar"); ?>

		<div class="container-fluid" id="main-container">

			<?php $this->load->view("layout/layout_ace_side_bar"); ?>

			<div id="main-content" class="clearfix">
				<?php echo $main_content; ?>
			</div><!--/#main-content-->
		</div><!--/.fluid-container#main-container-->

		<a href="#" id="btn-scroll-up" class="btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>

		<!--basic scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery-1.9.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/bootstrap.min.js"></script>

		<!--ace scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/ace-elements.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/ace.min.js"></script>

		<!--dashboard scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.slimscroll.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.easy-pie-chart.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/flot/jquery.flot.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/flot/jquery.flot.pie.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/flot/jquery.flot.resize.min.js"></script>

		<!--typography script-->
		<script src="<?php echo base_url(); ?>assets/ace/js/prettify.js"></script>

		<!--elements scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/bootbox.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.gritter.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/spin.min.js"></script>

		<!--dataTables scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.dataTables.bootstrap.js"></script>

		<!--inline scripts related to this page-->
		<script type="text/javascript">
			$(function() {
				
				$('ul.main-menu li a').each(function(){
				if($($(this))[0].href==String(window.location))
					$(this).parent().addClass('active');
				});

				// widgets
				$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
					var color_class = $(this).find('option:selected').data('class');
					var new_class = 'widget-header';
					if(color_class != 'default')  new_class += ' header-color-'+color_class;
					$(this).closest('.widget-header').attr('class', new_class);
				});
			
				// scrollables
				$('.slim-scroll').each(function () {
					var $this = $(this);
					$this.slimScroll({
						height: $this.data('height') || 100,
						railVisible:true
					});
				});
				  
				  
				/*
				$( '.row-fluid' ).sortable({
					connectWith: '.row-fluid'
				});
				$( ".widget-box" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
				.find( ".widget-header" )
				.addClass( "ui-widget-header ui-corner-all" )
				.prepend( "<span class='ui-icon ui-icon-minusthick'></span>")
				.end()
				.find( ".widget-body" );
				$( ".portlet-header .ui-icon" ).click(function() {
				$( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
				$( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
				});
				$( '.row-fluid' ).disableSelection();
				*/

				// buttons
				$('#loading-btn').on('click', function () {
					var btn = $(this);
					btn.button('loading')
					setTimeout(function () {
						btn.button('reset')
					}, 2000)
				});
			
				$('#id-button-borders').attr('checked' , 'checked').change(function(){
						$('#default-buttons .btn').toggleClass('no-border');
				});

				// typography
				window.prettyPrint && prettyPrint();
				$('#id-check-horizontal').removeAttr('checked').change(function(){
					$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
				});

				// elements
				$('#accordion2').on('hide', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('#accordion2').on('hidden', function (e) {
					$(e.target).prev().children(0).addClass('collapsed');
				})
				$('#accordion2').on('show', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
				$('#accordion2').on('shown', function (e) {
					$(e.target).prev().children(0).removeClass('collapsed');
				})
			
			
				var oldie = $.browser.msie && $.browser.version < 9;
				$('.easy-pie-chart.percentage').each(function(){
					$(this).easyPieChart({
						barColor: $(this).data('color'),
						trackColor: '#EEEEEE',
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: 8,
						animate: oldie ? false : 1000,
						size:75
					}).css('color', $(this).data('color'));
				});
			
				$('[data-rel=tooltip]').tooltip();
				$('[data-rel=popover]').popover({html:true});
			
			
				$('#gritter-regular').click(function(){
					$.gritter.add({
						title: 'This is a regular notice!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $assets+'/avatars/avatar1.png',
						sticky: false,
						time: '',
						class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
					});
			
					return false;
				});
			
				$('#gritter-sticky').click(function(){
					var unique_id = $.gritter.add({
						title: 'This is a sticky notice!',
						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $assets+'/avatars/avatar.png',
						sticky: true,
						time: '',
						class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-without-image').click(function(){
					$.gritter.add({
						// (string | mandatory) the heading of the notification
						title: 'This is a notice without an image!',
						// (string | mandatory) the text inside the notification
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-max3').click(function(){
					$.gritter.add({
						title: 'This is a notice with a max of 3 on screen at one time!',
						text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
						image: $assets+'/avatars/avatar3.png',
						sticky: false,
						before_open: function(){
							if($('.gritter-item-wrapper').length >= 3)
							{
								return false;
							}
						},
						class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
			
			
				$('#gritter-error').click(function(){
					$.gritter.add({
						title: 'This is a warning notification',
						text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
						class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
					});
			
					return false;
				});
					
			
				$("#gritter-remove").click(function(){
					$.gritter.removeAll();
					return false;
				});
					
			
				///////
			
			
				$("#bootbox-regular").on('click', function() {
					bootbox.prompt("What is your name?", function(result) {
						if (result === null) {
							//Example.show("Prompt dismissed");
						} else {
							//Example.show("Hi <b>"+result+"</b>");
						}
					});
				});
					
				$("#bootbox-confirm").on('click', function() {
					bootbox.confirm("Are you sure?", function(result) {
						if(result) {
							bootbox.alert("You are sure!");
						}
					});
				});
					
				$("#bootbox-options").on('click', function() {
					bootbox.dialog("I am a custom dialog with smaller buttons", [{
						"label" : "Success!",
						"class" : "btn-small btn-success",
						"callback": function() {
							//Example.show("great success");
						}
						}, {
						"label" : "Danger!",
						"class" : "btn-small btn-danger",
						"callback": function() {
							//Example.show("uh oh, look out!");
						}
						}, {
						"label" : "Click ME!",
						"class" : "btn-small btn-primary",
						"callback": function() {
							//Example.show("Primary button");
						}
						}, {
						"label" : "Just a button...",
						"class" : "btn-small"
						}]
					);
				});
			
			
			
				$('#spinner-opts small').css({display:'inline-block', width:'60px'})
			
				var slide_styles = ['', 'green','red','purple','orange', 'dark'];
				var ii = 0;
				$("#spinner-opts input[type=text]").each(function() {
					var $this = $(this);
					$this.hide().after('<span />');
					$this.next().addClass('ui-slider-small').
					addClass("inline ui-slider-"+slide_styles[ii++ % slide_styles.length]).
					css({'width':'125px'}).slider({
						value:parseInt($this.val()),
						range: "min",
						animate:true,
						min: parseInt($this.data('min')),
						max: parseInt($this.data('max')),
						step: parseFloat($this.data('step')),
						slide: function( event, ui ) {
							$this.attr('value', ui.value);
							spinner_update();
						}
					});
				});
			
			
				$.fn.spin = function(opts) {
					this.each(function() {
					  var $this = $(this),
						  data = $this.data();
			
					  if (data.spinner) {
						data.spinner.stop();
						delete data.spinner;
					  }
					  if (opts !== false) {
						data.spinner = new Spinner($.extend({color: $this.css('color')}, opts)).spin(this);
					  }
					});
					return this;
				};
			
				function spinner_update() {
					var opts = {};
					$('#spinner-opts input[type=text]').each(function() {
						opts[this.name] = parseFloat(this.value);
					});
					$('#spinner-preview').spin(opts);
				}
			
			
				$('#id-pills-stacked').removeAttr('checked').change(function(){
					$('.nav-pills').toggleClass('nav-stacked');
				});
				
			
				// dataTables
				var oTable1 = $('#table_report1').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
				$('[data-rel=tooltip]').tooltip();
				
			});
		</script>
	</body>
</html>
