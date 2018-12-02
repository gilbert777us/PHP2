<?php
//require_once('Granja.php');
class Cliente{
  
 //atributos
  var $id=1;
  var $dinero=100;
  
  //constructor
  function Cliente($id, $dinero){
    $this->id = $id;
    $this->dinero = $dinero;
    echo "Cliente creado con".$dinero. "$ e ID: ".$id;
    echo "<br/>";
  }
  
  //metodos
  function jugar($casino, $nombreJuego){
    switch($nombreJuego){
        case "Ruleta": 
          
          break;
        case "Tragaperras": 
          
          break;
        case "BlackJack": 
          
          break;
    }
  }
  
  function recargar($dinero){
    $this->dinero += $dinero;
    echo "Dinero actual: ".$this->dinero;
    echo "<br/>";
  }
  
}
?>