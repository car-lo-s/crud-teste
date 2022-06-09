<?php
    require('config.php');
    $id = filter_input(INPUT_GET,'id');
    if($id){
        $nome = filter_input(INPUT_POST,'nome');
        $curso = filter_input(INPUT_POST,'curso');
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        if($nome && $curso && $email){
            $sql = $pdo->prepare("UPDATE dados SET nome = :nome, curso = :curso, email = :email WHERE id=:id");
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':curso',$curso);
            $sql->bindValue(':email',$email);
            $sql->bindValue(':id',$id);
            $sql->execute();
        }else{
            // header("Location:Leitura-usuario.php");
            // exit;
        }
    }else{
        header("Location:Leitura-usuario.php");
            exit;
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
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
            margin: 150px auto;
            width: 70%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 7px;
        }
        section form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        section input{
            padding: 10px;
            width: 250px;
            margin: 20px 10px;
        }
        section button{
            background-color: #18A2B8;
            padding: 12px;
            margin: 10px 0px;
            width: 250px;
            color: white;
            border: none;
            border-radius: 4px;
        }
        section button:hover{
            background-color: #138496;
        }
        #voltar{
            width: 90px;
            background-color: #DC3545;
        }
        #voltar a{
            text-decoration:none;
            color:white;
            padding:10px;
        }
        #voltar:hover{
            background-color: #C92333;
        }
    </style>
</head>
<body>
    <section>
        <form action="" method="post">
            
            <div>
                <label for="nome">
                    <input type="text" name="nome" id="" placeholder="Nome:">
                </label>
                <label for="curso">
                    <input type="text" name="curso" id="" placeholder="Curso:">
                </label>
                <label for="email">
                    <input type="email" name="email" id="" placeholder="E-mail">
                </label>
            </div>
            <button>Editar</button>
            <button id="voltar"><a href="Leitura-usuario.php">Voltar</a></button>
        </form>
    </section>
</body>
</html>