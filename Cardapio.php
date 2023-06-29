<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="icon" href="Logo2.png" type="image/png">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Kanit&family=Russo+One&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <link rel="stylesheet" href="cardapio.css" type="text/css">
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
                    <a href="Pag3.PHP">Início</a><font color="red">//</font>
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
        <div style="color:white;margin-top:-5px">
                <?php 
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
                ?>
        </div>   
            <a href="cadastro2.php" style="margin-top:5px"><button class="Sair2" style="width: 80px;height: 15px;border-radius: 10px;font-size: 10px;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer;">Editar Perfil</button></a>
            <a href="Login.php" style="margin-top:2px"><button class="Sair2" style="width: 80px;height: 15px;border-radius: 10px;font-size: 10px;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer;">Sair</button></a>                 
    
    </div>








    <div class="carousel">
        <div class="carousel-inner">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item">
                <img src="Dia.png">
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="prom.png">
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="descmilk.png">
            </div>
             <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item">
                <img src="descmilk.png">
            </div>

            <label for="carousel-3" class="carousel-control prev control-1">‹</label>
            <label for="carousel-2" class="carousel-control next control-1">›</label>
            <label for="carousel-1" class="carousel-control prev control-2">‹</label>
            <label for="carousel-3" class="carousel-control next control-2">›</label>
            <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
             <label for="carousel-2" class="carousel-control prev control-3">‹</label>
            <label for="carousel-1" class="carousel-control next control-3">›</label>
            <ol class="carousel-indicators">
                <li>
                    <label for="carousel-1" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-2" class="carousel-bullet">•</label>
                </li>
                <li>
                    <label for="carousel-3" class="carousel-bullet">•</label>
                </li>
            </ol>
        </div>
    </div>







    <div class="div1">
        <div class="lin">
        </div>
            <div class="car">
                Cardápio
            </div>
                <div class="divdiv2" > 
                    <div class="div2">
                        <a href="Produtos_sorvetes.php" style="width: 100%;height: 100%;
                        align-items: center;
                        align-content: center;
                        justify-content: center;
                        justify-items: center; 
                        display: flex;">
                        <img src="sorvmar.png" width="300px">
                        </a>
                        <div class="let">
                            &nbsp;<font style="color: rgb(215, 215, 215);">Sorvetes</font>
                        </div>
                    </div>
                        <div class="div2">
                            <a href="Produtos_milkshakes.php" style="width: 100%;height: 100%;
                            align-items: center;
                            align-content: center;
                            justify-content: center;
                            justify-items: center; 
                            display: flex;">
                            <img src="milk2.png" width="300px">
                            </a>
                            <div class="let">&nbsp;<font style="color:rgb(212, 212, 212);">Milkshakes</font>
                        </div>
                        </div>
                        <div class="div3">
                            <a href="Produtos_chocolate.php" style="width: 100%;height: 100%;
                            align-items: center;
                            align-content: center;
                            justify-content: center;
                            justify-items: center; 
                            display: flex;" >
                            <img src="choc.png" width="300px">
                            </a>
                            <div class="let">&nbsp;<font style="color: rgb(213, 212, 212);">Chocolate&nbsp;Quente</font>
                        </div>
                        </div>
                        <div class="div2">
                            <a href="Produtos_favoritos.php" style="width: 100%;height: 100%;
                            align-items: center;
                            align-content: center;
                            justify-content: center;
                            justify-items: center; 
                            display: flex;">
                            <img src="Fav.png" width="300px">
                            </a>
                            <div class="let">&nbsp;<font style="color:rgb(212, 212, 212);">Favoritos</font>
                        </div>
                        </div>
                        <br><br>
                        
            </div>





            <div class="lin2"></div>
            <div class="Embreve">EM BREVE</div>
    </div>





<div class="des">
<div class="esc"></div>





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
</script>
</html>

