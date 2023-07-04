<?php
include "funcional/controle/conexao.php";
$id = $_GET['id'];
$sql = "DELETE FROM cartas where id_cartas = $id";
$inserir = mysqli_query($conexao, $sql);
echo "<script type='text/javascript'>
 alert('Deletado com sucesso!'); 
 location.href='logado.php';
 </script>";
 ?>