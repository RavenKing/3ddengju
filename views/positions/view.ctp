<div class="positions view">
<h2><?php  __('Position');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Width'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['width']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Height'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $position['Position']['height']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position', true), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Position', true), array('action' => 'delete', $position['Position']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Pics', true), array('controller' => 'product_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Pic', true), array('controller' => 'product_pics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Pics', true), array('controller' => 'store_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Pic', true), array('controller' => 'store_pics', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Product Pics');?></h3>
	<?php if (!empty($position['ProductPic'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th><?php __('Src'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['ProductPic'] as $productPic):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productPic['id'];?></td>
			<td><?php echo $productPic['product_id'];?></td>
			<td><?php echo $productPic['position_id'];?></td>
			<td><?php echo $productPic['src'];?></td>
			<td><?php echo $productPic['created'];?></td>
			<td><?php echo $productPic['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'product_pics', 'action' => 'view', $productPic['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'product_pics', 'action' => 'edit', $productPic['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'product_pics', 'action' => 'delete', $productPic['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productPic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product Pic', true), array('controller' => 'product_pics', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Store Pics');?></h3>
	<?php if (!empty($position['StorePic'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Store Id'); ?></th>
		<th><?php __('Position Id'); ?></th>
		<th><?php __('Src'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($position['StorePic'] as $storePic):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $storePic['id'];?></td>
			<td><?php echo $storePic['store_id'];?></td>
			<td><?php echo $storePic['position_id'];?></td>
			<td><?php echo $storePic['src'];?></td>
			<td><?php echo $storePic['created'];?></td>
			<td><?php echo $storePic['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'store_pics', 'action' => 'view', $storePic['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'store_pics', 'action' => 'edit', $storePic['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'store_pics', 'action' => 'delete', $storePic['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $storePic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store Pic', true), array('controller' => 'store_pics', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
