<div class="productCategoryDetails form"><?php echo $this->Form->create('ProductCategoryDetail');?>		<legend><?php echo "tianjiaxijie"; ?></legend>	<?php		 echo $this->Form->input('product_id',array('value'=>$productid,'type'=>'hidden'));		$names=$this->requestAction(array('controller'=>'product_categories','action'=>'getname'));		$number=$this->requestAction(array('controller'=>'product_categories','action'=>'getnumber'));		/*print_r($names);		print_r($number);*/		$options=$this->requestAction(array('controller'=>'product_details','action'=>'lists'));	 for($i=1;$i<=$number;$i++)
{      
echo "<fieldset>
<legend>".$names[$i]."</legend>";	echo @$this->Form->input('product_detail_id'.$i,array('options'=>$options[$i],'multiple'=>'checkbox','type'=>'select','label'=>''));
    echo "</fieldset>";}	?>
<?php echo $this->Form->end(__('Submit', true));?></div>
