<div class="productPics index">
	<h2><?php __('Product Pics');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('product_id');?></th>
			<th><?php echo $this->Paginator->sort('position_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($productPics as $productPic):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $productPic['ProductPic']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productPic['Product']['id'], array('controller' => 'products', 'action' => 'view', $productPic['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productPic['Position']['name'], array('controller' => 'positions', 'action' => 'view', $productPic['Position']['id'])); ?>
		</td>
		<td><?php echo $productPic['ProductPic']['src']; ?>&nbsp;</td>
		<td><?php echo $productPic['ProductPic']['created']; ?>&nbsp;</td>
		<td><?php echo $productPic['ProductPic']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $productPic['ProductPic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $productPic['ProductPic']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $productPic['ProductPic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productPic['ProductPic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product Pic', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>