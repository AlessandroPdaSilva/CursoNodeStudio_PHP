<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Animais </title>
	<style>
		html,
		body {
			background: #27303a;
			color: rgb(201, 201, 201);
			font-size: larger;
		}

		pre {
			color: rgb(201, 201, 201);
			font-size: larger;
		}
	</style>
</head>

<body>
	<pre>
        <?php

		$nome = "tiago";

		if (is_string($nome) == true) {
			echo " <br> e uma string";
		} else {
			echo " <br> nao e uma string";
		}

		echo "<hr>";

		$numero = 20.5;

		if(is_int($numero)){
			echo "<br> e um inteiro ";
		}else{
			echo "<br> nao e um inteiro";
		}

		?>
    </pre>
</body>

</html>