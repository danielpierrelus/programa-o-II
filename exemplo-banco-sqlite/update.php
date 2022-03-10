<?php
     
require_once 'db.php';

try {

    $id = 1;
    $nome = 'daniel pierrelus';
    $email = 'daniel@gmail.com';
    $comando = $db->prepare('UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id');
    $comando->bindParam(':id', $id);
    $comando->bindParam(':nome', $nome);
    $comando->bindParam(':email', $email);
    $comando->execute();

   
}catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}



?>