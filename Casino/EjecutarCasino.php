<?php
require_once('Juego.php');
require_once('Casino.php');
require_once('Ruleta.php');
require_once('BlackJack.php');
require_once('Cliente.php');

$torrelodones = new Casino(500, "Casino de Torrelodones");

for($i=0; $i < 20; $i++){
  $ruletai = new Ruleta("Estas son las reglas" . $i);
  $torrelodones->addJuego($ruletai);
  echo "<br/>";
}
for($i=0; $i < 10; $i++){
  $ruletai = new Ruleta("Estas son las reglas" . $i, "Francesa");
  $torrelodones->addJuego($ruletai);
  echo "<br/>";
}

 $torrelodones->addJuego(new BlackJack("Reglas del BlackJack1"));
echo "<br/>";
 $torrelodones->addJuego(new BlackJack("Reglas del BlackJack2"));
echo "<br/>";

$cliente1 = new Cliente("Joselin", 200);


?>