<?php
require('config.php');
$nome = filter_input(INPUT_POST,'nome');
$con = $pdo->query("SELECT * FROM dados WHERE nome='$nome'");

if($con->rowCount()>0){  
    header("location:Leitura-usuario.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #283B7A;
        }
        section{
            background-color: white;
            width: 350px;
            height: 450px;
            margin: 150px auto;
            border-radius: 7px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
           
        }
        section img{
            width: 70px;
            left: 50%;
        
        }
        section form{
            display: flex;
            flex-direction: column;
        }
        section input{
            padding: 10px;
            margin: 10px 0px 0px 0px;
            
        }
        section button{
            background-color: #F26422;
            padding: 12px;
            margin: 10px 0px;
            color: white;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <section>
        <img src="./imagem/login.png" alt="">
        <form action="" method="post">
            <input type="text" name="nome" id="" placeholder="Login">
            <input type="password" name="senha" id="" placeholder="Senha">
            <button>Acessar</button>
        </form>
    </section>
</body>
</html>