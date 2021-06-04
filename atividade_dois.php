<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>

<body>

	<?php
		function calcularImpostoRenda($salario){
			if($salario <= 1903.98){
				$imposto = 'Isento';
			} else if($salario > 1903.98 && $salario <= 2826.65){
				$imposto = $salario * 0.075;
			} else if($salario > 2826.65 && $salario <=3751.05){
				$imposto = $salario * 0.15;
			}else if($salario > 3751.05 && $salario <= 4664.68){
				$imposto = $salario * 0.225;
			}else if($salario > 4664.68){
				$imposto = $salario * 0.275;
			}
			return $imposto;
		}

		$imposto_de_renda = calcularImpostoRenda(4000);
	?>

	<p>Valor do imposto: <?= $imposto_de_renda ?></p>

</body>
</html>
