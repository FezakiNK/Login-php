<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario"])) {
    echo "Acesso negado!";
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
    exit; 
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Painel Restrito</title>
</head>

<body>
    <header>
        <h1>Acesso restrito</h1>
    </header>
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?></h2>
    <h2>Email: <?php echo $_SESSION['email']; ?></h2>
    <h2>Perfil: <?php echo $_SESSION['perfil']; ?></h2>
    <br>
    <a class="cadastrar2" href="logout.php">Sair</a>

    <?php
    if ($_SESSION['perfil'] == 'Admin') {
    echo '<a class="cadastrar2" href="admin.php">Acessar área de administração</a>';
}
if ($_SESSION['perfil'] == 'Professor') {  
    echo '<a class="cadastrar2" href="professor.php">Acessar área de professor</a>';
}
if ($_SESSION['perfil'] == 'Aluno') {  
    echo '<a class="cadastrar2" href="aluno.php">Acessar área de aluno</a>';
}
    ?>
</body>

</html>