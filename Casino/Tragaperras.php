<?php
require_once('Juego.php');
class Tragaperras extends Juego {
  
 //atributos
  var $reglasTragaperras;
  var $tipo;
  
  //constructor
  function Tragaperras($reglasTragaperras, $tipo = "española"){
    $this->reglasTragaperras = $reglasTragaperras;
    $this->tipo = $tipo;
    echo "Tragaperras ".$tipo." creada con las reglas ".$reglasTragaperras;
  }
  
  //metodos
  function apostar($dinero, $cliente){
    
  }
 
  
}
?>