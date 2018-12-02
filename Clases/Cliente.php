<?php
require_once('Granja.php');
class Cliente{
  var $id=1;
  function comprar($tipo,$granja){
   
    return $granja->vender($tipo);
    
   
  }
  
  
}
  
  
  
?>