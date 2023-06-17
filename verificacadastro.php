<?php

$host = "localhost"; // Endereço do servidor MySQL (por exemplo, "localhost")
$usuario = "root"; // Nome de usuário do MySQL
$senha = ""; // Senha do MySQL
$banco = "sorvelivery"; // Nome do banco de dados

// Estabelece a conexão com o banco de dados usando o PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}

// $_POST pega as informações do input
$nome = $_POST["nome_cadastro"];
$senha = $_POST["senha_cadastro"];
$telefone = $_POST["telefone_cadastro"];
$email = $_POST["email_cadastro"];

// Verifica se algum campo é nulo
if (empty($nome) || empty($senha) || empty($telefone) || empty($email)) {
    header("location: cadastro.html");
    exit; // Termina o script para evitar a execução do restante do código
}

// Verifica se o nome já existe na base de dados
$consulta = $pdo->prepare("SELECT COUNT(*) FROM cadastro WHERE nome_cadastro = ?");
$consulta->execute([$nome]);
$resultadoConsulta = $consulta->fetchColumn();

if ($resultadoConsulta > 0) {
    header("location: cadastro.html?mensagem=nomeexistente");
    exit; // Termina o script para evitar a execução do restante do código
}

// Insere os dados na base de dados
$comando = $pdo->prepare("INSERT INTO cadastro VALUES (?, ?, ?, ?,'')");
$resultado = $comando->execute([$nome, $telefone, $email, $senha]);

if ($resultado) {
    header("location: login.html");
} else {
    header("location: cadastro.html");
}
?>