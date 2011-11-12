<div class="notices form">
<?php echo $this->Form->create('Notice');?>
	<fieldset>
		<legend><?php __('Add Notice'); ?></legend>
	<?php
		echo $this->Form->input('content');
		echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$_SESSION['Auth']['User']['id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Notices', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>