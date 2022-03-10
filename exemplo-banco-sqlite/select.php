<?php
require_once 'db.php';
 
     
     $comando = $db->prepare('SELECT * FROM usuarios');
     $comando->execute();
     $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
 
     if (count($resultado) > 0) {
         foreach($resultado as $linha) {
             echo 'Nome: ' . $linha['nome'] . ', E-mail: ' . $linha['email'] . '<br>';
         }
     } else {
         echo 'Nenhum usuário encontrado';
     }
 





?>