<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
       <?php
       $nome = $_POST['nome'];

       echo "<h1>Olá, $nome!</h1>";
       echo "<p> Seja bem-vindo ao seu primeiro código PHP!</p>";
       ?>
       <a href="index.html"><button>Voltar</button></a>
    </div>
</body>
</html>