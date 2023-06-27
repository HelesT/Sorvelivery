<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorvelivery-menu</title>
    <link rel="icon" href="Logo2.png" type="image/png">
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Kanit&family=Russo+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Pag3.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <script src="jquery-3.7.0.min.js" type="text/javascript"></script>
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
    <div class="carousel" style="z-index: 0;">
        <div class="carousel-inner" style="z-index: 0;">
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked" style="z-index: 0;">
            <div class="carousel-item" style="z-index: 0;">
                <img src="prom.png" style="z-index: 0;">
            </div>
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" style="z-index: 0;">
            <div class="carousel-item" style="z-index: 0;">
                <img src="Dia.png" style="z-index: 0;">
            </div>
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="" style="z-index: 0;">
            <div class="carousel-item" style="z-index: 0;">
                <img src="descmilk.png" style="z-index: 0;">   
            </div>
            <input class="carousel-open" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="" style="z-index: 0;">
            <div class="carousel-item" style="z-index: 0;">
                <img src="Pdw.png" style="z-index: 0;">
            </div>
            <label for="carousel-4" class="carousel-control prev control-1" style="z-index: 0;">‹</label>
            <label for="carousel-2" class="carousel-control next control-1" style="z-index: 0;">›</label>
            <label for="carousel-1" class="carousel-control prev control-2" style="z-index: 0;">‹</label>
            <label for="carousel-3" class="carousel-control next control-2" style="z-index: 0;">›</label>
            <label for="carousel-2" class="carousel-control prev control-3" style="z-index: 0;">‹</label>
            <label for="carousel-4" class="carousel-control next control-3" style="z-index: 0;">›</label>
            <label for="carousel-3" class="carousel-control prev control-4" style="z-index: 0;">‹</label>
            <label for="carousel-1" class="carousel-control next control-4" style="z-index: 0;">›</label>
            <ol class="carousel-indicators" style="z-index: 0;">
                <li style="z-index: 0;">
                    <label for="carousel-1" class="carousel-bullet" style="z-index: 0;">•</label>
                </li>
                <li style="z-index: 0;">
                    <label for="carousel-2" class="carousel-bullet" style="z-index: 0;">•</label>
                </li>
                <li style="z-index: 0;">
                    <label for="carousel-3" class="carousel-bullet" style="z-index: 0;">•</label>
                </li>
                <li style="z-index: 0;">
                    <label for="carousel-4" class="carousel-bullet" style="z-index: 0;">•</label>
                </li>
            </ol>
        </div>
    </div>

    </div>
       
    </div>
    <div class="container">
    <div id="products" class="row list-group">
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="group list-group-image" src="fv1.png" style="width:800px; height:350px;" alt="" />
                    </div>
                    <div class="col-xs-6">
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">Favoritos da Galera</h4>
                        </div>
                        <div class="caption">
                            <p class="group inner list-group-item-text">Refrescante e cremoso? É o Pink Floyd de morango, feito com produtos de alta qualidade.</p>
                            <p class="lead">R$13,00</p>
                            <a class="btn btn-success" href="Produtos_sorvetes.php">Peça agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="products" class="row list-group">
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail2">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="group list-group-image" src="fv2.png" style="width:800px; height:350px;" alt="" />
                    </div>
                    <div class="col-xs-6">
                        <div class="caption2">
                            <h4 class="group inner list-group-item-heading">Aquele milk shake animal!!!</h4>
                        </div>
                        <div class="caption">
                            <p class="group inner list-group-item-text">Crocância e sabor irresistível, tudo isso em apenas um único milk shake. <br>Compre agora o novo Dalma Flocos.</p>
                            <p class="lead">R$11,00</p>
                            <a class="btn btn-success" href="Produtos_milkshakes.php">Peça agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id="products" class="row list-group">
        <div class="item col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnail3">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="group list-group-image" src="fv3.png" style="width:800px; height:350px;" alt="" />
                    </div>
                    <div class="col-xs-6">
                        <div class="caption3">
                            <h4 class="group inner list-group-item-heading">Nem vou falar nada, apenas prove</h4>
                        </div>
                        <div class="caption">
                            <p class="group inner list-group-item-text">A maior novidade dos últimos tempos.</p>
                            <p class="lead">R$17,00</p>
                            <a class="btn btn-success" href="Produtos_milkshakes.php">Peça agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


       


    <div class="prop">
    <img src="ele1.png" style="width: 1200px; margin-top: 250px;">
    <img src="ele2.png" style="width: 1200px; margin-top: 250px;"> 
    </div>

    <div class="div4" >
        <img src="Logo2.png" style="width: 150px; margin-left: 50px;">
        <img src="el1.png" style="width:550px; margin-left: 70px;">
    </div>

    
    <img src="c.png" style="width: 250px; margin-right: -100px; margin-top: -190px;">
    <img src="ele4.png" style="width: 350px; margin-right: -100px; margin-top: -130px;">
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

    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
    </script>
















