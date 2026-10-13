<?php

include 'config.php';

$nome=trim($_POST['nome']);
$email=trim($_POST['email']);
$senha=trim($_POST['senha']);
$confirmar=trim($_POST['confirmar']);
$perfil=trim($_POST['perfil']);


if($senha !== $confirmar){
    echo "<br>As senhas são diferentes.";
    exit();
}
//validação do email
if(empty($email)){
    echo "O campo email é obrigatório!";
    echo "<br>";
    echo "<a href='cadastro.php'>Voltar</a>";
    exit;
}
//validação se digitou um email válido
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "O campo email deve ser um email válido!";
    echo "<br>";
    echo "<a href='cadastro.php'>Voltar</a>";
    exit;
}
if(strlen($nome) < 3){
    echo "<br>O nome deve ter pelo menos 3 caracteres.";
    echo"<br><a href='cadastro.php'>Voltar</a>";
    exit();
}
if(strlen($email) < 3){
    echo "<br>O email deve ter pelo menos 3 caracteres.";
    echo"<br><a href='cadastro.php'>Voltar</a>";
    exit();
}
if(strlen($senha) < 6){
    echo "<br>A senha deve ter pelo menos 6 caracteres.";
    echo"<br><a href='cadastro.php'>Voltar</a>";
    exit();
}
$sql= "SELECT * FROM usuario WHERE Email='$email'";

$resultado= $conexao->query($sql);

if($resultado->num_rows > 0){
    echo "<br>Este email já está cadastrado.";
    echo"<br><a href='cadastro.php'>Voltar</a>";
    exit();
}

$sql= "INSERT INTO usuario (Nome,Email,Senha,perfil) VALUES
('$nome', '$email', '$senha', '$perfil')";

//executando o sql 
if($conexao->query($sql)){
    echo "Cadastro Realizado com sucesso";
}else{
    echo "Erro ao cadastrar: ". $conexao->error;
}
?>