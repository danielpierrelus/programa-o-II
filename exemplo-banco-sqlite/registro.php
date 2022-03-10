<?php
//  $_email= $_POST['email'];
//  $_senha= $_POST['senha'];
require_once 'db.php';

    try{ $_senha= $_POST['senha'];
        $_email= $_POST['email'];
        $db= new PDO("sqlite:$arquivo");
        $sql = $db ->prepare("SELECT * FROM usuarios WHERE email=:email");
        $sql ->bindParam (':email', $email);
        $sql->execute();
        $usuario = $sql->fetch();
        if (!$usuario){
            echo 'Erro';
            exit();
        }


    }catch(Exception $e){

    }

?>