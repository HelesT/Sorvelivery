<?php
include("conecta.php");

$query = "SELECT nome_produto FROM produtos";
$result = mysqli_query($conexao, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nome_produto = $row['nome_produto'];
        echo '<style>.', $nome_produto, ' { display: flex; }</style>';
    }
}

mysqli_close($conexao);
?>

