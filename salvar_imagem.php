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

        $comando = $pdo->prepare("UPDATE cadastro JOIN usuario_atual ON usuario_atual.codigo_usuario = cadastro.codigo_cadastro AND usuario_atual.nome_usuario = cadastro.nome_usuario SET cadastro.foto = :foto WHERE usuario_atual.acesso = 's'");

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

    $comando = $pdo->prepare("SELECT foto FROM cadastro INNER JOIN usuario_atual ON usuario_atual.codigo_usuario = cadastro.codigo_cadastro AND usuario_atual.nome_usuario = cadastro.nome_usuario WHERE usuario_atual.acesso = 's'");
    $resultado = $comando->execute();

} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

$pdo = null;
?>
