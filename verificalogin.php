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

// Atualiza todos os itens da coluna "acesso" para "n"
$comandoAtualizacao = $pdo->prepare("UPDATE usuario_atual SET acesso = 'n'");
$comandoAtualizacao->execute();

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
    $codigo_cadastro = $linhas["codigo_cadastro"]; // Obtém o valor da coluna "codigo_cadastro"
}

if ($n == 0) {
    header("Location: login.html");
    exit;
} elseif ($admin == "s") {
    $comandoAtualizacao = $pdo->prepare("UPDATE usuario_atual SET acesso = 's' WHERE codigo_usuario = :codigo_cadastro");
    $comandoAtualizacao->bindParam(":codigo_cadastro", $codigo_cadastro);
    $comandoAtualizacao->execute();

    header("Location: pag3admin.html");
    exit;
} else {
    $comandoAtualizacao = $pdo->prepare("UPDATE usuario_atual SET acesso = 's' WHERE codigo_usuario = :codigo_cadastro");
    $comandoAtualizacao->bindParam(":codigo_cadastro", $codigo_cadastro);
    $comandoAtualizacao->execute();

    header("Location: pag3.php");
    exit;
}
?>
