<?php
require_once('Juego.php');
class BlackJack extends Juego {
  
 //atributos
  var $reglasBlackJack;
  
  //constructor
  function BlackJack($reglasBlackJack){
    $this->reglasBlackJack = $reglasBlackJack;
    echo "BlackJAck creado con las reglas ".$reglasBlackJack;
  }
  
  //metodos
  function apostar($dinero, $cliente){
    
  }
 
  
}
?>