<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sorvelivery";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}

$nome = $_POST["nome_cadastro"];
$senha = $_POST["senha_cadastro"];

$comando = $pdo->prepare("SELECT * FROM cadastro WHERE nome_cadastro = :nome AND senha_cadastro = :senha");
$comando->bindParam(":nome", $nome);
$comando->bindParam(":senha", $senha);
$resultado = $comando->execute();

$n = 0;
$admin = "n";

while ($linhas = $comando->fetch()) {
    $n = 1;
    $admin = $linhas["admin_cadastro"];
}

if ($n == 0) {
    header("location: login.html");
} elseif ($admin == "s") {
    // Atualiza a tabela "usuario_atual" com o valor de "nome_cadastro"
    $comandoAtualizacao = $pdo->prepare("UPDATE usuario_atual SET nome = :nome WHERE Codigo_usuario = 1");
    $comandoAtualizacao->bindParam(":nome", $nome);
    $comandoAtualizacao->execute();
    
    header("location: pag3admin.html");
} else {
    // Atualiza a tabela "usuario_atual" com o valor de "nome_cadastro"
    $comandoAtualizacao = $pdo->prepare("UPDATE usuario_atual SET nome = :nome WHERE Codigo_usuario = 1");
    $comandoAtualizacao->bindParam(":nome", $nome);
    $comandoAtualizacao->execute();
    
    header("location: pag3.html");
}
?>
