      <ul id="nav">
        	<li>
                <ul class="navigation">
                    <li class="heading selected">后台首页 </li>
					
                </ul>
            </li>
            <li>
                <a class="collapsed heading">我的产品</a>
                 <ul class="navigation">		
				 <li><?php echo $this->Html->link('管理我的产品',array('controller'=>'Products','action'=>'index'));?></a></li>
				<li><?php echo $this->Html->link('发布新品',array('controller'=>'Products','action'=>'add'));?></a></li>
                </ul>
            </li>
            <li>
			<a class="expanded heading">我的信息</a>
                <ul class="navigation">	
				<li>	<?php echo $this->Html->link("基本信息",array('controller'=>'users','action'=>'edit',$_SESSION['Auth']['User']['id'])); ?></li>
			
				<li><?php  echo $this->Html->link('我的商铺',array('controller'=>'stores','action'=>'register'));   ?></li>
				<li><a href="#">我的等级</a></li>
                </ul>
            </li>             
			<li><a class="expanded heading">公共信息</a>
                <ul class="navigation">
			<li><a href="#">最新列表</a></li>
			<li><a href="#">特价列表</a></li>
			<li><a href="#">最受欢迎列表</a></li>
                </ul>
            </li>             	
			<li>
                <ul class="navigation">
               <li> <?php echo $this->Html->link('主页广告申请',array('controller'=>'AdvertisementPics','action'=>'add'));?></li>
					
                </ul>
            </li>
        </ul>	