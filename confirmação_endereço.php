<?php

include("conecta.php");

$query = "SELECT usuario_atual.nome, cadastro.nome_cadastro
          FROM usuario_atual
          INNER JOIN cadastro ON usuario_atual.nome = cadastro.nome_cadastro";

$resultado = mysqli_query($conexao, $query);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorvelivery</title>
    <link rel="stylesheet" href="confirmação_endereco.css" type="text/css">
</head>
<body>
    <div class="overlay" id="overlay" onclick="ocultarDivPrincipal()"></div>

    <div class="cabecalho">
        <div class="cabecalho1">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Pag3.html" width="100%">
                <img src="Linha.png" width="300px">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Pag3.html" width="40px">
                <img src="Logo2.png" width="60px" style="margin-top: 10px;">
            </a>
        </div>
        <div style="width: 45%;"></div>
        <div class="cabecalho3">
            <a href="Pag5.php" width="40px">
                <img src="carrinho.png" width="40px" style="margin-left: 0px;">
            </a>
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
        <div style="width: 100%;height: 35px;display: flex;align-items: center;"> Lembre deste cartão para uso futuro <input type="radio" style="width: 20px; height: 20px;margin-bottom: 3px;"></div>
        </div>
        <div style="width: 100%;height: 5px;background-color: rgb(212, 212, 212);"></div>
        <div style="display: flex;flex-direction: column;background-color: white;margin-top: 15px;height: 100px;">
        <legend style="margin-top: 0px;">PAGAMENTO PARCELADO</legend>
        <div style="width: 360px;height: 60px;background-color: rgb(211, 211, 211);margin-top: 0px;display: flex;flex-direction: row;">
            <div style="width: 60px;height: 60px;box-shadow: 0.5px 0.5px black;">&nbsp;2x Sem &nbsp; Juros</div>
            <div style="width: 60px;height: 60px;box-shadow: 0.5px 0.5px black;">&nbsp;4x Sem &nbsp; juros</div>
            <div style="width: 60px;height: 60px;box-shadow: 0.5px 0.5px black;">&nbsp;6x Sem &nbsp; Jutos</div>
            <div style="width: 60px;height: 60px;box-shadow: 0.5px 0.5px black;">&nbsp;8x Sem &nbsp; Juros </div>
            <div style="width: 60px;height: 60px;box-shadow: 0.5px 0.5px black;">&nbsp;10x Sem &nbsp; Jutos</div>
            <div style="width: 60px;height: 60px;box-shadow: 0.5px 0.5px black;">&nbsp;12x Sem &nbsp; Juros</div>
        </div>
        </div>
        <div style="width: 100%;height: 5px;background-color: rgb(212, 212, 212);"></div>
        <div class="linha" style="font-size: 17px;margin-top: 10px;">Subtotal: 999,999R$<br> Desconto: 99,99R$<br> Total: 900,000R$</div>
        <button style="width: 200px;height: 50px;border-radius: 10px;background-color: rgb(21, 122, 180); font-size: 15px;margin-top: 40px;" >Finalizar</button>
        </div>
    </div>

    <div class="confirmacompra">
        
        <div class="infocompra">
            <div style="margin: 50px; background-color: rgb(255, 255, 255);">
                    Nome<br>

                    <?php
                    if ($resultado && mysqli_num_rows($resultado) > 0) {
                    while ($row = mysqli_fetch_assoc($resultado)) {
                    $nomeUsuario = $row['nome'];
                    $nomeCadastro = $row['nome_cadastro'];

                    // Exibir o campo de entrada HTML para cada correspondência encontrada
                    echo '<input type="text" name="Nome" value="' . $nomeCadastro . '">';
                        }
                    }
                    ?><br><br>
                    
                    CEP<br>
                    <div class="linhacompra"><input type="text" name="CEP"></div><br>
                    <div class="linhacompradupla">
                        Estado &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cidade<br>
                        <input type="text" style="margin-right: 40px;">
                        <input type="text">
                    </div><br>

                    Bairro<br>
                    <div class="linhacompra"><input type="text"></div><br>

                    <div class="linhacompradupla" style="height: 40px;">
                        Rua/Avenida &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Número<br>
                        <input type="text" style="margin-right: 40px;">
                        <input type="text" name="NumeroCasa">
                    </div><br><br>
                    Complemento(opcional)<br>
                    <div class="linhacompra"><input type="text" name="Complemento"></div><br><br>

                    Esse é seu trabalho ou casa?<br><br>
                    <input type="radio" class="radio-button" id="inputTrabalho" style="width: 17px; height: 17px;" onclick="habilitarInputtrabalho()"><img src="maleta.png" width="20px">
                    Trabalho&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" class="radio-button" id="inputCasa" style="width: 17px; height: 17px;" onclick="habilitarInputcasa()"><img src="casa.png" width="20px">Casa<br><br><br>

                    Telefone de Contato<br>
                    <div class="linhacompra"><input type="text" name="TelefoneContato" ></div><br><br>

                    Informações adicionais desse endereço(opcional)<br>
                    <div class="linhacompra"><input type="text" style="width: 2000px;height: 45px;" name="InfoAdd"></div><br><br>
                    <button onclick="mostrarDivPrincipal()" style="width: 200px;height: 50px;border-radius: 10px;background-color: rgb(21, 122, 180);font-size: x-large;">Continuar</button>
            </div>
        </div>
    <div class="producompra" style="overflow-y: scroll;display: flex;flex-direction: column;">
        <div style="margin: 15px;">
            <div style="font-size: 20px;">Taixa de Envio: </div>
            <div style="width: 100%;height: 3px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="font-size: 20px;">Total: </div>
            <div style="width: 100%;height: 3px;background-color: rgb(212, 212, 212);margin-top: 7px;margin-bottom: 7px;"></div>
            <div style="display: flex;flex-direction: row;margin-left: 5px;">
            </div>
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
</body>
<script>
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


</script>
</html>