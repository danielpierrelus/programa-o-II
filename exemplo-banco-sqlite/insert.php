<?php


require_once 'db.php';
//require_once 'select.php';

try {

    $nome = 'Fernando';
    $email = 'fernando.bevilacqua@uffs.edu.br';
    $comando = $db->prepare('INSERT INTO usuarios (nome, email) VALUES (:nome, :email)');
    $comando->bindParam(':nome', $nome);
    $comando->bindParam(':email', $email);
    $comando->execute();

    

} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}

session_start();
    if(@$_POST['nome']=='Daniel'&&
      @$_POST['email']== '1'){
          $_SESSION['autenticados']=1;
          header('Location: index.php');
          exit();

      }

?>

<html>
    <form action="insert.php" method="post">
        <p>Nome</p>
        <input type="text" name="usuario">
        <p>Email</p>
        <input type="test" name="email">
        <input type="submit" value="insert"><br>
    </form>
<html>