<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanitize Filters</title>
</head>
<body>

<?php
    // Sanitização - Funções (filter_input - filter_var)
    /*
    -- FILTER_SANITIZE_SPECIAL_CHARS
    -- FILTER_SANITIZE_NUMBER_INT
    -- FILTER_SANITIZE_EMAIL
    -- FILTER_SANITIZE_URL
    */


    if(isset($_POST['enviar-formulario'])){
       // Array de erros
        $erros = array();
     
        // Sanitize
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($idade, FILTER_VALIDATE_INT)){
            $erros[] = "Idade precisa ser um inteiro";
        }

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erros[] = "Email invalido";
        }

        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        if(!filter_var($url, FILTER_VALIDATE_URL)){
            $erros[] = "URL invalida";   
        }else{
            echo $url;
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
        
        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
        
    </form>

    <br><br>
     <a href="http://php.net/manual/en/filter.filters.sanitize.php" target="_blank">Mais informações para Sanitize</a>

</body>
</html>
