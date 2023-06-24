<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorvelivery-Lojas</title>
    <link rel="stylesheet" href="lojas.css" type="text/css">
    <script src="jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
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
        <a href="Login.html"><button class="Sair2">Sair</button></a>
        <a href="Edit.php"><button class="Sair2" >Editar Perfil</button></a>

    </div>
    
    <div style="width: 100%;height: 600px;background-color: rgba(0, 0, 0, 0.479);display: flex;justify-items: center;align-items: center;align-content: center;flex-direction: row;">
        <div style="margin-left: 20px;"><img src="Logo2.png" width="400px"></div>
        <div class="textosorvelivery">
            <h1 style="font-size: 50px; color: rgba(255, 255, 255, 0.801);">Sorvelivery  &nbsp;&nbsp;&nbsp;&nbsp;</h1><br>
            <font style="font-size: x-large;color: rgba(255, 255, 255, 0.829);">Somos uma empresa de sorvetes física que agora está ampliando suas vendas com
                um site online. Nosso site possui um sistema de registro para os clientes, oferece
                diversidade de produtos e entrega na localidade escolhida pelo cliente. Os clientes
                podem se autenticar por login, usando e-mail e senha, ou conectar-se através de
                outras contas, como e-mails e redes sociais. O site possui um cabeçalho de fácil
                entendimento com as principais funções, como produtos, fale conosco, página
                inicial, carrinho de compras e informações do usuário. A página de produtos tem três
                categorias (sorvetes, milkshakes e chocolate quente) com pesquisa e filtro de
                produtos. O carrinho de compras mostra informações do produto, quantidade e
                preço, e permite alterações. O cliente pode finalizar a compra fornecendo
                informações de pagamento e confirmando o local de entrega. A segurança do site é
                garantida para proteger os dados dos clientes e da empresa.</font><br><br><br><br><br><br>
                <font style="font-size: 30px;color: rgba(255, 255, 255, 0.801);">+55 4792341-7426 &nbsp;&nbsp;&nbsp;  Rudson Park, New York, EUA</font>
        </div>
    </div>
    <div class="linha">
        <div style="margin-left: 40px;"><img src="Logotipo roxo para podcast.png" width="250px"></div>
        <div style="width: 900px;height: 230px;padding-top:15px;padding-bottom: 15px;padding-left: 50px;">
            <h1 style="font-size: 30px; color: rgba(255, 255, 255, 0.801);">LVS PODCAST</h1><br>
            <font style="color: rgba(255, 255, 255, 0.801);font-size:large;">O LVS Podcast é uma empresa de rádio que também atua no youtube, 
                cuja a sua principal função é manter a cidade informada com todas as notícias que acontecem a todo momento. 
                Trabalhamos também com entrevistas onde chamamos pessoas conhecidas e estudadas, 
                para batermos um papo e conversarmos sobre assuntos da atualidade e sobre avida pessoal desta pessoa.
            </font>
        </div>
    </div>
    <div class="linha">
        <div style="margin-left: 40px;"><img src="amazonicon.png" width="250px"></div>
        <div style="width: 900px;height: 230px;padding-top:15px;padding-bottom: 15px;padding-left: 50px;">
            <h1 style="font-size: 30px; color: rgba(255, 255, 255, 0.801);">AMAZON</h1><br>
            <font style="color: rgba(255, 255, 255, 0.801);font-size:large;">
                Somos uma empresa multinacional de tecnologia norte-americana com sede em Seattle, Washington.
                 Atuamos como uma companhia que se concentra no e-commerce, computação em nuvem, streaming e inteligência artificial.
            </font>
        </div>
    </div>
    <div class="linha"  >
        <div style="margin-left: 40px;"><img src="sonyicon.png" width="250px"></div>
        <div style="width: 900px;height: 230px;padding-top:15px;padding-bottom: 15px;padding-left: 50px;">
            <h1 style="font-size: 30px; color: rgba(255, 255, 255, 0.801);">SONY</h1><br>
            <font style="color: rgba(255, 255, 255, 0.801);font-size:large;">
                Uma multinacional japonesa, fundada em 1946, por Masaru Ibuka e Akio Morita. 
                Com sede em Tóquio, no Japão, o grupo tem como domínio principal de negócios os 
                setores de eletrônicos e entretenimento, desenvolvendo produtos e serviços para as respectivas indústrias.
            </font>
        </div>
    </div>
    <div style="height: 100px;"></div>
</body>
<script>
    topico = "nyltoneduardoconstancio";

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
</html>