<?php

$servidor = "localhost";
$login = "root";
$senha = "root";
$banco = "programa";
 
$conexao = mysqli_connect($servidor, $login, $senha, $banco);

//recebendo os dados do formulario 

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//inserindo dados no banco de dados

$insert = "INSERT INTO usu (`nome`, `email`, `senha`) VALUES ( '$nome', '$email', '$senha')";

$sql = mysqli_query($conexao, $insert);

?>