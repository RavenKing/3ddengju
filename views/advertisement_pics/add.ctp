<div class="advertisementPics form">
<?php echo $this->Form->create('AdvertisementPic');?>
	<fieldset>
		<legend><?php __('申请广告位'); ?></legend>
	<?php
		echo $this->Form->input('src',array('class'=>'inputbox','label'=>'图片地址'));
		echo $this->Form->input('is_selected',array('type'=>'hidden'));
		echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$_SESSION['Auth']['User']['id']));
	?>
	</fieldset>
	<?php  echo $this->Form->submit('申请',array('class'=>'btn'));?>
<?php echo $this->Form->end();?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Advertisement Pics', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>