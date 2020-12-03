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
            
         // define( nome , valor)
        
         define('nome','valor');

         echo " nome : ".nome;



         echo "<hr>";
        // ----------------------------------------

        define('nomeArray',['valor 1','valor 2','valor 3']);

        $totNomeArray = count(nomeArray);
        for($i = 0; $i < $totNomeArray;$i++){
            echo " nome array : ". nomeArray[$i];
        }
        
		?>
    </pre>
</body>

</html>