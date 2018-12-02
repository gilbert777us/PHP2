<?php

set_error_handler("miFuncionError");



//echo ($r);

trigger_error("Se ha dividido por cero");


function miFuncionError($errno, $errstr) {
  echo "<b>MI Error:</b> [$errno] el mensaje es $errstr<br>";
  echo "Ending Script";
  die();
}

?>