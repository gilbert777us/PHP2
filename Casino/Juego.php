<?php
//require_once('Granja.php');
class Juego{
  
 //atributos
  var $nJugadores=1;
  var $nombre;
  
  //constructor
  function Juego($nJugadores, $nombre = "ruleta"){
    $this->nJugadores = $nJugadores;
    $this->nombre = $nombre;
    echo "Juego ".$nombre." creado con ".$nJugadores. "jugadores";
  }
  
  //metodos
  function apostar($dinero, $cliente){
    
  }
 
  
}
?>