<?php
include("conecta.php");

if (isset($_POST['adicionarChococream'])) {
    $nomeProduto = 'chococream'; // Nome do produto a ser atualizado
    $tamanhoChococream = $_POST['tamanho_chococream'];
    $acompanhamentoChococream = $_POST['acompanhamento_chococream'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoChococream', acompanhamento_produto = '$acompanhamentoChococream' WHERE nome_produto = ?";
    
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}

  

if (isset($_POST['adicionarChocomalti'])) {
    $nomeProduto = 'chocomalti'; // Nome do produto a ser inserido
    $tamanhoChocomalti = $_POST['tamanho_chocomalti'];
    $acompanhamentoChocomalti = $_POST['acompanhamento_chocomalti'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoChocomalti', acompanhamento_produto = '$acompanhamentoChocomalti' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}

if (isset($_POST['adicionarDalmaflocos'])) {
    $nomeProduto = 'dalmaflocos'; // Nome do produto a ser atualizado
    $tamanhoDalmaflocos = $_POST['tamanho_dalmaflocos'];
    $acompanhamentoDalmaflocos = $_POST['acompanhamento_dalmaflocos'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoDalmaflocos', acompanhamento_produto = '$acompanhamentoDalmaflocos' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}



if (isset($_POST['adicionarBurguerqueen'])) {
    $nomeProduto = 'burguerqueen'; // Nome do produto a ser atualizado
    $tamanhoBurguerqueen = $_POST['tamanho_burguerqueen'];
    $acompanhamentoBurguerqueen = $_POST['acompanhamento_burguerqueen'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoBurguerqueen', acompanhamento_produto = '$acompanhamentoBurguerqueen' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}

if (isset($_POST['adicionarCasquinhahot'])) {
    $nomeProduto = 'hotchillypapers'; // Nome do produto a ser atualizado
    $tamanhoCasquinha = $_POST['tamanho_casquinha'];
    $acompanhamentoCasquinha = $_POST['acompanhamento_casquinha'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoCasquinha', acompanhamento_produto = '$acompanhamentoCasquinha' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}


if (isset($_POST['adicionarSaborpink'])) {
    $nomeProduto = 'saborpinkfloyd'; // Nome do produto a ser atualizado
    $tamanhoSaborpink = $_POST['tamanho_saborpink'];
    $acompanhamentoSaborpink = $_POST['acompanhamento_saborpink'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoSaborpink', acompanhamento_produto = '$acompanhamentoSaborpink' WHERE nome_produto = ?";
    $stmtAtualizar = mysqli_prepare($conexao, $sqlAtualizar);
    mysqli_stmt_bind_param($stmtAtualizar, "s", $nomeProduto);

    if (mysqli_stmt_execute($stmtAtualizar)) {
        // Atualização realizada com sucesso
        // Você pode adicionar alguma outra lógica ou redirecionamento aqui, se necessário
    } else {
        // Erro ao atualizar
        $mensagem = "Erro ao adicionar o produto no carrinho.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorvelivery-carrinho</title>
    <link rel="icon" href="Logo2.png" type="image/png">
    <link rel="stylesheet" href="Pag5.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <script src="jquery-3.7.0.min.js"></script>
    <style>
    .chococream
        {
            background-color: rgb(35, 200, 200);
            width: 90%;
            margin-left: auto   ;
            margin-right: auto;
            margin-top: 20px;
            height: 200px;
            display: none;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            border-color: purple;
            border: 1px 1px;
            border-radius: 2%;
            border-style: solid;
            padding: 15px;
        }
        .chocomalti
        {
            background-color: rgb(35, 200, 200);
            width: 90%;
            margin-left: auto   ;
            margin-right: auto;
            margin-top: 20px;
            height: 200px;
            display: none;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            border-color: purple;
            border: 1px 1px;
            border-radius: 2%;
            border-style: solid;
            padding: 15px;
        }
        .dalmaflocos
        {
            background-color: rgb(35, 200, 200);
            width: 90%;
            margin-left: auto   ;
            margin-right: auto;
            margin-top: 20px;
            height: 200px;
            display: none;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            border-color: purple;
            border: 1px 1px;
            border-radius: 2%;
            border-style: solid;
            padding: 15px;
        }
        .burguerqueen
        {
            background-color: rgb(35, 200, 200);
            width: 90%;
            margin-left: auto   ;
            margin-right: auto;
            margin-top: 20px;
            height: 200px;
            display: none;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            border-color: purple;
            border: 1px 1px;
            border-radius: 2%;
            border-style: solid;
            padding: 15px;
        }
        .hotchillypapers
        {
            background-color: rgb(35, 200, 200);
            width: 90%;
            margin-left: auto   ;
            margin-right: auto;
            margin-top: 20px;
            height: 200px;
            display: none;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            border-color: purple;
            border: 1px 1px;
            border-radius: 2%;
            border-style: solid;
            padding: 15px;
        }
        .saborpinkfloyd
        {
            background-color: rgb(35, 200, 200);
            width: 90%;
            margin-left: auto   ;
            margin-right: auto;
            margin-top: 20px;
            height: 200px;
            display: none;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
            border-color: purple;
            border: 1px 1px;
            border-radius: 2%;
            border-style: solid;
            padding: 15px;
        }
    </style>
     <?php include("carrinho.php"); ?>
</head>
<body>
<div class="fale_conoscodiv" id="fale_conoscodiv" style="top: -100%;">
        <div class="row100">
            <input type="text" id="mensagem" class="caixadetexto">
            <button onclick="Enviar();" class="enviartexto">Enviar</button>
        </div>
        <div id="resposta" class="resposta"></div>
    </div>
    <div class="cabecalho">
        <div class="cabecalho1">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Pag3.php" width="40px">
                <img src="Linha.png" width="350px">
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Pag3.php" width="40px">
                <img src="Logo2.png" width="105px" style="margin-top: 25px;">
            </a>
        </div>
        <div class="cabecalho2">
            <input type="checkbox" id="chec">
            <nav>
                <ul>
                    <a href="Pag3.php">Início</a><font color="red">//</font>
                    <a href="Cardapio.php">Cardápio</a><font color="red">//</font>
                    <a href="lojas.php">Lojas</a><font color="red">//</font>
                    <button onclick="animar();" style="background: none;border: none;padding: 0;font: inherit;cursor: pointer;text-decoration: none;color: rgb(35, 200, 200);">Fale Conosco</button>
                </ul>
            </nav>
            <div class="endireitador">
                <label for="chec">
                    <img src="3barra.png" width="45px">
                </label>
            </div>
        </div>
        <div class="cabecalho3">
        <div class="pequenininha" style="width: 50px;height: 50px;">
            <?php
                            include("salvar_imagem.php");
                            if ($resultado) {
                                $linha = $comando->fetch(PDO::FETCH_ASSOC);
                                if ($linha) {
                                    $dados_imagem = $linha["foto"];
                                    $i = base64_encode($dados_imagem);        
                                    // Exibir input de seleção de arquivo como a própria imagem
                                    echo "<img src='data:image/jpeg;base64,$i' onclick='animar1()' style='border-radius: 50%; object-fit: cover; width: 100%; height: 100%;cursor: pointer;'>";                                    
                                } else {
                                    echo "Nenhum arquivo de imagem foi enviado.";
                                }
                            } else {
                                echo "Erro ao recuperar a imagem do banco de dados: " . $pdo->errorInfo()[2];
                            }
                        ?>
            </div>
            <a href="Pag5.php" width="40px">
                <img src="carrinho.png" width="40px" >
            </a>
        </div>
    </div>
    <div class="caixausu" >
    <div class="pequenininha2">
            <?php
                            include("salvar_imagem.php");
                            if ($resultado) {
                                $linha = $comando->fetch(PDO::FETCH_ASSOC);
                                if ($linha) {
                                    $dados_imagem = $linha["foto"];
                                    $i = base64_encode($dados_imagem);        
                                    // Exibir input de seleção de arquivo como a própria imagem
                                    echo "<img src='data:image/jpeg;base64,$i' onclick='animar1()' style='border-radius: 50%; object-fit: cover; width: 100%; height: 100%;cursor: pointer;'>";                                    
                                } else {
                                    echo "Nenhum arquivo de imagem foi enviado.";
                                }
                            } else {
                                echo "Erro ao recuperar a imagem do banco de dados: " . $pdo->errorInfo()[2];
                            }
                        ?>
            </div>
            <div style="color:white;margin-top:0px"><?php 
        include("conecta.php");
        $query = "SELECT nome_usuario
          FROM usuario_atual
          WHERE usuario_atual.acesso = 's'";
          $resultado = mysqli_query($conexao, $query);
          if ($resultado && mysqli_num_rows($resultado) > 0) {
            while ($row = mysqli_fetch_assoc($resultado)) {
                $nomeUsuario = $row['nome_usuario'];
            }
        }
        echo $nomeUsuario
        ?></div>   
        <a href="cadastro2.php" style="margin-top:5px"><button class="Sair2" style="width: 80px;height: 15px;border-radius: 10px;font-size: 10px;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer;">Editar Perfil</button></a>
        <a href="Login.php" style="margin-top:2px"><button class="Sair2" style="width: 80px;height: 15px;border-radius: 10px;font-size: 10px;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer;">Sair</button></a>                 
    
    </div>

    <div class="D0">
        <div class="D2">
            <font style="color: black;font-family: 'Source Sans Pro', sans-serif;font-size: 60px;margin-left: 10%;">Carrinho</font>
        </div>
        <div class="D1">
            <div class="aba_produtos" style="width: 65%;">
            
            <div class="chococream">
                <div class="bloco2">
                    <div class="Partição1"><img src="chococream.png" class="sorvete-produto-exemplo" width="175px"></div>
                    <div class="Partição2">
                        <font color="white" style="font-size: 22px;">chococream</font><br><br>
                        <font color="white" style="font-size: 15px;">Tamanho:</font>
                        <select style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;" name="tamanho_chococream" onchange="atualizarChococream()">
                        <option style="font-size: 15px;" <?php if ($tamanho_produtoChococream == "Pequeno") echo "selected"; ?>>Pequeno</option>
                        <option style="font-size: 15px;" <?php if ($tamanho_produtoChococream == "Normal") echo "selected"; ?>>Normal</option>
                        <option style="font-size: 15px;" <?php if ($tamanho_produtoChococream == "Grande") echo "selected"; ?>>Grande</option>
                        <option style="font-size: 15px;" <?php if ($tamanho_produtoChococream == "Gigante") echo "selected"; ?>>Gigante</option>
                    </select><br><br>
                        <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                        <select class="tamanho_produto" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;" name="acompanhamento_chococream" onchange="atualizarChococream()">
                        <option style="font-size: 15px;"></option>
                        <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChococream == "Leite em pó") echo "selected"; ?>>Leite em pó</option>
                        <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChococream == "Canudo de chocolate") echo "selected"; ?>>Canudo de chocolate</option>
                        <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChococream == "Nozes") echo "selected"; ?>>Nozes</option>
                        <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChococream == "Creme") echo "selected"; ?>>Creme</option>
                    </select><br><br>
                        <font color="white" style="font-size: 30px;" id="preco_chococream">R$<?php echo number_format($totalSomaChococream, 2, ',', '.'); ?></font>
                    </div>
                    <form method="Post" action="carrinho.php" class="partição3">  
                        <button type="submit" name="botaoChococream" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
                        <img src="retirar.png" width="20px"></button>
                    </form>
                </div>
            </div>

                <div class="chocomalti">
                    <div class="bloco2">
                        <div class="Partição1"><img src="chocomalti.png" class="sorvete-produto-exemplo" width="175px"></div>
                        <div class="Partição2">
                            <font color="white" style="font-size: 22px;">chocomalti</font><br><br>
                            <font color="white" style="font-size: 15px;">Tamanho:</font>
                            <select style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;" name="tamanho_chocomalti" onchange="atualizarChocomalti()">
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoChocomalti == "Pequeno") echo "selected"; ?>>Pequeno</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoChocomalti == "Normal") echo "selected"; ?>>Normal</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoChocomalti == "Grande") echo "selected"; ?>>Grande</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoChocomalti == "Gigante") echo "selected"; ?>>Gigante</option>
                            </select><br><br>
                            <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                            <select class="tamanho_produto" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;" name="acompanhamento_chocomalti" onchange="atualizarChocomalti()">
                                <option style="font-size: 15px;"></option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChocomalti == "Leite em pó") echo "selected"; ?>>Leite em pó</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChocomalti == "Canudo de chocolate") echo "selected"; ?>>Canudo de chocolate</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChocomalti == "Nozes") echo "selected"; ?>>Nozes</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoChocomalti == "Creme") echo "selected"; ?>>Creme</option>
                            </select><br><br>
                            <font color="white" style="font-size: 30px;" id="preco_chocomalti">R$<?php echo number_format($totalSomaChocomalti, 2, ',', '.'); ?></font>

                        </div>
                        <form method="Post" action="carrinho.php" class="partição3">  
                            <button type="submit"name="botaoChocomalti" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
                            <img src="retirar.png" width="20px"></button>
                        </form>
                    </div>
                </div>
            
                <div class="dalmaflocos">
                    <div class="bloco2">
                        <div class="Partição1"><img src="dalmaflocos.png" class="sorvete-produto-exemplo" width="175px"></div>
                        <div class="Partição2">
                            <font color="white" style="font-size: 22px;">dalmaflocos</font><br><br>
                            <font color="white" style="font-size: 15px;">Tamanho:</font>
                            <select style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;" name="tamanho_dalmaflocos" onchange="atualizarDalmaFlocos()">
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoDalmaFlocos == "Pequeno") echo "selected"; ?>>Pequeno</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoDalmaFlocos == "Normal") echo "selected"; ?>>Normal</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoDalmaFlocos == "Grande") echo "selected"; ?>>Grande</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoDalmaFlocos == "Gigante") echo "selected"; ?>>Gigante</option>
                            </select><br><br>
                            <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                            <select class="tamanho_produto" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;" name="acompanhamento_dalmaflocos" onchange="atualizarDalmaFlocos()">
                            <option style="font-size: 15px;"></option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoDalmaFlocos == "Leite em pó") echo "selected"; ?>>Leite em pó</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoDalmaFlocos == "Canudo de chocolate") echo "selected"; ?>>Canudo de chocolate</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoDalmaFlocos == "Nozes") echo "selected"; ?>>Nozes</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoDalmaFlocos == "Creme") echo "selected"; ?>>Creme</option>
                            </select><br><br>
                            <font color="white" style="font-size: 30px;" id="preco_dalmaflocos">R$<?php echo number_format($totalSomaDalmaFlocos, 2, ',', '.'); ?></font>
                        </div>
                        <form method="Post" action="carrinho.php" class="partição3">  
                            <button type="submit"name="botaoDalmaflocos" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
                            <img src="retirar.png" width="20px"></button>
                        </form>
                    </div>
                </div>

                <div class="burguerqueen">
                    <div class="bloco2">
                        <div class="Partição1"><img src="burguerqueen.png" class="sorvete-produto-exemplo" width="175px"></div>
                        <div class="Partição2">
                            <font color="white" style="font-size: 22px;">burguerqueen</font><br><br>
                            <font color="white" style="font-size: 15px;">Tamanho:</font>
                            <select name="tamanho_burguerqueen" onchange="atualizarBurguerQueen()" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoBurguerQueen == "Pequeno") echo "selected"; ?>>Pequeno</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoBurguerQueen == "Normal") echo "selected"; ?>>Normal</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoBurguerQueen == "Grande") echo "selected"; ?>>Grande</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoBurguerQueen == "Gigante") echo "selected"; ?>>Gigante</option>
                            </select><br><br>
                            <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                            <select class="tamanho_produto" name="acompanhamento_burguerqueen" onchange="atualizarBurguerQueen()" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;"></option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoBurguerQueen == "Leite em pó") echo "selected"; ?>>Leite em pó</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoBurguerQueen == "Canudo de chocolate") echo "selected"; ?>>Canudo de chocolate</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoBurguerQueen == "Nozes") echo "selected"; ?>>Nozes</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoBurguerQueen == "Creme") echo "selected"; ?>>Creme</option>
                            </select><br><br>
                            <font color="white" style="font-size: 30px;" id="preco_burguerqueen">R$<?php echo number_format($totalSomaBurguerQueen, 2, ',', '.'); ?></font>
                        </div>
                        <form method="Post" action="carrinho.php" class="partição3">  
                            <button type="submit"name="botaoBurguerqueen" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
                            <img src="retirar.png" width="20px"></button>
                        </form>
                    </div>
                </div>

                <div class="hotchillypapers">
                    <div class="bloco2">
                        <div class="Partição1"><img src="Casquinha.png" class="sorvete-produto-exemplo" width="175px"></div>
                        <div class="Partição2">
                            <font color="white" style="font-size: 22px;">casquinha hot chilly papers</font><br><br>
                            <font color="white" style="font-size: 15px;">Tamanho:</font>
                            <select name="tamanho_casquinha" onchange="atualizarCasquinha()" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoHotChilly == "Pequeno") echo "selected"; ?>>Pequeno</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoHotChilly == "Normal") echo "selected"; ?>>Normal</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoHotChilly == "Grande") echo "selected"; ?>>Grande</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoHotChilly == "Gigante") echo "selected"; ?>>Gigante</option>
                            </select><br><br>
                            <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                            <select class="tamanho_produto" name="acompanhamento_casquinha" onchange="atualizarCasquinha()" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;"></option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoHotChilly == "Leite em pó") echo "selected"; ?>>Leite em pó</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoHotChilly == "Canudo de chocolate") echo "selected"; ?>>Canudo de chocolate</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoHotChilly == "Nozes") echo "selected"; ?>>Nozes</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoHotChilly == "Creme") echo "selected"; ?>>Creme</option>
                            </select><br><br>
                            <font color="white" style="font-size: 30px;" id="preco_casquinha">R$<?php echo number_format($totalSomaHotChilly, 2, ',', '.'); ?></font>
                        </div>
                        <form method="Post" action="carrinho.php" class="partição3">  
                            <button type="submit"name="botaoHotchillypapers" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
                            <img src="retirar.png" width="20px"></button>
                        </form>
                    </div>
                </div>

                <div class="saborpinkfloyd">
                    <div class="bloco2">
                        <div class="Partição1"><img src="sorvete-produto-exemplo.png" class="sorvete-produto-exemplo" width="175px"></div>
                        <div class="Partição2">
                            <font color="white" style="font-size: 22px;">sabor pink floyd</font><br><br>
                            <font color="white" style="font-size: 15px;">Tamanho:</font>
                            <select name="tamanho_saborpink" onchange="atualizarSaborPink()" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoSaborPink == "Pequeno") echo "selected"; ?>>Pequeno</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoSaborPink == "Normal") echo "selected"; ?>>Normal</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoSaborPink == "Grande") echo "selected"; ?>>Grande</option>
                                <option style="font-size: 15px;" <?php if ($tamanho_produtoSaborPink == "Gigante") echo "selected"; ?>>Gigante</option>
                            </select><br><br>
                            <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                            <select class="tamanho_produto" name="acompanhamento_saborpink" onchange="atualizarSaborPink()" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;"></option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoSaborPink == "Leite em pó") echo "selected"; ?>>Leite em pó</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoSaborPink == "Canudo de chocolate") echo "selected"; ?>>Canudo de chocolate</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoSaborPink == "Nozes") echo "selected"; ?>>Nozes</option>
                                <option style="font-size: 15px;" <?php if ($acompanhamento_produtoSaborPink == "Creme") echo "selected"; ?>>Creme</option>
                            </select><br><br>
                            <font color="white" style="font-size: 30px;" id="preco_saborpink">R$<?php echo number_format($totalSomaSaborPink, 2, ',', '.'); ?></font>
                        </div>
                        <form method="Post" action="carrinho.php" class="partição3">  
                            <button type="submit"name="botaoSaborpinkfloyd" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
                            <img src="retirar.png" width="20px"></button>
                        </form>
                    </div>
                </div>

                

            </div>
            <div class="aba_compra">
                <a href="confirmação_endereço.php">
                    <div class="finalizar_compra">
                        <font style="color: black;font-family: 'Source Sans Pro', sans-serif;font-size: 40px;color: white;">Finalizar</font>
                    </div>
                </a>
                <div class="total_compra">
                <font style="color: black; font-family: 'Source Sans Pro', sans-serif; font-size: 40px; color: white;">R$<span id="precoFinal"><?php echo number_format($totalSomaGeral, 2, ',', '.'); ?></span></font>

                </div>
            </div>
        </div>
        <div class="D5"></div>
    </div>
    <script>
        topico = "nyltoneduardoconstancio";  // Variável que ficará no servidor MQTT
  
        // Conexão:
        client = new Paho.MQTT.Client("broker.hivemq.com", Number(8000), "");

        // Funções executadas quando a conexão é perdida e quando uma mensagem chega:
        client.onConnectionLost = ConexaoPerdida;
        client.onMessageArrived = MensagemRecebida;

        // Função chamada quando a conexão for realizada:
        client.connect({onSuccess:Conectar});

        // A função Conectar deve criar a variável (tópico) no computador remoto:
        function Conectar() {
            client.subscribe(topico);  // Tópico (variável) criado no servidor MQTT
        }

        function ConexaoPerdida(responseObject) {
            if (responseObject.errorCode !== 0) {
                resposta.innerHTML += "Desconectado";
            }
        }

        // Função executada quando a variável (tópico) no servidor receber uma mensagem:
        function MensagemRecebida(message) {
            resposta.innerHTML += "<br><br>" + message.payloadString; 
            resposta.scrollTo(0, document.body.scrollHeight);
        }

        function Enviar() {
            texto = mensagem.value;

            message = new Paho.MQTT.Message(texto);
            message.destinationName = topico;
            client.send(message);
        }

        var clique = 0;

        function animar() {
            clique = clique + 1;
            if (clique == 1) {
                $(".fale_conoscodiv").animate({top:'10%'}, 500);
            }
            if (clique == 2) {
                clique = 0;
                $(".fale_conoscodiv").animate({top:'-50%'}, 500);
            }
        }
        function animar1() {
    clique = clique + 1;
    if (clique == 1) {
        $(".caixausu").animate({top:'10%'}, 500);
    }
    if (clique == 2) {
        clique = 0;
        $(".caixausu").animate({top:'-50%'}, 500);
    }
    
}

console.log(precoFinalSaborPink);

var precoFinalFinalizar = precoFinalSaborPink + precoFinalCasquinha + precoFinalDalmaflocos + precoFinalBurguerQueen + precoFinalChocomalti + precoFinalChococream;

atualizarSaborPink();
var precoFinalSaborPink = 0 ; // Variável global

function atualizarSaborPink() {
  var precoBase = 11.00;
  var precoTamanho = 2.00;
  var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

  var tamanhoSelect = document.getElementsByName("tamanho_saborpink")[0];
  var acompanhamentoSelect = document.getElementsByName("acompanhamento_saborpink")[0];
  var precoElement = document.getElementById("preco_saborpink");

  var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
  var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

   precoFinalSaborPink = precoBase; // Atualiza a variável global

  if (tamanhoOpcaoSelecionada.value !== "") {
    precoFinalSaborPink += precoTamanho * (tamanhoSelect.selectedIndex + 1);
  }

  if (acompanhamentoOpcaoSelecionada.value !== "") {
    precoFinalSaborPink += precoAcompanhamento;
  }

  precoElement.textContent = "R$" + precoFinalSaborPink.toFixed(2);

  
}







  var precoFinalCasquinha = 0; // Variável global

  function atualizarCasquinha() {
    var precoBase = 6.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_casquinha")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_casquinha")[0];
    var precoElement = document.getElementById("preco_casquinha");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    var precoFinalCasquinha = precoBase;

    if (tamanhoOpcaoSelecionada.value !== "") {
      precoFinalCasquinha += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
      precoFinalCasquinha += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinalCasquinha.toFixed(2);
  }




  var precoFinalDalmaflocos = 0; // Variável global

function atualizarDalmaFlocos() {
    var precoBase = 9.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_dalmaflocos")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_dalmaflocos")[0];
    var precoElement = document.getElementById("preco_dalmaflocos");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    var precoFinalDalmaflocos = precoBase;

    if (tamanhoOpcaoSelecionada.value !== "") {
      precoFinalDalmaflocos += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
      precoFinalDalmaflocos += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinalDalmaflocos.toFixed(2);
  }




  var precoFinalBurguerQueen = 0; // Variável global

  function atualizarBurguerQueen() {
    var precoBase = 15.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_burguerqueen")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_burguerqueen")[0];
    var precoElement = document.getElementById("preco_burguerqueen");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    var precoFinalBurguerQueen = precoBase;

    if (tamanhoOpcaoSelecionada.value !== "") {
      precoFinalBurguerQueen += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
      precoFinalBurguerQueen += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinalBurguerQueen.toFixed(2);
  }




  var precoFinalChocomalti = 0; // Variável global

  function atualizarChocomalti() {
    var precoBase = 12.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_chocomalti")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_chocomalti")[0];
    var precoElement = document.getElementById("preco_chocomalti");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    var precoFinalChocomalti = precoBase;

    if (tamanhoOpcaoSelecionada.value !== "") {
      precoFinalChocomalti += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
      precoFinalChocomalti += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinalChocomalti.toFixed(2);
  }







  var precoFinalChococream = 0; // Variável global

    function atualizarChococream() {
    var precoBase = 10.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_chococream")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_chococream")[0];
    var precoElement = document.getElementById("preco_chococream");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    precoFinalChococream = precoBase; // Atribui o valor a variável global

    if (tamanhoOpcaoSelecionada.value !== "") {
        precoFinalChococream += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
        precoFinalChococream += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinalChococream.toFixed(2);
}
  








    </script>
</body>
</html>