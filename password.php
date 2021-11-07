<html>
<form action="" method="post">
  <div>Введите длину пароля:</div>
  <input type="textbox" required name="text">
  <input type="submit" name="submit" value="Сгенерировать">
</form>
 <div>Ваш пароль:</div>
<?php
  $chars = "qwertyuiopasdfghjklzxcvbnm,./';[]{}:>?!@#$%^&*()_-+=1234567890~";

  if($_POST['submit']){
    $length = (int)$_POST['text'];
    $pass = null;
    while ($length--)
        $pass.=$chars[rand(0,strlen($chars)-1)];
    echo $pass;

  }
?>
</html>
