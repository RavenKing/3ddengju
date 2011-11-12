
<?php 

  //print_r($id);
   echo $this->Html->link("继续添加图片",array("controller"=>'ProductPics','action'=>'addnew',$id));
   echo "<br>";
   echo $this->Html->link("返回",array("controller"=>'Products','action'=>'listall'));
   
?>