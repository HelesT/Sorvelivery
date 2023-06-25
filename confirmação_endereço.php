<?php

include("conecta.php");

$query = "SELECT usuario_atual.nome_usuario, cadastro.nome_usuario, cadastro.nome_cadastro, usuario_atual.acesso, cadastro.telefone_cadastro, cadastro.cep, cadastro.estado, cadastro.cidade, cadastro.bairro, cadastro.`rua/avenida`, cadastro.numero, cadastro.complemento, cadastro.`casa/trabalho`, cadastro.informacao_adicional , cadastro.email_cadastro
          FROM usuario_atual
          INNER JOIN cadastro ON usuario_atual.nome_usuario = cadastro.nome_usuario WHERE usuario_atual.acesso = 's'";


$resultado = mysqli_query($conexao, $query);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
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
        $email = $row["email_cadastro"];

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

$sql = "SELECT SUM(preco_produto) AS soma FROM produtos WHERE carrinho_produto = 's'";
$result = $conexao->query($sql);
$row = $result->fetch_assoc();
$soma = $row['soma'];
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorvelivery</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js" type="text/javascript"></script>
    <script src="jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="confirmação_endereco.css" type="text/css">
</head>
<body>
    <div class="overlay" id="overlay" name="overlay" onclick="ocultarDivPrincipal()"></div>

    <div class="fale_conoscodiv" id="fale_conoscodiv" style="top: -100%;">
        <div class="row100">
            <input type="text" id="mensagem" class="caixadetexto">
            <button onclick="Enviar();" class="enviartexto">Enviar</button>
        </div>
        <div id="resposta" class="resposta"></div>
    </div>
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
            <div style="color:white;margin-top:-5px"><?php 
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
        <a href="Edit.php" style="margin-top:5px"><button class="Sair2" style="width: 80px;height: 15px;border-radius: 10px;font-size: 10px;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer;">Editar Perfil</button></a>
        <a href="Login.php" style="margin-top:2px"><button class="Sair2" style="width: 80px;height: 15px;border-radius: 10px;font-size: 10px;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer;">Sair</button></a>                 
    
    </div>

<form action="confirmação_endereco1.php" method="post">
    <div class="confirmacompra">
        
        <div class="infocompra">
            
                <div style="margin: 50px; background-color: rgb(255, 255, 255);">
                        Nome<br>
                        <?php echo '<input type="text" name="nome_cadastro" value="' . $nomeCadastro . '">';?><br><br>
                        CEP<br>
                        <div class="linhacompra"><?php echo '<input type="text" name="cep" value="' . $cep . '">'?></div><br>
                        <div class="linhacompradupla">
                            Estado &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cidade<br>
                            <?php echo '<input type="text" name="estado" style="margin-right: 40px;" value="' . $estado . '">'?>
                            <?php echo '<input type="text" name="cidade" value="' . $cidade . '">'?>
                        </div><br>

                        Bairro<br>
                        <div class="linhacompra"> <?php echo '<input type="text" name="bairro" value="' . $bairro . '">'?></div><br>

                        <div class="linhacompradupla" style="height: 40px;">
                            Rua/Avenida &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Número<br>
                            <?php echo '<input type="text" name="rua/avenida" style="margin-right: 40px;" value="' . $ruaAvenida . '">'?>
                            <?php echo '<input type="text" name="numerocasa" value="' . $numeroCasa . '">'?>
                        </div><br><br>
                        Complemento(opcional)<br>
                        <div class="linhacompra"><?php echo '<input type="text" name="complemento" value="' . $complemento . '">'?></div><br><br>

                        Esse é seu trabalho ou casa?<br><br>
                        <input type="radio" name="radiocasa" value="casa" <?php echo $casaChecked;?> class="radio-button" id="inputTrabalho" style="width: 17px; height: 17px;" onclick="habilitarInputtrabalho()"><img src="maleta.png" width="20px">
                        Trabalho&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="radiotrabalho" value="trabalho" <?php echo $trabalhoChecked;?> class="radio-button" id="inputCasa" style="width: 17px; height: 17px;" onclick="habilitarInputcasa()"><img src="casa.png" width="20px">Casa<br><br><br>

                        Telefone de Contato<br>
                        <div class="linhacompra"><?php echo '<input type="text" name="TelefoneContato" value="' . $telefoneCadastro . '" readonly>'; ?></div><br><br>

                        Informações adicionais desse endereço(opcional)<br>
                        <div class="linhacompra"><?php echo '<input type="text" name="informacao_adicional" style="width: 2000px;height: 45px;" value="' . $informacaoAdicional . '">'?></div><br><br>
                        <div onclick="mostrarDivPrincipal()" style="width: 200px;height: 50px;border-radius: 10px;background-color: rgb(21, 122, 180);font-size: x-large;display: flex;justify-content: center;justify-items: center;align-content: center;align-items: center;cursor:pointer">Continuar</div>
                </div>
        </div>  
    <div class="producompra" style="overflow-y: scroll;display: flex;flex-direction: column;height:500px;">
        <div style="margin: 15px;">
            <div style="font-size: 20px;">Taixa de Envio: R$0,00 </div>
            <div style="width: 100%;height: 3px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="font-size: 20px;">Total: R$<?php echo number_format($soma, 2, ',', '.')?> </div>
            <div style="width: 100%;height: 3px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div class="imagem-container"><?php
            $query = "SELECT imagem FROM produtos WHERE carrinho_produto = 's'";
            $resultado = $conexao->query($query);
            
            if ($resultado === false) {
                // Tratar o erro na consulta SQL
                echo "Ocorreu um erro na consulta SQL: " . $conexao->error;
            } else {
                while ($row = $resultado->fetch_assoc()) {
                    $imagemBinaria = $row["imagem"];
            
                    // Exibe a imagem
                    echo '<img src="data:image/png;base64,' . base64_encode($imagemBinaria) . '" width="75px">';
                }
            }
            ?></div>
            <div style="font-size: 20px;">Metodo de Pagamento: </div>
            <div style="width: 100%;height: 1px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;display: flex;justify-items: center;align-items: center;"><input id="cartaoPagamento" type="radio" onclick="habilitarcartaoPagamento()" style="width: 17px;height: 17px;"><img src="cartao.png" width="35px"></div>
            <div style="width: 100%;height: 1px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;display: flex;justify-items: center;align-items: center;"><input id="pixPagamento" type="radio" onclick="habilitarpixPagamento()" style="width: 17px;height: 17px;"><img src="pix.jpeg" width="50px"></div>
            <div style="width: 100%;height: 1px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;display: flex;justify-items: center;align-items: center;"><input id="boletoPagamento" type="radio" onclick="habilitarboletoPagamento()" style="width: 17px;height: 17px;"><img src="boleto.png" width="35px"></div>
            <div style="width: 100%;height: 1px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;display: flex;justify-items: center;align-items: center;"><input id="cartaoPagamento1" type="radio" onclick="habilitarcartaoPagamento1()" style="width: 17px;height: 17px;"><img src="cartao.png" width="35px"></div>
            <div style="width: 100%;height: 1px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;display: flex;justify-items: center;align-items: center;"><input id="visaPagamento" type="radio" onclick="habilitarvisaPagamento()" style="width: 17px;height: 17px;"><img src="Visaicon.png" width="35px"></div>
            <div style="width: 100%;height: 1px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;display: flex;justify-items: center;align-items: center;"><input id="paypalPagamento" type="radio" onclick="habilitarpaypalPagamento()" style="width: 17px;height: 17px;"><img src="payálicon.png" width="35px"></div>
            
        </div>
    </div>

        <div class="principal" id="divPrincipal">
        <div style="width: 650px;height:800px;margin:30px;display: flex;flex-direction: column;">
        <div class="linha">
            <img src="Visaicon.png" width="80px">
            <img src="mastercardicon.png" width="65px" height="100%" style="margin-left: 20px;">
            <img src="eloicon.png" width="80px" height="100%" style="margin-left: 20px;">
            <img src="mericanicon.png" width="80px" height="100%" style="margin-left: 20px;">
            <img src="hypericon.png" width="80px" height="100%" style="margin-left: 20px;">
        </div>
        <div style="background-color: white;">
        <div style="margin-top:50px;width: 100%;height: 80px;display: flex;flex-direction: row;">
            <div style="display: flex;flex-direction: column;">
                <legend>NUMERO DO CARTÃO</legend>
                <input type="number" minlength="16" maxlength="16" placeholder="0000 0000 0000 0000" style="width: 250px; height: 50px;font-size: 22px;border: 0px none;box-shadow: 0.5px 0.5px black;">
            </div> 
            <div style="display: flex;flex-direction: column;margin-left: 30px;">
                <legend>NOME DO CARTÃO</legend>
                <input type="text" minlength="5" maxlength="75" placeholder="" style="width: 250px; height: 50px;font-size: 22px;border: 0px none;box-shadow: 0.5px 0.5px black;">
            </div> 
        </div>
        <div style="margin-top:20px;width: 100%;height: 80px;display: flex;flex-direction: row;">
            <div style="display: flex;flex-direction: column;">
                <legend>DATA DE VALIDADE</legend>
                <input type="datetime" placeholder="00/00" style="width: 150px; height: 50px;font-size: 22px;border: 0px none;box-shadow: 0.5px 0.5px black;">
            </div> 
            <div style="display: flex;flex-direction: column;margin-left: 30px;">
                <legend>CVV</legend>
                <input type="number" placeholder="000" style="width: 150px; height: 50px;font-size: 22px;border: 0px none;box-shadow: 0.5px 0.5px black;">
            </div> 
        </div>
        <div style="width: 100%;height: 35px;display: flex;align-items: center;"> Lembre deste cartão para uso futuro <input type="checkbox" style="width: 15px; height: 15px;margin-bottom: 3px;"></div>
        </div>
        <div style="width: 100%;height: 5px;background-color: rgb(212, 212, 212);"></div>
        <div style="display: flex;flex-direction: column;background-color: white;margin-top: 15px;height: 100px;">
        <legend style="margin-top: 0px;">PAGAMENTO PARCELADO</legend>
        <div style="width: 360px;height: 60px;background-color: rgb(211, 211, 211);margin-top: 0px;display: flex;flex-direction: row;">
        <div id="div0" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(1);atualizarSoma0()">&nbsp;limpar</div>
        <div id="div1" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(1);atualizarSoma1()">&nbsp;2x Sem &nbsp; Juros</div>
        <div id="div2" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(2);atualizarSoma2()">&nbsp;4x Sem &nbsp; juros</div>
        <div id="div3" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(3);atualizarSoma3()">&nbsp;6x Sem &nbsp; Juros</div>
        <div id="div4" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(4);atualizarSoma4()">&nbsp;8x Sem &nbsp; Juros </div>
        <div id="div5" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(5);atualizarSoma5()">&nbsp;10x Sem &nbsp; Jutos</div>
        <div id="div6" style="width: 60px; height: 60px; box-shadow: 0.5px 0.5px black;cursor:pointer" onclick="changeColor(6);atualizarSoma6()">&nbsp;12x Sem &nbsp; Juros</div>

        </div>
        </div>
        <div style="width: 100%;height: 5px;background-color: rgb(212, 212, 212);"></div>
        <div class="linha" style="font-size: 17px;margin-top: 10px;">
        Total: &nbsp;<span id="valor-soma">R$<?php echo number_format($soma, 2, ',', '.')?></span>
        </div>
        <button type="submit" style="width: 200px;height: 50px;cursor:pointer;border-radius: 10px;background-color: rgb(21, 122, 180); font-size: 15px;margin-top: 40px;" >Finalizar</button>
        </div>
    </div>
</form>
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

    function mostrarDivPrincipal() {
            var divPrincipal = document.getElementById("divPrincipal");
            divPrincipal.style.display = "flex";
            overlay.style.display = "flex";

        }
        function ocultarDivPrincipal() {
            var divPrincipal = document.getElementById("divPrincipal");
            divPrincipal.style.display = "none";
            overlay.style.display = "none";

        }

function habilitarInputtrabalho() {
  var inputTrabalho = document.getElementById("inputTrabalho");
  var inputCasa = document.getElementById("inputCasa");

  inputTrabalho.checked = true;
  inputCasa.checked = false;
}

function habilitarInputcasa() {
  var inputTrabalho = document.getElementById("inputTrabalho");
  var inputCasa = document.getElementById("inputCasa");

  inputCasa.checked = true;
  inputTrabalho.checked = false;
}

function habilitarcartaoPagamento() {
  var cartaoPagamento = document.getElementById("cartaoPagamento");
  var pixPagamento = document.getElementById("pixPagamento");
  var boletoPagamento = document.getElementById("boletoPagamento");
  var cartaoPagamento1 = document.getElementById("cartaoPagamento1");
  var visaPagamento = document.getElementById("visaPagamento");
  var paypalPagamento = document.getElementById("paypalPagamento");

  cartaoPagamento.checked = true;
  pixPagamento.checked = false;
  boletoPagamento.checked = false;
  cartaoPagamento1.checked = false;
  visaPagamento.checked = false;
  paypalPagamento.checked = false;
}

function habilitarpixPagamento() {
  var cartaoPagamento = document.getElementById("cartaoPagamento");
  var pixPagamento = document.getElementById("pixPagamento");
  var boletoPagamento = document.getElementById("boletoPagamento");
  var cartaoPagamento1 = document.getElementById("cartaoPagamento1");
  var visaPagamento = document.getElementById("visaPagamento");
  var paypalPagamento = document.getElementById("paypalPagamento");

  cartaoPagamento.checked = false;
  pixPagamento.checked = true;
  boletoPagamento.checked = false;
  cartaoPagamento1.checked = false;
  visaPagamento.checked = false;
  paypalPagamento.checked = false;
}

function habilitarboletoPagamento() {
  var cartaoPagamento = document.getElementById("cartaoPagamento");
  var pixPagamento = document.getElementById("pixPagamento");
  var boletoPagamento = document.getElementById("boletoPagamento");
  var cartaoPagamento1 = document.getElementById("cartaoPagamento1");
  var visaPagamento = document.getElementById("visaPagamento");
  var paypalPagamento = document.getElementById("paypalPagamento");

  cartaoPagamento.checked = false;
  pixPagamento.checked = false;
  boletoPagamento.checked = true;
  cartaoPagamento1.checked = false;
  visaPagamento.checked = false;
  paypalPagamento.checked = false;
}

function habilitarcartaoPagamento1() {
  var cartaoPagamento = document.getElementById("cartaoPagamento");
  var pixPagamento = document.getElementById("pixPagamento");
  var boletoPagamento = document.getElementById("boletoPagamento");
  var cartaoPagamento1 = document.getElementById("cartaoPagamento1");
  var visaPagamento = document.getElementById("visaPagamento");
  var paypalPagamento = document.getElementById("paypalPagamento");

  cartaoPagamento.checked = false;
  pixPagamento.checked = false;
  boletoPagamento.checked = false;
  cartaoPagamento1.checked = true;
  visaPagamento.checked = false;
  paypalPagamento.checked = false;
}

function habilitarvisaPagamento() {
  var cartaoPagamento = document.getElementById("cartaoPagamento");
  var pixPagamento = document.getElementById("pixPagamento");
  var boletoPagamento = document.getElementById("boletoPagamento");
  var cartaoPagamento1 = document.getElementById("cartaoPagamento1");
  var visaPagamento = document.getElementById("visaPagamento");
  var paypalPagamento = document.getElementById("paypalPagamento");

  cartaoPagamento.checked = false;
  pixPagamento.checked = false;
  boletoPagamento.checked = false;
  cartaoPagamento1.checked = false;
  visaPagamento.checked = true;
  paypalPagamento.checked = false;
}

function habilitarpaypalPagamento() {
  var cartaoPagamento = document.getElementById("cartaoPagamento");
  var pixPagamento = document.getElementById("pixPagamento");
  var boletoPagamento = document.getElementById("boletoPagamento");
  var cartaoPagamento1 = document.getElementById("cartaoPagamento1");
  var visaPagamento = document.getElementById("visaPagamento");
  var paypalPagamento = document.getElementById("paypalPagamento");

  cartaoPagamento.checked = false;
  pixPagamento.checked = false;
  boletoPagamento.checked = false;
  cartaoPagamento1.checked = false;
  visaPagamento.checked = false;
  paypalPagamento.checked = true;
}

let previousDivId = null;

  function changeColor(divId) {
    // Remove a classe 'active' da div anterior, se existir
    if (previousDivId) {
      const previousDiv = document.getElementById(previousDivId);
      previousDiv.classList.remove('active');
    }

    // Adiciona a classe 'active' à div atual
    const currentDiv = document.getElementById(`div${divId}`);
    currentDiv.classList.add('active');

    // Armazena o ID da div atual para uso posterior
    previousDivId = `div${divId}`;
  }
  function atualizarSoma0() {
    var soma = "R$" + <?php echo number_format($soma, 2, '.', '') ?>.toFixed(2); // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div0');
    var valorSoma = document.getElementById('valor-soma');
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });

    if (previousDivId) {
      const previousDiv = document.getElementById(previousDivId);
      previousDiv.classList.remove('active');
    }
  }
  function atualizarSoma1() {
    var soma = <?php echo number_format($soma, 2, '.', '') ?>; // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div1');
    var valorSoma = document.getElementById('valor-soma');

    if (div1.classList.contains('active')) {
      soma =  "2x de " + "R$" + (soma / 2).toFixed(2);
    }
    
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
  }
  function atualizarSoma2() {
    var soma = <?php echo number_format($soma, 2, '.', '') ?>; // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div2');
    var valorSoma = document.getElementById('valor-soma');

    if (div1.classList.contains('active')) {
      soma =  "4x de " + "R$" + (soma / 4).toFixed(2);
    }
    
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
  }
  function atualizarSoma3() {
    var soma = <?php echo number_format($soma, 2, '.', '') ?>; // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div3');
    var valorSoma = document.getElementById('valor-soma');

    if (div1.classList.contains('active')) {
      soma =  "6x de " + "R$" + (soma / 6).toFixed(2);
    }
    
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
  }
  function atualizarSoma4() {
    var soma = <?php echo number_format($soma, 2, '.', '') ?>; // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div4');
    var valorSoma = document.getElementById('valor-soma');

    if (div1.classList.contains('active')) {
      soma =  "8x de " + "R$" + (soma / 8).toFixed(2);
    }
    
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
  }
  function atualizarSoma5() {
    var soma = <?php echo number_format($soma, 2, '.', '') ?>; // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div5');
    var valorSoma = document.getElementById('valor-soma');

    if (div1.classList.contains('active')) {
      soma =  "10x de " + "R$" + (soma / 10).toFixed(2);
    }
    
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
  }
  function atualizarSoma6() {
    var soma = <?php echo number_format($soma, 2, '.', '') ?>; // Atribuir o valor formatado à variável JavaScript
    
    var div1 = document.getElementById('div6');
    var valorSoma = document.getElementById('valor-soma');

    if (div1.classList.contains('active')) {
      soma =  "12x de " + "R$" + (soma / 12).toFixed(2);
    }
    
    // Exibir o valor formatado
    valorSoma.textContent = soma.toLocaleString('pt-BR', { minimumFractionDigits: 2 });
  }
  
</script>
</html>