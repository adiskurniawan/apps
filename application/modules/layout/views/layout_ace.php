<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>DEMO</title>

		<base href="<?php echo base_url(); ?>"/>
		
		<!-- <meta name="description" content="overview &amp; stats" /> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="<?php echo base_url(); ?>assets/ace/img/home.png" rel="shortcut icon" type="image/x-icon"/>
		<!--basic styles-->
		<link href="<?php echo base_url(); ?>assets/ace/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/ace/css/bootstrap-responsive.min.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/ace/css/font-awesome.min.css" rel="stylesheet"/>

		<!--page specific plugin styles-->
		<!--elements styles-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/jquery.gritter.css" />
		<!--forms styles-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/colorpicker.css" />
		<!--calendar styles-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/ace/css/fullcalendar.css" />

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

		<!--form elements scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/chosen.jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/date-time/moment.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/date-time/daterangepicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.autosize-min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.maskedinput.min.js"></script>

		<!--form validation scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/fuelux/fuelux.wizard.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/jquery.validate.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/additional-methods.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/bootbox.min.js"></script>

		<!--calendar scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/fullcalendar.min.js"></script>

		<!--treeview scripts-->
		<script src="<?php echo base_url(); ?>assets/ace/js/fuelux/data/fuelux.tree-sampledata.js"></script>
		<script src="<?php echo base_url(); ?>assets/ace/js/fuelux/fuelux.tree.min.js"></script>

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
				var oTable1 = $('#table_report').dataTable( {
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

				// form

				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chzn-select").chosen(); 
				$(".chzn-select-deselect").chosen({allow_single_deselect:true}); 
				
				$('.ace-tooltip').tooltip();
				$('.ace-popover').popover();
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea[class*=limited]').each(function() {
					var limit = parseInt($(this).attr('data-maxlength')) || 100;
					$(this).inputlimiter({
						"limit": limit,
						remText: '%n character%s remaining...',
						limitText: 'max allowed : %n.'
					});
				});
				
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
				
				
				
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 6,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 11,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'span'+val).val('.span'+val).next().attr('class', 'span'+(12-val)).val('.span'+(12-val));
					}
				});
				
				
				var $tooltip = $("<div class='tooltip right in' style='display:none;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>").appendTo('body');
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
						
						var pos = $(ui.handle).offset();
						$tooltip.show().children().eq(1).text(val);		
						$tooltip.css({top:pos.top - 10 , left:pos.left + 18});
						
						//$(this).find('a').eq(which).attr('data-original-title' , val).tooltip('show');
					}
				});
				$('#slider-range a').tooltip({placement:'right', trigger:'manual', animation:false}).blur(function(){
					$tooltip.hide();
					//$(this).tooltip('hide');
				});
				//$('#slider-range a').tooltip({placement:'right', animation:false});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2,
					//slide: function( event, ui ) {
					//	$( "#amount" ).val( ui.value );
					//}
				});
				//$( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
				
				$( "#eq > span" ).css({width:'90%', float:'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'small',
					before_change:function(files, dropped) {
						/**
						if(files instanceof Array || (!!window.FileList && files instanceof FileList)) {
							//check each file and see if it is valid, if not return false or make a new array, add the valid files to it and return the array
							//note: if files have not been dropped, this does not change the internal value of the file input element, as it is set by the browser, and further file uploading and handling should be done via ajax, etc, otherwise all selected files will be sent to server
							//example:
							var result = []
							for(var i = 0; i < files.length; i++) {
								var file = files[i];
								if((/^image\//i).test(file.type) && file.size < 102400)
									result.push(file);
							}
							return result;
						}
						*/
						return true;
					}
					/*,
					before_remove : function() {
						return true;
					}*/
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
			
				
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, icon_up:'icon-plus', icon_down:'icon-minus', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker();
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				});
				
				$('#id-date-range-picker-1').daterangepicker();
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();


				// form validation
				$('[data-rel=tooltip]').tooltip();
			
				$(".chzn-select").css('width','150px').chosen({allow_single_deselect:true , no_results_text: "No such state!"})
				.on('change', function(){
					$(this).closest('form').validate().element($(this));
				}); 
			
			
				var $validation = false;
				$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
					if(info.step == 1 && $validation) {
						if(!$('#validation-form').valid()) return false;
					}
				}).on('finished', function(e) {
					bootbox.dialog("Thank you! Your information was successfully saved!", [{
						"label" : "OK",
						"class" : "btn-small btn-primary",
						}]
					);
				});
			
			
				$('#validation-form').hide();
				$('#skip-validation').removeAttr('checked').on('click', function(){
					$validation = this.checked;
					if(this.checked) {
						$('#sample-form').hide();
						$('#validation-form').show();
					}
					else {
						$('#validation-form').hide();
						$('#sample-form').show();
					}
				});
			
				//documentation : http://docs.jquery.com/Plugins/Validation/validate
			
				$.mask.definitions['~']='[+-]';
				$('#phone').mask('(999) 999-9999');
			
				jQuery.validator.addMethod("phone", function (value, element) {
					return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
				}, "Enter a valid phone number.");
			
				$('#validation-form').validate({
					errorElement: 'span',
					errorClass: 'help-inline',
					focusInvalid: false,
					rules: {
						email: {
							required: true,
							email:true
						},
						password: {
							required: true,
							minlength: 5
						},
						password2: {
							required: true,
							minlength: 5,
							equalTo: "#password"
						},
						name: {
							required: true
						},
						phone: {
							required: true,
							phone: 'required'
						},
						url: {
							required: true,
							url: true
						},
						comment: {
							required: true
						},
						state: {
							required: true
						},
						platform: {
							required: true
						},
						subscription: {
							required: true
						},
						gender: 'required',
						agree: 'required'
					},
			
					messages: {
						email: {
							required: "Please provide a valid email.",
							email: "Please provide a valid email."
						},
						password: {
							required: "Please specify a password.",
							minlength: "Please specify a secure password."
						},
						subscription: "Please choose at least one option",
						gender: "Please choose gender",
						agree: "Please accept our policy"
					},
			
					invalidHandler: function (event, validator) { //display error alert on form submit   
						$('.alert-error', $('.login-form')).show();
					},
			
					highlight: function (e) {
						$(e).closest('.control-group').removeClass('info').addClass('error');
					},
			
					success: function (e) {
						$(e).closest('.control-group').removeClass('error').addClass('info');
						$(e).remove();
					},
			
					errorPlacement: function (error, element) {
						if(element.is(':checkbox') || element.is(':radio')) {
							var controls = element.closest('.controls');
							if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
							else error.insertAfter(element.nextAll('.lbl').eq(0));
						} 
						else if(element.is('.chzn-select')) {
							error.insertAfter(element.nextAll('[class*="chzn-container"]').eq(0));
						}
						else error.insertAfter(element);
					},
			
					submitHandler: function (form) {
					},
					invalidHandler: function (form) {
					}
				});
				
			});

	
	/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events div.external-event').each(function() {

		// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
		// it doesn't need to have a start or end
		var eventObject = {
			title: $.trim($(this).text()) // use the element's text as the event title
		};

		// store the Event Object in the DOM element so we can get to it later
		$(this).data('eventObject', eventObject);

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});
		
	});




	/* initialize the calendar
	-----------------------------------------------------------------*/

	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	
	var calendar = $('#calendar').fullCalendar({
		 buttonText: {
			prev: '<i class="icon-chevron-left"></i>',
			next: '<i class="icon-chevron-right"></i>'
		},
	
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		events: [
		{
			title: 'All Day Event',
			start: new Date(y, m, 1),
			className: 'label-important'
		},
		{
			title: 'Long Event',
			start: new Date(y, m, d-5),
			end: new Date(y, m, d-2),
			className: 'label-success'
		},
		{
			title: 'Some Event',
			start: new Date(y, m, d-3, 16, 0),
			allDay: false
		}]
		,
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar !!!
		drop: function(date, allDay) { // this function is called when something is dropped
		
			// retrieve the dropped element's stored Event Object
			var originalEventObject = $(this).data('eventObject');
			var $extraEventClass = $(this).attr('data-class');
			
			
			// we need to copy it, so that multiple events don't have a reference to the same object
			var copiedEventObject = $.extend({}, originalEventObject);
			
			// assign it the date that was reported
			copiedEventObject.start = date;
			copiedEventObject.allDay = allDay;
			if($extraEventClass) copiedEventObject['className'] = [$extraEventClass];
			
			// render the event on the calendar
			// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
			$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
			
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
			
		}
		,
		selectable: true,
		selectHelper: true,
		select: function(start, end, allDay) {
			
			bootbox.prompt("New Event Title:", function(title) {
				if (title !== null) {
					calendar.fullCalendar('renderEvent',
						{
							title: title,
							start: start,
							end: end,
							allDay: allDay
						},
						true // make the event "stick"
					);
				}
			});
			

			calendar.fullCalendar('unselect');
			
		}
		,
		eventClick: function(calEvent, jsEvent, view) {

			var form = $("<form class='form-inline'><label>Change event name &nbsp;</label></form>");
			form.append("<input autocomplete=off type=text value='" + calEvent.title + "' /> ");
			form.append("<button type='submit' class='btn btn-small btn-success'><i class='icon-ok'></i> Save</button>");
			
			var div = bootbox.dialog(form,
				[
				{
					"label" : "<i class='icon-trash'></i> Delete Event",
					"class" : "btn-small btn-danger",
					"callback": function() {
						calendar.fullCalendar('removeEvents' , function(ev){
							return (ev._id == calEvent._id);
						})
					}
				}
				,
				{
					"label" : "<i class='icon-remove'></i> Close",
					"class" : "btn-small"
				}
				]
				,
				{
					// prompts need a few extra options
					"onEscape": function(){div.modal("hide");}
				}
			);
			
			form.on('submit', function(){
				calEvent.title = form.find("input[type=text]").val();
				calendar.fullCalendar('updateEvent', calEvent);
				div.modal("hide");
				return false;
			});
			
		
			//console.log(calEvent.id);
			//console.log(jsEvent);
			//console.log(view);

			// change the border color just for fun
			//$(this).css('border-color', 'red');

		}
		
	});
	
	// treeview
	$('#tree1').ace_tree({
			dataSource: treeDataSource ,
			multiSelect:true,
			loadingHTML:'<div class="offset1"><i class="icon-refresh icon-spin blue"></i></div>',
			'open-icon' : 'icon-minus',
			'close-icon' : 'icon-plus',
			'selectable' : true,
			'selected-icon' : 'icon-ok',
			'unselected-icon' : 'icon-remove'
		});

		$('#tree2').ace_tree({
			dataSource: treeDataSource2 ,
			loadingHTML:'<div class="offset1"><i class="icon-refresh icon-spin blue"></i></div>',
			'open-icon' : 'icon-folder-open',
			'close-icon' : 'icon-folder-close',
			'selectable' : false,
			'selected-icon' : null,
			'unselected-icon' : null
		});



		/**
		$('#tree1').on('loaded', function (evt, data) {
		});

		$('#tree1').on('opened', function (evt, data) {
		});

		$('#tree1').on('closed', function (evt, data) {
		});

		$('#tree1').on('selected', function (evt, data) {
		});
		*/
		</script>
	</body>
</html>
