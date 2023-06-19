<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
background-color: rgb(133, 202, 248);
}

#login{
    width: 300px;
    margin: 0 auto;
    margin-top: 150px;
    background-color: rgba(255, 255, 255, 0.7);
    padding: 20px;
    border-radius: 5px;

}

#login input[type="text"],
#login input[type="password"]{
    width: 93%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 3px;
    border: 1px solid #ccc;
}

#login h1{
    text-align: center;
    color: black;
}

#login input[type="submit"]{
    width: 100%;
    padding: 10px;
    background-color: rgb(133, 202, 248);
    color: black;
    border: none;
    border-radius: 3px;
    cursor: pointer;

}

    </style>

</head>
<body>
    <form id = "login" action="logado.php" method = "post">
        <h1>Login</h1>
        login:<input type = "text" name = "login"><br>
        senha:<input type = "password" name = "senha"><br>

        <input type = "submit" name = "entrar" value = "entrar"><br>
    </form>
</body>
</html>