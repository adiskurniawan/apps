<?php
	//if the page is called from "load_content" function then just load the contents without header and footer
	if(@$_POST['is_loader']) {
		$this->load->view($main_content);
		exit;
	}
?>

<?php $this->load->view("header"); ?>
<?php $this->load->view("top_menu"); ?>

<script language="javascript" type="text/javascript">
	//load content(ex. page) into target(ex. form_loader2) [called from any where]
	//target[the dive to load into], source_hide[the dive you want to hide before load(used to hide form in add project/unit)]
	function load_content(the_url, the_target, source_to_hide){
		if( ! the_target){
			the_target		=	'#content_panel';
		}
		
		//if there is no source to hide, or the target to hide is visible(i.e it's a visible tab)
		//then hide then display the target itself (ex. form_loader)
		if( ! source_to_hide || $(the_target).is(":visible") ){
			source_to_hide	=	the_target;
		}
		
		//display loading
		if($("#loading div").css("display") == "none") {  
			$("#loading div").fadeIn(300);
			if($("#form").validationEngine)
				$("#form").validationEngine('hideAll');
		} 

		$(source_to_hide).fadeOut(300, function(){
			$(the_target).load(the_url,{ 'is_loader': "1" }, function(){
						//hide loading
						$("#loading div").fadeOut(300);
						$(the_target).fadeIn("slow");
					}
			);
		});
	}// end function load_content
	

	/*
	hs.registerOverlay({
		html: '<div class="closebtn" onclick="return hs.close(this)" title="Close"></div>'
	});
	*/
   
    // hs.outlineType = 'rounded-white';
    // hs.wrapperClassName = 'borderless';
    // hs.objectType = 'ajax';
    // hs.wrapperClassName = 'draggable-header';
    
  	/*
    hs.outlineType = null;
    hs.wrapperClassName = 'colored-border';
	hs.graphicsDir = 'assets/charisma/css/graphics/';
	hs.showCredits = false;
	hs.align = 'center';
	hs.transitions = ["fade"];
	hs.dimmingOpacity = 0.01;
	hs.width = 490;
	hs.height = 300;
	hs.allowHeightReduction = false;
	hs.allowSizeReduction = false;
	hs.onDimmerClick = function() {
      return false;
	}
	
	hs.Expander.prototype.onAfterClose = function(){
		if($("#form").validationEngine)
				$("#form").validationEngine('hideAll');
	}
	
	//load form into hidden div then call popup function to show it
	// function load_form(url, title){
	function load_form(url){
		$("#loading div").fadeIn(300);
		$('.highslide-maincontent').load(url,{ 'is_loader': "1" }, function(){
				$("#loading div").fadeOut(300);
				//when loading finish
				$("#popup_init").click(function (){
					// return hs.htmlExpand(this, { headingText: title} );
					return hs.htmlExpand(this);
				}).trigger("click");
		});
	}//end function load_form
	
	*/

</script>

<style>
/*
	.highslide-header{
   	display: none;
	}
	.highslide-html {
   	background: none;
	}
	.highslide-wrapper, .highslide-outline {
   	background: none;
	}
	.highslide-html-content {
	padding: 0;
	margin: 0;
	}
	.highslide-footer {
   	display: none;
	}
	.highslide-container div {
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	font-size: 100%;
	}
*/	
</style>

<div style="height:100%;">
	<!-- <div id="side_panel"><?php // $this->load->view("side_panel"); ?></div> -->
	<div style="float:left; width:98%">
		<?php $this->load->view("preloader"); ?>
		<div id="content_panel"><?php $this->load->view($main_content); ?></div>
	</div>
</div>
<?php $this->load->view("footer"); ?>