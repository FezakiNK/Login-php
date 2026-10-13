<?php

//configuração do banco de dados

$servidor="localhost";
$usuario= "root";
$senha= "";
$banco= "login_aula";

$conexao = new mysqli("$servidor","$usuario","$senha","$banco");

if ($conexao->connect_error) {
    echo"Conexão Falhou". $conexao->connect_error;
}else{
    echo"Conexão realizada com sucesso";
}

?>