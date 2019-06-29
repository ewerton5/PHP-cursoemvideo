<!DOCTYPE html>
<html>
<head>
 	<link rel="stylesheet" href="_css/estilo.css"/>
 	<meta charset="UTF-8"/>
 	<title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<?php
		$num = isset($_GET["num"])?$_GET["num"]:0;
		switch ($num) {
			case 1:
			case 7:
				echo "Dia não útil.";
				break;
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "Dia útil.";
				break;
			default:
				echo "Dia da semana invalido.";
				break;
		}
	?>
	<p><a href="javascript:history.go(-1)" class="botao">Voltar</a><p>
</div>
</body>
</html>