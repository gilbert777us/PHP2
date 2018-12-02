<?php


function checkNum($number) {
  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }
  return true;
}

try
{
checkNum(5);
}
catch(Exception $e1)
{
  echo "el mensaje es:".$e1->getMessage();
}


?>