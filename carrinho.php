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

$sql = "SELECT SUM(preco_produto) AS soma FROM produtos";
$result = $conexao->query($sql);
$row = $result->fetch_assoc();
$soma = $row['soma'];

if (isset($_POST['botaoChococream'])) {
    $nomeProduto = 'chococream';

    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);

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

    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);

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

    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);

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

    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);

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

    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);

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

    $sqlVerifica = "DELETE FROM produtos WHERE nome_produto = ?";
    $stmtVerifica = mysqli_prepare($conexao, $sqlVerifica);
    if ($stmtVerifica) {
        mysqli_stmt_bind_param($stmtVerifica, "s", $nomeProduto);
        mysqli_stmt_execute($stmtVerifica);

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

