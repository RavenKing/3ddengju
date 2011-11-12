<div class="usersSpieces form">
<?php echo $this->Form->create('UsersSpiece');?>
	<fieldset>
		<legend><?php __('Add Users Spiece'); ?></legend>
	<?php
	  print_r($users);
		echo $this->Form->input('user_id',array('value'=>$_SESSION['Auth']['User']['id'],'type'=>'hidden'));
		echo $this->Form->input('spiece_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Spieces', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Spieces', true), array('controller' => 'spieces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Spiece', true), array('controller' => 'spieces', 'action' => 'add')); ?> </li>
	</ul>
</div>