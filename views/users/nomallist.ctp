      <div class="contentcontainer">
            <div class="headings altheading">
                <h2>用户列表</h2>

            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
                        	<th>用户</th>
                            <th>用户店铺</th> 
                            <th>注册时间</th>                     
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
  
<?php  
print_r($stores);
foreach($stores as $store)
{
?>
                         <tr class="alt">
                        	<td><?php   echo $store['User']['username']; ?></td>
                        	<td><?php   
						        @print_r ($store['Store'][0]['store_name']); ?></td>
                            <td><?php   
						        echo $store['User']['created']; ?></td>
                            <td>
                               <?php echo    $this->Html->link('delete',array('action'=>'delete',$store['User']['id']),array(),"R U sure?");?>
                              
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
	