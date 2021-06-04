<html>
<head>
	<meta charset="utf-8">
	<title>Curso PHP</title>
</head>

<body>

	<?php
		$idx = 1;
		$mega_sena = array();

		while($idx < 7){
			$num = rand(1, 60);
				foreach($mega_sena as $valor){
					if($valor == $num){
						while($valor == $num){
							$num = rand(1, 60);
						}
					}
				}
			$mega_sena[$idx] = $num;
			$idx++;
		}
		print_r($mega_sena);
	?>

</body>
</html>
