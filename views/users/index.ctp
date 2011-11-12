<?php 
      
                  if($this->Session->read('Auth.User.group_id') == 1)
              {
			     $unappnum=$this->requestAction(array('controller'=>'stores','action'=>'countnew'));
				?>
				  <div class="status warning">
        	<p class="closestatus"><a href="" title="Close">x</a></p>
        	<p><img src="img/icons/icon_warning.png" alt="Warning" /><span>Attention!</span>有新的申请(
			<?php echo $this->Html->link($unappnum[0][0]['count(*)'],array('controller'=>'stores','action'=>'apply'));?>)</p>
        </div>
<h1>个人信息</h1>

                   <?php
				   echo $this->Html->image('logo2.gif',array('alt'=>'adminlogo','width'=>'107','height'=>'100','class'=>'floatleft'));
				   
				   ?>
				<h3><div class="personalinfo"><a href="#">Hello!</a> /admin  </div></h3>
           
				<p class="personalinfo">Your Level is</p>   
				<div class="time">
				Last Time :2011/8/26
				</div>
                <a href="#" class="button">管理</a>
  <?php echo $this->Html->link('删除',array('controller'=>'users','action'=>'shanchu'));?>
 <?php echo $this->Html->link('发布新品',array('controller'=>'products','action'=>'adminadd'));?>
 <?php echo $this->Html->link('发布店铺',array('controller'=>'stores','action'=>'add'));?>
 
 <?php echo $this->Html->link('新用户',array('controller'=>'users','action'=>'add'));?>
				<a href="#" class="button">发布信息	</a>
	
<?php
}                   
if($this->Session->read('Auth.User.group_id') == 2)
  {
?>
<div class="top-bar">
<h1>个人信息</h1>

    
				<h3><div class="personalinfo">Hello!/store  </div></h3>	      
				<p class="personalinfo">Your Level is</p>   
				<div class="time">
				Last Time :2011/8/26
				</div><?PHP echo $this->Html->link('发布新品',array('controller'=>'Products','action'=>'add'),array('class'=>'btn','style'=>'float:right'));?>
			</div><br />
   您的店铺：
  <?php
  echo  $this->Html->link($users[0]['Store']['store_name'],array('controller'=>'stores','action'=>'index'));
    
  ?>
  	<br><br>
  <!-- Blue Status Bar Start -->
        <div class="status info">
        	<p class="closestatus"><a href="" title="Close">x</a></p>
        	<p><img src="img/icons/icon_info.png" alt="Information" /><span>Information:</span> Lorem ipsum dolor sit amet, consectetuer adipiscing, sed diam nonummy nibh.</p>
        </div>
		<br>
        <!-- Blue Status Bar End -->   
            <div>
			
						 <?php    
						 $results=$this->requestAction(array('controller'=>'Notices','action'=>'getnotice'));?>
                <div class="noticebox" style='float:left'>
                    <div class="innernotice">
                        <h4><?php echo $results['User']['username'];?>:</h4>
                         <p>
						 
						 <?php    
                           echo $results['Notice']['content'];
						 ?>
						 
						 </p>
                    </div>
                </div>
               
                <div style="clear: both;"></div> 
				</div>
                                    </div>
  <?php
		   }
?>