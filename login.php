<?php

include ("conexao.php");

$cpf = $_POST['cpf'];
$senha = $_POST['senha'] ;

if($cpf == ''){
    die('Informe o CPF');
}

if($senha == ''){
    die('Informe a senha');
}

// DEBUG: Mostra os valores para verificar
echo "CPF digitado: " . htmlspecialchars($cpf) . "<br>";
echo "Senha digitada: " . htmlspecialchars($senha) . "<br>";

$sql = "select nome FROM usuarios where cpf = ? and senha = ?";
$stmt = $conn->prepare($sql);

if($stmt){
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if($row['nome'] != ''){
            session_start();
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $row['nome'];
            header("Location: principal.php");
        } else {
            echo "Usuário ou senha incorretos";
        }
    } else {
        echo 'nenhum usuário encontrado';
    }

} else {
    echo "Erro no SQL";
}

?>