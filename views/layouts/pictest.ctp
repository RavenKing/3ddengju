<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>pics</title>
	<?php echo $javascript->link('prototype');?>
	<?php echo $javascript->link('scriptaculous/src/scriptaculous');?>
    <?php echo $this->Html->meta('icon'); ?>
	<?php echo $javascript->link('lightbox');?>
	<?php  echo $this->Html->css('lightbox');?>
<!-- Theme End -->

</head>
<body>

       <?php
	       echo $content_for_layout;
	   
	   ?>
</body>
</html>