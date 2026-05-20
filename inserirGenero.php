<?php
include("valida.php");
include("conexao.php");

$descricao = $_POST['descricao'];
if($descricao == "") {
    die('informe a descricao');
}

$sql = "INSERT INTO genero (descricao) VALUES (?)";
$stmt = $conn->prepare($sql);

if($stmt) {
    $stmt->bind_param("s", $descricao);
    if(!$stmt->execute()) {
        die('Erro ao inserir genero');
    }
        header("Location: cadastrarGenero.php");

        
    } else {
        echo'erro na consulta sql';
    }

?>