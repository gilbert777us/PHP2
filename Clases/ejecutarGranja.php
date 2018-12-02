Ca<?php
require_once('Granja.php');
require_once('Gallina.php');
require_once('Cliente.php');


$granja1=new Granja("1");
$granja2=new Granja("2");


for($i=0;$i<3;$i++){
  $granja1->anadirGallina(new Gallina());
}

$joseLuis = new cliente();
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);
$producto = $joseLuis->comprar("h",$granja1);
echo "<br/>";
print_r ($producto);



$producto = $joseLuis->comprar("p",$granja2);
echo "<br/>";
print_r ($producto);




?>