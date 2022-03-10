<?php
        session_start();
        if(!isset($_SESSION['desautentica'])){
            echo 'PQP! não tô nem logado';
            exit();
        }
        unset($_SESSION['desautentica']);


        session_destroy();
?>