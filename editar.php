<?php
session_start();
include "funcional/controle/conexao.php";
$id = $_GET['id'];
$carta = $_SESSION['conte'];
$sql = "UPDATE carta SET escrita_cartas = $carta where id_cartas = $id";
$inserir = mysqli_query($conexao, $sql);
echo "<script type='text/javascript'>
 alert('Atualizado com sucesso!'); 
 location.href='logado.php';
 </script>";
 ?> 