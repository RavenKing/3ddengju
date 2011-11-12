<div class="productHeads view">
<h2><?php  __('Product Head');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($productHead['Product']['id'], array('controller' => 'products', 'action' => 'view', $productHead['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productHead['ProductHead']['src']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $productHead['ProductHead']['id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product Head', true), array('action' => 'edit', $productHead['ProductHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product Head', true), array('action' => 'delete', $productHead['ProductHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productHead['ProductHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Product Heads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product Head', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
