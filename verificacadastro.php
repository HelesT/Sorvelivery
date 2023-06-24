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
$nome = $_POST["nome_usuario"];
$senha = $_POST["senha_cadastro"];
$telefone = $_POST["telefone_cadastro"];
$email = $_POST["email_cadastro"];

// Verifica se algum campo é nulo
if (empty($nome) || empty($senha) || empty($telefone) || empty($email)) {
    header("location: cadastro.html");
    exit; // Termina o script para evitar a execução do restante do código
}

// Verifica se o usuario já existe na base de dados
$consulta = $pdo->prepare("SELECT COUNT(*) FROM cadastro WHERE nome_usuario = ?");
$consulta->execute([$nome]);
$resultadoConsulta = $consulta->fetchColumn();

if ($resultadoConsulta > 0) {
    header("location: cadastro.html?mensagem=usuarioexistente");
    exit; // Termina o script para evitar a execução do restante do código
}

// Verifica se o email já existe na base de dados
$consulta = $pdo->prepare("SELECT COUNT(*) FROM cadastro WHERE email_cadastro = ?");
$consulta->execute([$email]);
$resultadoConsulta = $consulta->fetchColumn();

if ($resultadoConsulta > 0) {
    header("location: cadastro.html?mensagem=emailexistente");
    exit; // Termina o script para evitar a execução do restante do código
}


$comando = $pdo->prepare("INSERT INTO usuario_atual (nome_usuario, acesso) VALUES (? , 'n')");
$resultado = $comando->execute([$nome]);
// Insere os dados na base de dados
$comando = $pdo->prepare("INSERT INTO cadastro (nome_usuario, telefone_cadastro, email_cadastro, senha_cadastro) VALUES (?, ?, ?, ?)");
$resultado = $comando->execute([$nome, $telefone, $email, $senha]);

if ($resultado) {
    header("location: login.php");
} else {
    header("location: cadastro.html");
}
?>