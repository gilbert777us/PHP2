<?php
require_once('Juego.php');
class Ruleta extends Juego {
  
 //atributos
  var $reglasRuleta;
  var $tipo;
  
  //constructor
  function Ruleta($reglasRuleta, $tipo = "americana"){
    $this->reglasRuleta = $reglasRuleta;
    $this->tipo = $tipo;
    echo "Ruleta ".$tipo." creada con las reglas ".$reglasRuleta;
  }
  
  //metodos
  function apostar($dinero, $cliente){
    
  }
  
  function getRuleta(){
  
  }
 
  
}
?>