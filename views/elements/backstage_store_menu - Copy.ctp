<div id="left-column">
<h3>我的产品</h3>
			<ul class="nav">
				<li><a href="#">管理我的产品</a></li>
				<li><a href="#">发布新品</a></li>
			</ul>		
         <h3>个人信息</h3>
			<ul class="nav">
				<li><a href="#">基本信息</a></li>
				<li><?php  echo $this->Html->link('我的商铺',array('controller'=>'stores','action'=>'register'));   ?></li>
				<li><a href="#">我的等级</a></li>
				
			</ul>
          <h3>公共信息</h3>
			<ul class="nav">
			<li><a href="#">最新列表</a></li>
			<li><a href="#">特价列表</a></li>
			<li><a href="#">最受欢迎列表</a></li>
			
			</ul>
     <h3>welive</h3>
			<ul class="nav">
				<li><a href="#">welive</a></li>
			</ul>
		</div>
