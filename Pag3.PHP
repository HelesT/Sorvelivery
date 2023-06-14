<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $cep = $_POST["cep"];

    // Conectar ao banco de dados e inserir os dados do formulário aqui

    echo "Obrigado por enviar suas informações de entrega!";
}
?>