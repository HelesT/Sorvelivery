<?php
include("conecta.php");
$nome = $_POST["Nome"];
$CEP = $_POST["CEP"];
$NumeroCasa = $_POST["NumeroCasa"];
$Complemento = $_POST["Complemento"];
$TipoLocal = $_POST["TipoLocal"];
$TelefoneContato = $_POST["TelefoneContato"];
$InfoAdd = $_POST["InfoAdd"];

$comando = $pdo->prepare("INSERT INTO cadastro VALUES ('$nome',$CEP, $NumeroCasa,'$Complemento','','$TelefoneContato','$InfoAdd')");
$resultado = $comando->execute();

//Para voltar no formulário://
    header("Location:confirmação.html");
?>