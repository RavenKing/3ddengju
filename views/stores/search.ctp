<?php
?>

<?php 
echo $ajax->div('check');
if($result)
echo $this->Html->image('icons/icon_missing.png');
else
echo  $this->Html->image('icons/icon_approve.png');
echo $ajax->divEnd('check');
?>