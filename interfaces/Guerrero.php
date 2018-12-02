<?php
  require_once("iGuerrero.php");

  class Guerrero implements iGuerrero{
   
    
    public function Guerrero(){
       $nombre;
       $fuerza;
    }
      public function getNombre(){
        return $this->nombre;
      }
      public function setNombre($nombre){
        $this->nombre = $nombre;
      }
    
      public function getFuerza(){
        return $this->fuerza;
      }
    
      public function setFuerza($fuerza){
         $this->fuerza = $fuerza;
      }
         
      public function entrenar($entrenamiento, $tiempo){
       $this->fuerza = $this->fuerza + $entrenamiento + $tiempo;
        echo $this->fuerza;
      }
    
      public function luchar($guerrero){
         $guerrero;
        if ($this->fuerza > $guerrero->fuerza){
          return true;
        } else {
          return false;
        }
      }
      public function vestir($prenda, $bragas){
        echo "Guerrero vestido satisfactoriamente";
      }
      public function defender($guerrero){
        $this->fuerza -= $guerrero->fuerza;        
      }
   }

?>