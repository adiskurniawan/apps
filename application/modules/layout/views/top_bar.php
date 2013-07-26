<link href="<?php echo base_url(); ?>assets/ace/css/font-awesome.min.css" rel="stylesheet"/>
<link href="<?php echo base_url(); ?>assets/ace/css/menu_styles.css" rel="stylesheet">

<!-- topbar starts -->
<div class="top_menu">
	
	<ul class="topnav">
		
		<li>
		  <a href="http://www.freelogoservices.com/" target="_blank" style="padding:0; margin-top:8px; margin-left:10px"><img src="<?php echo base_url()?>assets/ace/img/free_logo.png" height="22"/></a>
		</li>   
		
		<li class="mi">
		  <a href="<?php echo base_url(); ?>demo_ace/dashboard" style="margin-left:80px">Ace</a>
		</li>
		
		<li class="mi">
		  <a href="<?php echo base_url(); ?>demo_aquarius/dashboard">Aquarius</a>
		</li>
		
		<li class="mi">
		  <a href="<?php echo base_url(); ?>demo_perfectum/dashboard">Perfectum</a>
		</li>
		
		<li class="mi">
		  <a href="<?php echo base_url(); ?>invoicing/dashboard" style="margin-left:60px">Invoicing</a>
		</li>

		<li class="mi">
		  <a href="<?php echo base_url(); ?>pos/dashboard">Point of Sales</a>
		</li>

		<li class="mi">
		  <a href="<?php echo base_url(); ?>hr/dashboard">Human Resources</a>
		</li>

		<li class="mi">
		  <a href="<?php echo base_url(); ?>payroll/dashboard">Payroll</a>
		</li>

		<li class="mi">
		  <a href="<?php echo base_url(); ?>accounting/dashboard">Accounting</a>
		</li>
		
		<!-- 
		<li class="mi">
		  <a target="_blank" href="https://github.com/adiskurniawan/adi_apps">GitHub</a>
		</li>  
		-->
	
	</ul>

	<li class="user-profile login_welcome">
		<a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
			<!-- <img class="nav-user-photo" src="<?php echo base_url(); ?>assets/ace/avatars/user.jpg" alt="Jason's Photo" /> -->
			<span style="width:200px; text-align:right;" class="login_welcome">
		  		Welcome, <strong><?php echo sess_var('username')?></strong>
		  		&nbsp; 
		  	</span>

			<i class="icon-caret-down"></i>
		</a>

		<ul style="right:10px; top:32px;" class="pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer" id="user_menu">
			<li>
				<a href="#">
					<i class="icon-cog"></i>
					Settings
				</a>
			</li>

			<li>
				<a href="#">
					<i class="icon-user"></i>
					Profile
				</a>
			</li>

			<li class="divider"></li>

			<li>
				<a href="<?php echo base_url('login/logout')?>">
					<i class="icon-off"></i>
					Logout
				</a>
			</li>
		</ul>
	</li>

</div> 
<!-- topbar ends -->
