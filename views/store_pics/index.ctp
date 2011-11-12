<div class="storePics index">
	<h2><?php __('Store Pics');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('store_id');?></th>
			<th><?php echo $this->Paginator->sort('position_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($storePics as $storePic):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $storePic['StorePic']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($storePic['Store']['id'], array('controller' => 'stores', 'action' => 'view', $storePic['Store']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($storePic['Position']['name'], array('controller' => 'positions', 'action' => 'view', $storePic['Position']['id'])); ?>
		</td>
		<td><?php echo $storePic['StorePic']['src']; ?>&nbsp;</td>
		<td><?php echo $storePic['StorePic']['created']; ?>&nbsp;</td>
		<td><?php echo $storePic['StorePic']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $storePic['StorePic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $storePic['StorePic']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $storePic['StorePic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $storePic['StorePic']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Store Pic', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>