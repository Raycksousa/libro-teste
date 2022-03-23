<?php

include 'conexao.php';

$ano_nasc = $_POST['id'];

$recebendo_cadastros = "DELETE FROM tb_aluno WHERE id = '$id' ";

$query_cadastro = mysqli_query($connx, $recebendo_cadastros);

header('location: listagem.php');












?>