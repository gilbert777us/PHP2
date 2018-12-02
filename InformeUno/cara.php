<!DOCTYPE HTML>  
<html>
<head>
 <style>
 .error {color: #FFFF00;}
</style>
</head>
<body>  

<?php
  var_dump($_POST);
  $estado = "";
  if (isset($_POST["reiniciar"])) {
    $_POST["pot"] = 100;
  }
  elseif (isset($_POST["apostar"])) {
    if ($_POST["postura"] <= $_POST["pot"]){
      $estado=generarCaraCruz();  
      echo "estado2:".$estado;
    if ($_POST["opcion1"] == $estado){
      $_POST["pot"] = $_POST["pot"] + $_POST["postura"];
    }
    else{
      $_POST["pot"] = $_POST["pot"] - $_POST["postura"];
    }
    }
  }
  function generarCaraCruz(){
    $al = rand(0,1);
    if ($al == 0) {
      $estado = "cara";
    }
    else {
      $estado = "cruz";
    }
    return $estado;
  }
?>

<h2>Cara o Cruz</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <fieldset>
    <legend>MONEDA</legend>
    <input name="moneda" type="text" size="30" value="<?php echo $estado ?>">
  </fieldset>
  <fieldset>
    <legend>POSTURA</legend>
    <input type="submit" name="apostar" value="Apostar">
    Dinero:
    <input name="postura" type="text" size="30" >
    Cruz:
    <input type="radio" name="opcion1" value="cruz" checked="checked">
    Cara:
    <input type="radio" name="opcion1" value="cara">
  </fieldset>
  <fieldset>
    <legend>POT</legend>
    <input readonly name="pot" type="text" size="30" value="<?php if(isset($_POST["pot"])) echo $_POST["pot"]; ?>">
    <input type="submit" name="reiniciar" value="Reiniciar">
  </fieldset>
</form>

<?php
  
?>

</body>
</html>