<div class="advertisementPics index">
	<h2><?php __('Advertisement Pics');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th><?php echo $this->Paginator->sort('is_selected');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($advertisementPics as $advertisementPic):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $advertisementPic['AdvertisementPic']['id']; ?>&nbsp;</td>
		<td><?php echo $advertisementPic['AdvertisementPic']['src']; ?>&nbsp;</td>
		<td><?php echo $advertisementPic['AdvertisementPic']['is_selected']; ?>&nbsp;</td>
		<td><?php echo $advertisementPic['AdvertisementPic']['created']; ?>&nbsp;</td>
		<td><?php echo $advertisementPic['AdvertisementPic']['modified']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($advertisementPic['User']['id'], array('controller' => 'users', 'action' => 'view', $advertisementPic['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $advertisementPic['AdvertisementPic']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $advertisementPic['AdvertisementPic']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $advertisementPic['AdvertisementPic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $advertisementPic['AdvertisementPic']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Advertisement Pic', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>