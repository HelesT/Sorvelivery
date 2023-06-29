<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sorvelivery";

$conexao = new mysqli($servername, $username, $password, $dbname);

$sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n'";
$stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);

if ($stmtAtualizacao) {
  mysqli_stmt_execute($stmtAtualizacao);

  // Redirecionar para a página Pag5.php
  header("Location: agradecimento.html");
  exit;
} else {
  echo "Erro na preparação da declaração SQL.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>
