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

if (isset($_POST['adicionarChococream'])) {
  $nomeProduto = 'chococream'; // Nome do produto a ser inserido

  // Verificar se já existe um registro com o mesmo nome na tabela 'produtos'
  $sqlVerifica = "SELECT * FROM produtos WHERE nome_produto = ?";
  $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
  mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
  mysqli_stmt_execute($stmtVerifica);

  mysqli_stmt_store_result($stmtVerifica);

  if (mysqli_stmt_num_rows($stmtVerifica) > 0) {
    // Se já existir registro, exibir mensagem
    $mensagem = "";
  } else {
    // Se não existir registro, realizar a inserção na tabela 'produtos'
    $sqlInserir = "INSERT INTO produtos (carrinho_produto, nome_produto) VALUES ('s', ?)";
    $stmtInserir = mysqli_prepare($conexao, $sqlInserir);
    mysqli_stmt_bind_param($stmtInserir, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtInserir)) {
      // Inserção realizada com sucesso
      // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
      // Erro ao inserir
      $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
  }

  setcookie("scrollPosition", $_POST['scrollPosition'], time() + (86400 * 30), "/"); // Expira em 30 dias
  header("Location: Produtos_chocolate.php"); // Redireciona para a próxima página
  exit();
}

?>