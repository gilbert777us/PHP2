<!DOCTYPE HTML>  
<html>
<body>  
  <?php
  
  function hayDatos(){
    return isset ($_POST["c0"]) && 
     isset ($_POST["c1"]) && 
     isset ($_POST["c2"]) && 
      isset($_POST["c3"]) &&
      isset($_POST["c4"]) && 
      isset($_POST["c5"]) && 
      isset($_POST["c6"]) && 
     isset ($_POST["c7"]);
  
  }
  try{
  $vectorAux =  array();
  for($i = 0 ; $i<8 ; $i++){
    $vectorAux[] = "";
  }
  
  //var_dump($_POST);
  if(hayDatos()){
       $vectorAux =  array();
        $vectorAux [] = $_POST["c0"];  
        $vectorAux [] = $_POST["c1"]; 
        $vectorAux [] = $_POST["c2"]; 
        $vectorAux [] = $_POST["c3"]; 
        $vectorAux [] = $_POST["c4"]; 
        $vectorAux [] = $_POST["c5"]; 
        $vectorAux [] = $_POST["c6"]; 
        $vectorAux [] = $_POST["c7"]; 
   // var_dump($arrayOrden);
    
    Sort ($vectorAux);
  }
  }catch(Exception $e){
    echo "Error 48390939029939, consulte el manual RDS";
  }
  
  
  ?>
  


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <input type="text" name="c0" value="<?php echo $vectorAux[0] ?>"/>
  <input type="text" name="c1" value="<?php echo $vectorAux[1] ?>"/>
  <input type="text" name="c2" value="<?php echo $vectorAux[2] ?>"/>
  <input type="text" name="c3" value="<?php echo $vectorAux[3] ?>"/>
  <input type="text" name="c4" value="<?php echo $vectorAux[4] ?>"/>
  <input type="text" name="c5" value="<?php echo $vectorAux[5] ?>"/>
  <input type="text" name="c6" value="<?php echo $vectorAux[6] ?>"/>
  <input type="text" name="c7" value="<?php echo $vectorAux[7] ?>"/>
  <input type="submit" name="ordenar" value="calcular"/> 
</form>



</body>
</html>