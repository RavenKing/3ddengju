<?php 
 // print_r($product);
 ?> 
 <div class="contentcontainer med left">
             <h3>3ddengju</h3>
             <div class="headings alt">
                <h2>3ddengju</h2>
            </div>
            <div class="contentbox">
     <?php 
	  echo "<h3>产品名称：</h3>";
	   echo $product['Product']['product_name'];
  echo " ";?>
  
  
<?php
echo $this->Html->link("  修改基础信息",array('controller'=>'products','action'=>'edit', $product['Product']['id']));  
	 echo "<br>";
	  echo "功率：";
	   echo $product['Product']['product_power'];
	   echo "<br>";
	  echo "产品流量：";
	   echo $product['Product']['product_voltage'];
	   echo "<br>";	
	  echo "灯泡数量： ";
	   echo $product['Product']['product_bulbnumber'];
	   echo "<br>";
	  echo "发布时间: ";
	   echo $product['Product']['created'];
	   echo "<br>";
	  echo "所属商铺： ";
	   echo $product['Store']['store_name'];
	   echo "<br>";
	  echo "产品大分类：";
	   echo $product['Spiece']['spiece_name'];
	   echo "<br>";
	   
	   
	  echo "产品细节：";  
	  //@echo $product['ProductCategoryDetail'][0]['product_id'];
	 echo @$this->Html->link("添加细节",array("controller"=>'ProductCategoryDetails','action'=>'adddetail',$product['ProductCategoryDetail'][0]['product_id']));
	 echo "<br>";
	   foreach($product['ProductCategoryDetail'] as $result)
	   {
	   $id=$result['product_detail_id'];
@$name=$this->requestAction(array('controller'=>'ProductDetails','action'=>'getdetailname'),array('pass'=>$result['product_detail_id']));
	   echo $name[$id]." ";
	   echo $this->Html->link("delete",array('controller'=>'ProductCategoryDetails','action'=>'delete',$result['id']));
	   echo "<br>";
	   }
	   echo "<br>";
	   //$src="images/".$product['ProductHead'][0]['src'];
	   //echo $src;
	  echo "产品封面：";
	  echo  @$this->Html->image("images/".$product['ProductHead'][0]['src'],array('alt'=>'No pictures','width'=>'200px','height'=>'200px'));
	  echo "<br> 详细照片";
	 // print_r($product['ProductPic']);
  	  echo $this->Html->link("添加",array('controller'=>'ProductPics','action'=>'addnew',$product['Product']['id']));
		
	 foreach($product['ProductPic'] as $result)
	  {
	  
	    echo $this->Html->image("images/".$result['src'],array('alt'=>'kuaizhao'));
	    echo $this->Html->link("delete",array('controller'=>'ProductPics','action'=>'delete',$result['id']));
		echo "<br>";
	
	  }
	   
	 ?>
	 <br>
</div>
</div>
</div>	