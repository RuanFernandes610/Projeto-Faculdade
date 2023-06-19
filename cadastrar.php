<?php
include("conexao.php");
$nome = isset($_POST['nome'])? $_POST['nome'] :'';
$login = isset($_POST['login'])? $_POST['login'] :'';
$senha = isset($_POST['senha'])? $_POST['senha'] : '';

$insert = "insert into login (nome, login, senha)
values
('$nome', '$login', '$senha')";

$query=mysqli_query($conexao, $insert);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: rgb(133, 202, 248);
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			margin: 0;
		}

		h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		a {
			display: inline-block;
			padding: 10px 20px;
			background-color: rgb(133, 202, 248);
			color: #ffffff;
			text-decoration: none;
			border-radius: 4px;
		}
	</style>
</head>
<body>
     <h2>Cadastro realizado com sucesso!!</h2>
	 <br>
        <a href = "index.php"> voltar </a>
</body>
</html>