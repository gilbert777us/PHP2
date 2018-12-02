<?php
//require_once('Cliente.php');
require_once('Gallina.php');
require_once('Pollo.php');

class Granja
{
  //atributos
  var $nombre="Granja";
  var $aGallinas=array();
  var $contGallinas;
  var $aPollos=array();
  
  function Granja($nombre){
    
    $this->nombre=$nombre;
    $contGallinas=0;
    echo "</br>Se ha creado la granja ".$nombre;
  }
  
  function vender($tipo){
    
    if($tipo=="h"){
      $this->contGallinas= ($this->contGallinas+1)%count($this->aGallinas);
      echo  "<br/>Esta trabajando la gallina: ".$this->contGallinas;
      return $this->aGallinas [$this->contGallinas]->ponerHuevo();
    }else if($tipo=="p"){
      return new Pollo();
  }

}
  
  function anadirGallina($g){
    $this->aGallinas[]=$g;
    
  }
    
 
    
  
}
?>