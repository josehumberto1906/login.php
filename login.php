<?php
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

echo 'cpf: ' . $_POST['cpf'] . '<br>';
echo 'senha: ' . $_POST['senha'] . '<br>';

if($cpf == ''){
    die('Informe o CPF ');
}
if($senha == ''){
    die('Informe a senha ');
}
if($cpf == '123' && $senha == '456'){
    session_start();
    $_SESSION['nome'] = 'Fulano';
    header('Location: http://localhost/jose/principal.php');
}else{
    echo 'Usuario ou senha incorretos';
}

?>