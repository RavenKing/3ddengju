 <div class="contentcontainer med left">
 <h3>欢迎使用3ddengju 以下是店铺信息</h3>
<?php 
 foreach ($stores as $result)
 {?>
             <div class="headings alt">
                <h2>商铺信息</h2>
            </div>
            <div class="contentbox">
 <?php
echo $this->Form->create('Store',array('controller'=>'stores','action'=>'index'));?>
	<?php
		echo $this->Form->input('id',array('value'=>$result['Store']['id']));
		echo $this->Form->input('store_name',array('class'=>'inputbox','label'=>'商铺名称','value'=>$result['Store']['store_name']));
		echo $this->Form->input('store_url',array('class'=>'inputbox','label'=>'商铺url','value'=>$result['Store']['store_url']));
		echo $this->Form->input('store_address',array('class'=>'inputbox','label'=>'商铺地址','value'=>$result['Store']['store_address']));
		echo $this->Form->input('store_boss',array('class'=>'inputbox','label'=>'商铺老板','value'=>$result['Store']['store_boss']));;
		echo $this->Form->input('store_mobile',array('class'=>'inputbox','label'=>'联系电话','value'=>$result['Store']['store_mobile']));
		echo $this->Form->input('description',array('class'=>'inputbox','label'=>'商铺简介','value'=>$result['Store']['description']));
		echo $this->Form->input('service',array('class'=>'inputbox'));
		echo $this->Form->input('user_id',array('class'=>'inputbox','value'=>$_SESSION['Auth']['User']['id'],'type'=>'hidden'));
		 $options=$this->requestAction(array('controller'=>'Markets','action'=>'lists'));

		echo $this->Form->input('market_id',array('options'=>$options,'selected'=>$result['Market']['id']));
	?>
	<input type='submit' value='保存信息' class='btn'/>
   </form>
   </div>
<?php }   ?>
</div>
         <div class="contentcontainer sml right" id="tabs">
            <div class="headings">
                <h2 class="left">经营范围</h2>
                <ul class="smltabs">
                	<li><a href="#tabs-1">Styles</a></li>
                </ul>
            </div>
            <div class="contentbox" id="tabs-1">
            	<h2 style="margin-bottom: 15px;">你好 你当前的经营范围是:</h2>
                 <?php    
                 $result=$this->requestAction(array('controller'=>'UsersSpieces','action'=>'lists'));
              // print_r($result);
			   foreach($result as  $ops)
		   {
				?>
				<p><span class="highlighted"><?php  echo $ops['spieces']['spiece_name'];?></span></p>
                <div class="spacer"></div>
 <?php }?>
 
<?php

  echo $this->Html->link('申请新的范围',array('controller'=>'UsersSpieces','action'=>'add1'),array('class'=>'btn','style'=>'float:right'));

?>
            </div>
</div>