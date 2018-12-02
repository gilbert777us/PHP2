<?php
require_once('Juego.php');

class Casino {
  
 //atributos
  var $aforo;
  var $nombre;
  var $aJuegos = array();
  
  //constructor
  function Casino($aforo, $nombre){
    $this->aforo = $aforo;
    $this->nombre = $nombre;
    echo "Casino ".$nombre." con aforo para ".$aforo." personas";
    echo "<br/>";
  }
  
  //metodos
  function jugar(){
    
  }
  
  function addJuego($juego){
    $this->aJuegos[]=$juego;
  }
}
?>