<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alteração de Senha</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(133, 202, 248);
        }

        h2 {
            color: #333;
            text-align: center;
            margin-top:100px;
        }

        form {
            width: 300px;
            margin: 0 auto;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.7);
            padding: 44px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h2>Alteração de Senha</h2>
    <form action="alterar_senha.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br>

        <label for="senha_atual">Senha Atual:</label>
        <input type="password" id="senha_atual" name="senha_atual" required><br>

        <label for="nova_senha">Nova Senha:</label>
        <input type="password" id="nova_senha" name="nova_senha" required><br>

        <input type="submit" value="Alterar Senha">
    </form>
</body>
</html>
