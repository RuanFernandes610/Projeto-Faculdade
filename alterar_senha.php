<?php

$conexao = mysqli_connect('localhost', 'root',"", 'bancoa3', '3306');


$login = $_POST['login'];
$senha_atual = $_POST['senha_atual'];
$nova_senha = $_POST['nova_senha'];

$sql = "SELECT * FROM login WHERE login = '$login' AND senha = '$senha_atual'";
$result = $conexao->query($sql);

if ($result->num_rows == 1) {

    $sql = "UPDATE login SET senha = '$nova_senha' WHERE login = '$login'";
    if ($conexao->query($sql) === TRUE) {
        echo "Senha alterada com sucesso!";
    } else {
        echo "Erro ao atualizar a senha: " . $conexao->error;
    }
} else {
    echo "Login ou senha atual incorretos!";
}

$conexao->close();
?>
<html><a href = "login.php"> voltar </a></html>
