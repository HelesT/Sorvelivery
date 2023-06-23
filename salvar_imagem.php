<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "sorvelivery";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] === UPLOAD_ERR_OK) {
        $imagem = file_get_contents($_FILES["imagem"]["tmp_name"]);

        $comando = $pdo->prepare("UPDATE cadastro SET foto = :foto");
        $comando->bindParam(":foto", $imagem, PDO::PARAM_LOB);
        $resultado = $comando->execute();

        if ($resultado) {
            echo "Imagem atualizada com sucesso!";
            header("Location: edit.php");
            exit();
        } else {
            echo "Erro ao atualizar a imagem: " . $pdo->errorInfo()[2];
        }
    }

    $comando = $pdo->prepare("SELECT foto FROM cadastro");
    $resultado = $comando->execute();

    if ($resultado) {
        $linha = $comando->fetch(PDO::FETCH_ASSOC);
        if ($linha) {
            $dados_imagem = $linha["foto"];
            $i = base64_encode($dados_imagem);

            // Exibir input de seleção de arquivo como a própria imagem
            echo "<label for='selecao-imagem' style='display: inline-block; width: 100%; height: 100%; cursor: pointer;'>";
            echo "<img src='data:image/jpeg;base64,$i' style='border-radius: 50%; object-fit: cover; width: 100%; height: 100%;'>";
            echo "</label>";
            echo "<input type='file' id='selecao-imagem' name='imagem' style='display: none;'>";
        } else {
            echo "Nenhum arquivo de imagem foi enviado.";
        }
    } else {
        echo "Erro ao recuperar a imagem do banco de dados: " . $pdo->errorInfo()[2];
    }
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

$pdo = null;
?>
