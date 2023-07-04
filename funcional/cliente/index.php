<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['usuario'])){
            echo "Bem vindo".$_SESSION['nome']; 
            ECHO "<a href='../controle/sair.php'>SAIR</a>"; 
        }
        else{
            header("Location: ../index.php");
        }
    ?>
      
</body>
</html>