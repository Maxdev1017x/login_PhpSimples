<?php
    // Inicia uma nova sessão ou resume a sessão existente
    session_start();
    
    // Verifica se o formulário foi enviado e se os campos "usuario" e "senha" não estão vazios
    if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
        // Se o formulário não foi enviado ou os campos estão vazios, redireciona para 'index.php'
        print "<script>location.href='index.php';</script>";
    }

    include("config.php");

    // Armazena os valores enviados pelo formulário.
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // Cria a consulta SQL p/ busca no banco de dados
    $sql = "SELECT * FROM usuarios
    WHERE usuario = '{$usuario}'
    AND senha = '".md5($senha)."'";

    $res = $conn->query($sql) or die($conn->error);
    $row = $res->fetch_object();
    $qtd = $res-> num_rows;

    // Verifica se a consulta retornou algum resultado
    if($qtd > 0) {
        // Se positivo, armazena os dados na sessão
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;
        
        // Redirecionamento
        print "<script>location.href='dashboard.php';</script>";
    }
    else {
        //Consulta sem resultado, exibe um alerta e faz redirecionnamento
        print "<script>alert('Erro ao digitar usuário ou senha');</script>";
        print "<script>location.href='index.php';</script>";
    }
?>
