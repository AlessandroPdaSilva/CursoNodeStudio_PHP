<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> home </title>
</head>

    <?php
        require_once "db_connect.php";
        session_start();
        
        if( !isset( $_SESSION['logado']) ){
            header("location : index.php");
        }else{
            // dados
            $id = $_SESSION['id_usuario'] ;
            $sql = "select * from usuario where id = '$id' ";
            $resultado = mysqli_query($connect, $sql);
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
        }


        
        
        
        


    ?>
<body>

    <h1> ola <?php echo $dados['nome'];?> </h1><br>

    <a href="logout.php" > Sair </a>

</body>
</html>