<?php
    //Sessão
    session_start();
    // Remove as variáveis
    unset($_SESSION["usuario"]);
    unset($_SESSION["nome"]);
    unset($_SESSION["tipo"]);

    //Destroy,redireciona e sai
    session_destroy();
    header("Location: index.php");
    exit;
?>