<div class="markets form">
<?php echo $this->Form->create('Market');?>
	<fieldset>
		<legend><?php __('Edit Market'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('market_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Market.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Market.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Markets', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>