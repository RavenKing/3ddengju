<div class="productHeads form">
<?php echo $this->Form->create('ProductHead');?>
	<fieldset>
		<legend><?php __('Edit Product Head'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('src');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProductHead.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProductHead.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>