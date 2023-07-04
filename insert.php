<?php
session_start();
include "funcional/controle/conexao.php";

$carta = $_POST['carta'];
$_SESSION['conte'] = $carta;
$id = $_SESSION['id'];
$query = "INSERT INTO `cartas`(`id_cartas`, `usuario_id_usuario`, `escrita_cartas`) VALUES ('null','$id','$carta')" ;
$sql = mysqli_query($conexao,$query);
echo "<script type='text/javascript'>
 alert('Carta cadastrada com sucesso!'); 
 location.href='logado.php';
 </script>";
?>