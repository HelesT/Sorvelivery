<?php


include("conecta.php");

if (isset($_POST['adicionarDalmaflocos'])) {
    $nomeProduto = 'dalmaflocos'; // Nome do produto a ser atualizado
    $tamanhoDalmaflocos = $_POST['tamanho_dalmaflocos'];
    $acompanhamentoDalmaflocos = $_POST['acompanhamento_dalmaflocos'];
    $quantidadeDalmaflocos = $_POST['quantidade_dalmaflocos'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoDalmaflocos', acompanhamento_produto = '$acompanhamentoDalmaflocos', quantidade_produto = '$quantidadeDalmaflocos' WHERE nome_produto = ?";
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
    $quantidadeBurguerQueen = $_POST['quantidade_burguerqueen'];

    // Realizar a atualização na coluna 'carrinho_produto' para todos os registros com o mesmo nome
    $sqlAtualizar = "UPDATE produtos SET carrinho_produto = 's', tamanho_produto = '$tamanhoBurguerqueen', acompanhamento_produto = '$acompanhamentoBurguerqueen', quantidade_produto = '$quantidadeBurguerQueen' WHERE nome_produto = ?";
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
    <title>Sorvelivery-Milkshakes</title>
    <link rel="icon" href="Logo2.png" type="image/png">
    <link rel="stylesheet" href="Produtos_sorvetes.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <script src="jquery-3.7.0.min.js"></script>

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
                <font style="color: black;font-family: 'Source Sans Pro', sans-serif;font-size: 65px;margin-left: 10%;">Milkshakes</font>
                <img src="milklogo.png" class="bola_sorvete" width="275px" height="275px">
        </div>

        <div class="D1">
                <div class="D4">
                    
                </div>
                <div class="D4">
                    
                </div>
                <form method="POST" action="" >
                <div class="bloco dalmaflocos">
                    <div class="bloco2">
                        <div class="Partição1"><img src="dalmaflocos.png" class="sorvete-produto-exemplo" width="300px"></div>
                        <div class="Partição2">
                            <font color="black" style="font-size: 35px;">dalmaflocos</font><br><br><br>
                            <font color="black" style="font-size: 22px;">Tamanho:</font>
                            <select class="tamanho_produto" name="tamanho_dalmaflocos" id="tamanho_dalmaflocos" onchange="atualizarDalmaFlocos()" style="border: 0px none; background-color:rgb(28, 221, 221); color: black; font-size: 19px;">
                                <option style="font-size: 22px;">Pequeno</option>
                                <option style="font-size: 22px">Normal</option>
                                <option style="font-size: 22px">Grande</option>
                                <option style="font-size: 22px">Gigante</option>
                            </select><br><br>
                            <font color="black" style="font-size: 22px;">Acompanhamento:</font>
                            <select class="tamanho_produto" name="acompanhamento_dalmaflocos" id="acompanhamento_dalmaflocos" onchange="atualizarDalmaFlocos()" style="border: 0px none; background-color:rgb(28, 221, 221); color: black; font-size: 19px;">
                                <option style="font-size: 22px;"></option>
                                <option style="font-size: 22px;">Leite em pó</option>
                                <option style="font-size: 22px">Canudo de chocolate</option>
                                <option style="font-size: 22px">Nozes</option>
                                <option style="font-size: 22px">Creme</option>
                            </select><br><br><br>
                            <font color="black" style="font-size: 35px;" id="preco_dalmaflocos">R$11,00</font>
                            <input type="number" value="1" id="quantidade_dalmaflocos" name="quantidade_dalmaflocos" style="width:40px;height:30px;border-radius:100px;background-color:rgb(28, 221, 221);margin-left:50px;font-size:18px">
                        </div>
                        <div class="Partição3">
                                <button style="border: none; background-color: rgb(28, 221, 221);margin-top:60px" type="submit"name="adicionarDalmaflocos" class="adicionar chococream"><img src="adicionar.png" width="50px"></button>
                            </form>
                        </div>
                    </div>
                </div>

                <form method="POST" action="" >
                <div class="bloco">
                    <div class="bloco2">
                        <div class="Partição1"><img src="burguerqueen.png" class="sorvete-produto-exemplo" width="300px"></div>
                        <div class="Partição2">
                            <font color="black" style="font-size: 35px;">burguerqueen
                            </font><br><br><br>
                            <font color="black" style="font-size: 22px;">Tamanho:</font>
                            <select class="tamanho_produto" name="tamanho_burguerqueen" id="tamanho_burguerqueen" onchange="atualizarBurguerQueen()" style="border: 0px none; background-color:rgb(28, 221, 221); color: black; font-size: 19px;">
                                <option style="font-size: 22px;">Pequeno</option>
                                <option style="font-size: 22px">Normal</option>
                                <option style="font-size: 22px">Grande</option>
                                <option style="font-size: 22px">Gigante</option>
                            </select><br><br>
                            <font color="black" style="font-size: 22px;">Acompanhamento:</font>
                            <select class="tamanho_produto" name="acompanhamento_burguerqueen" id="acompanhamento_burguerqueen" onchange="atualizarBurguerQueen()" style="border: 0px none; background-color:rgb(28, 221, 221); color: black; font-size: 19px;">
                                <option style="font-size: 22px;"></option>
                                <option style="font-size: 22px;">Leite em pó</option>
                                <option style="font-size: 22px">Canudo de chocolate</option>
                                <option style="font-size: 22px">Nozes</option>
                                <option style="font-size: 22px">Creme</option>
                            </select><br><br><br>
                            <font color="black" style="font-size: 35px;" id="preco_burguerqueen">R$17,00</font>
                            <input type="number" value="1" id="quantidade_burguerqueen" name="quantidade_burguerqueen" style="width:40px;height:30px;border-radius:100px;background-color:rgb(28, 221, 221);margin-left:50px;font-size:18px">
                        </div>
                        <div class="Partição3">
                                <button style="border: none; background-color: rgb(28, 221, 221);margin-top:60px" type="submit"name="adicionarBurguerqueen" class="adicionar chococream"><img src="adicionar.png" width="50px"></button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        <div class="D5"></div>
    </div>
</body>
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
      texto = "<?php echo $nomeUsuario ?>:" + " " + mensagem.value;

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
function atualizarDalmaFlocos() {
    var precoBase = 9.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_dalmaflocos")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_dalmaflocos")[0];
    var precoElement = document.getElementById("preco_dalmaflocos");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    var precoFinal = precoBase;

    if (tamanhoOpcaoSelecionada.value !== "") {
      precoFinal += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
      precoFinal += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinal.toFixed(2);
  }
  function atualizarBurguerQueen() {
    var precoBase = 15.00;
    var precoTamanho = 2.00;
    var precoAcompanhamento = 3.00; // Valor fixo de R$3,00 para o acompanhamento

    var tamanhoSelect = document.getElementsByName("tamanho_burguerqueen")[0];
    var acompanhamentoSelect = document.getElementsByName("acompanhamento_burguerqueen")[0];
    var precoElement = document.getElementById("preco_burguerqueen");

    var tamanhoOpcaoSelecionada = tamanhoSelect.options[tamanhoSelect.selectedIndex];
    var acompanhamentoOpcaoSelecionada = acompanhamentoSelect.options[acompanhamentoSelect.selectedIndex];

    var precoFinal = precoBase;

    if (tamanhoOpcaoSelecionada.value !== "") {
      precoFinal += precoTamanho * (tamanhoSelect.selectedIndex + 1);
    }

    if (acompanhamentoOpcaoSelecionada.value !== "") {
      precoFinal += precoAcompanhamento;
    }

    precoElement.textContent = "R$" + precoFinal.toFixed(2);
  }
  // Obtém o elemento do input
var quantidadeInputBurguerQueen = document.getElementById("quantidade_burguerqueen");

// Adiciona um evento de listener para detectar quando o valor do input é alterado
quantidadeInputBurguerQueen.addEventListener("change", function() {
    // Obtém o valor atual do input
    var quantidade = parseInt(quantidadeInputBurguerQueen.value);

    // Verifica se a quantidade é negativa
    if (quantidade < 1) {
        // Define o valor mínimo como 0
        quantidadeInputBurguerQueen.value = 1;
    }
});
// Obtém o elemento do input
var quantidadeInputDalmaflocos = document.getElementById("quantidade_dalmaflocos");

// Adiciona um evento de listener para detectar quando o valor do input é alterado
quantidadeInputDalmaflocos.addEventListener("change", function() {
    // Obtém o valor atual do input
    var quantidade = parseInt(quantidadeInputDalmaflocos.value);

    // Verifica se a quantidade é negativa
    if (quantidade < 1) {
        // Define o valor mínimo como 0
        quantidadeInputDalmaflocos.value = 1;
    }
});
    </script>
</html>
