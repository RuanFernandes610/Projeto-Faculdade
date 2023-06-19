<?php

$conexao = mysqli_connect('localhost', 'root',"", 'bancoa3', '3306');


$sql = "SELECT nome FROM login";
$result = $conexao->query($sql);


$conexao->close();
?>


<html>
<head>
  <title>Lista de Nomes</title>
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
    
    ul {
      width: 300px;
      margin: 0 auto;
      margin-top: 150px;
      background-color: rgba(255, 255, 255, 0.7);
      padding: 20px;
      border-radius: 5px;
      list-style-type: none;

    }
    
    li {
      margin: 10px 0;
      padding: 10px;
      border-radius: 5px;
    }

    .button {
			display: inline-block;
			padding: 10px 20px;
			margin-bottom: 10px;
			background-color: rgba(255, 255, 255, 0.7);
			color: black;
			text-decoration: none;
			border-radius: 4px;
			border: none;
			cursor: pointer;
			font-size: 16px;
		}
    

  </style>
</head>
<body>
  <h1>Lista de Nomes</h1>
  
  <ul>
    <?php
    if ($result->num_rows > 0) {
       
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["nome"] . "</li>";
        }
    } else {
        echo "<li>Nenhum nome encontrado.</li>";
    }
    ?>
  </ul>
  <br>
  <a id="sair" class="button" href="index.php">Sair</a>
  
</body>
</html>

