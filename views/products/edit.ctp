 <div class="contentcontainer med left">
             <h3>你好~用户~	 欢迎注册3ddengju</h3>
             <div class="headings alt">
                <h2>商品查看与修改</h2>
            </div>
            <div class="contentbox">
<?php echo $this->Form->create('Product');?>

	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_name',array('class'=>'inputbox'));
		echo $this->Form->input('product_size',array('class'=>'inputbox'));
		echo $this->Form->input('product_power',array('class'=>'inputbox'));
		echo $this->Form->input('product_voltage',array('class'=>'inputbox'));
		echo $this->Form->input('product_bulbnumber',array('class'=>'inputbox'));
		echo $this->Form->input('store_id',array('type'=>'hidden'));
	?>
<?php echo $this->Form->end(__('保存信息', true));?>
</div>
</div>
</div>	