 <div class="contentcontainer med left">
             <h3>你好~用户~	 欢迎使用3ddengju</h3>
             <div class="headings alt">
                <h2>发布新品</h2>
            </div>
            <div class="contentbox">
<?php
 $id=$_SESSION['Auth']['User']['id'];
 
 echo $users=$this->requestAction(array('controller'=>'users','action'=>'register','class'=>'inputbox','id'=>'storename'));
?>
<?php
echo $this->Form->create('Product',array('action'=>'add'));
echo $this->Form->input('product_name',array('label'=>'商品名称','class'=>'inputbox'));?>
<span id='check'></span>
<span id="loading" style="display:none;padding:4px;color:black;width:100px"><strong><?php  echo $this->Html->image('loading.gif'); ?></strong></span>
<?php
echo $this->Form->input('product_size',array('label'=>'商品尺寸','class'=>'inputbox'));
echo $this->Form->input('product_power',array('label'=>'商品功率','class'=>'inputbox'));
echo $this->Form->input('product_bulbnumber',array('label'=>'灯泡数量','class'=>'inputbox'));
echo $this->Form->input('product_voltage',array('label'=>'灯泡电压','class'=>'inputbox'));
$result=$this->requestAction(array('controller'=>'Stores','action'=>'getstoreid'));
//print_r($result['Store']['id']);
echo $this->Form->input('store_id',array('type'=>'hidden','value'=>$result['Store']['id']));
$options=$this->requestAction(array('controller'=>'UsersSpieces','action'=>'lists'));
 $ops=Array();
 foreach($options as $option)
 {
    $ops=$ops+array($option['spieces']['id']=>$option['spieces']['spiece_name']);
 }

echo $this->Form->input('spiece_id',array('options'=>$ops,'empty'=>"选择",'label'=>'属于'));
?>
<input type='submit' value="提交" class="btn"/>
<input type='reset' value="重置" class="btnalt"/>
</form>
</div>
</div>	