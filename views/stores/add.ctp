<div class="stores form">
<?php echo $this->Form->create('Store');?>
	<fieldset>
		<legend><?php __('Add Store'); ?></legend>
	<?php
	
	   		$options=$this->requestAction(array('controller'=>'markets','action'=>'lists'));
		echo $this->Form->input('market_id',array('options'=>$options));
		echo $this->Form->input('store_name');
		echo $this->Form->input('store_url');
		echo $this->Form->input('store_address');
		echo $this->Form->input('store_boss');
		echo $this->Form->input('store_mobile');
		echo $this->Form->input('description');
		echo $this->Form->input('service');
		$options=$this->requestAction(array('controller'=>'users','action'=>'getname'));
		echo $this->Form->input('user_id',array('options'=>$options));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Markets', true), array('controller' => 'markets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Market', true), array('controller' => 'markets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Store Pics', true), array('controller' => 'store_pics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store Pic', true), array('controller' => 'store_pics', 'action' => 'add')); ?> </li>
	</ul>
</div>