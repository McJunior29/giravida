<?php 
include "conexao.php";
$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$escola = $_POST['escola'];

$sql = "INSERT INTO usuario VALUES ('null', '$nome', '$login', '$senha','$escola')";
$executar = mysqli_query($conexao, $sql);
 header('Location:../../index.php');
?>