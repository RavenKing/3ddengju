<div class="spieces form">
<?php echo $this->Form->create('Spiece');?>
	<fieldset>
		<legend><?php __('Edit Spiece'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('spiece_name');
		echo $this->Form->input('User');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Spiece.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Spiece.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Spieces', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>