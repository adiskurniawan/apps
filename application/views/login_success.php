<script language="javascript" type="text/javascript">
	setTimeout("window.location.href='<?php echo base_url('demo_ace') ?>'", 3000);
</script>
<div class="form_block" id="login_success">
  <div class="form_title"> Login Successful</div>
  <div class="form_login"> 
    <br />
	Welcome: <strong><?php echo sess_var('username') ?></strong><br /><br />
    You are loged in as: <strong>
    <?php echo $username ?>
    </strong><br />
    
    You can now proceed to <a href="<?php echo base_url('demo_ace') ?>">Admin control panel</a>.<br />
    
  </div>
</div>