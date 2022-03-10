<?php
    session_start();
    if(@$_POST['usuario']=='Daniel'&&
      @$_POST['senha']== '1'){
          $_SESSION['autenticados']=1;
          header('Location: index.php');
          exit();

      }
      //var_dump($_POST);
      //exit();
?>

<html>
    <form action="login.php" method="post">
        <p>Usuario</p>
        <input type="text" name="usuario">
        <p>Senha</p>
        <input type="password" name="senha">
        <input type="submit" value="Login"><br>
    </form>
<html>