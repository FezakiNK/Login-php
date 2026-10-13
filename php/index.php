<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tela de Login</title>
</head>

<body>
    <header>
        <h1>Login</h1>
    </header>

    <main>

        <form action="login.php" method="post">
            <label>Email:</label>
            <br>
            <input type="email" name="email" required>
            <br>
            <label>Senha:</label>
            <br>
            <input type="password" name="senha" required>
            <br>
            <input type="submit" value="Entrar">
            <br>
            <a class="cadastrar" href="cadastro.php">Cadastre-se</a>
        </form>

    </main>

    <footer>
        <p>Desenvolvido por: FezakiNK</p>
    </footer>

</body>

</html>