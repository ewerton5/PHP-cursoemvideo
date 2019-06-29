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
		include "_funcoes/funcoes.php"; #require, require_once, include_once
		$x = 3;
		$y = 4;
		$z = 5;
		$r = somar($x,$y);
		echo "A soma entre $x e $y é igual a $r.";
		soma($x,$y);
		$rt = somatodos($x,$y,$z);
		echo "<p>A soma entre $x, $y e $z é igual a $rt.</p>";
		$r1 = soma1($x);
		echo "$r1 é igual a $x";
	?>
	<p><a href="javascript:history.go(-1)" class="botao">Voltar</a><p>
</div>
</body>
</html>