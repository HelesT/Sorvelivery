<?php
include("conecta.php");

$query = "SELECT nome_produto FROM produtos";
$result = mysqli_query($conexao, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nome_produto = $row['nome_produto'];
        echo '<style>.', $nome_produto, ' { display: flex; }</style>';
    }
}

if (isset($_POST['botaoChococream'])) {
    $nomeProduto = 'chococream';
  
    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);
        
        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        echo header("Pag5.phpa")
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

mysqli_close($conexao);
?>

