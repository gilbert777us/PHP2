<!DOCTYPE HTML>  
<html>
<body>  

<?php
  //var_dump($_POST);
$suma=0;
// El el caso que sea la primera vez que se accede a la pagina, osea si estan vacios el post de c1, c2 ,c3 y c4
if (empty($_POST['c1']) && empty($_POST['c2']) && empty($_POST['c3']) && empty($_POST['c4']) )
{
  // se dan las 2 primeras cartas 
  $_POST['c1'] = rand(1,11);
   $_POST['c2'] = rand(1,11);
   $suma=$_POST['c1']+$_POST['c2'];
}
// si ya estan las 2 primeras cartas dadas genero la tercera carta y sumo
  else if ( empty($_POST['c3']) && empty($_POST['c4']) &&!isset($_POST['plantar']))
{
  $_POST['c3'] = rand(1,11);
 $suma=$_POST['c1']+$_POST['c2']+$_POST['c3'];
}
// si ya estan las 3 primeras cartas dadas genero la cuarte carta y sumo
else if (empty($_POST['c4']) &&!isset($_POST['plantar']))
{
  $_POST['c4'] = rand(1,11);
$suma=$_POST['c1']+$_POST['c2']+$_POST['c3']+$_POST['c4'];
}
   
 // si se pulsa plantar se generan las 2 cartas de la banca
  $suma2=0; 
 if (isset($_POST['plantar']) )
 {
     $suma=$_POST['c1']+$_POST['c2']+$_POST['c3']+$_POST['c4'];
     $_POST['c5'] = rand(1,11);
     $_POST['c6'] = rand(1,11);
     $suma2= $_POST['c5']+ $_POST['c6'] ;

  }
?>

<h2>JUEGO SIN APUESTAS</h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
   <fieldset>
    <legend>JUGADA</legend>
    C1<input type="text" name="c1" value="<?php if (isset($_POST['c1'])) echo $_POST['c1'];?>" readonly>
    C2 <input type="text" name="c2" value="<?php if (isset($_POST['c2'])) echo $_POST['c2'];?>" readonly>
    TOTAl <input type="text" name="total" value="<?php echo $suma?>" readonly>
    <br/>
    C3<input type="text" name="c3" value="<?php if (isset($_POST['c3'])) echo $_POST['c3'];?>" readonly>
    C4 <input type="text" name="c4" value="<?php if (isset($_POST['c4'])) echo $_POST['c4'];?>" readonly>
  </fieldset>
  <input type="submit" name="pedir" value="Pedir">
  <input type="submit" name="plantar" value="plantar"> 
  <br/>
   <fieldset>
    <legend>BANCA</legend>
    C1<input type="text" name="c5" value="<?php  if (isset($_POST['c5'])) echo $_POST['c5'];?>" readonly>
    C2 <input type="text" name="c6" value="<?php  if (isset($_POST['c6'])) echo $_POST['c6'];?>" readonly>
    TOTAl <input type="text" name="total2" value="<?php  if (isset($_POST['c5'])&& isset($_POST['c6'])) echo $suma2;?>" readonly>
  </fieldset>
</form>

</body>
</html>