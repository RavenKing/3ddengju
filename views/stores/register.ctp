 <div class="contentcontainer med left">
             <h3>你好~用户~	 欢迎注册3ddengju</h3>
             <div class="headings alt">
                <h2>商铺注册</h2>
            </div>
            <div class="contentbox">
<?php
 $id=$_SESSION['Auth']['User']['id'];
echo $users=$this->requestAction(array('controller'=>'users','action'=>'register','class'=>'inputbox','id'=>'storename'));
?>
<?php
echo $this->Form->create('Store',array('action'=>'register'));
echo $this->Form->input('store_name',array('label'=>'商家名称','class'=>'inputbox','id'=>'storename'));?>
<span id='check'></span>
<span id="loading" style="display:none;padding:4px;color:black;width:100px"><strong><?php  echo $this->Html->image('loading.gif'); ?></strong></span>
<?php
echo $this->Form->input('store_url',array('label'=>'商家url','class'=>'inputbox'));
echo $this->Form->input('store_address',array('label'=>'商家地址','class'=>'inputbox'));
echo $this->Form->input('store_boss',array('label'=>'店主','class'=>'inputbox'));
echo $this->Form->input('user_id',array('label'=>'用户ID','value'=>$id,'type'=>'hidden'));
echo $this->Form->input('store_mobile',array('label'=>'联系电话','class'=>'inputbox'));
echo $this->Form->input('description',array('label'=>'商家简介','type'=>'textarea','class'=>'inputbox'));
( $options=$this->requestAction(array('controller'=>'Markets','action'=>'lists')));

		echo $this->Form->input('market_id',array('options'=>$options,'empty'=>"选择"));
?>
<input type='submit' value="提交" class="btn"/>
<input type='reset' value="重置" class="btnalt"/>
</form>
</div>
</div>	
<?php
    //设置 AJAX 选项
    $options = array(
        'update' =>array('check','checkname'),
        //处理查询的 URL，对应于控制器中的 search() 方法
        'url'    => '/stores/search',
        //观察频率，单位为“秒”
        'frequency' => 1,
        'loading' => "Element.hide('view');Element.show('loading')",
        'complete' => "Element.hide('loading');Element.show('check');
	              "					
    );
    echo $ajax->observeField('storename', $options);
?>
