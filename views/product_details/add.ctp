<div class="productDetails form">
<?php echo $this->Form->create('ProductDetail');?>
	<fieldset>
		<legend><?php __('Add Product Detail'); ?></legend>
	<?php
		echo $this->Form->input('pdetail_name');
		echo $this->Form->input('product_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Product Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Product Categories', true), array('controller' => 'product_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category', true), array('controller' => 'product_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Category Details', true), array('controller' => 'product_category_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category Detail', true), array('controller' => 'product_category_details', 'action' => 'add')); ?> </li>
	</ul>
</div>