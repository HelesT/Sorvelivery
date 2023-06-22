<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sorvelivery";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (mysqli_connect_errno()) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Obter os valores dos campos do formulário
  $nome = $_POST["Nome"];
  $cep = $_POST["cep"];
  $estado = $_POST["estado"];
  $cidade = $_POST["cidade"];
  $bairro = $_POST["bairro"];
  $ruaAvenida = $_POST["rua/avenida"];
  $numeroCasa = $_POST["numerocasa"];
  $complemento = $_POST["complemento"];
  $telefoneContato = $_POST["TelefoneContato"];
  $informacaoAdicional = $_POST["informacao_adicional"];

  // Verificar a opção selecionada
  $opcao = isset($_POST["radiocasa"]) && $_POST["radiocasa"] === "casa" ? "casa" : "trabalho";

  // Executar a instrução de atualização no banco de dados
  $query = "UPDATE cadastro SET cep='$cep', estado='$estado', cidade='$cidade', bairro='$bairro', `rua/avenida`='$ruaAvenida', numero='$numeroCasa', complemento='$complemento', `casa/trabalho`='$opcao', telefone_cadastro='$telefoneContato', informacao_adicional='$informacaoAdicional' WHERE nome_cadastro='$nome'";

  if (mysqli_query($conexao, $query)) {
    // Atualização bem-sucedida, redirecionar ou exibir uma mensagem de sucesso
    header("Location: Edit.php"); // Redirecionar para uma página de sucesso
    exit();
  } else {
    // Erro na atualização, exibir uma mensagem de erro
    echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
  }
}

mysqli_close($conexao);
?>
