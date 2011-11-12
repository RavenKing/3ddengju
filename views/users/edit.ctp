
 <div class="contentcontainer med left">
            <div class="headings alt">

                <h2>个人信息</h2>
				 </div>
				 
            <div class="contentbox">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username',array('class'=>'inputbox'));
		echo $this->Form->input('password',array('type'=>'hidden'));
		echo $this->Form->input('group_id',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>

</div>
</div>