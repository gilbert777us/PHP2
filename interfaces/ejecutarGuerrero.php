<?php
  require_once("Guerrero.php");

  $sandokan = new Guerrero();
  $sandokan->setNombre("sandokan");
  $sandokan->setFuerza(1000);

  $josean = new Guerrero();
  $josean->setNombre("josean");
  $josean->setFuerza(10000);

 
  if ($sandokan->luchar($josean)){
      echo "gana sandokan";
  }else {
    echo "gana josean";
  }


$sandokan->entrenar(5000,4001);
if ($sandokan->luchar($josean)){
      echo "gana sandokan";
  }else {
    echo "gana josean";
  }




 ?>