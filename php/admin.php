<?php
session_start();

if (!isset($_SESSION["usuario"])){
    echo"Aceso Negado! Você não tem permissão para acessar essa pagina.";
    echo"<br>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}

if($_SESSION["perfil"] != "Admin") {
    echo "Acesso Negado! Você não é admin.<br>";
    echo "<a href='index.php'>Voltar</a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Área de Administração</h1>
    <p>Você é um administrador.</p>
    <a class="cadastrar2" href="index.php">Voltar</a>
    
</body>
</html>