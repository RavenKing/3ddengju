<div class="positions form">
<?php echo $this->Form->create('Position');?>
	<fieldset>
		<legend><?php __('Add Position'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('width');
		echo $this->Form->input('height');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Positions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Product Pics', true), array('controller' => 'product_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Pic', true), array('controller' => 'product_pics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Pics', true), array('controller' => 'store_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Pic', true), array('controller' => 'store_pics', 'action' => 'add')); ?> </li>
	</ul>
</div>