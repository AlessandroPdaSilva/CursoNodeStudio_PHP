<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Node Studio </title>
	<style>
		html,body {background: #27303a;color: rgb(201, 201, 201);font-size: larger;}pre {color: rgb(201, 201, 201);font-size: larger;}
	</style>
</head>

<body>
	<pre>
        <?php
            // global
         
            $nome = "leonidas";
           
            function imprimir(){// local
                global $nome;
                echo " variavel global : $nome ";
            }
            
            imprimir();

            //------------------------------------------
            echo "<hr>";

            function imprimir2(){
                global $numero;
                $numero = 22;
            }

            imprimir2();
            echo "$numero";

            //---------------------------------------------
            echo "<hr>";

            $a = 1;
            $b = 2;
            function imprimir3(){
                echo $GLOBALS['a'] + $GLOBALS['b'];
            }

            imprimir3()
		
		?>
    </pre>
</body>

</html>