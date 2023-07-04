<?php
include "conexao.php";
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuarios WHERE usuario_usuario = '$usuario' AND senha_usuario = '$senha'";

$sql = mysqli_query($conexao, $query);

$cont = 0;

while ($dados = mysqli_fetch_assoc($sql)) {
    $cont++;	
    $nome = $dados['nome_usuario'];
}

if($cont == 1){
    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;

    header("Location: ../cliente/index.php");
}
else{

    header("location: ../index.php");
}

?>