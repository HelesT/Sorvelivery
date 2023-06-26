<?php
// Caminho para a imagem
$caminhoImagem = 'C:\xampp\htdocs\Sorvelivery\sorvete-produto-exemplo.png';

// Obtém o conteúdo binário da imagem
$conteudoImagem = file_get_contents($caminhoImagem);

// Conecta-se ao banco de dados
$conexao = new mysqli("localhost", "root", "", "sorvelivery");

// Verifica se a conexão foi estabelecida com sucesso
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Atualiza a tabela "produtos" com o conteúdo binário da imagem
$nomeProduto = "saborpinkfloyd";
$query = "UPDATE produtos SET imagem = ? WHERE nome_produto = ?";
$stmt = $conexao->prepare($query);
$stmt->bind_param("ss", $conteudoImagem, $nomeProduto);
$stmt->execute();

// Fecha a conexão com o banco de dados
$stmt->close();
$conexao->close();
?>
