<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Sanitize Filters</title>
</head>
<body>

<?php
    // filter_input( INPUT usado GET ou POST, 'name' , FILTER_* );
    $email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    

    // filter_var( $var , FILTER_* );    filtro de variavel
    if(filter_var( $email , FILTER_VALIDATE_EMAIL) ){
        echo " email validado ";
    }else {
        echo " email nao valido ";
    }

    
?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        
        Email: <input type="text" name="email"><br>
       
        <button type="submit" name="enviar-formulario">Enviar</button>
        
    </form>

    <br><br>
     <a href="http://php.net/manual/en/filter.filters.sanitize.php" target="_blank">Mais informações para Sanitize</a>

</body>
</html>
