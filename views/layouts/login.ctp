<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Template - Login</title>
	<?php echo $javascript->link('jquery/jquery-1.4.2.min');?>
	<?php // echo $javascript->link('scriptaculous/src/scriptaculous');?>
    <?php echo $this->Html->meta('icon'); ?>
    <?php echo $this->Html->css('layout'); ?>
    <?php echo $this->Html->css('login2'); ?>
    <?php echo $this->Html->css('themes/green/styles'); ?>
<!-- Theme End -->

</head>
<body>
	<div id="logincontainer">
    	<div id="loginbox">
        	<div id="loginheader">
            	<img src="themes/blue/img/cp_logo_login.png" alt="Control Panel Login" />
            </div>
            <div id="innerlogin">
       <?php
	       echo $content_for_layout;
	   
	   ?>
            </div>
</body>
</html>