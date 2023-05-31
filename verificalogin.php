<?php
// $_POST pega as informações do input
$nome = $_POST["nome_cadastro"];
$senha = $_POST["senha_cadastro"];

include("conecta.php"); //conecta com o banco de dados

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