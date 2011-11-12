<div class="productDetails view">
<h2><?php  __('Product Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productDetail['ProductDetail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pdetail Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productDetail['ProductDetail']['pdetail_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($productDetail['ProductCategory']['name'], array('controller' => 'product_categories', 'action' => 'view', $productDetail['ProductCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Detail', true), array('action' => 'edit', $productDetail['ProductDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product Detail', true), array('action' => 'delete', $productDetail['ProductDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productDetail['ProductDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Categories', true), array('controller' => 'product_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category', true), array('controller' => 'product_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Category Details', true), array('controller' => 'product_category_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category Detail', true), array('controller' => 'product_category_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Product Category Details');?></h3>
	<?php if (!empty($productDetail['ProductCategoryDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Product Detail Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($productDetail['ProductCategoryDetail'] as $productCategoryDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productCategoryDetail['id'];?></td>
			<td><?php echo $productCategoryDetail['product_id'];?></td>
			<td><?php echo $productCategoryDetail['product_detail_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'product_category_details', 'action' => 'view', $productCategoryDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'product_category_details', 'action' => 'edit', $productCategoryDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'product_category_details', 'action' => 'delete', $productCategoryDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCategoryDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Category Detail', true), array('controller' => 'product_category_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
