<html>
  <head>
    
  </head>
  <body>
    <?php 
    class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
    ?>
    <form action="b.php" method="post">
           <input type="text" name="entrada">
          <input type="submit" value="entrar" name="loquequieras">
    </form>
  </body>
</html>