<div class="productPics form">
<?php echo $this->Form->create('ProductPic',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('添加图片'); ?></legend>
		<?php	
		echo $this->Form->input('product_id',array('value'=>$id,'type'=>'hidden'));
		
		echo $this->Form->input('head',array('type'=>'file','name'=>'data[ProductPic][head]','label'=>' 产品快照'));
		echo $this->Form->input('position_id',array('label'=>'添加位置'));
		echo $this->Form->input('src',array('type'=>'file','onclick'=>"AddFile(1)",'name'=>'data[ProductPic][src][]','id'=>'src1','label'=>'图片'));
         	
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Product Pics', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions', true), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position', true), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script language="javascript" type="text/javascript">
function AddFile(id)
{
var newid=id+1;
//alert(newid);
var classid="src"+newid;
$("<div id="+classid+"><input type='file' onclick='AddFile("+newid+")' id="+classid+" name=\"data[ProductPic][src][]\" /><p name='delete' onclick='Deletenode("+newid+")' style='float:right;cursor:pointer'>删除</p></div>").insertAfter("#src"+id);
}

function Deletenode(id)
{
 
  $("div #src"+id).remove();

}

</script> 