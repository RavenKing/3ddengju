      <div class="contentcontainer">
            <div class="headings altheading">
                <h2>店铺列表</h2>

            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
                        	<th>店铺</th>
                            <th>店铺老板</th>
                            <th>所属市场</th>
                            <th>用户账号</th>                       
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
  
<?php  
//print_r($stores);
foreach($stores as $store)
{
?>
                         <tr class="alt">
                        	<td><?php   echo $store['Store']['store_name']; ?></td>
                        	<td><?php   echo $store['Store']['store_boss']; ?></td>
                        	<td><?php   echo $store['Market']['market_name']; ?></td>
                        	<td><?php   echo $store['User']['username']; ?></td>
                            <td>

                          <?php  echo $this->Html->link("查看细节",array('action'=>'viewdetail',$store['Store']['id'])); ?>                            
							<a href="#" title=""><img src="img/icons/icon_approve.png" alt="Approve" /></a>
                                <a href="#" title=""><img src="img/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                <a href="#" title=""><img src="img/icons/icon_delete.png" alt="Delete" /></a>
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
                	<li class="text">Previous</li>
                    <li class="page"><a href="#" title="">1</a></li>
                    <li><a href="#" title="">2</a></li>
                    <li><a href="#" title="">3</a></li>
                    <li><a href="#" title="">4</a></li>

                    <li class="text"><a href="#" title="">Next</a></li>
                </ul>
                <div style="clear: both;"></div>
            </div>
            <?php
			echo $this->Html->link("添加店铺",array('controller'=>'stores','action'=>'add'));
			
			?>
        </div>