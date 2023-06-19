<?php
include("conecta.php");

$query = "SELECT nome_produto, carrinho_produto FROM produtos";
$result = mysqli_query($conexao, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nome_produto = $row['nome_produto'];
        $carrinho_produto = $row['carrinho_produto'];

        if ($carrinho_produto == 's') {
            echo '<style>.', $nome_produto, ' { display: flex; }</style>';
        }
    }
}

$sql = "SELECT SUM(preco_produto) AS soma FROM produtos WHERE carrinho_produto = 's'";
$result = $conexao->query($sql);
$row = $result->fetch_assoc();
$soma = $row['soma'];


if (isset($_POST['botaoChococream'])) {
    $nomeProduto = 'chococream';

    $sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n' WHERE nome_produto = ?";
    $stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);
    if ($stmtAtualizacao) {
        mysqli_stmt_bind_param($stmtAtualizacao, "s", $nomeProduto);
        mysqli_stmt_execute($stmtAtualizacao);

        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        header("Location: Pag5.php");
        exit;
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

if (isset($_POST['botaoChocomalti'])) {
    $nomeProduto = 'chocomalti';

    $sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n' WHERE nome_produto = ?";
    $stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);
    if ($stmtAtualizacao) {
        mysqli_stmt_bind_param($stmtAtualizacao, "s", $nomeProduto);
        mysqli_stmt_execute($stmtAtualizacao);

        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        header("Location: Pag5.php");
        exit;
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

if (isset($_POST['botaoDalmaflocos'])) {
    $nomeProduto = 'dalmaflocos';

    $sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n' WHERE nome_produto = ?";
    $stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);
    if ($stmtAtualizacao) {
        mysqli_stmt_bind_param($stmtAtualizacao, "s", $nomeProduto);
        mysqli_stmt_execute($stmtAtualizacao);

        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        header("Location: Pag5.php");
        exit;
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

if (isset($_POST['botaoBurguerqueen'])) {
    $nomeProduto = 'burguerqueen';

    $sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n' WHERE nome_produto = ?";
    $stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);
    if ($stmtAtualizacao) {
        mysqli_stmt_bind_param($stmtAtualizacao, "s", $nomeProduto);
        mysqli_stmt_execute($stmtAtualizacao);

        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        header("Location: Pag5.php");
        exit;
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

if (isset($_POST['botaoHotchillypapers'])) {
    $nomeProduto = 'hotchillypapers';

    $sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n' WHERE nome_produto = ?";
    $stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);
    if ($stmtAtualizacao) {
        mysqli_stmt_bind_param($stmtAtualizacao, "s", $nomeProduto);
        mysqli_stmt_execute($stmtAtualizacao);

        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        header("Location: Pag5.php");
        exit;
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

if (isset($_POST['botaoSaborpinkfloyd'])) {
    $nomeProduto = 'saborpinkfloyd';

    $sqlAtualizacao = "UPDATE produtos SET carrinho_produto = 'n' WHERE nome_produto = ?";
    $stmtAtualizacao = mysqli_prepare($conexao, $sqlAtualizacao);
    if ($stmtAtualizacao) {
        mysqli_stmt_bind_param($stmtAtualizacao, "s", $nomeProduto);
        mysqli_stmt_execute($stmtAtualizacao);

        // Adicionar o estilo CSS para ocultar o elemento com a classe "chococream"
        echo '<style>.chococream { display: none; }</style>';
        header("Location: Pag5.php");
        exit;
    } else {
        echo "Erro na preparação da declaração SQL.";
    }
}

mysqli_close($conexao);
?>

