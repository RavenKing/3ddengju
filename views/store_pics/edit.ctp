<div class="storePics form">
<?php echo $this->Form->create('StorePic');?>
	<fieldset>
		<legend><?php __('Edit Store Pic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('store_id');
		echo $this->Form->input('position_id');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('StorePic.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('StorePic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Store Pics', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>