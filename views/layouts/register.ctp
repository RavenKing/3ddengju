<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php echo "后台"; ?>
	</title>
    <?php echo $this->Html->meta('icon'); ?>
    <?php echo $this->Html->css('layout'); ?>
    <?php echo $this->Html->css('wysiwyg'); ?>
    <?php echo $this->Html->css('themes/green/styles'); ?>
	<?php echo $javascript->link('prototype');?>
	<?php echo $javascript->link('scriptaculous/src/scriptaculous');?>
        <?php
		echo $scripts_for_layout;
	?>
</head>
<body id="homepage">
	<div id="header">
    	<a href="" title=""> <?php echo $this->Html->image('cp_logo.png',array('class'=>'logo','alt'=>'Control panel'));?></a>
	   <?php  echo $this->Html->image('logo2.gif');?>
    	<div id="searcharea">
            <p class="left smltxt"><a href="#" title="">Advanced</a></p>
            <input type="text" class="searchbox" value="Search control panel..." onclick="if (this.value =='Search control panel...'){this.value=''}"/>
            <input type="submit" value="Search" class="searchbtn" />
        </div>
    </div>
        
    <!-- Top Breadcrumb Start -->
    <div id="breadcrumb">
    	<ul>	
        	<li><img src="img/icons/icon_breadcrumb.png" alt="Location" /></li>
        	<li><strong>Hello!!</strong></li>
            <li><a href="#" title=""><?php  echo $_SESSION['Auth']['User']['username'];?></a></li>
            <li>/</li>
            <li class="current">3DDengju.com</li>
        </ul>
    </div>
    <!-- Top Breadcrumb End -->
     
    <!-- Right Side/Main Content Start -->
    <div id="rightside">
     <?php   echo $content_for_layout;?>
        <div style="clear:both;"></div>

        <!-- Content Box Start -->
        <!-- Content Box End -->
        <div id="footer">
        	&copy; Copyright 2010-2011 3DDengju.com
        </div> 
          
    </div>
    <!-- Right Side/Main Content End -->
    
        <!-- Left Dark Bar Start -->
    <div id="leftside">
    	<div class="user">
        	<img src="img/avatar.png" width="44" height="44" class="hoverimg" alt="Avatar" />
            <p>你所登陆的账号是</p>
            <p class="username"><?php   

                  if($this->Session->read('Auth.User.group_id') == 2)
                     echo "商家"; 
                   else if($this->Session->read('Auth.User.group_id') == 1)
                       echo  "管理员";
             
			?></p>
            <p class="userbtn"><?PHP   echo $this->Html->link('我的信息',array('controller'=>'users','action'=>'view'));  ?></p>
            <p class="userbtn"><?php  
			echo $this->Html->link('注销',array('controller'=>'users','action'=>'logout'));
			?></p>
        </div>
        <div class="notifications">
        	<p class="notifycount"><a href="" title="" class="notifypop">10</a></p>
            <p><a href="" title="" class="notifypop">New Notifications</a></p>
            <p class="smltxt">(Click to open notifications)</p>
        </div>
        
  
    <!-- Left Dark Bar End --> 
     <?php 
                  if($this->Session->read('Auth.User.group_id') == 2)
                     echo $this->element('backstage_store_menu'); 
                   else if($this->Session->read('Auth.User.group_id') == 1)
                       echo $this->element('backstage_admin_menu'); 
                ?>
	
	
    <!-- Notifications Box/Pop-Up Start --> 
    <div id="notificationsbox">
        <h4>Notifications</h4>
        <ul>
            <li>
            	<a href="#" title=""><img src="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Admin eve joined on 18.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img src="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Jackson Michael joined on 16.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img src="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
                <h5><a href="#" title="">New blog post created</a></h5>
                <p>New post created on 15.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img src="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New group created</a></h5>
                <p>“Web Design” group created on 12.12.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img src="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">1 new private message</a></h5>
                <p>New message from Joe sent on 21.11.2010</p>
            </li>
            <li>
            	<a href="#" title=""><img src="img/icons/icon_square_close.png" alt="Close" class="closenot" /></a>
            	<h5><a href="#" title="">New member registration</a></h5>
                <p>Graham joined on 20.11.2010</p>
            </li>
        </ul>
        <p class="loadmore"><a href="#" title="">Load more notifications</a></p>
    </div>
	</body>
</html>