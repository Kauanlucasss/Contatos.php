<?php 
    include("conexaum.php")

    if(isset($_POST[""])){
        $senha = $_POST["bt_senha"];
        $rsenha = $_POST["bt_rsenha"];
    }

    if($senha === $rsenha){
        $nome = $_POST["bt_nome"]
        $mail = $_POST["bt_mail"]
        
        $mysquilliermo = "falha";
    $mysqli-> query ("INSERT INTO tabela_login (nome, email, senha) values ('$nome', '$email', '$senha')") or
    die ($mysquilliermo);

    }else{
        $mensagem = "<div class= 'alert alert-danger mt-3'> senhainválida </div>";;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    
</body>
</html>
