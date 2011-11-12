<div class="usersSpieces view">
<h2><?php  __('Users Spiece');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersSpiece['UsersSpiece']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usersSpiece['User']['id'], array('controller' => 'users', 'action' => 'view', $usersSpiece['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Spiece'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($usersSpiece['Spiece']['id'], array('controller' => 'spieces', 'action' => 'view', $usersSpiece['Spiece']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Spiece', true), array('action' => 'edit', $usersSpiece['UsersSpiece']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Users Spiece', true), array('action' => 'delete', $usersSpiece['UsersSpiece']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersSpiece['UsersSpiece']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Spieces', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Spiece', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spieces', true), array('controller' => 'spieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spiece', true), array('controller' => 'spieces', 'action' => 'add')); ?> </li>
	</ul>
</div>
