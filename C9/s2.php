<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>  
<html>
<body>  

<?php
  var_dump($_POST);
  if(isset($_POST["var1"]) && isset($_POST["var2"])){
    $_SESSION["svar1"] = $_POST["var1"];
    $_SESSION["svar2"] = $_POST["var2"];
  }
?>

<h2>S2</h2>
<form method="post" action="s3.php">  
  var3: <input type="text" name="var3" >
  <br><br>
  var4: <input type="text" name="var4" >
  <br><br>
  <input type="submit" name="boton2" value="Boton2">  
</form>
</body>
</html>