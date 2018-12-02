<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>  
<html>
<body>  

<?php
  echo "POST <br/>";
  var_dump($_POST);
  echo "<br/> SESSION <br/>";
  var_dump($_SESSION);
 

 
  if(isset($_POST["var3"]) && isset($_POST["var4"])){
    $_SESSION["svar3"] = $_POST["var3"];
    $_SESSION["svar4"] = $_POST["var4"];
  }
?>

<h2>S3</h2>
<form method="post" action="s4.php">  
  var5: <input type="text" name="var5" >
  <br><br>
  var6: <input type="text" name="var6">
  <br><br>
  <input type="submit" name="boton3" value="Boton3">  
</form>


</body>
</html>