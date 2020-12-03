<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validações Filters</title>
</head>
<body>

<?php
    // Validações - Funções (filter_input - filter_var)
    /*
    -- FILTER_VALIDATE_INT
    -- FILTER_VALIDATE_EMAIL
    -- FILTER_VALIDATE_FLOAT
    -- FILTER_VALIDATE_IP
    -- FILTER_VALIDATE_URL
    */


    if(isset($_POST['enviar-formulario'])){
       // Array de erros
        $erros = array();
     
        // Validações
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
            $erros[] = "Idade precisa ser um inteiro";
        }

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            $erros[] = "Email inválido";
        }

        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
            $erros[] = "Peso precisa ser um float";
        }

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
            $erros[] = "IP inválido";
        }

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
            $erros[] = "URL inválida";
        }

        // Exibindo Mensagens
        if(!empty($erros)){
            foreach($erros as $indice_erro){
                echo "<li>$indice_erro</i>";
            }
        }else{
            echo "Parabéns, seus dados estão corretos!<br>";
            var_dump($_POST);
        }
    }

?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
        
    </form>

    <br><br>
     <a href="http://php.net/manual/en/filter.filters.validate.php" target="_blank">Mais informações para Filters</a>

</body>
</html>