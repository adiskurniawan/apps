<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <title>DEMO</title>

    <base href="<?php echo base_url(); ?>"/>

    <link href="<?php echo base_url(); ?>assets/aquarius/img/home.png" rel="shortcut icon" type="image/x-icon"/>
    
    <link href="<?php echo base_url(); ?>assets/aquarius/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .content{padding-top: 0;}
        .menu{margin-top: 0;}
        a:visited, a:focus, a:active, a:hover{
        outline:0 none !important;
        }
        .btn:visited, .btn:focus, .btn:active, .btn:hover{
        outline:0 none !important;
        }
    </style>
    <link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/aquarius/css/fullcalendar.print.css' media='print' />
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/jquery-1.7.2.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/jquery-ui-1.8.24.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/jquery/jquery.mousewheel.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/cookie/jquery.cookies.2.2.0.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/charts/excanvas.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/charts/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/charts/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/charts/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/charts/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/sparklines/jquery.sparkline.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/fullcalendar/fullcalendar.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/select2/select2.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/uniform/uniform.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/validation/languages/jquery.validationEngine-en.js' charset='utf-8'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/validation/jquery.validationEngine.js' charset='utf-8'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/animatedprogressbar/animated_progressbar.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/cleditor/jquery.cleditor.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/dataTables/jquery.dataTables.min.js'></script>    
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/cookies.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/actions.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/aquarius/js/plugins.js'></script>
    
</head>
<body>
    
    <!-- <div class="header">
        <a class="logo" href="index.html"><img src="<?php //echo base_url(); ?>assets/aquarius/img/logo.png" alt="Aquarius -  responsive admin panel" title="Aquarius -  responsive admin panel"/></a>
        
        <ul class="header_menu">
            <li class="list_icon"><a href="#">&nbsp;</a></li>
        </ul>
        
    </div> -->

    <?php $this->load->view("layout/top_bar"); ?>
    <?php $this->load->view("layout/layout_aquarius_side_bar"); ?>
        
    <div class="content">
        <?php echo $main_content; ?>
    </div>   
    
</body>
</html>
