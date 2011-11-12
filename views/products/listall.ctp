      <div class="contentcontainer">
            <div class="headings altheading">
                <h2>产品列表</h2>

            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
                        	<th>商品名称</th>
                            <th>发布时间</th> 
                            <th>发布商户</th>                     
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
  
<?php  
//print_r($data);
foreach($data as $result)
{
?>
                         <tr class="alt">
                        	<td><?php   echo $result['Product']['product_name']; ?></td>
                        	<td><?php   
									print_r ($result['Product']['created']); ?></td>
                            <td><?php   
						            echo $result['Store']['store_name']; ?></td>
                            <td>
                            	<?php echo $this->Html->link('delete',array('controller'=>'ProductCategoryDetails','action'=>'deleteit',$result['Product']['id']),array(),"R U sure?");?>
                            	<?php echo $this->Html->link('view',array('action'=>'view',$result['Product']['id']));?>
								
	     </td>
                           
                        </tr>
<?php
}
?>
                    </tbody>
                </table>
                <ul class="pagination">
 
                	<li class="text">    <?php
    echo $paginator->prev('? Previous ', null, null, array('class' => 'disabled'));?></li>
            <?php print_r ($paginator->numbers()); ?>
                    <li class="text">
    <?php echo $paginator->next(' Next ?', null, null, array('class' => 'disabled'));
    ?></li>
                </ul>
				
    <?php echo $paginator->counter(array(
'format' => '第 %page% 页，共 %pages% 页, 显示当前 %current% 记录，共有
%count% 记录')); ?>
                <div style="clear: both;"></div>
            </div>
            
        </div>
    <!-- 显示下一页和上一页链接 -->
     <!-- 输出 X of Y，X 为当前页码，Y 为总页数 -->
	