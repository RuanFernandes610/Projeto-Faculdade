<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style>
		body {
			background-color: rgb(133, 202, 248);
		}

		.center {
			text-align: center;
			width: 300px;
            margin: 0 auto;
            margin-top: 150px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 20px;
            border-radius: 5px;
		}

		.button {
			display: inline-block;
			padding: 10px 20px;
			margin-bottom: 10px;
			background-color: rgb(133, 202, 248);
			color: #ffffff;
			text-decoration: none;
			border-radius: 4px;
			border: none;
			cursor: pointer;
			font-size: 16px;
		}

		
	</style>
</head>
<body>
	<div class="center">
	    <h1>Olá, <?php 
					if(isset($_SESSION['nome_usuario']) == null) { ?>
						Visitante</h1>
						
					<?php } else{
						echo $_SESSION['nome_usuario']; }?>
					</h1>
		<a id="Login" class="button" href="login.php">Login</a><br>
		<a id="cadastrar" class="button" href="cadastro.php">Cadastrar</a><br>
		<a id="usuarios" class="button" href="lista.php">Usuarios</a><br>
		<a id="senha" class="button" href="senha.php">Alterar senha</a><br>
		<a id="sair" class="button" href="login.php">Sair</a>
				
	</div>
</body>
</html>