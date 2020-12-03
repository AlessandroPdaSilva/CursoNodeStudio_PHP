<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Upload de Arquivos </title>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">

        <input type="file" name="arquivo">
        
        <input type="submit" value="enviar" name="enviado"> <!-- botao enviar -->

    </form>

    <?php 
    
        if(isset($_POST['enviado']) ){// botao clicado
           
            $formatosArquivos = array('jpeg','png','jpg','gif');// extencao que eu quero
            $extencao = pathinfo( $_FILES["arquivo"]["name"], PATHINFO_EXTENSION);// extencao do usuario
            
            if( in_array($extencao,$formatosArquivos) ){// comparando extensao
                echo "arquivo permitido ";// true
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'];
                $novoNome = uniqid().".$extencao";

                if(move_uploaded_file( $temporario , $pasta.$novoNome) ){// envia de fato
                    echo " enviado com sucesso";
                }else{
                    echo " [erro] nao enviado";
                }

            }else {
                echo " arquivo nao permitido";// false
            }
            
            
            echo "<br><br><br><br><br>";
            var_dump($_FILES);

            echo "<br><br><br><br><br>";
            var_dump($temporario);


        }
    
    ?>

</body>
</html>