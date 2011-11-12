<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('action' => 'login','id'=>'','class'=>''));
    echo $this->Form->input('username',array('class'=>'logininput','id'=>'username'));
   echo $this->Form->input('password',array('class'=>'logininput'));
    ?>
	<input type="submit" class="loginbtn" value="登陆" id="login1"/>
	</form>
<div id="loading" style="display:none;padding:4px;color:black;width:100px"><strong><?php  echo $this->Html->image('loading.gif'); ?></strong></div>
	<br>
		<p><?php echo  $this->Html->link('没有账号？注册',array('action'=>'register'));  ?></p>
<div id="view" style="display:none;background-color:#E8EEF7;
    padding:4px;border:1px solid silver;width:300px"></div>
<p>

<form onsubmit="return false">
    <p>
        <b>Live Search:</b>
        <input type="text" name="livesearch" id="livesearch" />
    </p>
</form>
<?php
    //设置 AJAX 选项
    $options = array(
        'update' => 'view',
        //处理查询的 URL，对应于控制器中的 search() 方法
        'url'    => '/users/search',
        //观察频率，单位为“秒”
        'frequency' => 1,
        'loading' => "Element.hide('view');Element.show('loading')",
        'complete' => "Element.hide('loading');Effect.Appear('view')"
    );
    echo $ajax->observeField('livesearch', $options);
?>
