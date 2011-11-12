<div class="markets view">
<h2><?php  __('Market');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $market['Market']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Market Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $market['Market']['market_name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Market', true), array('action' => 'edit', $market['Market']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Market', true), array('action' => 'delete', $market['Market']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $market['Market']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Markets', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Market', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Stores');?></h3>
	<?php if (!empty($market['Store'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Market Id'); ?></th>
		<th><?php __('Store Name'); ?></th>
		<th><?php __('Store Url'); ?></th>
		<th><?php __('Store Address'); ?></th>
		<th><?php __('Store Boss'); ?></th>
		<th><?php __('Store Mobile'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Service'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Level'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($market['Store'] as $store):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $store['id'];?></td>
			<td><?php echo $store['market_id'];?></td>
			<td><?php echo $store['store_name'];?></td>
			<td><?php echo $store['store_url'];?></td>
			<td><?php echo $store['store_address'];?></td>
			<td><?php echo $store['store_boss'];?></td>
			<td><?php echo $store['store_mobile'];?></td>
			<td><?php echo $store['created'];?></td>
			<td><?php echo $store['modified'];?></td>
			<td><?php echo $store['description'];?></td>
			<td><?php echo $store['service'];?></td>
			<td><?php echo $store['user_id'];?></td>
			<td><?php echo $store['level'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'stores', 'action' => 'view', $store['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'stores', 'action' => 'edit', $store['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'stores', 'action' => 'delete', $store['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $store['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
