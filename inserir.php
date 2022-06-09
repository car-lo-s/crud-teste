<?php
require('config.php');

$nome = filter_input(INPUT_POST,'nome');
$curso = filter_input(INPUT_POST,'curso');
$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

if($nome && $curso && $curso){
    $sql = $pdo->prepare("SELECT * FROM  dados WHERE email = :email");
    $sql->bindValue(':email',$email);
    $sql->execute();
    if($sql->rowCount()===0){
        $sql = $pdo->prepare("INSERT INTO dados(nome,curso,email) VALUES(:nome,:curso,:email)");
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':curso',$curso);
        $sql->bindValue(':email',$email);
        $sql->execute();

    }
}

header("Location:Criacao-usuario.php");
exit;



