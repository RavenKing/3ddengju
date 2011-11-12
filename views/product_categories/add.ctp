<div class="productCategories form">
<?php echo $this->Form->create('ProductCategory');?>
	<fieldset>
		<legend><?php __('Add Product Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Categories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Product Details', true), array('controller' => 'product_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail', true), array('controller' => 'product_details', 'action' => 'add')); ?> </li>
	</ul>
</div>