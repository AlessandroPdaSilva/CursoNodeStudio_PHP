<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload de Arquivos multiplos </title>
</head>
<body>
    
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
    <!-- arquivo-->
    <input type="file" name="arquivo[]" multiple>

    <!-- botao enviar-->
    <input type="submit" name="enviar" value="enviar">

    </form>

    <?php

    if( isset( $_POST["enviar"] )  ){// verifica envio
        
        $meusFormatos = array('jpeg','jpg','png');
        $quantidadeArquivos = count( $_FILES['arquivo']['name'] );

        for($i = 0;$i < $quantidadeArquivos;$i++ ){
            $extencao = pathinfo($_FILES['arquivo']['name'][$i], PATHINFO_EXTENSION);
             
            if( in_array( $extencao, $meusFormatos)  ){// verifica extencao

                $pasta = "arquivos/";
                $temp = $_FILES["arquivo"]["tmp_name"][$i];
                $nomeArquivo = uniqid().".$extencao";

                 
                if( move_uploaded_file($temp,$pasta.$nomeArquivo) ){
                    echo "enviado ". $_FILES["arquivo"]["name"][$i]."<br>";
                }

                

            }

        }


    }



    echo "<br><br><br><br><br><br><br><br><br>";
    var_dump($_FILES);

    ?>

</body>
</html>