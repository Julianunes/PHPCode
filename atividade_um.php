<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>

<body>

	<?php

		$idade = 50;
		$peso = 60.7;

		$atende_requisitos = true;

		if(($idade >= 16 && $idade <= 69) &&
			$peso >= 50){

		}else{
			$atende_requisitos = false;

		}


	?>

	<p>Atende aos requisitos? <?= $atende_requisitos ? 'Atende aos requisitos' : 'Não atende aos requisitos'; ?>
	</p>

</body>
</html>
