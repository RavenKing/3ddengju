 <div class="contentcontainer">
            <div class="headings altheading">
                <h2>申请中的店铺</h2>
			<?php   
		echo 	 $this->Form->create('store',array('controller'=>'stores','action'=>'applyaction'));
			  ?>
            </div>
            <div class="contentbox">
            	<table width="100%">
                	<thead>
                    	<tr>
                        	<th>店铺</th>
                            <th>店铺url</th>
                            <th>店铺老板</th>
                            <th>店铺地址</th>
							<th>操作</th>
					        <th><input name="check" type="checkbox" value="" id="checkboxall" />选择全部</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php   ?>
					<?php  // print_r ($results);
 foreach($results as $result)
 {
?>
                    	<tr>
                        	<td><?php echo $result['Store']['store_name'];?></td>
                          <td><?php echo $result['Store']['store_url'];?></td>
                          <td><?php echo $result['Store']['store_boss'];?></td>
                            <td><?php echo $result['Store']['store_address'];?></td>
                            <td>

                            	<a href="#" title=""><img src="img/icons/icon_edit.png" alt="Edit" /></a>
                            	<a href="#" title=""><img src="img/icons/icon_approve.png" alt="Approve" /></a>
                                <a href="#" title=""><img src="img/icons/icon_unapprove.png" alt="Unapprove" /></a>
                                <a href="#" title=""><img src="img/icons/icon_delete.png" alt="Delete" /></a>
                            </td>
                            <td><input type="checkbox" value="<?php  echo $result['Store']['id']; ?>"  name="check[]" /></td>
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