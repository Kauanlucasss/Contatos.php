<?php

/* isso-e-um-woooo!!!! */

if(isset ($_GET["bt_nome"])){
    $nome = $_GET["bt_nome"];
    $nome2 = $_GET["bt_nome2"];
    $nome3 = $_GET["bt_nome3"];
    }
 ?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
   
</head>
<body>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style.css">

    <form action="process.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" required></textarea><br><br>

        <input type="submit" class="btn btn-outline-danger" value="enviar">
        <input type="reset" class="btn btn-outline-sucess" value="apagar"> 
     </form>

</body>
</html>