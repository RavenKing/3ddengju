<div class="productCategoryDetails form">
<?php echo $this->Form->create('ProductCategoryDetail');?>
	<fieldset>
		<legend><?php __('Edit Product Category Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('product_detail_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProductCategoryDetail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProductCategoryDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Product Category Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details', true), array('controller' => 'product_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail', true), array('controller' => 'product_details', 'action' => 'add')); ?> </li>
	</ul>
</div>