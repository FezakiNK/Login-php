<?php

include 'config.php';

session_start();

$senha = $_POST['senha'];
$email = $_POST['email'];

$sql = "SELECT * FROM usuario WHERE Email='$email'";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
    if ($senha == $usuario['Senha']) {
        $_SESSION['usuario'] = $usuario['Nome'];
        $_SESSION['email'] = $usuario['Email'];
        $_SESSION['perfil'] = $usuario['Perfil'];

        header("Location: painel.php");
        exit;

    }else{
        echo "<br><br>Senha incorreta";
    }
    }else{
    echo "Usuario não encontrado";
    }
?>