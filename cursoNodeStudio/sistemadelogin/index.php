<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> login </title>
    <style> html,body{ background: rgb(201,201,201);}</style>
</head>
<body>

    <?php
    
        require_once "db_connect.php";// conexao db
        session_start();

        if( isset($_POST['entrar']) ){// botao entrar
            
            $login = mysqli_escape_string($connect, $_POST['login']);
            $senha = mysqli_escape_string($connect, $_POST['senha']);

            if( empty($login) || empty($senha) ){// campo vazio
                echo " preencha o login e senha";
            }else{

                $sql = " select login from usuario where login = '$login' ";
                $resultado = mysqli_query($connect , $sql);

                if( mysqli_num_rows($resultado) > 0 ){// verifica login
                    $senha = md5($senha);
                    $sql = "select * from usuario where login = '$login' and senha = '$senha' ";
                    $resultado = mysqli_query($connect, $sql);

                    if( mysqli_num_rows($resultado) == 1){// verificar login e senha
                        
                        $dados = mysqli_fetch_array($resultado);
                        mysqli_close($connect);
                        $_SESSION['logado'] = true;
                        $_SESSION['id_usuario'] = $dados['id'];
                        $_SESSION['nome_usuario'] = $dados['nome'];
                        $_SESSION['login_usuario'] = $dados['login'];

                        header('location: home.php'); // pagina restrita


                    }else{
                        echo "senha incorreta";
                    }

                }else{
                    echo "usuario nao existe";
                }


            }


        }

    
    ?>
        
    
    <h1> Login </h1>

    <form action="" method="post">

    <!-- login -->
    Login :<input type="text" name="login"><br>
    
    <!-- senha -->
    Senha :<input type="password" name="senha"><br>

    <!-- botao enviar-->
    <button type="submit" name="entrar"> Entrar </button>

    </form>

</body>
</html>