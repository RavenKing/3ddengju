		<ul id="nav">
        	<li>
                <ul class="navigation">
                  <li> <?php echo $this->Html->link('后台首页',array('controller'=>'users','action'=>'index','class'=>'heading selected'));?></li>
				   <li><?php    echo $this->Html->link('发布信息',array('controller'=>'notices','action'=>'add')); ?></li>
                </ul>
            </li>
            <li>
                <a class="collapsed heading">授权</a>
                 <ul class="navigation">		
				 <li><a href="#">最近提交的单子</a></li>
				<li><?php echo   $this->Html->link('未通过的申请',array('controller'=>'stores','action'=>'apply'));?></li>
				<li><?php echo   $this->Html->link('商户的申请',array('controller'=>'UsersSpieces','action'=>'showapply'));?></li>
				<li><a href="#">历史</a></li>
				<li><?php echo $this->Html->link('授权商户大分类',array('controller'=>'UsersSpieces','action'=>'add')); ?></li>
				<li><?php echo $this->Html->link('广告位申请',array('controller'=>'AdvertisementPics','action'=>'index'));?></li>
                </ul>
            </li>
            <li><a class="expanded heading">产品管理</a>
                <ul class="navigation">


				<li><?php  echo $this->Html->link('发布新品',array('controller'=>'Products','action'=>'adminadd'));?></li>
				<li><?php  echo $this->Html->link('最近产品',array('controller'=>'Products','action'=>'listall'));?></li>
				<li><?php  echo $this->Html->link('所有产品',array('controller'=>'Products','action'=>'listall'));?></li>
				<li><?php  echo $this->Html->link('特价列表',array('controller'=>'OnsaleLists','action'=>'index'));?></li>
				<li><?php  //echo $this->Html->link('最受欢迎列表',array('controller'=>'',action=>'')); ?></li>
				<li><?php echo  $this->Html->link('主页大分类管理',array('controller'=>'Spieces','action'=>'index')); ?></li>
				<li><?php echo  $this->Html->link('产品小分类管理',array('controller'=>'ProductCategories','action'=>'index')); ?></li>
				<li><?php echo  $this->Html->link('产品细节管理',array('controller'=>'ProductDetails','action'=>'index')); ?></li>
				<li><?php echo  $this->Html->link('产品市场管理',array('controller'=>'markets','action'=>'index')); ?></li>
				
                </ul>
            </li>             
			<li><a class="expanded heading">用户管理</a>
                <ul class="navigation">
				<li><?php echo   $this->Html->link('管理员列表',array('controller'=>'users','action'=>'adminlist'));?></li>
				<li><?php echo   $this->Html->link('店铺列表',array('controller'=>'stores','action'=>'view'));?></li>
				<li><?php echo   $this->Html->link('用户列表',array('controller'=>'users','action'=>'nomallist'));?></li>
                </ul>
            </li>            
        </ul>
