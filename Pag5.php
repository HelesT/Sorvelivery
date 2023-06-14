<?php
include("conecta.php"); // Inclua o arquivo de conexão com o banco de dados

// Execute a consulta para obter os valores da coluna "carrinho_produto" e "nome_produto"
$query = "SELECT carrinho_produto, nome_produto FROM produtos";
$result = mysqli_query($con, $query);

// Verifique cada linha retornada da consulta
while ($row = mysqli_fetch_assoc($result)) {
    $carrinho_produtos = $row['carrinho_produto'];
    $nome_produtos = $row['nome_produto'];

    // Verifique se o valor da coluna "carrinho_produtos" é "s"
    if ($carrinho_produtos == 's') {
        // Construa a div com a classe correspondente ao valor da coluna "nome_produto"
        echo '<div class="bloco ' . $nome_produtos . '">';
        echo '    <div class="bloco2">';
        echo '        <div class="Partição1"><img src="chococream.png" class="sorvete-produto-exemplo" width="175px"></div>';
        echo '        <div class="Partição2">';
        echo '            <font color="white" style="font-size: 22px;">' . $nome_produtos . '</font><br><br>';
        echo '            <font color="white" style="font-size: 15px;">Tamanho:</font>';
        echo '            <select style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">';
        echo '                <option style="font-size: 15px;">Pequeno</option>';
        echo '                <option style="font-size: 15px">Normal</option>';
        echo '                <option style="font-size: 15px">Grande</option>';
        echo '                <option style="font-size: 15px">Gigante</option>';
        echo '            </select><br><br>';
        echo '            <font color="white" style="font-size: 15px;">Acompanhamento:</font>';
        echo '            <select class="tamanho_produto" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">';
        echo '                <option style="font-size: 15px;">Leite em pó</option>';
        echo '                <option style="font-size: 15px">Canudo de chocolate</option>';
        echo '                <option style="font-size: 15px">Nozes</option>';
        echo '                <option style="font-size: 15px">Creme</option>';
        echo '            </select><br><br>';
        echo '            <font color="white" style="font-size: 30px;">R$17,00</font>';
        echo '        </div>';
        echo '        <div class="partição3"><img src="retirar.png" width="20px"></div>';
        echo '    </div>';
        echo '</div>';
    }
}

mysqli_close($con); // Feche a conexão com o banco de dados
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
            <a href="Pag3.html" width="40px">
                <img src="Linha.png" width="350px">
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Pag3.html" width="40px">
                <img src="Logo2.png" width="105px" style="margin-top: 25px;">
            </a>
        </div>
        <div class="cabecalho2">
            <input type="checkbox" id="chec">
            <nav>
                <ul>
                    <a href="Pag3.html">Início</a><font color="red">//</font>
                    <a href="Cardapio.html">Cardápio</a><font color="red">//</font>
                    <a href="lojas.html">Lojas</a><font color="red">//</font>
                    <button onclick="animar();" style="background: none;border: none;padding: 0;font: inherit;cursor: pointer;text-decoration: none;color: rgb(35, 200, 200);">Fale Conosco</button>
                </ul>
            </nav>
            <label for="chec">
                <img src="3barra.png" width="40px">
            </label>
        </div>
        <div class="cabecalho3">
            <a href="Pag5.php" width="40px">
                <img src="carrinho.png" width="40px" >
            </a>
        </div>
    </div>
    <div class="D0">
        <div class="D2">
            <font style="color: black;font-family: 'Source Sans Pro', sans-serif;font-size: 60px;margin-left: 10%;">Carrinho</font>
        </div>
        <div class="D1">
            <div class="aba_produtos" style="width: 65%;">
            <div class="bloco chococream" style="display:none">
                    <div class="bloco2">
                        <div class="Partição1"><img src="chococream.png" class="sorvete-produto-exemplo" width="175px"></div>
                        <div class="Partição2">
                            <font color="white" style="font-size: 22px;">chococream</font><br><br>
                            <font color="white" style="font-size: 15px;">Tamanho:</font>
                            <select style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;">Pequeno</option>
                                <option style="font-size: 15px">Normal</option>
                                <option style="font-size: 15px">Grande</option>
                                <option style="font-size: 15px">Gigante</option>
                            </select><br><br>
                            <font color="white" style="font-size: 15px;">Acompanhamento:</font>
                            <select class="tamanho_produto" style="border: 0px none; background-color:rgb(28, 221, 221); color: white; font-size: 13px;">
                                <option style="font-size: 15px;">Leite em pó</option>
                                <option style="font-size: 15px">Canudo de chocolate</option>
                                <option style="font-size: 15px">Nozes</option>
                                <option style="font-size: 15px">Creme</option>
                            </select><br><br>
                            <font color="white" style="font-size: 30px;">R$17,00</font>
                        </div>
                        <div class="partição3"><img src="retirar.png" width="20px"></div>
                    </div>
                </div>
            </div>
            <div class="aba_compra">
                <a href="confirmação_endereço.html">
                    <div class="finalizar_compra">
                        <font style="color: black;font-family: 'Source Sans Pro', sans-serif;font-size: 40px;color: white;">Finalizar</font>
                    </div>
                </a>
                <div class="total_compra">
                    <font style="color: black;font-family: 'Source Sans Pro', sans-serif;font-size: 40px;color: white;">R$17,00</font>
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
    </script>
</body>
</html>