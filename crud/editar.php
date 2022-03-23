<?php

include 'conexao.php';

$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$ano_nasc = $POST['dataNascimento'];
$email = $_POST['email'];
$curso = $_POST['curso'];


$recebendo_cadastros = "UPDATE
tb_aluno
SET  nome = '$nome', email = '$email', matricula = '$matricula', curso = '$curso', dataNascimento = '$ano_nasc' 
WHERE  id = '$id' ";

$query_cadastro = mysqli_query($connx, $recebendo_cadastros);

header('location:listagem.php');








?>