<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sorvelivery";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Falha na conexão com o banco de dados: " . $e->getMessage());
}

// Atualiza todos os itens da coluna "acesso" para "n"
$comandoAtualizacao = $pdo->prepare("UPDATE usuario_atual SET acesso = 'n'");
$comandoAtualizacao->execute();

$comandoAtualizacao = $pdo->prepare("UPDATE produtos SET carrinho_produto = 'n'");
$comandoAtualizacao->execute();
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorvelivery-Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <link rel="icon" href="Logo2.png" type="image/png">
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
    <img src="Fundo.png" class="Fundo">
    <div class="fundo2"></div>
        <div class="fale_conoscodiv" id="fale_conoscodiv">
            <div class="row100">
                <input type="text" id="mensagem" class="caixadetexto"> 
                <button onclick="Enviar();" class="enviartexto">Enviar</button>
            </div>
            <div id="resposta" class="resposta"></div>
        </div>   
        <div class="q1">
            <img src="Logo2.png" class="logo">
                <form action="verificalogin.php" method="post">
                <div class="q2">
                    <input type="text" class="Caixa1"  placeholder="Usuario" name="nome_cadastro">
                    <input type="password" class="Caixa1"  placeholder="Senha" name="senha_cadastro">
                </div>
            <div class="q3">
                <div class="q7">
                    <button type="submit"  class="q4" style="margin-bottom: 5px;" >ENTRAR
                    </button>
                </form>
                    <a class="a2" href="cadastro.html" style="width: 288px;height: 45px;">
                    <div class="q5" style="width: 100%;height: 100%;">CADASTRAR-SE</div>
                    </a>
                    <button  onclick="startGoogleSignIn()" style="margin: 30px; width: 63%; height: 20%; border-radius: 20px; background-color: white; color: rgb(0, 0, 0); ">Login com Google</button>
                               
                   
                
            </div>
        </div>
            <div  class="botao_ajuda" id="botao_ajuda">
                <img src="Ajuda.png" width="100%">
            </div>     
</body>
<script>
    function handleCredentialResponse(response) {
        // Aqui você recebe a resposta contendo o token de acesso
        // para autenticar o usuário no seu backend
        console.log(response.credential);
    }

    function startGoogleSignIn() {
        const auth2 = gapi.auth2.getAuthInstance();
        auth2.grantOfflineAccess().then(handleCredentialResponse);
    }

    var botao_ajuda = document.querySelector("#botao_ajuda");
    botao_ajuda.addEventListener("click", function() {
    var div = document.querySelector("#fale_conoscodiv");
    
  if(div.style.display === "none") {
        div.style.display = "flex";
    } else {
      div.style.display = "none";
  }
});

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

  function Enviar()
  {
    texto = mensagem.value;

    message = new Paho.MQTT.Message(texto);
    message.destinationName = topico;
    client.send(message);
  }
</script>
</html>



