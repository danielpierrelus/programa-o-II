<?php

    header('content-type application/json');
    $dados=[];
    $dados['idade']=10;
    $dados ['nome']= 'Daniel';


    echo json_encode($dados);


?>