<?php
 

 include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$ano_nasc = $_POST['dataNasc'];
$matricula = $_POST['matricula'];
$id = $_POST['id'];
$curso = $_POST['curso']

$recebendo_cadastros = "INSERT INTO
tb_aluno
VALUES ('$id', $ano_nasc', '$email', '$nome', '$matricula', '$curso')";

$query_cadastro = mysqli_query($connx, $recebendo_cadastros);

header('location:listagem.php');







?>