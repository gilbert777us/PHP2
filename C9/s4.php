<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>  
<html>
<body>  

<?php
  if(isset($_POST["var5"]) && isset($_POST["var6"])){
    $_SESSION["svar5"] = $_POST["var5"];
    $_SESSION["svar6"] = $_POST["var6"];
  }
 foreach($_SESSION as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
 
  // remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
?>

<h2>S4</h2>
<form method="post" action="s1.php">  
  <input type="submit" name="cerrar" value="Cerrar Sesion">  
</form>
</body>
</html>