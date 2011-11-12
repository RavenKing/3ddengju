 <div class="contentcontainer">
            <div class="headings altheading">
                <h2>申请列表</h2>
			<?php   
		echo 	 $this->Form->create('store',array('controller'=>'stores','action'=>'applyaction'));
			  ?>
            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
                        	<th>申请人</th>
                            <th>所属店铺</th>
                            <th>申请范围</th>
							<th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php   ?>
					<?php  //  print_r ($results);
 foreach($results as $result)
 {
?>
                    	<tr>
                        	<td><?php echo $result['User']['username'];?></td>
                          <td><?php //echo $result['Store']['store_url'];?></td>
                          <td><?php 
						   echo   $result['Spiece']['spiece_name'];
						  ?></td>
                            <td> <?php  
							echo $this->Html->link('同意',array('action'=>'applyaction',$result['UsersSpiece']['id']));
							 ?>
                            </td>
                        </tr>
                       <?php }?>
                    </tbody>
                </table>
<br>
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
                        <input type="submit" value="同意" class="btn" />
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
            
        </div>