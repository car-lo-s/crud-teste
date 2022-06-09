<!-- <?php
require('config.php');
$sql=$pdo->query("SELECT*FROM dados");
$lista=[];
    if($sql->rowCount()>0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

    }

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background-color: #283B7A;
        }
        table{
            background-color: white;
            margin: 100px auto;
            width: 90%;
            border-radius: 4px;
            /* border: 1px solid black; */
        }
        /* table tr,th,td{
            border: 1px solid black;
        } */
        
        table th{
            background-color:lightsteelblue;
        }
        table th,td{
            padding: 10px;
            text-align: center;
        }
        table a{
            text-decoration: none;
            color: black;
        }
        div{
            /* background-color: red; */
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        div button{
            /* padding: 10px; */
            background-color: #18A2B8;
            padding: 12px;
            margin: 10px 0px;
            width: 250px;
            color: white;
            border: none;
            border-radius: 4px;
            /* text-decoration:none; */
        }
        button a{
            text-decoration:none;
            color:white;
        }
        div button:hover{
            background-color: #138496;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Curso</th>
            <th>E-mail</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
        <?php   foreach($lista as $usuario): ?>
            <tr>
                <td>
                    <?php echo $usuario['nome']; ?>
                </td>
                <td>
                    <?php echo $usuario['curso']; ?>
                </td>
                <td>
                    <?php echo $usuario['email']; ?>
                </td>
                <td>
                    <a href="Editar-usuario.php?id=<?= $usuario['id']; ?>">[ Editar ]</a>
                </td>
                <td>
                    <a href="Apagar-usuario.php?id=<?= $usuario['id']; ?>">[ Apagar ]</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
    <div>
        <button><a href="Criacao-usuario.php">Cadastrar</a></button>
    </div>
</body>
</html>