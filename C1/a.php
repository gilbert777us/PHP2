<!DOCTYPE html>
<html>
<body>

<?php
echo "My first PHP script!";
  echo " hola ";
  
  $color = "red";
echo "My car is " . $color . "<br/>";
  

  
  $x = 5; // global scope
 
function myTest() {
    // using x inside this function will generate an error
  global $x;
  $x=9;
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
  
$r= "jose";
echo "1:".$r;

  $r=$r+$r;
  echo "varDump:";
  var_dump($r);
  echo "r:".$r;
$t=1;
echo "2:".$t;
  
$j = $r + $t;
echo "3:".$j;
  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
  
echo "<br/>echo:".$cars;
  
  
$x = null;
var_dump($x);
  echo "echo:".$x;
  
?>

</body>
</html>