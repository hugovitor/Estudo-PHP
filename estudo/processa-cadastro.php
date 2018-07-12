<?php 

require_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$igreja = filter_input(INPUT_POST,'igreja', FILTER_SANITIZE_STRING);
$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$situacao = filter_input(INPUT_POST, 'situacao', FILTER_SANITIZE_STRING);


$result_membros = "INSERT INTO membros (nome, tipo, idade, sexo, igreja, cargo, endereco, situacao) VALUES ('$nome', '$tipo', '$idade','$sexo', '$igreja', '$cargo', '$endereco', '$situacao')";

$resultado_membros = mysqli_query($con,$result_membros);
 ?>