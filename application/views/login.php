<!-- validationEngine -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ace/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ace/js/jquery.validationEngine-en.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/ace/js/jquery.validationEngine.js" charset="utf-8"></script>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
	
	//form validation
	$("#form").validationEngine('attach',{
	    onValidationComplete: function(form, status){
		    if (status) {
				$("#loading div").fadeIn(300);
				$.ajax({
					url		:	"<?php echo base_url('login/submit');?>",
					type	:	"POST",
					dataType:	"json",
					data	:	$("#form").serialize(),
					success	:	function(data){
					//hide loading
					$("#loading div").fadeOut(300);
						if(!data.is_valid){
							$('#password').validationEngine('showPrompt', 'Invalid Password','error','topRight', true);
						}else{
							$("#container_login").fadeOut("fast",function(){
								$("#container_login").html(data.content);
								$("#container_login").fadeIn("slow");
							});
						}
					}
				});
      		}
      	}
  	});

	$('#form').attr('data-prompt-position','topLeft');
  	$('#form').data('promptPosition','topLeft');
  	$('input').attr('data-prompt-position','topRight');
  	$('input').data('promptPosition','topRight');
  	
});
</script>

<div id="container_login">
  <div class="form_block" id="login_form">
	<div class="form_title"> Admin Login</div>
	<div class="form_login" style="height:140px;">
	<form action="<?php echo base_url('login/submit'); ?>" method="post" onsubmit="return false" id="form">
		<br />
		
		<div class="sepa">
		<!-- <label for="email">Email</label>
		<input type="text" name="email" id="email" class="validate[required,custom[email]]" />  -->
		<label for="username">Username</label>
		<input value="admin" type="text" name="username" id="username" />  

		</div>		
		<div class="sepa">
		<label for="pass">Password</label>
		<input value="admin" type="password" name="password" id="password" class="validate[required]" />
		</div>
		
		<div class="sepa">
		<label for="submit">&nbsp;</label>
		<button class="btn btn-primary" type="submit"><i class="icon-white icon-ok"></i> Submit</button> 
	</form>
	</div>
	</div>
</div>