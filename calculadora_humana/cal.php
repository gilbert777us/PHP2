<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="UTF-8"/>
 <style>
 .error {color: #FFFF00;}
</style>
</head>
<body>  

<?php
  
  if(!(isset($_POST["posterior"]))){
    $_POST["posterior"] = 1;
    $_POST["salida"] = "empezando: suerte";
    $n1 = rand(0,9);
    $n2 = rand(1,9);
    $operador=generarOperador();
    $_POST["contador"]=0;
    $_POST["contadorKO"]=0;

   $_POST["N1"]=$n1;
   $_POST["N2"]=$n2;
   $_POST["op"]=$operador;
    
    $r=operando($n1,$n2,$operador);
    $_POST["res"]="";  
  }
  //No es la primera vez
  else
  {
    $r=operando($_POST["N1"],$_POST["N2"],$_POST["op"]);

    if($_POST["res"]==$r){
     
       $_POST["salida"]= "es igual!!!!!";
       $_POST["contador"] = $_POST["contador"]+1;
       if($_POST["contador"]==5){
         $_POST["salida"]="Fin :(";
         
       }
       $_POST["N1"]=$r;
       $_POST["N2"]=rand(1,9);
       $_POST["op"]=generarOperador();
       
      
      
     }else{
    $_POST["contadorKO"] = $_POST["contadorKO"]+1;
      $_POST["salida"]= "no es igual:'(";
      
    }
    
  }
  
  echo "Numero de operaciones realizadas OK: ".$_POST["contador"];
  echo " Fallos: ".$_POST["contadorKO"];
  
  function generarOperador(){
    $operador = rand(0,2);
     switch($operador){
      case 0: $operador="+";    break;
      case 1: $operador="-";    break;
      case 2: $operador="*";    break;
      //case 3: $operador="/";    break; 
     }
    return $operador;
  }
      
  
   function operando($n1,$n2,$op){
    $result = 0;
    switch($op){
        case "+": $result = $n1+$n2; break;
        case "-": $result = $n1-$n2; break;
        case "*": $result = $n1*$n2; break;
        case "/": $result = $n1/$n2; break;
    }
    return $result;
   }
  
?>

<h2>Calculadora Humana</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <input name="posterior" type="hidden" value="<?php if(isset($_POST['posterior']))echo $_POST['posterior'] ?>">
  <input name="contador" type="hidden" value="<?php if(isset($_POST['contador']))echo $_POST['contador'] ?>">
  <input name="contadorKO" type="hidden" value="<?php if(isset($_POST['contadorKO']))echo $_POST['contadorKO'] ?>">
  <fieldset>
    <legend>Operación</legend>
   <label>N1</label><input name="N1" type="text" size="30" value="<?php echo $_POST['N1']?>" readonly>
   <label>Operador</label><input name="op" type="text" size="30" value="<?php echo $_POST['op']?>" readonly>
   <label>N2</label><input name="N2" type="text" size="30" value="<?php echo $_POST['N2']?>" readonly>
  </fieldset>
  <fieldset>
    <legend>Respuesta</legend>
     <label>Resultado</label>
    <input name="res" type="text" size="30" <?php if($_POST["contador"]==5) {echo " readonly";} ?>>
   <input type="submit" name="apostar" value="Lanzar" <?php if($_POST["contador"]==5) {echo " disabled";} ?>>
   
   
  </fieldset>
  <fieldset>
    <legend>Salida</legend>
    <input readonly name="salida" type="text" size="30" value="<?php echo $_POST["salida"]; ?>">
  </fieldset>
</form>

<?php
  
?>

</body>
</html>