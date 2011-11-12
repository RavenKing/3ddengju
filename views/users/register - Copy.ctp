<div class="juzhong">
<?php
echo $this->Form->create('User',array('action'=>'register'));
echo $this->Form->input('username',array('label'=>'用户','class'=>'logininput'));
echo $this->Form->input('password',array('label'=>'密码','class'=>'logininput'));
echo $this->Form->input('repswd',array('label'=>'再输入一次','type'=>'password','class'=>'logininput'));
?>
<input type="submit" value="提交" class="loginbtn" />
</form>
</div>