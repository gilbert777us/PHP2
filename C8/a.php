<!DOCTYPE html>
<html>
<body>

<h1>Welcome to my home page!</h1>
<?php 
  
  function mifuncionerr($errno, $errstr) {
  echo "Existe un problema, habla con el relojero!.";
    die();
  }

//set error handler
  set_error_handler("mifuncionerr");
  
  require 'noFileExists.php';
echo "I have a $color $car.";
?>

</body>
</html>