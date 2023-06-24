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
  $nomeCadastro = $_POST['nome_cadastro'];
  $cep = $_POST["cep"];
  $estado = $_POST["estado"];
  $cidade = $_POST["cidade"];
  $bairro = $_POST["bairro"];
  $ruaAvenida = $_POST["rua/avenida"];
  $numeroCasa = $_POST["numerocasa"];
  $complemento = $_POST["complemento"];
  $telefoneContato = $_POST["TelefoneContato"];
  $informacaoAdicional = $_POST["informacao_adicional"];
  $email = $_POST["email_cadastro"];

  // Verificar a opção selecionada
  $opcao = isset($_POST["radiocasa"]) && $_POST["radiocasa"] === "casa" ? "casa" : "trabalho";

  // Executar a instrução de atualização no banco de dados
  $query = "UPDATE cadastro
          INNER JOIN usuario_atual ON cadastro.nome_usuario = usuario_atual.nome_usuario AND usuario_atual.codigo_usuario = cadastro.codigo_cadastro
          SET cadastro.cep='$cep', cadastro.estado='$estado', cadastro.cidade='$cidade', cadastro.bairro='$bairro', cadastro.`rua/avenida`='$ruaAvenida', cadastro.numero='$numeroCasa', cadastro.complemento='$complemento', cadastro.`casa/trabalho`='$opcao', cadastro.telefone_cadastro='$telefoneContato', cadastro.informacao_adicional='$informacaoAdicional', cadastro.email_cadastro='$email', cadastro.nome_cadastro='$nomeCadastro'
          WHERE usuario_atual.acesso = 's'";



  if (mysqli_query($conexao, $query)) {
    // Atualização bem-sucedida, redirecionar ou exibir uma mensagem de sucesso
    header("Location: confirmação_endereço.php"); // Redirecionar para uma página de sucesso
    exit();
  } else {
    // Erro na atualização, exibir uma mensagem de erro
    echo "Erro ao atualizar os dados: " . mysqli_error($conexao);
  }
}

mysqli_close($conexao);
?>
