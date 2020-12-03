<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload de Arquivos </title>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

    <!-- arquivo -->
    <input type="file" name="arquivo">

    <!-- botao enviar-->
    <input type="submit" name="enviar" value="enviar">

    </form>
    
    <?php 
    
    if( isset($_POST['enviar']) == true){ // verifica envio
        
        $meusFormatos = array('jpeg','jpg','png');
        $extencao = pathinfo( $_FILES["arquivo"]["name"] , PATHINFO_EXTENSION);

        if( in_array( $extencao , $meusFormatos) == true){// verifica extensao

            $pasta = "arquivos/";
            $temp = $_FILES["arquivo"]["tmp_name"];
            $nomeArquivo = uniqid().".$extencao";

            if( move_uploaded_file( $temp , $pasta.$nomeArquivo) == true){
                echo " enviado com sucesso ";
            }

        }

    }



    echo "<br><br><br><br><br><br><br>";
    var_dump($_FILES);
    ?>

</body>
</html>