<?php

    $db= new PDO("sqlite:$arquivo");
    $sql = $db->prepare("SELECT * FROM usuario");
    $sql -> exexute();

    while ($linha = $sql-> fetch (FETCH_ASSOC)){
        echo $linha ['id'];
        echo $linha ['nome'];
    }

?>