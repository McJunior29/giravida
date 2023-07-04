<?php
session_start();

include "conexao.php";
$nome = $_POST['login'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE login_user  LIKE '%$nome%' ";
$sql = mysqli_query($conexao, $query);

while($ln = mysqli_fetch_assoc($sql)){
	$id = $ln['id_usuario'];
	$nome_user = $ln['nome_user'];
	$usuv = $ln['login_user'];
	$usus = $ln['senha_user'];
}

if ($nome == $usuv) {
	if ($senha == $usus) {
		$_SESSION['id'] = $id;
		$_SESSION['nome_user'] = $nome_user;
		header('Location:../../logado.php');
	}else{
		header('Location:../../');
	}
}else{
	header('Location:../../');
}
?>