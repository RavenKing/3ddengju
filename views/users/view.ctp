  <?php print_r($user);?>
         <div class="contentcontainer med left">
            <div class="headings alt">

                <h2>个人信息</h2>
            </div>
            <div class="contentbox">
<?php echo $this->Form->create('User');?>
            		<p>
                    	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
	?>
                        <span class="smltxt">(This is an example of a small descriptive text for input)</span>
                    </p>
                    <p>
                        <label for="errorbox"><span class="red"><strong>Missing field:</strong></span></label>
                        <input type="text" id="errorbox" class="inputbox errorbox" /> <img src="img/icons/icon_missing.png" alt="Error" /> <br />
                        <span class="smltxt red">(This is some warning text for the above field)</span>

                    </p>
                    <p>
                        <label for="correctbox"><span class="green"><strong>Correct field:</strong></span></label>
                        <input type="text" id="correctbox" class="inputbox correctbox" /> <img src="img/icons/icon_approve.png" alt="Approve" />
                    </p>
                    <p>
                        <label for="smallbox"><strong>Small Text field:</strong></label>

                        <input type="text" id="smallbox" class="inputbox smallbox" />
                    </p>
                    <select>
                    	<option>Dropdown Menu Example</option>
                    </select>  <br /> <br />
                    
                    <input type="file" id="uploader" /> <img src="img/loading.gif" alt="Loading" /> Uploading...
                    
                    <p> <br />

                    	<input type="checkbox" name="checkboxexample"/> Checkbox
					</p>
                    <p>
                        <input type="radio" name="radioexample" /> Radio select<br />
                    </p>
      
                </form>         
				<textarea class="text-input textarea" id="wysiwyg" name="textfield" rows="10" cols="75"></textarea>
                <p><br /><br />Buttons styles</p>

                <input type="submit" value="Submit" class="btn" /> <input type="submit" value="Submit (Alternative)" class="btnalt" />
            </div>
        </div>	