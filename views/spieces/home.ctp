<?php



 print_r($spieces);
  foreach($spieces as $key => $result)
  {
   echo $this->Html->link($result,array("controller"=>'products','action'=>'find',$key));
  
  
  }
 
?>