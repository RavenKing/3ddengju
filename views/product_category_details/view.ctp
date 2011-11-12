<div class="productCategoryDetails view">
<h2><?php  __('Product Category Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategoryDetail['ProductCategoryDetail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($productCategoryDetail['Product']['id'], array('controller' => 'products', 'action' => 'view', $productCategoryDetail['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Detail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($productCategoryDetail['ProductDetail']['id'], array('controller' => 'product_details', 'action' => 'view', $productCategoryDetail['ProductDetail']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Category Detail', true), array('action' => 'edit', $productCategoryDetail['ProductCategoryDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product Category Detail', true), array('action' => 'delete', $productCategoryDetail['ProductCategoryDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCategoryDetail['ProductCategoryDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Category Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category Detail', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details', true), array('controller' => 'product_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail', true), array('controller' => 'product_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
