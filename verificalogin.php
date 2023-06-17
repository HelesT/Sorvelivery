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

$comando = $pdo->prepare("SELECT * FROM cadastro WHERE nome_cadastro = :nome and senha_cadastro = :senha");
$comando->bindParam(":nome", $nome);
$comando->bindParam(":senha", $senha);
$resultado = $comando->execute();

$n = 0;
$admin = "n";

while ($linhas = $comando->fetch()) {
    $n = 1;
    $admin = $linhas["admim_cadastro"];
}

if ($n == 0) {
    header("location: login.html");
} elseif ($admin == "s") {
    header("location: pag3admin.html");
} else {
    header("location: pag3.html");
}
?>