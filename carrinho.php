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
$tamanhoSql = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END * quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's'";
$tamanhoResult = $conexao->query($tamanhoSql);
$tamanhoRow = $tamanhoResult->fetch_assoc();
$somaTamanhoGeral = $tamanhoRow['soma_tamanho'];

$acompanhamentoSql = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END * quantidade_produto) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's'";
$acompanhamentoResult = $conexao->query($acompanhamentoSql);
$acompanhamentoRow = $acompanhamentoResult->fetch_assoc();
$somaAcompanhamentoGeral = $acompanhamentoRow['soma_acompanhamento'];

$sql = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's'";
$result = $conexao->query($sql);
$row = $result->fetch_assoc();
$somaGeral = $row['soma'];

$totalSomaGeral = $somaGeral + $somaTamanhoGeral + $somaAcompanhamentoGeral;


// Soma das duas variáveis anteriores com a variável $soma
$totalSomaGeral = $somaGeral + $somaTamanhoGeral + $somaAcompanhamentoGeral;

$tamanhoSqlChococream = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END * quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'chococream'";
$tamanhoResultChococream = $conexao->query($tamanhoSqlChococream);
$tamanhoRowChococream = $tamanhoResultChococream->fetch_assoc();
$somaTamanhoChococream = $tamanhoRowChococream['soma_tamanho'];

// Soma dos valores da coluna 'acompanhamento_produto'
$acompanhamentoSqlChococream = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END * quantidade_produto
) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'chococream'";
$acompanhamentoResultChococream = $conexao->query($acompanhamentoSqlChococream);
$acompanhamentoRowChococream = $acompanhamentoResultChococream->fetch_assoc();
$somaAcompanhamentoChococream = $acompanhamentoRowChococream['soma_acompanhamento'];

$sqlChococream = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'chococream'";
$resultChococream = $conexao->query($sqlChococream);
$rowChococream = $resultChococream->fetch_assoc();
$somaChococream = $rowChococream['soma'];

// Soma das duas variáveis anteriores com a variável $soma
$totalSomaChococream = $somaChococream + $somaTamanhoChococream + $somaAcompanhamentoChococream;



$tamanhoSqlChocomalti = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END * quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'chocomalti'";
$tamanhoResultChocomalti = $conexao->query($tamanhoSqlChocomalti);
$tamanhoRowChocomalti = $tamanhoResultChocomalti->fetch_assoc();
$somaTamanhoChocomalti = $tamanhoRowChocomalti['soma_tamanho'];

// Soma dos valores da coluna 'acompanhamento_produto'
$acompanhamentoSqlChocomalti = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END * quantidade_produto
) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'chocomalti'";
$acompanhamentoResultChocomalti = $conexao->query($acompanhamentoSqlChocomalti);
$acompanhamentoRowChocomalti = $acompanhamentoResultChocomalti->fetch_assoc();
$somaAcompanhamentoChocomalti = $acompanhamentoRowChocomalti['soma_acompanhamento'];

$sqlChocomalti = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'chocomalti'";
$resultChocomalti = $conexao->query($sqlChocomalti);
$rowChocomalti = $resultChocomalti->fetch_assoc();
$somaChocomalti = $rowChocomalti['soma'];

// Soma das duas variáveis anteriores com a variável $soma
$totalSomaChocomalti = $somaChocomalti + $somaTamanhoChocomalti + $somaAcompanhamentoChocomalti;



$tamanhoSqlDalmaFlocos = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END *quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'dalmaflocos'";
$tamanhoResultDalmaFlocos = $conexao->query($tamanhoSqlDalmaFlocos);
$tamanhoRowDalmaFlocos = $tamanhoResultDalmaFlocos->fetch_assoc();
$somaTamanhoDalmaFlocos = $tamanhoRowDalmaFlocos['soma_tamanho'];

// Soma dos valores da coluna 'acompanhamento_produto'
$acompanhamentoSqlDalmaFlocos = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END *quantidade_produto
) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'dalmaflocos'";
$acompanhamentoResultDalmaFlocos = $conexao->query($acompanhamentoSqlDalmaFlocos);
$acompanhamentoRowDalmaFlocos = $acompanhamentoResultDalmaFlocos->fetch_assoc();
$somaAcompanhamentoDalmaFlocos = $acompanhamentoRowDalmaFlocos['soma_acompanhamento'];

$sqlDalmaFlocos = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'dalmaflocos'";
$resultDalmaFlocos = $conexao->query($sqlDalmaFlocos);
$rowDalmaFlocos = $resultDalmaFlocos->fetch_assoc();
$somaDalmaFlocos = $rowDalmaFlocos['soma'];

// Soma das duas variáveis anteriores com a variável $soma
$totalSomaDalmaFlocos = $somaDalmaFlocos + $somaTamanhoDalmaFlocos + $somaAcompanhamentoDalmaFlocos;




$tamanhoSqlBurguerQueen = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END * quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'burguerqueen'";
$tamanhoResultBurguerQueen = $conexao->query($tamanhoSqlBurguerQueen);
$tamanhoRowBurguerQueen = $tamanhoResultBurguerQueen->fetch_assoc();
$somaTamanhoBurguerQueen = $tamanhoRowBurguerQueen['soma_tamanho'];

// Soma dos valores da coluna 'acompanhamento_produto'
$acompanhamentoSqlBurguerQueen = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END * quantidade_produto
) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'burguerqueen'";
$acompanhamentoResultBurguerQueen = $conexao->query($acompanhamentoSqlBurguerQueen);
$acompanhamentoRowBurguerQueen = $acompanhamentoResultBurguerQueen->fetch_assoc();
$somaAcompanhamentoBurguerQueen = $acompanhamentoRowBurguerQueen['soma_acompanhamento'];

$sqlBurguerQueen = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'burguerqueen'";
$resultBurguerQueen = $conexao->query($sqlBurguerQueen);
$rowBurguerQueen = $resultBurguerQueen->fetch_assoc();
$somaBurguerQueen = $rowBurguerQueen['soma'];

// Soma das duas variáveis anteriores com a variável $soma
$totalSomaBurguerQueen = $somaBurguerQueen + $somaTamanhoBurguerQueen + $somaAcompanhamentoBurguerQueen;



$tamanhoSqlHotChilly = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END * quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'hotchillypapers'";
$tamanhoResultHotChilly = $conexao->query($tamanhoSqlHotChilly);
$tamanhoRowHotChilly = $tamanhoResultHotChilly->fetch_assoc();
$somaTamanhoHotChilly = $tamanhoRowHotChilly['soma_tamanho'];

// Soma dos valores da coluna 'acompanhamento_produto'
$acompanhamentoSqlHotChilly = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END * quantidade_produto
) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'hotchillypapers'";
$acompanhamentoResultHotChilly = $conexao->query($acompanhamentoSqlHotChilly);
$acompanhamentoRowHotChilly = $acompanhamentoResultHotChilly->fetch_assoc();
$somaAcompanhamentoHotChilly = $acompanhamentoRowHotChilly['soma_acompanhamento'];

$sqlHotChilly = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'hotchillypapers'";
$resultHotChilly = $conexao->query($sqlHotChilly);
$rowHotChilly = $resultHotChilly->fetch_assoc();
$somaHotChilly = $rowHotChilly['soma'];

// Soma das duas variáveis anteriores com a variável $soma
$totalSomaHotChilly = $somaHotChilly + $somaTamanhoHotChilly + $somaAcompanhamentoHotChilly;



$tamanhoSqlSaborPink = "SELECT SUM(
    CASE tamanho_produto
        WHEN 'pequeno' THEN 0
        WHEN 'normal' THEN 2
        WHEN 'grande' THEN 4
        WHEN 'gigante' THEN 6
        ELSE 0
    END * quantidade_produto) AS soma_tamanho
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'saborpinkfloyd'";
$tamanhoResultSaborPink = $conexao->query($tamanhoSqlSaborPink);
$tamanhoRowSaborPink = $tamanhoResultSaborPink->fetch_assoc();
$somaTamanhoSaborPink = $tamanhoRowSaborPink['soma_tamanho'];

// Soma dos valores da coluna 'acompanhamento_produto'
$acompanhamentoSqlSaborPink = "SELECT SUM(
    CASE WHEN acompanhamento_produto = ' ' THEN 0 ELSE 3 END * quantidade_produto
) AS soma_acompanhamento
FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'saborpinkfloyd'";
$acompanhamentoResultSaborPink = $conexao->query($acompanhamentoSqlSaborPink);
$acompanhamentoRowSaborPink = $acompanhamentoResultSaborPink->fetch_assoc();
$somaAcompanhamentoSaborPink = $acompanhamentoRowSaborPink['soma_acompanhamento'];

$sqlSaborPink = "SELECT SUM(preco_produto * quantidade_produto) AS soma FROM produtos WHERE carrinho_produto = 's' AND nome_produto = 'saborpinkfloyd'";
$resultSaborPink = $conexao->query($sqlSaborPink);
$rowSaborPink = $resultSaborPink->fetch_assoc();
$somaSaborPink = $rowSaborPink['soma'];

// Soma das duas variáveis anteriores com a variável $soma
$totalSomaSaborPink = $somaSaborPink + $somaTamanhoSaborPink + $somaAcompanhamentoSaborPink;





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




$sqlTamanhoChococream = "SELECT tamanho_produto FROM produtos WHERE nome_produto = 'chococream'";
$resultadoTamanhoChococream = mysqli_query($conexao, $sqlTamanhoChococream);

// Verifica se há resultados
if (mysqli_num_rows($resultadoTamanhoChococream) > 0) {
    $row = mysqli_fetch_assoc($resultadoTamanhoChococream);
    $tamanho_produtoChococream = $row["tamanho_produto"];
} else {
    $tamanho_produtoChococream = "";
}

$sqlAcompanhamentoChococream = "SELECT acompanhamento_produto FROM produtos WHERE nome_produto = 'chococream'";
$resultadoAcompanhamentoChococream = mysqli_query($conexao, $sqlAcompanhamentoChococream);

// Verifica se há resultados
if (mysqli_num_rows($resultadoAcompanhamentoChococream) > 0) {
    $row = mysqli_fetch_assoc($resultadoAcompanhamentoChococream);
    $acompanhamento_produtoChococream = $row["acompanhamento_produto"];
} else {
    $acompanhamento_produtoChococream = "";
}

$sqlQuantidadeChococream = "SELECT quantidade_produto FROM produtos WHERE nome_produto = 'chococream'";
$resultadoQuantidadeChococream = mysqli_query($conexao, $sqlQuantidadeChococream);

// Verifica se há resultados
if (mysqli_num_rows($resultadoQuantidadeChococream) > 0) {
    $row = mysqli_fetch_assoc($resultadoQuantidadeChococream);
    $Quantidade_produtoChococream = $row["quantidade_produto"];
} else {
    $Quantidade_produtoChococream = "";
}






$sqlTamanhoChocomalti = "SELECT tamanho_produto FROM produtos WHERE nome_produto = 'chocomalti'";
$resultadoTamanhoChocomalti = mysqli_query($conexao, $sqlTamanhoChocomalti);

// Verifica se há resultados
if (mysqli_num_rows($resultadoTamanhoChocomalti) > 0) {
    $row = mysqli_fetch_assoc($resultadoTamanhoChocomalti);
    $tamanho_produtoChocomalti = $row["tamanho_produto"];
} else {
    $tamanho_produtoChocomalti = "";
}

$sqlAcompanhamentoChocomalti = "SELECT acompanhamento_produto FROM produtos WHERE nome_produto = 'chocomalti'";
$resultadoAcompanhamentoChocomalti = mysqli_query($conexao, $sqlAcompanhamentoChocomalti);

// Verifica se há resultados
if (mysqli_num_rows($resultadoAcompanhamentoChocomalti) > 0) {
    $row = mysqli_fetch_assoc($resultadoAcompanhamentoChocomalti);
    $acompanhamento_produtoChocomalti = $row["acompanhamento_produto"];
} else {
    $acompanhamento_produtoChocomalti = "";
}

$sqlQuantidadeChocomalti = "SELECT quantidade_produto FROM produtos WHERE nome_produto = 'chocomalti'";
$resultadoQuantidadeChocomalti = mysqli_query($conexao, $sqlQuantidadeChocomalti);

// Verifica se há resultados
if (mysqli_num_rows($resultadoQuantidadeChocomalti) > 0) {
    $row = mysqli_fetch_assoc($resultadoQuantidadeChocomalti);
    $Quantidade_produtoChocomalti = $row["quantidade_produto"];
} else {
    $Quantidade_produtoChocomalti = "";
}



$sqlTamanhoDalmaFlocos = "SELECT tamanho_produto FROM produtos WHERE nome_produto = 'dalmaflocos'";
$resultadoTamanhoDalmaFlocos = mysqli_query($conexao, $sqlTamanhoDalmaFlocos);

// Verifica se há resultados
if (mysqli_num_rows($resultadoTamanhoDalmaFlocos) > 0) {
    $row = mysqli_fetch_assoc($resultadoTamanhoDalmaFlocos);
    $tamanho_produtoDalmaFlocos = $row["tamanho_produto"];
} else {
    $tamanho_produtoDalmaFlocos = "";
}

$sqlAcompanhamentoDalmaFlocos = "SELECT acompanhamento_produto FROM produtos WHERE nome_produto = 'dalmaflocos'";
$resultadoAcompanhamentoDalmaFlocos = mysqli_query($conexao, $sqlAcompanhamentoDalmaFlocos);

// Verifica se há resultados
if (mysqli_num_rows($resultadoAcompanhamentoDalmaFlocos) > 0) {
    $row = mysqli_fetch_assoc($resultadoAcompanhamentoDalmaFlocos);
    $acompanhamento_produtoDalmaFlocos = $row["acompanhamento_produto"];
} else {
    $acompanhamento_produtoDalmaFlocos = "";
}

$sqlQuantidadeDalmaflocos = "SELECT quantidade_produto FROM produtos WHERE nome_produto = 'dalmaflocos'";
$resultadoQuantidadeDalmaflocos = mysqli_query($conexao, $sqlQuantidadeDalmaflocos);

// Verifica se há resultados
if (mysqli_num_rows($resultadoQuantidadeDalmaflocos) > 0) {
    $row = mysqli_fetch_assoc($resultadoQuantidadeDalmaflocos);
    $Quantidade_produtoDalmaflocos = $row["quantidade_produto"];
} else {
    $Quantidade_produtoDalmaflocos = "";
}



$sqlTamanhoBurguerQueen = "SELECT tamanho_produto FROM produtos WHERE nome_produto = 'burguerqueen'";
$resultadoTamanhoBurguerQueen = mysqli_query($conexao, $sqlTamanhoBurguerQueen);

// Verifica se há resultados
if (mysqli_num_rows($resultadoTamanhoBurguerQueen) > 0) {
    $row = mysqli_fetch_assoc($resultadoTamanhoBurguerQueen);
    $tamanho_produtoBurguerQueen = $row["tamanho_produto"];
} else {
    $tamanho_produtoBurguerQueen = "";
}

$sqlAcompanhamentoBurguerQueen = "SELECT acompanhamento_produto FROM produtos WHERE nome_produto = 'burguerqueen'";
$resultadoAcompanhamentoBurguerQueen = mysqli_query($conexao, $sqlAcompanhamentoBurguerQueen);

// Verifica se há resultados
if (mysqli_num_rows($resultadoAcompanhamentoBurguerQueen) > 0) {
    $row = mysqli_fetch_assoc($resultadoAcompanhamentoBurguerQueen);
    $acompanhamento_produtoBurguerQueen = $row["acompanhamento_produto"];
} else {
    $acompanhamento_produtoBurguerQueen = "";
}

$sqlQuantidadeBurguerQueen = "SELECT quantidade_produto FROM produtos WHERE nome_produto = 'burguerqueen'";
$resultadoQuantidadeBurguerQueen = mysqli_query($conexao, $sqlQuantidadeBurguerQueen);

// Verifica se há resultados
if (mysqli_num_rows($resultadoQuantidadeBurguerQueen) > 0) {
    $row = mysqli_fetch_assoc($resultadoQuantidadeBurguerQueen);
    $Quantidade_produtoBurguerQueen = $row["quantidade_produto"];
} else {
    $Quantidade_produtoBurguerQueen = "";
}




$sqlTamanhoHotChilly = "SELECT tamanho_produto FROM produtos WHERE nome_produto = 'hotchillypapers'";
$resultadoTamanhoHotChilly = mysqli_query($conexao, $sqlTamanhoHotChilly);

// Verifica se há resultados
if (mysqli_num_rows($resultadoTamanhoHotChilly) > 0) {
    $row = mysqli_fetch_assoc($resultadoTamanhoHotChilly);
    $tamanho_produtoHotChilly = $row["tamanho_produto"];
} else {
    $tamanho_produtoHotChilly = "";
}

$sqlAcompanhamentoHotChilly = "SELECT acompanhamento_produto FROM produtos WHERE nome_produto = 'hotchillypapers'";
$resultadoAcompanhamentoHotChilly = mysqli_query($conexao, $sqlAcompanhamentoHotChilly);

// Verifica se há resultados
if (mysqli_num_rows($resultadoAcompanhamentoHotChilly) > 0) {
    $row = mysqli_fetch_assoc($resultadoAcompanhamentoHotChilly);
    $acompanhamento_produtoHotChilly = $row["acompanhamento_produto"];
} else {
    $acompanhamento_produtoHotChilly = "";
}

$sqlQuantidadeHotChilly = "SELECT quantidade_produto FROM produtos WHERE nome_produto = 'hotchillypapers'";
$resultadoQuantidadeHotChilly = mysqli_query($conexao, $sqlQuantidadeHotChilly);

// Verifica se há resultados
if (mysqli_num_rows($resultadoQuantidadeHotChilly) > 0) {
    $row = mysqli_fetch_assoc($resultadoQuantidadeHotChilly);
    $Quantidade_produtoHotChilly = $row["quantidade_produto"];
} else {
    $Quantidade_produtoHotChilly = "";
}




$sqlTamanhoSaborPink = "SELECT tamanho_produto FROM produtos WHERE nome_produto = 'saborpinkfloyd'";
$resultadoTamanhoSaborPink = mysqli_query($conexao, $sqlTamanhoSaborPink);

// Verifica se há resultados
if (mysqli_num_rows($resultadoTamanhoSaborPink) > 0) {
    $row = mysqli_fetch_assoc($resultadoTamanhoSaborPink);
    $tamanho_produtoSaborPink = $row["tamanho_produto"];
} else {
    $tamanho_produtoSaborPink = "";
}

$sqlAcompanhamentoSaborPink = "SELECT acompanhamento_produto FROM produtos WHERE nome_produto = 'saborpinkfloyd'";
$resultadoAcompanhamentoSaborPink = mysqli_query($conexao, $sqlAcompanhamentoSaborPink);

// Verifica se há resultados
if (mysqli_num_rows($resultadoAcompanhamentoSaborPink) > 0) {
    $row = mysqli_fetch_assoc($resultadoAcompanhamentoSaborPink);
    $acompanhamento_produtoSaborPink = $row["acompanhamento_produto"];
} else {
    $acompanhamento_produtoSaborPink = "";
}

$sqlQuantidadeSaborPink = "SELECT quantidade_produto FROM produtos WHERE nome_produto = 'saborpinkfloyd'";
$resultadoQuantidadeSaborPink = mysqli_query($conexao, $sqlQuantidadeSaborPink);

// Verifica se há resultados
if (mysqli_num_rows($resultadoQuantidadeSaborPink) > 0) {
    $row = mysqli_fetch_assoc($resultadoQuantidadeSaborPink);
    $Quantidade_produtoSaborPink = $row["quantidade_produto"];
} else {
    $Quantidade_produtoSaborPink = "";
}

if (isset($_POST['mudarprecochococream'])) {
    $nomeProduto = 'chococream'; // Nome do produto a ser atualizado
    $tamanhoChococream = $_POST['tamanho_chococream'];
    $acompanhamentoChococream = $_POST['acompanhamento_chococream'];
    $quantidadeChococream = $_POST['quantidade_chococream'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET tamanho_produto = '$tamanhoChococream', acompanhamento_produto = '$acompanhamentoChococream', quantidade_produto = '$quantidadeChococream' WHERE nome_produto = ?";
    
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
        header("Location: Pag5.php");
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}

  

if (isset($_POST['mudarprecochocomalti'])) {
    $nomeProduto = 'chocomalti'; // Nome do produto a ser inserido
    $tamanhoChocomalti = $_POST['tamanho_chocomalti'];
    $acompanhamentoChocomalti = $_POST['acompanhamento_chocomalti'];
    $quantidadeChocomalti = $_POST['quantidade_chocomalti'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET tamanho_produto = '$tamanhoChocomalti', acompanhamento_produto = '$acompanhamentoChocomalti', quantidade_produto = '$quantidadeChocomalti' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
        header("Location: Pag5.php");
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}

if (isset($_POST['mudarprecodalmaflocos'])) {
    $nomeProduto = 'dalmaflocos'; // Nome do produto a ser atualizado
    $tamanhoDalmaflocos = $_POST['tamanho_dalmaflocos'];
    $acompanhamentoDalmaflocos = $_POST['acompanhamento_dalmaflocos'];
    $quantidadeDalmaflocos = $_POST['quantidade_dalmaflocos'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET tamanho_produto = '$tamanhoDalmaflocos', acompanhamento_produto = '$acompanhamentoDalmaflocos', quantidade_produto = '$quantidadeDalmaflocos' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
        header("Location: Pag5.php");
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}



if (isset($_POST['mudarprecoburguerqueen'])) {
    $nomeProduto = 'burguerqueen'; // Nome do produto a ser atualizado
    $tamanhoBurguerqueen = $_POST['tamanho_burguerqueen'];
    $acompanhamentoBurguerqueen = $_POST['acompanhamento_burguerqueen'];
    $quantidadeBurguerQueen = $_POST['quantidade_burguerqueen'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET tamanho_produto = '$tamanhoBurguerqueen', acompanhamento_produto = '$acompanhamentoBurguerqueen', quantidade_produto = '$quantidadeBurguerQueen' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
        header("Location: Pag5.php");
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}

if (isset($_POST['mudarprecohotchilly'])) {
    $nomeProduto = 'hotchillypapers'; // Nome do produto a ser atualizado
    $tamanhoCasquinha = $_POST['tamanho_casquinha'];
    $acompanhamentoCasquinha = $_POST['acompanhamento_casquinha'];
    $quantidadeCasquinha = $_POST['quantidade_casquinha'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET tamanho_produto = '$tamanhoCasquinha', acompanhamento_produto = '$acompanhamentoCasquinha', quantidade_produto = '$quantidadeCasquinha' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
        header("Location: Pag5.php");
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}


if (isset($_POST['mudarprecosaborpink'])) {
    $nomeProduto = 'saborpinkfloyd'; // Nome do produto a ser atualizado
    $tamanhoSaborpink = $_POST['tamanho_saborpink'];
    $acompanhamentoSaborpink = $_POST['acompanhamento_saborpink'];
    $quantidadeSaborPink = $_POST['quantidade_saborpink'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET tamanho_produto = '$tamanhoSaborpink', acompanhamento_produto = '$acompanhamentoSaborpink', quantidade_produto = '$quantidadeSaborPink' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
        header("Location: Pag5.php");
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}



mysqli_close($conexao);
?>














