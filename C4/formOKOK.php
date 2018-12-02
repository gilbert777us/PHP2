<!DOCTYPE HTML>  
<html>
<head>
 <style>
 .error {color: #FFFF00;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$name = $email = "";
$nameErr = $emailErr= "";
  
if (empty($_POST["name"])) {
  $nameErr = "Name is required";
} else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
  $nameErr = "Only letters and white space allowed"; 
} else {
  $name = test_input($_POST["name"]);
}
if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
else {
  $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
?>

</body>
</html>