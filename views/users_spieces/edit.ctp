<div class="usersSpieces form">
<?php echo $this->Form->create('UsersSpiece');?>
	<fieldset>
		<legend><?php __('Edit Users Spiece'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('spiece_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UsersSpiece.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UsersSpiece.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Spieces', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spieces', true), array('controller' => 'spieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spiece', true), array('controller' => 'spieces', 'action' => 'add')); ?> </li>
	</ul>
</div>