<?php
include("conecta.php");

$query = "SELECT nome_produto FROM produtos";
$result = $pdo->query($query);

if ($result) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $nome_produto = $row['nome_produto'];
        echo '<style>.', $nome_produto, ' { display: flex; }</style>';
    }
}

?>
