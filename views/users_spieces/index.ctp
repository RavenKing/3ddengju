<div class="usersSpieces index">
	<h2><?php __('Users Spieces');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('spiece_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usersSpieces as $usersSpiece):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usersSpiece['UsersSpiece']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usersSpiece['User']['id'], array('controller' => 'users', 'action' => 'view', $usersSpiece['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersSpiece['Spiece']['id'], array('controller' => 'spieces', 'action' => 'view', $usersSpiece['Spiece']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usersSpiece['UsersSpiece']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usersSpiece['UsersSpiece']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usersSpiece['UsersSpiece']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersSpiece['UsersSpiece']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Users Spiece', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spieces', true), array('controller' => 'spieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spiece', true), array('controller' => 'spieces', 'action' => 'add')); ?> </li>
	</ul>
</div>