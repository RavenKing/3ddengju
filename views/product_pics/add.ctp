<div class="productPics form">
<?php echo $this->Form->create('ProductPic');?>
	<fieldset>
		<legend><?php __('Add Product Pic'); ?></legend>
	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('position_id');
		echo $this->Form->input('src',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Pics', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>