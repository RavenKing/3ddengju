<div class="notices view">
<h2><?php  __('Notice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $notice['Notice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $notice['Notice']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($notice['User']['id'], array('controller' => 'users', 'action' => 'view', $notice['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Notice', true), array('action' => 'edit', $notice['Notice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Notice', true), array('action' => 'delete', $notice['Notice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $notice['Notice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Notice', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
