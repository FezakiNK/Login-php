<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Cadastro</title>
</head>
<body>
    <header>
        <h1>Cadastro</h1>
    </header>

    <main>

    <form action="processar_cadastro.php" method="post">
        <label>Nome</label>
        <br>
        <input type="text" name="nome" required>
        <br>
        <label>Email:</label>
        <br>
        <input type="email" name="email" required>
        <br>
        <label>Senha:</label>
        <br>
        <input type="password" name="senha" required>
        <br>
        <label>Confirmar Email:</label>
        <br>
        <input type="email" name="confirmar_email" required>
        <label>Confirmar Senha:</label>
        <br>
        <input type="password" name="confirmar" required>
        <br>
        <label>Perfil:</label>
        <br>
        <select name="perfil" required>
            <option value="">Selecione</option>
            <option value="Admin">Administrador</option>
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
        </select>
        <br><br>
        <input type="submit" value="Cadastrar">

    </form>

    </main>

    <footer>
        <p>Desenvolvido por: FezakiNK</p>
    </footer>
    
</body>
</html>