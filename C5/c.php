<?php 
$x = 75;
$y = 25; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();


//var_dump($GLOBALS);
var_dump($_SERVER);

?>