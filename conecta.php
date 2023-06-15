<?php
$host = "localhost"; // Endereço do servidor MySQL (por exemplo, "localhost")
$usuario = "root"; // Nome de usuário do MySQL
$senha = ""; // Senha do MySQL
$banco = "sorvelivery"; // Nome do banco de dados

// Estabelece a conexão com o banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se houve algum erro na conexão
if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

$mensagem = ""; // Mensagem inicial vazia
?>