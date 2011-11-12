<div class="advertisementPics form">
<?php echo $this->Form->create('AdvertisementPic');?>
	<fieldset>
		<legend><?php __('Edit Advertisement Pic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('src');
		echo $this->Form->input('is_selected');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AdvertisementPic.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AdvertisementPic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Advertisement Pics', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>