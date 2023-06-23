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
            <div class="endireitador">
                <label for="chec">
                    <img src="3barra.png" width="45px">
                </label>
            </div>
        </div>
        <div class="cabecalho3">
            <div class="pequenininha" onclick="animar1()">
                <img src="Usua.png" width="100%">
            </div>
            <a href="Pag5.php" width="40px">
                <img src="carrinho.png" width="40px" >
            </a>
        </div>
    </div>
    <div class="caixausu" >
        <div class="pequenininha2" >
            <img src="Usua.png" width="100%">
        </div>
        <button class="Sair">Sair</button>
        <a href="Edit.php"><button class="Sair2" >Editar Perfil</button></a>
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
                            <font color="white" style="font-size: 30px;">R$12,00</font>
                        </div>
                        <form method="Post" action="carrinho.php" class="partição3">  
                            <button type="submit"name="botaoChococream" style="border-radius:100px;border-style:none;background-color:rgb(28, 221, 221)">
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
                            <font color="white" style="font-size: 30px;">R$14,00</font>
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
                            <font color="white" style="font-size: 30px;">R$10,00</font>
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
                            <font color="white" style="font-size: 30px;">R$8,00</font>
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
                            <font color="white" style="font-size: 30px;">R$13,00</font>
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
                <font style="color: black; font-family: 'Source Sans Pro', sans-serif; font-size: 40px; color: white;">R$<?php echo number_format($soma, 2, ',', '.'); ?></font>
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
    </script>
</body>
</html>