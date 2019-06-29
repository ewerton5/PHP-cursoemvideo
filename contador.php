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
		$i = isset($_GET["inicio"])?$_GET["inicio"]:0;
		$f = isset($_GET["final"])?$_GET["final"]:0;
		$ic = isset($_GET["incremento"])?$_GET["incremento"]:0;
		if ($i == $f || $ic == 0) {
			echo "Impossível contar.";
		} elseif ($i < $f) {
			while ($i <= $f) {
				echo "$i ";
				$i += $ic;
			}
		} else {
			while ($i >= $f) {
				echo "$i ";
				$i -= $ic;
			}
		}
	?>
	<p><a href="javascript:history.go(-1)" class="botao">Voltar</a><p>		
</div>
</body>
</html>