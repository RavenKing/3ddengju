<div class="juzhong">
<?php
echo $this->Form->create('User',array('action'=>'register'));?>
<div id="loading" style="display:none;padding:4px;color:black;width:100px"><strong><?php  echo $this->Html->image('loading.gif'); ?></strong></div>
<?php
echo $this->Form->input('username',array('label'=>'用户','class'=>'logininput','id'=>'username'));
?>
<div id="view" style="display:none;background-color:#E8EEF7;
    padding:4px;border:1px solid silver;width:300px"></div>
</div>
<?php
echo $this->Form->input('password',array('label'=>'密码','class'=>'logininput'));
echo $this->Form->input('repswd',array('label'=>'再输入一次','type'=>'password','class'=>'logininput'));
?>
<input type="submit" value="提交" class="loginbtn" />
</form>
<?php
    //设置 AJAX 选项
    $options = array(
        'update' => 'view',
        'url'    => '/users/search',
        'frequency' => 1,
        'loading' => "Element.hide('view');Element.show('loading')",
        'complete' => "Element.hide('loading');Effect.Appear('view')"
    );
    echo $ajax->observeField('username', $options);
?>
