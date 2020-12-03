<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Meu Exemplo </title>
</head>
<body>
    
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <!-- numero -->
    <label for="idNumero"> Numero : </label>
    <input type="text" id="idNumero" name="numero">
    <!-- email -->
    <label for="idEmail">Email : </label>
    <input type="text" id="idEmail" name="email">
    
    <input type="submit" name="enviar" value="enviar">
    </form>


    <?php 
    // variavel
    $enviar = isset( $_POST['enviar']) ?? false;
    $numero = isset($_POST['numero']) ? $_POST['numero']: 0;

    // validacao numero
    if( $numero = filter_input( INPUT_POST, 'numero',FILTER_VALIDATE_FLOAT) ){
        echo "numero valido";

    } else if( $numero = filter_input( INPUT_POST, 'numero',FILTER_VALIDATE_INT) ){
        echo "numero valido ";
    }else{
        echo "[erro]";
    }
    

    
    // variavel
    $email = isset($_POST['email']) ? $_POST['email'] : "erro";
    
    // validacao email
    if( $email = filter_input( INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL) ){
        echo " email posto com sucesso ";
    }else {
        echo " email invalido ";
    }
    //echo " voce enviou $numero";
    
    ?>

</body>
</html>