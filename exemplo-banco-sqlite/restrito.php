<?php
    session_start();
    if(@$_POST['usuario']==''&&
      @$_POST['senha']== ''){
          $_SESSION['autenticados']=100;
          header('Location: registro.php');
          exit();

      }
     
?>
