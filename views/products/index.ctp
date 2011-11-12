      <div class="contentcontainer">
            <div class="headings altheading">
                <h2>商品列表</h2>

            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
			<th><?php echo  '商品名称';?></th>
			<th><?php echo  '商品大小';?></th>
			<th><?php echo  '商品功耗';?></th>
			<th><?php echo  '商品电压';?></th>
			<th><?php echo  '灯泡个数';?></th>
			<th><?php echo  '发布时间';?></th>
			<th><?php echo  '修改时间';?></th>
			<th><?php echo  '你可以';?></th>
                        </tr>
                    </thead>
                    <tbody>
  
<?php  
foreach ($products[0]['Product'] as $product)
{
?>
                       

		<td><?php echo $product ['product_name']; ?>&nbsp;</td>
		<td><?php echo $product ['product_size']; ?>&nbsp;</td>
		<td><?php echo $product ['product_power']; ?>&nbsp;</td>
		<td><?php echo $product ['product_voltage']; ?>&nbsp;</td>
		<td><?php echo $product ['product_bulbnumber']; ?>&nbsp;</td>
		<td><?php echo $product ['created']; ?>&nbsp;</td>
		<td><?php echo $product ['modified']; ?>&nbsp;</td>

  <td>
 <?php echo    $this->Html->link('delete',array('controller'=>'ProductCategoryDetails','action'=>'deletedetails',$product['id']),array(),"R U sure?");
 echo
 $this->Html->link('adddetail',array('controller'=>'ProductCategoryDetails','action'=>'adddetail',$product['id']));?>
 <?php echo    $this->Html->link('view',array('action'=>'view',$product['id']));?>
                              
                            </td>
                           
                        </tr>
<?php
}
?>
                    </tbody>
                </table>

                <div class="extrabottom">
                	<ul>
                    	<li><img src="img/icons/icon_edit.png" alt="Edit" /> Edit</li>
                        <li><img src="img/icons/icon_approve.png" alt="Approve" /> Approve</li>
                        <li><img src="img/icons/icon_unapprove.png" alt="Unapprove" /> Unapprove</li>
                        <li><img src="img/icons/icon_delete.png" alt="Delete" /> Remove</li>

                    </ul>
                    <div class="bulkactions">
                    	<select>
                        	<option>Select bulk action...</option>
                        </select>
                        <input type="submit" value="Apply" class="btn" />
                    </div>
                </div>
            </div>
            
        </div>	
