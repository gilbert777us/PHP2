<!DOCTYPE HTML>  
<html>
<body>  

<h2>PHP Form Validation Example</h2>
  <?php
  function mifuncionerr($errno, $errstr) {
  echo "Existe un problema, habla con el relojero!.";
    die();
  }

//set error handler
  set_error_handler("mifuncionerr");
  
  //var_dump($_POST);
  
  if (isset($_POST["multiplo"])){
    $mult = $_POST["multiplo"];
   
    for($h=0;$h<=23;$h++){
        if($h<10){
            $h="0".$h;  
          }
         
      for($m=0;$m<=59;$m++){
        if($m % $mult == 0 ){
           if($m<10){
            $m="0".$m;
          }
         
        echo $h.":".$m."<br/>";
        }
      }
        
    }
  }
  
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 
  <input type="text" name="multiplo"/>
  <input type="submit" name="enviar"/>
</form>



</body>
</html>