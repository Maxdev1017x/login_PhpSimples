<?php
session_start();

if(empty($_SESSION)) {
    print "<script>location.href='index.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="descrição da página">
        <meta name="keywords" content="Insira, as, palavras, aqui">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/main.css">
</head>

<body>
    <nav class="navbar navbar-ligth bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Max System</a>
                <?php
                print "Olá, " . $_SESSION["nome"];
                print "<a href='logout.php' class= 'btn btn-danger'>Sair</a>";
                ?>
        </div>
    </nav>
</body>
</html>