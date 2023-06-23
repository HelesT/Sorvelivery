<?php
include("conecta.php");

$query = "SELECT usuario_atual.nome, cadastro.nome_cadastro, cadastro.telefone_cadastro, cadastro.cep, cadastro.estado, cadastro.cidade, cadastro.bairro, cadastro.`rua/avenida`, cadastro.numero, cadastro.complemento, cadastro.`casa/trabalho`, cadastro.informacao_adicional , cadastro.email_cadastro
          FROM usuario_atual
          INNER JOIN cadastro ON usuario_atual.nome = cadastro.nome_cadastro";

$resultado = mysqli_query($conexao, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $nomeUsuario = $row['nome'];
        $nomeCadastro = $row['nome_cadastro'];
        $telefoneCadastro = $row['telefone_cadastro'];
        $cep = $row["cep"];
        $estado = $row["estado"];
        $cidade = $row["cidade"];
        $bairro = $row["bairro"];
        $ruaAvenida = $row["rua/avenida"];
        $numeroCasa = $row["numero"];
        $complemento = $row["complemento"];
        $informacaoAdicional = $row["informacao_adicional"];
        $casaTrabalho = $row["casa/trabalho"];
        $email = $row["email_cadastro"]

        // Lógica para marcar os inputs corretos
        $casaChecked = '';
        $trabalhoChecked = '';

        if ($casaTrabalho === 'casa') {
            $casaChecked = 'checked';
        } elseif ($casaTrabalho === 'trabalho') {
            $trabalhoChecked = 'checked';
        }
    }
}
?>
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
    <link rel="stylesheet" href="edit.css" type="text/css">
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
            <div class="endireitador">
                <label for="chec">
                    <img src="3barra.png" width="45px">
                </label>
            </div>
        </div>
        <div class="cabecalho3">
            <div class="pequenininha" >
                <img src="Usua.png" width="100%" onclick="animar1()">
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
        <a href="Login.html"><button class="Sair2">Sair</button></a>
        <button class="Sair2">Editar Perfil</button>

    </div>
   <div class="principalzona">
        <div class="opacidade">
            <div class="edifotnome">
                <div class="foto"></div>
                <button class="edfoto">Editar foto</button>
            </div>
            <div class="informa">
                <div class="text">
                    INFORMAÇÕES PESSOAIS
                    <div class="linha"></div>
                    <form action="confirmação_endereco2.php" method="post">
                </div>
                        NOME
                        <?php echo '<input type="text" name="Nome" class="escritas" value="' . $nomeCadastro . '" readonly>';?>
                        E-MAIL
                        <?php echo '<input type="text" name="email_cadastro" class="escritas" value="' . $email . '"></input>' ?>
                        CEP
                        <?php echo '<input type="text" name="cep" class="escritas" value="' . $cep . '">'?>
                        Estado
                        <?php echo '<input type="text" name="estado" class="escritas" value="' . $estado . '">'?>
                        Cidade
                        <?php echo '<input type="text" name="cidade" class="escritas" value="' . $cidade . '">'?>
                        Bairro
                        <?php echo '<input type="text" name="bairro" class="escritas" value="' . $bairro . '">'?>
                        Rua/Avenida
                        <?php echo '<input type="text" name="rua/avenida" class="escritas" value="' . $ruaAvenida . '">'?>
                        Número
                        <?php echo '<input type="text" name="numerocasa" class="escritas" value="' . $numeroCasa . '">'?>
                        Telefone
                        <?php echo '<input type="text" name="TelefoneContato" class="escritas" value="' . $telefoneCadastro . '">'; ?>
                        <button type="submit" class="Salvar">SALVAR</button> 
</form>

            </div>
        </div>
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

