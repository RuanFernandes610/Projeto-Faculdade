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
			text-align: center;
		}
		
		h1 {
			color: #333333;
			margin-top: 40px;
		}
		
		form {
			display: inline-block;
			background-color: #ffffff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
		}
		
		form input[type="text"],
		form input[type="password"] {
			width: 200px;
			padding: 10px;
			margin: 5px;
			border: 1px solid #cccccc;
			border-radius: 3px;
		}
		
		form input[type="submit"] {
			width: 100px;
			padding: 10px;
			margin-top: 10px;
			background-color: rgb(133, 202, 248);
			color: #ffffff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>
</head>
<body>
<form id = "cadastro" action="cadastrar.php" method = "POST">
        <h1>Cadastrar</h1>
        Nome:<input type = "text" name="nome" required><br>
        Login:<input type = "text" name="login" required><br>
        Senha:<input type = "password" name="senha" required><br>
        <input type = "submit" name ="cadastrar" value = "cadastrar">
</body>
