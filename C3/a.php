<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", 1, "Toyota", 6.8);
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".". $cars[3];
  echo "<br>";
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
  
echo " ARRAYS ASOCIATIVOS <br/>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "Ben is " . $age['Ben'] . " years old.";
echo "Joe is " . $age['Joe'] . " years old.";
echo "<br/>";
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
  
  
  echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
  
?>

</body>
</html>