<?php
    
    session_start();
    if (!isset($_SESSION['autenticados'])){

        header('location: login.php');
        exit();
    }

?>
     <a href= "logout.php">sair</a>