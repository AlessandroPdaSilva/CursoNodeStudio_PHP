<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Sanitize Filters</title>
</head>
<body>


<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

    Numero : <input type="text" id="idNumero" name="numero"> 

    <input type="submit" value="enviar" > <!-- enviar -->

</form>
     
<?php
     
    $numero = filter_input(INPUT_POST, 'numero', FILTER_VALIDATE_FLOAT);
    echo "Enviado : $numero";
    
?>


</body>
</html>
