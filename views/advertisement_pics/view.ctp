<div class="advertisementPics view">
<h2><?php  __('Advertisement Pic');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $advertisementPic['AdvertisementPic']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $advertisementPic['AdvertisementPic']['src']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Selected'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $advertisementPic['AdvertisementPic']['is_selected']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $advertisementPic['AdvertisementPic']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $advertisementPic['AdvertisementPic']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($advertisementPic['User']['id'], array('controller' => 'users', 'action' => 'view', $advertisementPic['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Advertisement Pic', true), array('action' => 'edit', $advertisementPic['AdvertisementPic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Advertisement Pic', true), array('action' => 'delete', $advertisementPic['AdvertisementPic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $advertisementPic['AdvertisementPic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Advertisement Pics', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Advertisement Pic', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
