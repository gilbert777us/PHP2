<?php

  interface iGuerrero{
      public function getNombre();
      public function getFuerza();
      public function setNombre($nombre);
      public function entrenar($entrenamiento, $tiempo);
      public function luchar($guerrero);
      public function vestir($prenda, $bragas);
      public function defender($guerrero);      
      public function setFuerza($fuerza);
  }

?>