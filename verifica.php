<?php
// $_POST pega as informações do input
$login = $_POST["email"];
$senha = $_POST["senha"];

include("conecta.php"); //conecta com o bando de dados

$comando = $pdo->prepare("SELECT * FROM login WHERE email_usuario = '$login' and senha_usuario = '$senha' ");
$resultado = $comando->execute();
$n = 0;
$admin = "n";

while($linhas = $comando->fetch())
{
    $n = 1;
    $admin = $linhas["admim_usuario"];
 }

if($n == 0)
{
    header("location:login.html");
}
if($n == 1)
{
    if($admin == "s")
    {
        header("location:pag3.html");
    } 
    else{
        header("location:cadastro.html");
    }
}
?>