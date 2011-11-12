<div class="productCategories view">
<h2><?php  __('Product Category');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productCategory['ProductCategory']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Category', true), array('action' => 'edit', $productCategory['ProductCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product Category', true), array('action' => 'delete', $productCategory['ProductCategory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productCategory['ProductCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Categories', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Category', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Details', true), array('controller' => 'product_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Detail', true), array('controller' => 'product_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Product Details');?></h3>
	<?php if (!empty($productCategory['ProductDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pdetail Name'); ?></th>
		<th><?php __('Product Category Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($productCategory['ProductDetail'] as $productDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productDetail['id'];?></td>
			<td><?php echo $productDetail['pdetail_name'];?></td>
			<td><?php echo $productDetail['product_category_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'product_details', 'action' => 'view', $productDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'product_details', 'action' => 'edit', $productDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'product_details', 'action' => 'delete', $productDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Detail', true), array('controller' => 'product_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
